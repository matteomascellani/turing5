<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sandwich;
use App\Http\Requests\sandwichRequest;

class sandwichController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items=Sandwich::get();

       return view('sandwichs.index',compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('sandwichs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(sandwichRequest $request)
    {
        $sandwich=new Sandwich();
        $sandwich->create($request->input("sandwich"));
        return redirect("sandwichs");
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
    public function edit(Sandwich $sandwich)
    {
    
        return view('sandwichs.edit',compact('sandwich'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sandwich $sandwich)
    {
        $sandwich->update($request->input('sandwich'));
        return redirect('/sandwichs');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sandwich=Sandwich::find($id);
        $sandwich->delete();
        return redirect('sandwichs');
    }
}
