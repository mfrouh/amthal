@extends('layouts.app')
@section('title')
{{ __('home.writers') }}
@endsection
@section('content')
<div class="container">
    <div class="row">
        @foreach ($writers as $writer)
        <div class="col-md-3 mt-5">
          <a class="alink" href="/writer/{{$writer->id}}">
           <div class="card shadow-sm">
             <div class="card-body text-center">
               <img src="{{url('/storage/writer')}}/{{$writer->image}}" class="img-writer shadow" style="right:120px">
               <i class="fa fa-quote-{{floattext($writer->name)=='right'?"right ml-3 right":"left mr-3 left"}} "></i>
                   <br>
                   {{$writer->name}}
                   <br>
               <i class="fa fa-quote-{{floattext($writer->name)=='right'?"left mr-3 left":"right ml-3 right"}}"></i><br>
             </div>
           </div>
          </a>
        </div>
        @endforeach
    </div>
</div>
@endsection
