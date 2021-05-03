<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Plant;

class PlantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $plant=new Plant;
        $plants= $plant->get(); //metodo get (object relation mapping) prende le righe e le converte in istanze di plant
        return view('plant.index', compact('plants'));
        //dd($plants);//visualizzazione di debug
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('plant.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $name = $request->input('input-name');
        $sowing_month = $request->input('input-sowing');
        $blooming_month = $request->input('input-blooming');
        $height = $request->input('input-height');
        $type_of_plant = $request->input('input-type');

        $plant = new Plant;
        $plant->create([
          "name" => $name,
          "sowing_month" => $sowing_month,
          "blooming_month" => $blooming_month,
          "height" => $height,
          "type_of_plant" => $type_of_plant
        ]);
        return redirect('/plants');
        //echo($sowing_month);
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
    {/** 
        *$plant = new Plant;
        *$item = $plant->find($id);

       * return view('edit',compact('item'));
       */
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
        /**
        *$name = $request->input('name');
        *$sowing_month = $request->input('sowing_month');
        *$blooming_month = $request->input('blooming_month');
        *$height = $request->input('height');
        *$type_of_plant = $request->input('type_of_plant');

        *$plant = new Plant;
        *$plant = $plant->find($id);
        *$plant->update([
           * "name" => $name,
            *"author" => $sowing_month,
            *"pages" => $blooming_month,
            *"height"=>$height,
            *"type_of_plant"=>$type_of_plant
        *]);

        *return redirect('/books');
       */
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
