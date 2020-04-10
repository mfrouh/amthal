@extends('layouts.app')
@section('title')
{{ __('home.books') }}
@endsection
@section('content')
<div class="container">
    <div class="row">
        @foreach ($books as $book)
        <div class="col-md-3 mt-5">
          <a class="alink" href="/book/{{$book->id}}">
           <div class="card shadow-sm">
             <div class="card-body p-0 text-center">
               <img src="{{url('/storage/writer')}}/{{$book->writer->image}}" class="img-writer shadow">
               <img src="{{url('/storage/book')}}/{{$book->image}}" alt="" class="img-book">
             </div>
           </div>
          </a>
        </div>
        @endforeach
    </div>
</div>
@endsection
