<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\post;
class mainpost extends Component
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
        return view('components.mainpost',[
            'posts' => post::take(6)->latest()->get(),
        ]);
    }
}
