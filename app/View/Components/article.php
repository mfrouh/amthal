<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\article as articles;
class article extends Component
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
        return view('components.article',[
            'articles'=>articles::paginate(15),
        ]);
    }
}
