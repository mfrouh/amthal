@extends('layouts.app')
@section('title')
{{ __('home.books') }}
@endsection
@section('content')
<div class="container">
    <div class="card">
      <div class="card-body">
          <a href="/book/create" class="btn btn-primary">@lang('home.create')</a>
          <table class="table table-striped table-inverse text-center">
              <thead class="thead-inverse">
                  <tr>
                      <th>#</th>
                      <th>@lang('home.name')</th>
                      <th>@lang('home.writer')</th>
                      <th>@lang('home.url')</th>
                      <th>@lang('home.image')</th>
                      <th>#</th>
                  </tr>
                  </thead>
                  <tbody>
                      @foreach ($books as $k=> $book)
                      <tr>
                          <td>{{$k+1}}</td>
                          <td>{{$book->name}}</td>
                          <td>{{$book->writer->name}}</td>
                          <td>{{$book->url}}</td>
                          <td><img src="{{url('/storage/book')}}/{{$book->image}}" height="100px" width="100px"></td>
                          <td>
                            <a class="btn btn-outline-primary m-1 btn-sm" href="{{route('book.edit',[$book->id])}}"><i class="fas fa-edit"></i></a>
                            <a class="btn btn-outline-danger m-1 btn-sm" onclick="event.preventDefault();
                               document.getElementById('delete-book-{{$book->id}}').submit();" href="#"><i class="fas fa-trash"></i></a>
                               <form id="delete-book-{{$book->id}}" action="{{ route('book.destroy',[$book->id]) }}" method="post" style="display: none;">
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
