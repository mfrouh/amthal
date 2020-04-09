<?php

namespace App\View\Components;

use Illuminate\View\Component;

class infowriter extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $writer;
    public function __construct($writer)
    {
        $this->writer=$writer;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.infowriter');
    }
}
