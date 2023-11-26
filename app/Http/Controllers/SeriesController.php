<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SeriesController extends Controller
{
    public function index()
    {
        $series = DB::select('SELECT name FROM series;');

        return view('series.index')->with(compact('series'));
    }


    public function create()
    {
        return view('series.create');
    }

    public function store(Request $request)
    {
        $serieName = $request->input('name');

        if(DB::insert('insert into series (name) values (?)', [$serieName])) {
            return "OK";
        } else {
            return "deu erro";
        }

        return view('series.create');
    }
}
