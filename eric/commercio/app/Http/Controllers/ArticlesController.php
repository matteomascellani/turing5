<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $article=new Article();
        $items=$article->get();
        return view('/articles',compact('items'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $newnome=$request->input('nome');
        $neworigine=$request->input('origine');
        $newquantità=$request->input('quantità');
        $newprezzo=$request->input('prezzo');
        $newdescrizione=$request->input('descrizione');

        $article=new Article();
        $article->create(['nome'=>$newnome,
        'origine'=>$neworigine,
        'quantità'=>$newquantità,
        'prezzo'=>$newprezzo,
        'descrizione'=>$newdescrizione,
        ]);
        return redirect('/articles');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $article=new Article();
        $items=$article->find($id);
        return view('showcommercio',compact('items'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $article=new Article();
        $items=$article->find($id);
        return view('editcommercio',compact('items'));
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
        $newnome=$request-> input('nome');
        $neworigine=$request-> input('origine');
        $newquantità=$request-> input('quantità');
        $newprezzo=$request-> input('prezzo');
        $newdescrizione=$request-> input('descrizione');

        $article=new Article();
        $article=$article->find($id);
        $article->update([
             'nome'=>$newnome,
             'origine'=>$neworigine,
             'quantità'=>$newquantità,
             'prezzo'=>$newprezzo,
             'descrizione'=>$newdescrizione,
        ]);
        return redirect('/articles');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $article=new Article();
        $items=$article->find($id);
        $items->delete();
        return redirect('/articles');
    }
}
