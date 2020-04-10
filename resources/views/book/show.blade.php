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
                   <div class="row p-2">
                       @lang('home.url'):{{$book->url}}
                   </div>
               </div>
           </div>
        </div>
    </div>
</div>
@endsection
