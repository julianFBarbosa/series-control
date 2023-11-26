<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SeriesController extends Controller
{
    public function index(Request $request)
    {
        $series = [
            "punisher",
            "Lost",
            "Grey's Anatomy",
        ];


        return view('series.index')->with(compact('series'));
    }


    public function create()
    {
        return view('series.create');
    }
}
