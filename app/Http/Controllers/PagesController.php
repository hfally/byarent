<?php

namespace App\Http\Controllers;

use App\House;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    /**
     * View for welcome page
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function welcome()
    {
        $latest_houses = House::available()->latest()->take(6)->get();
        $all_houses = House::available()->count();

        return view('pages.welcome', compact('latest_houses', 'all_houses'));
    }

    public function about()
    {
        return view('pages.about');
    }

    public function support()
    {
        return view('pages.support');
    }
}
