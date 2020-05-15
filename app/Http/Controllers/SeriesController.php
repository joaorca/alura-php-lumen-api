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

    public function store(Request $request)
    {
        return response()
            ->json(
                Serie::create(['nome' => $request->nome]),
                201
            );
    }
}
