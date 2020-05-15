<?php

namespace App\Http\Controllers;

use App\Serie;
use Illuminate\Http\Request;

class SeriesController extends Controller
{
    public function index(Request $request)
    {
        return Serie::all();
    }

    public function get(int $id)
    {
        $serie = Serie::find($id);
        if (is_null($serie)) {
            return response()->json('', 204);
        }
        return response()->json($serie);
    }

    public function store(Request $request)
    {
        return response()
            ->json(
                Serie::create(['nome' => $request->nome]),
                201
            );
    }
}
