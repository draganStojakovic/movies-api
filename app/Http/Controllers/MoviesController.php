<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Http\Requests\MovieRequest;
use Illuminate\Http\Request;

class MoviesController extends Controller
{
    public function index()
    {
        return Movie::all();
    }
    public function show($id)
    {
        return Movie::findOrFail($id);
    }
    public function store(MovieRequest $request)
    {
        return Movie::create($request->all());
    }
    public function update(MovieRequest $request, $id)
    {
        $movie = Movie::findOrFail($id);
        $movie->update($request->all());
        return $movie;
    }
    public function delete($id)
    {
        Movie::destroy($id);
    }
}
