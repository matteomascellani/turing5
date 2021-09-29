<?php

namespace App\Http\Controllers;

use App\Http\Requests\BookRequest;
use App\Models\Author;
use App\Models\Book;
use App\Models\Category;
use App\Models\Language;
use Illuminate\Http\Request;

class BooksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items=Book::orderBy('titolo','ASC')->get();
        $category=Category::get();
        $author=Author::get();
        $language=Language::get();
        $allbooks=$items->count();

        return view('book.index',compact('items','category','author','language','allbooks'));

    }

    public function searchBooks(){
        $search=$_GET['query'];
        $items=Book::where('titolo','LIKE','%'.$search.'%')->get();
        $count=$items->count();

        if ($count>0)
        {
            return view('book.search',compact('items','search'));
        }
        else{
            return view('book.notfound',compact('search'));
        }
    }

    public function libriAuthor($authorId)
    {

        $book=Book::get();
        $author=Author::find($authorId);

        $items=Author::find($authorId)->book()->get();
        return view('book.livres_author',compact('book','items','author'));

    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category=Category::orderBy('nome','ASC')->get();
        $author=Author::orderBy('cognome','ASC')->get();
        $language=Language::orderBy('name','ASC')->get();

        return view('book.create',compact('category','author','language'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BookRequest $request)
    {
        $book=new Book();
        $book=Book::create($request->input('book'));
        return redirect('/books');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Book $book)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Book $book)
    {

        $category=Category::orderBy('nome','ASC')->get();
        $author=Author::orderBy('cognome','ASC')->get();
        $language=Language::orderBy('name','ASC')->get();
        return view('book.edit',compact('book','category','author','language'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Book $book )
    {
        $book->update($request->input('book'));
        $request->session()->flash('update','update Succeful!!!!!!!!!!!!!!');
        return redirect('/books');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Book $book, Request $request)
    {
        $book->delete($book);
        $request->session()->flash('delete','Delete Succeful!!!!!!!!!!!!!');
        return redirect('/books');
    }

}
