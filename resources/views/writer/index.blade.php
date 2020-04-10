@extends('layouts.app')
@section('title')
{{ __('home.writers') }}
@endsection
@section('content')
<div class="container">
    <div class="card">
      <div class="card-body">
          <a href="/writer/create" class="btn btn-primary">@lang('home.create')</a>
          <table class="table table-striped table-inverse text-center">
              <thead class="thead-inverse">
                  <tr>
                      <th>#</th>
                      <th>@lang('home.name')</th>
                      <th>@lang('home.information')</th>
                      <th>@lang('home.died')</th>
                      <th>@lang('home.born')</th>
                      <th>@lang('home.image')</th>
                      <th>#</th>
                  </tr>
                  </thead>
                  <tbody>
                      @foreach ($writers as $k=> $writer)
                      <tr>
                          <td>{{$k+1}}</td>
                          <td>{{$writer->name}}</td>
                          <td>{!!substr($writer->information, 0, 150)!!}</td>
                          <td>{{$writer->died}}</td>
                          <td>{{$writer->born}}</td>
                          <td><img src="{{url('/storage/writer')}}/{{$writer->image}}" height="100px" width="100px"></td>
                          <td>
                            <a class="btn btn-outline-primary m-1 btn-sm" href="{{route('writer.edit',[$writer->id])}}"><i class="fas fa-edit"></i></a>
                            <a class="btn btn-outline-danger m-1 btn-sm" onclick="event.preventDefault();
                               document.getElementById('delete-writer-{{$writer->id}}').submit();" href="#"><i class="fas fa-trash"></i></a>
                               <form id="delete-writer-{{$writer->id}}" action="{{ route('writer.destroy',[$writer->id]) }}" method="post" style="display: none;">
                                   @csrf
                                   @method("DELETE")
                               </form>
                          </td>
                      </tr>
                      @endforeach
                  </tbody>
          </table>
      </div>
    </div>
</div>
@endsection
