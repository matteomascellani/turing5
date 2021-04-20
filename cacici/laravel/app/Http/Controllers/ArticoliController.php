<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Articolo;

class ArticoliController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articolo = new Articolo;
        $items = $articolo->get();
        return view('articoli', compact('items'));
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
        $lean = $request->input('Lean');
        $sku = $request->input('Sku');
        $tipologia = $request->input('Tipologia');
        $marca = $request->input('Marca');

        $articolo = new Articolo;
        $articolo->create([
            "Lean" => $lean,
            "Sku" => $sku,
            "Tipologia" => $tipologia,
            "Marca" => $marca
        ]);
        return redirect('/articoli');
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
        $articolo = new Articolo;
        $item = $articolo->find($id);
        return view('edit',compact('item'));
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
        $lean = $request->input('Lean');
        $sku = $request->input('Sku');
        $tipologia = $request->input('Tipologia');
        $marca = $request->input('Marca');

        $articolo = new Articolo;
        $articolo = $articolo->find($id);
        $articolo->update([
            "Lean" => $lean,
            "Sku" => $sku,
            "Tipologia" => $tipologia,
            "Marca" => $marca,

        ]);
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
