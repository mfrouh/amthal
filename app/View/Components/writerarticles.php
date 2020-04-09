<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\article;
class writerarticles extends Component
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
        return view('components.writerarticles',[
            'articles'=>article::whereIn('id',$this->writer->articles->pluck('id')->toArray())->paginate('15'),
        ]);
    }
}
