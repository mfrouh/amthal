<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\post;
class mostread extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.mostread',[
            'posts' => post::take(4)->latest()->get(),
        ]);
    }
}
