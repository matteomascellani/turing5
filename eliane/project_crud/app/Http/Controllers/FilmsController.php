<?php

namespace App\Http\Controllers;

use App\Models\Films;
use Illuminate\Http\Request;

class FilmsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $film=new Films();
        $items=$film->get();
        return view('films',compact('items'));
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
        $titolo=$request->input('titolo');
        $categoria=$request->input('categoria');
        $tipologia=$request->input('tipologia');
        $anno=$request->input('anno');

        $film=new Films();

        $film->create([
            'titolo'=>$titolo,
            'categoria'=>$categoria,
            'tipologia'=>$tipologia,
            'anno'=>$anno
        ]);
        return redirect('/films');
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
    public function edit($id)
    {
        $film=new Films();
        $items=$film->find($id);
        return view('edit',compact('items'));
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
        $titolo=$request->input('titolo');
        $categoria=$request->input('categoria');
        $tipologia=$request->input('tipologia');
        $anno=$request->input('anno');

        $film=new Films();
        $film=$film->find($id);
        $film->update([
            'titolo'=>$titolo,
            'categoria'=>$categoria,
            'tipologia'=>$tipologia,
            'anno'=>$anno
        ]);
        return redirect('/films');
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
