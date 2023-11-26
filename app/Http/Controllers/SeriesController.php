<?php

namespace App\Http\Controllers;

use App\Models\Serie;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class SeriesController extends Controller
{
    public function index()
    {
        $series = Serie::query()->orderBy('name')->get();

        return view('series.index')->with(compact('series'));
    }


    public function create()
    {
        return view('series.create');
    }

    public function store(Request $request)
    {

        try {
            $request->validate([
                'name' => 'unique:series,name|max:128'
            ], [
                'name.unique' => 'O nome dessa série já existe.',
                'name.max' => 'O nome dessa série é muito grande.',
            ]);
        } catch (ValidationException $e) {
            return response()->json(['errors' => $e->errors()], 422);
        }

        Serie::create([
            'name' => $request->input('name')
        ]);

        return redirect("/series");
    }

    public function destroy(Request $_request, string $id)
    {
        $serie = Serie::find($id);

        if($serie) $serie->delete();

        return response()->json($serie, 204);
    }
}
