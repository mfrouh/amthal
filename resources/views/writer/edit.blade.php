@extends('layouts.app')
@section('title')
{{ __('home.writer') }}
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12">
          <div class="card shadow-sm border-0 border-raduis-0">
            <div class="card-header bg-primary text-@lang('home.left') ">@lang('home.create')</div>
            <div class="card-body text-@lang('home.left')">
               <form action="/writer/{{$writer->id}}" method="post" enctype="multipart/form-data">
                  @csrf
                  @method("PUT")
                  <div class="form-group">
                    <label for="name">@lang('home.name')</label>
                    <input type="text"  name="name" id="" class="form-control" placeholder="" value="{{$writer->name}}">
                  </div>
                  <div class="form-group">
                    <label for="information">@lang('home.information')</label>
                    <textarea  name="information" id="" rows="3" class="form-control" placeholder="">{{$writer->information}}</textarea>
                  </div>
                  <div class="row">
                    <div class="form-group col-4">
                        <label for="born">@lang('home.born')</label>
                        <input type="date"  name="born" id=""  class="form-control" placeholder=""value="{{$writer->born}}">
                    </div>
                    <div class="form-group col-4">
                        <label for="died">@lang('home.died')</label>
                        <input type="date"  name="died" id="" class="form-control" placeholder="" value="{{$writer->died}}">
                    </div>
                    <div class="form-group col-4">
                        <label for="image">@lang('home.image')</label>
                        <input type="file"  name="image" id=""  class="form-control" placeholder="">
                    </div>
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
