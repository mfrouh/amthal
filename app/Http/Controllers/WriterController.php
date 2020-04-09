<?php

namespace App\Http\Controllers;

use App\Http\Requests\Storewriter;
use App\writer;
use Illuminate\Http\Request;

class WriterController extends Controller
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
        $writers=writer::paginate(9);
        return view('writer.index',compact('writers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('writer.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Storewriter $request)
    {
        $writer=new writer();
        $writer->name=$request->name;
        $writer->information=$request->information;
        $writer->born=$request->born;
        $writer->died=$request->died;
        if($request->image)
        {
            $writer->image=sorteimage('storage/writer',$request->image);
        }
        $writer->save();
        return redirect('/writer');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\writer  $writer
     * @return \Illuminate\Http\Response
     */
    public function show(writer $writer)
    {
        return view('writer.show',compact('writer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\writer  $writer
     * @return \Illuminate\Http\Response
     */
    public function edit(writer $writer)
    {
        return view('writer.edit',compact('writer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\writer  $writer
     * @return \Illuminate\Http\Response
     */
    public function update(Storewriter $request, writer $writer)
    {
        $writer->name=$request->name;
        $writer->information=$request->information;
        $writer->born=$request->born;
        $writer->died=$request->died;
        if($request->image)
        {
            $writer->image= sorteimage('storage/writer',$request->image);
        }
        $writer->save();
        return redirect('/writer');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\writer  $writer
     * @return \Illuminate\Http\Response
     */
    public function destroy(writer $writer)
    {
        $writer->delete();
        return back();
    }
}
