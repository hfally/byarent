<?php

namespace App\Http\Controllers;

use App\House;
use Illuminate\Http\Request;

class HouseController extends Controller
{
    public function index(Request $request)
    {
        $houses = House::available()->latest()->paginate(20);

        return view('pages.house.index', compact('houses'));
    }

    public function show($id)
    {
        $id = decrypt($id);

        $house = House::find($id);

        if (!$house) {
            abort(404);
        }

        return view('pages.house.show', compact('house'));
    }
}