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
    public function index()// metode pour montrer la liste des elemt en DB
    {
       // $book=new Book();
       // $lists=$book->get();
       $lists = Book::with('author','serie')->get();

       dd($lists);

        return view('books',compact('lists'));


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
        $nome=$request->input('nome');
        $author=$request->input('author');
        $pages=$request->input('pages');
        $book=new Book;
        $book->create([
            "nome" =>$nome,
            "author" =>$author,
            "pages" =>$pages
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
        $book=new Book;
        $book=$book->find($id);
        return view('show',compact('book'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $book=new Book;
        $libro=$book->find($id);
        return view('edit',compact('libro'));
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
        $nome=$request->input('nome');
        $author=$request->input('author');
        $pages=$request->input('pages');

        $book=new Book;
        $book=$book->find($id);
        $book->update([
            "nome" =>$nome,
            "author" =>$author,
            "pages" =>$pages
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
        $book=new Book;
        $book = $book->find($id);
        $book->delete();
        return redirect('/books');
    }
}
