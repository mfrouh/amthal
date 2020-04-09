@extends('layouts.app')
@section('title')
{{ __('home.amthal') }}
@endsection
@section('content')
<div class="container">
    <div class="card">
      <div class="card-body">
          <table class="table table-striped table-inverse text-center">
              <thead class="thead-inverse">
                  <tr>
                      <th>#</th>
                      <th>@lang('home.content')</th>
                      <th>@lang('home.writer')</th>
                      <th>#</th>
                  </tr>
                  </thead>
                  <tbody>
                      @foreach ($articles as $k=> $article)
                      <tr>
                          <td>{{$k+1}}</td>
                          <td>{{$article->content}}</td>
                          <td>{{$article->writer->name}}</td>
                          <td>
                            <a class="btn btn-outline-primary m-1 btn-sm" href="{{route('article.edit',[$article->id])}}"><i class="fas fa-edit"></i></a>
                            <a class="btn btn-outline-danger m-1 btn-sm" onclick="event.preventDefault();
                               document.getElementById('delete-article-{{$article->id}}').submit();" href="#"><i class="fas fa-trash"></i></a>
                               <form id="delete-article-{{$article->id}}" action="{{ route('article.destroy',[$article->id]) }}" method="post" style="display: none;">
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
