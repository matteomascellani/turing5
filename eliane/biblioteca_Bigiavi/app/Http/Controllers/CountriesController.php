<?php

namespace App\Http\Controllers;

use App\Models\Country;
use Illuminate\Http\Request;
use App\Http\Requests\CountryRequest;

class CountriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items=Country::orderBy('state','ASC')->get();
        return view('country.index',compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('country.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CountryRequest $request)
    {
        $country=new Country();
        //$country->create($request->input('country'))
        //return redirect ('/countries')

        $inputRequestCountry=$request->input('country');

        $count=Country::where('state',$inputRequestCountry['state'])->count();
        if($count==0){
            $country->create($request->input('country'));
        }

        return redirect('/countries')->with('count',$count)
                                     ->with('target',$inputRequestCountry['state']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Country $country)
    {
        return view('country.show',compact('country'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Country $country)
    {
        return view('country.edit',compact('country'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Country $country)
    {
        $country->update($request->input('country'));
        $request->session()->flash('message','update success !!!!!!!');
        return redirect('/countries');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy( Country $country, Request $request)
    {
        $country->delete();
        $request->session()->flash('delete','Delete Succeful !!!!!!!!');
        return redirect('/countries');
    }
}
