<?php

namespace App\Http\Controllers;

use App\Http\Requests\AuthorRequest;
use App\Models\Author;
use App\Models\Country;
use App\Models\Book;
use Illuminate\Http\Request;

class AuthorsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $query = $request->get('query','');

        $items = Author::orderBy('cognome','ASC');
        if($query) {
            $items = $items->where('cognome','LIKE','%'.$query.'%');
        }
        $items = $items->get();
        $country=Country::get();
        return view('author.index',compact('items','country','query'));
    }



    /**z
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $country=Country::orderBy('state','ASC')->get();
        return view('author.create', compact('country'));
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AuthorRequest $request)
    {

        if(!$author = Author::where('codice',$request->input('author.codice'))->first()) {
            $author = Author::create($request->input('author'));
        }


        return redirect()->route('authors.index')->with('message', $author->wasRecentlyCreated ? "Autore creato" : "Autore già presente");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Author $author)
    {
        return view('author.show',compact('author'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Author $author)
    {
        $country=Country::orderBy('state','ASC')->get();
        return view('author.edit',compact('author','country'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Author $author)
    {
        $author->update($request->input('author'));
        $request->session()->flash('update','update Succeful!!!!!!!!!!!!!!');
        return redirect('/authors');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Author $author,Request $request)
    {
        $author->delete();
        $request->session()->flash('update','update Succeful!!!!!!!!!!!!!!');
        return redirect('/authors');

    }
}
