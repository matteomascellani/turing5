<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function prova()
    {
        echo "prova";
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


        $book = new Book;
        $items = $book->get();
        $name = "Matteo";

        return view('books',compact('items','name'));

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
        $name = $request->input('name');
        $author = $request->input('author');
        $pages = $request->input('pages');

        $book = new Book;
        $book->create([
            "name" => $name,
            "author" => $author,
            "pages" => $pages
        ]);

        return redirect('/books');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        echo "show";
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $book = new Book;
        $item = $book->find($id);

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

        $name = $request->input('name');
        $author = $request->input('author');
        $pages = $request->input('pages');

        $book = new Book;
        $book = $book->find($id);
        $book->update([
            "name" => $name,
            "author" => $author,
            "pages" => $pages
        ]);

        return redirect('/books');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $book = new Book;
        $book = $book->find($id);
        $book->delete();

        return redirect('/books');
    }
}
