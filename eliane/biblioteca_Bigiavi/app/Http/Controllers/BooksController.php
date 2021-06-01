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

        return view('book.index',compact('items','category','author','language'));

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
        $inputBook=$request->input('book');
        $count=Book::where('titolo',$inputBook['titolo'])->count();

        if ($count==0)
        {
            $book->create($inputBook);
        }
        return redirect('/books')->with('count',$count)
                                 ->with('target',$inputBook['titolo']);
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
        return redirect('/books');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Book $book)
    {
        $book->delete();
        return redirect('/books');
    }
}
