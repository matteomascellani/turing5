<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\MusicRequest;
use App\Models\Music;
use App\Models\Composer;
use App\Models\Opera;
use App\Models\Nation;

class MusicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nation = Nation::find(1);
        $composer = Composer::find(1);
        $opera = Opera::find(1);

        $items = Music::with('composer.nation', 'opera')->get();

        $composer = Composer::with('music')->first();

        return view('musics.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('musics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MusicRequest $request)
    {
        $name = $request->input('name');
        $composer = $request->input('composer');
        $date = $request->input('date');

        $music = new Music;
        $music->create([
            "name" => $name,
            "composer" => $composer,
            "date" => $date
        ]);

        return redirect()->route('musics.index')
            ->with('success', __('Musica creata correttamente'));

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

        return view('musics.edit', compact('item'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(MusicRequest $request, $id)
    {
        $name = $request->input('name');
        $composer = $request->input('composer');
        $date = $request->input('date');

        $music = new Music;
        $music->find($id);
        $music->update([
            "name" => $name,
            "composer" => $composer,
            "date" => $date
        ]);

        return redirect()->route('musics.index')
        ->with('success', __('Musica aggiornata correttamente'));
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
