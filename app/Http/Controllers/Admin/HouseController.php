<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\House;
use App\Picture;
use App\State;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class HouseController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        $houses = House::available()->latest()->paginate(20);

        return view('admin.house.index', compact('houses'));
    }

    public function create()
    {
        $states = State::all();
        $categories = Category::orderBy('name')->get();

        return view('admin.house.create', compact('states', 'categories'));
    }

    public function store(Request $request)
    {
        // Reformat
        $request['amount'] = str_replace(',', '', $request['amount']);

        $request['slide_images'] = $request['slide_images'] ? array_values(
            array_diff($request['slide_images'], [null])
        ) : null;

        // Validate
        $this->validateRequest($request);

        try {
            DB::transaction(function () use ($request) {
                // Upload Slide Images
                $slide_images = [];

                foreach ($request->file('slide_images') as $file) {
                    // Size of the image
                    $size = getimagesize($file->path());

                    $imagename = 'slides/';
                    $imagename .= md5(uniqid() . time());
                    $imagename .= '.jpg';

                    $file = Image::make($file)->interlace(true);

                    // Resize Image if width is greater than 1000px
                    if ($size[0] > 1000) {
                        $file->resize(1000, null, function ($constraint) {
                            $constraint->aspectRatio();
                        });
                    }

                    Storage::disk('minio')->put($imagename, (string)$file->stream('jpg', 80));

                    $slide_images[] = $imagename;
                }

                // Create House
                $house = House::create([
                    'category_id' => $request->category,
                    'breadth' => $request->breadth,
                    'length' => $request->length,
                    'description' => $request->description,
                    'country' => $request->country,
                    'state' => $request->state,
                    'lga' => $request->lga,
                    'street' => $request->street,
                    'city' => $request->city,
                    'avatar' => $slide_images[0],
                    'no_of_room' => $request->no_of_room,
                    'no_of_bath' => $request->no_of_bath,
                    'amount' => $request->amount
                ]);

                // Save Slides in database
                foreach ($slide_images as $slide_image) {
                    Picture::create([
                        'house_id' => $house->id,
                        'path' => $slide_image,
                    ]);
                }
            });
        } catch (\Exception $e) {

            return $this->setFeedback('error', $e->getMessage(), $request);

        }

        return $this->setFeedback('success', 'House created!', null, redirect()->route('admin.houses'));

    }

    public function edit($id)
    {
        $id = decrypt($id);
        $house = House::find($id);

        $states = State::all();
        $categories = Category::orderBy('name')->get();

        if (!$house) {
            abort(404);
        }

        return view('admin.house.edit', compact('house', 'states', 'categories'));
    }

    public function update (Request $request, $id)
    {
        $id = decrypt($id);
        $house = House::find($id);

        // Reformat
        $request['amount'] = str_replace(',', '', $request['amount']);

        $request['slide_images'] = $request['slide_images'] ? array_values(
            array_diff($request['slide_images'], [null])
        ) : [];

        // Validate
        $this->validateRequest($request, true);

        // Images to be deleted
        $slides = array_diff(
            $house->pictures->pluck('id')->toArray(),
            $request->delete_slides ?? []
        );

        // total images
        $total = count($slides) + count($request->slide_images);

        if ($total < 2) {
            return $this->setFeedback(
                'error',
                'Pictures can not be less than 2',
                null,
                redirect()->back()
                    ->withInput()
                    ->withErrors(['slide_images' => 'At least 2 and at most 10 pictures must be present.'])
            );
        }

        // Update house
        $data = [
            'category_id' => $request->category,
            'breadth' => $request->breadth,
            'length' => $request->length,
            'description' => $request->description,
            'country' => $request->country,
            'state' => $request->state,
            'lga' => $request->lga,
            'street' => $request->street,
            'city' => $request->city,
            'no_of_room' => $request->no_of_room,
            'no_of_bath' => $request->no_of_bath,
            'amount' => $request->amount
        ];

        // Update house
        $house->update($data);

        // Upload new images
        $slide_images = [];

        if ($request->file('slide_images')) {
            foreach ($request->file('slide_images') as $file) {
                // Size of the image
                $size = getimagesize($file->path());

                $imagename = 'slides/';
                $imagename .= md5(uniqid() . time());
                $imagename .= '.jpg';

                $file = Image::make($file)->interlace(true);

                // Resize Image if width is greater than 1000px
                if ($size[0] > 1000) {
                    $file->resize(1000, null, function ($constraint) {
                        $constraint->aspectRatio();
                    });
                }

                Storage::disk('minio')->put($imagename, (string)$file->stream('jpg', 80));

                $slide_images[] = $imagename;
            }
        }

        // Save Slides in database
        foreach ($slide_images as $slide_image) {
            Picture::create([
                'house_id' => $house->id,
                'path' => $slide_image,
            ]);
        }

        // Delete pictures
        Picture::where('house_id', $house->id)->whereIn('id', $request->delete_slides ?? [])->delete();

        // Update house avatar
        $house->avatar = $house->pictures->first()->getOriginal('path');
        $house->save();

        return $this->setFeedback('success', 'House updated!');
    }

    public function delete($id)
    {
        $id = decrypt($id);
        $house = House::find($id);

        // Delete Pictures
        $house->pictures()->delete();

        // Delete house
        $house->delete();

        return $this->setFeedback(
            'success',
            'House deleted!',
            null,
            redirect()->route('admin.houses')
        );
    }

    public function validateRequest(Request $request, $edit = false)
    {
        $validate = [
            'category' => 'required|exists:categories,id',
            'description' => 'required|min:5',
            'amount' => 'required|numeric',
            'no_of_room' => 'required|numeric',
            'no_of_bath' => 'required|numeric',
            'breadth' => 'required|numeric',
            'length' => 'required|numeric',
            'country' => 'required',
            'state' => 'required',
            'city' => 'required',
            'lga' => 'required',
            'street' => 'required',

            // Slide Images Validation
            'slide_images' => $edit ? 'nullable|max:10' : 'required|between:2,10',
            'slide_images.*' => 'distinct|mimes:jpeg,jpg|max:2000'
        ];

        $rules = [
            'slide_images.required' => 'No image was attached.',
            'slide_images.between' => 'At least 2 and at most 10 images must be attached.',
            'slide_images.*.distinct' => 'Duplicate images not allowed',
            'slide_images.*.mimes' => 'Invalid format, images must be a (.jpg) file',
            'slide_images.*.max' => 'Image is to heavy. Maximum of 1.5mb allowed.'
        ];

        if (!$edit) {
            $validate = array_merge($validate, [
            ]);
        }

        $request->validate($validate, $rules);
    }
}