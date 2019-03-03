<?php

namespace App\Http\Controllers;

use App\House;
use Illuminate\Http\Request;

class HouseController extends Controller
{
    public function index (Request $request)
    {
        $houses = House::latest()->paginate(20);

        return view('pages.house.index', compact('houses'));
    }

    public function show ($pid)
    {
        $house = $pid;
        return view('pages.house.show', compact('house'));
    }
}
