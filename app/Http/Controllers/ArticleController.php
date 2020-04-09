<?php

namespace App\Http\Controllers;

use App\article;
use App\Http\Requests\Storearticle;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth')->except('show');
    }
    public function index()
    {
        $articles=article::paginate(9);
        return view('aqwal.index',compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('aqwal.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Storearticle $request)
    {
        $article=new article();
        $article->user_id=auth()->user()->id;
        $article->writer_id=$request->writer_id;
        $article->content=$request->content;
        $article->save();
        return redirect('/aqwal');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(article $article)
    {
        return view('aqwal.show',compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(article $article)
    {
        return view('aqwal.edit',compact('article'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Storearticle $request, article $article)
    {
        $article->user_id=auth()->user()->id;
        $article->writer_id=$request->writer_id;
        $article->content=$request->content;
        $article->save();
        return redirect('/aqwal');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(article $article)
    {
        $article->delete();
        return back();
    }
}
