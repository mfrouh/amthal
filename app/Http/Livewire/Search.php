<?php

namespace App\Http\Livewire;

use App\article;
use App\book;
use App\post;
use Livewire\Component;
use App\writer;
class Search extends Component
{
    public $search = '';

    public function clear()
    {
        $this->search='';
    }
    public function render()
    {
        return view('livewire.search', [
            'writers' => writer::where('name','like',"%$this->search%")->take(3)->get(),
            'books' => book::where('name','like',"%$this->search%")->take(3)->get(),
            'articles' => article::where('content','like',"%$this->search%")->take(3)->get(),
            'posts' => post::where('content','like',"%$this->search%")->take(3)->get(),
            'search' => $this->search,
        ]);
    }
}
