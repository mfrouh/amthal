@extends('layouts.app')
@section('title')
{{ __('home.amthal') }}
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12">
          <div class="card shadow-sm border-0 border-raduis-0">
            <div class="card-header bg-primary">@lang('home.edit')</div>
            <div class="card-body text-@lang('home.left')">
               <form action="/post/{{$post->id}}" method="post">
                  @csrf
                  @method('PUT')
                  <div class="form-group">
                    <label for="content">@lang('home.content')</label>
                    <textarea  name="content" id="" rows="2" class="form-control" placeholder="">{{$post->content}}</textarea>
                  </div>
                  <div class="form-group">
                    <label for="details">@lang('home.detail')</label>
                    <textarea  name="details" id=""  rows="5" class="form-control" placeholder="">{{$post->details}}</textarea>
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
