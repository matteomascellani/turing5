<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Language;
use App\Http\Requests\LanguageRequest;
class LanguagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $items=Language::orderBy('name','ASC')->get();
        return view('language.index',compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('language.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(LanguageRequest $request)
    {

        $language=new Language();
        $languageInput=$request->input('language');//

        $count=Language::where('name',$languageInput['name'])->count();

        if($count== 0){
            $language->create($request->input('language'));
        }
        return redirect('/languages')->with('count',$count)
                                     ->with('target',$languageInput['name']);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(language $language)
    {

        return view('language.show',compact('language'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Language $language)
    {
        return view('language.edit',compact('language'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Language $language)
    {
        $language->update($request->input('language'));
        return redirect('/languages');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Language $language)
    {
       $language->delete();
        return redirect('/languages');

    }
}
