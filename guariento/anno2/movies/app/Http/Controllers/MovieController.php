<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RequestMovie;
use App\Models\Movie;
use App\Models\Genre;
use App\Models\MoviePerson;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $genres = Genre::get();

        if ($request->get('genre_id')) {
            $movies = Movie::with('genre')->where('genre_id', $request->get('genre_id'))->get();
        } else {
            $movies = Movie::with('genre')->get();
        }

        return view('movies.index', compact('movies', 'genres'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $genres = Genre::get()->pluck('title', 'id');

        return view('movies.edit', compact('genres'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Movie::create($request->get('movie'));

        return redirect()->route('movies.index')
            ->with('success', __('Film creato'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Movie $movie)
    {
        $genres = Genre::get()->pluck('title', 'id');

        return view('movies.edit', compact('movie', 'genres'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\RequestMovie  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(RequestMovie $request, Movie $movie)
    {
        $movie->update($request->get('movie'));

        return redirect()->route('movies.index')
            ->with('success', __('Film modificato'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $movie = Movie::find($id);

        $movie->delete();

        return redirect()->route('movies.index')
            ->with('success', __('Film eliminato'));
    }
}
