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
    public function index()
    {
        $items=Author::orderBy('cognome','ASC')->get();
        $country=Country::get();
        return view('author.index',compact('items','country'));
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $country=Country::orderBy('state','ASC')->get();
        return view('author.create', compact('country'));
    }
    public function search()
    {

      $search=$_GET['query'];
      $items=Author::where('cognome','LIKE','%'.$search.'%')->get();

      return view('author.search',compact('items'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AuthorRequest $request)
    {
        $author=new Author();
        $inputAuthor=$request->input('author');
        $count=Author::where('codice',$inputAuthor['codice'])->count();

        if ($count==0) {
            $author=$author::create($inputAuthor);
        }


        return redirect('/authors')->with('count',$count)
                                   ->with('target',$inputAuthor['codice']);
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
        return redirect('/authors');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Author $author)
    {
        $author->delete();
        return redirect('/authors');

    }
}
