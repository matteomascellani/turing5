<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Music;

class MusicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $music = new Music;
        $items = $music ->get();

        return view('musics', compact('items'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $name = $request->input('name');
        $composer = $request->input('composer');
        $date = $request->input('date');

        $music = new Music;
        $music->create([
            "name"=> $name,
            "composer"=> $composer,
            "date"=> $date,
        ]);

        return redirect('/musics');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        echo "show";
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $music = new Music;
        $item = $music->find($id);

        dd($item);

        return view('edit', compact('item'));
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

        $name = $request->input('name');
        $composer = $request->input('composer');
        $date = $request->input('date');

        $music = new Music;
        $music = $music->find($id);
        $music->update([
            "name"=> $name,
            "composer"=> $composer,
            "date"=> $date,
        ]);

        return redirect('/musics');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $music = new Music;
        $music = $music->find($id);
        $music->delete();

        return redirect('/musics');
    }
}
