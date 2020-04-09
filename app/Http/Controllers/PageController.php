<?php

namespace App\Http\Controllers;

use App\article;
use App\post;
use App\writer;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function aqwal()
    {
        $articles=article::paginate(12);
        return view('pages.aqwal',compact('articles'));
    }
    public function amthal()
    {
        $posts=post::paginate(9);
        return view('pages.amthal',compact('posts'));
    }
    public function main()
    {
        return view('pages.main');
    }
    public function writers()
    {
        $writers=writer::paginate(9);
        return view('pages.writer',compact('writers'));
    }
}
