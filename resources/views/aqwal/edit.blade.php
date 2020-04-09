@extends('layouts.app')
@section('title')
{{ __('home.aqwal') }}
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12">
          <div class="card shadow-sm border-0 border-raduis-0">
            <div class="card-header bg-primary text-@lang('home.left') ">@lang('home.edit')</div>
            <div class="card-body text-@lang('home.left')">
               <form action="/article/{{$article->id}}" method="post">
                  @csrf
                  <div class="form-group">
                    <label for="content">@lang('home.content')</label>
                    <textarea  name="content" id="" rows="2" class="form-control" placeholder="">{{$article->content}}</textarea>
                  </div>
                  <div class="form-group">
                   <label for="writer">@lang('home.writer')</label>
                   <select name="writer_id" class="form-control" id="">
                       @php
                           $writers=App\writer::all();
                       @endphp
                       @foreach ($writers as $writer)
                           <option value="{{$writer->id}}" {{$article->writer_id==$writer->id?'selected':''}}>{{$writer->name}}</option>
                       @endforeach
                   </select>
                  </div>
                  <div class="form-group text-center">
                    <input type="submit"  class='btn btn-primary brdrd' value="@lang('home.save')">
                  </div>
               </form>
            </div>
          </div>
        </div>
    </div>
</div>
@endsection
