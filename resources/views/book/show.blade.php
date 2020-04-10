@extends('layouts.app')
@section('title')
{{$book->name}}
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-3">
            <img src="{{url('/storage/book')}}/{{$book->image}}" alt="" class="img-book">
        </div>
        <div class="col-md-9">
            <div class="card">
              <div class="card-body">
                   <div class="row p-2">
                       @lang('home.name'):{{$book->name}}
                   </div>
                   <div class="row p-2">
                       @lang('home.writer'):{{$book->writer->name}}
                   </div>
                   <div class="row p-2 text-right">
                       @lang('home.url'):
                       <a class="btn btn-link btn-sm" href="{{$book->url}}">@lang('home.url')</a>
                   </div>
               </div>
           </div>
        </div>
    </div>
</div>
@endsection
