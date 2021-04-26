<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $movie = new Movie;
        $movies = $movie->get();

        return view("movie.index")
            ->with('movies', $movies);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("movie.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $titolo = $request->input('input-titolo');
        $descrizione = $request->input('input-descrizione');
        $regia = $request->input('input-regia');
        $anno = (int)$request->input('input-anno');
        $durata = date('H:i:s', strtotime($request->input('input-durata')));
        $genere = $request->input('input-genere');

        $movie = new Movie;

        $movie->create([
            'titolo' => $titolo,
            'descrizione' => $descrizione,
            'regia' => $regia,
            'anno' => $anno,
            'durata' => $durata,
            'genere' => $genere
        ]);

        return redirect('/movies');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $movie = new Movie;
        $selectedMovie = $movie->find($id);

        return view('movie.show')
            ->with('movie', $selectedMovie);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
