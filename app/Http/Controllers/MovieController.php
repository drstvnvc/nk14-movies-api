<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateMovieRequest;
use App\Http\Requests\UpdateMovieRequest;
use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index()
    {
        $movies = Movie::all();
        return response()->json($movies);
    }

    public function show(Movie $movie)
    {
        return response()->json($movie);
    }

    public function store(CreateMovieRequest $request)
    {
        $data = $request->validated();
        $movie = Movie::create($data);
        return response()->json($movie, 201);
    }

    public function update(Movie $movie, UpdateMovieRequest $request)
    {
        $data = $request->validated();
        $movie->update($data);

        return response()->json($movie);
    }

    public function destroy(Movie $movie)
    {
        $movie->delete();
        return response()->noContent();
    }
}
