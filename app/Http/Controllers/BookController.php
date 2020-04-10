<?php

namespace App\Http\Controllers;

use App\book;
use App\Http\Requests\Storebook;
use Illuminate\Http\Request;

class BookController extends Controller
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
        $books=book::paginate(9);
        return view('book.index',compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('book.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Storebook $request)
    {
        $book=new book();
        $book->user_id=auth()->user()->id;
        $book->writer_id=$request->writer_id;
        $book->name=$request->name;
        $book->url=$request->url;
        if($request->image)
        {
            $book->image= sorteimage('storage/book',$request->image);
        }
        $book->save();
        return redirect('/book');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\book  $book
     * @return \Illuminate\Http\Response
     */
    public function show(book $book)
    {
        return view('book.show',compact('book'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\book  $book
     * @return \Illuminate\Http\Response
     */
    public function edit(book $book)
    {
        return view('book.edit',compact('book'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\book  $book
     * @return \Illuminate\Http\Response
     */
    public function update(Storebook $request, book $book)
    {
        $book->user_id=auth()->user()->id;
        $book->writer_id=$request->writer_id;
        $book->name=$request->name;
        $book->url=$request->url;
        if($request->image)
        {
            $book->image= sorteimage('storage/book',$request->image);
        }
        $book->save();
        return redirect('/book');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\book  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy(book $book)
    {
       $book->delete();
       return back();
    }
}
