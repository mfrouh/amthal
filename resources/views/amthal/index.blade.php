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
                      <th>@lang('home.detail')</th>
                      <th>#</th>
                  </tr>
                  </thead>
                  <tbody>
                      @foreach ($posts as $k=> $post)
                      <tr>
                          <td>{{$k+1}}</td>
                          <td>{{$post->content}}</td>
                          <td>{{$post->details}}</td>
                          <td>
                            <a class="btn btn-outline-primary m-1 btn-sm" href="{{route('post.edit',[$post->id])}}"><i class="fas fa-edit"></i></a>
                            <a class="btn btn-outline-danger m-1 btn-sm" onclick="event.preventDefault();
                               document.getElementById('delete-post-{{$post->id}}').submit();" href="#"><i class="fas fa-trash"></i></a>
                               <form id="delete-post-{{$post->id}}" action="{{ route('post.destroy',[$post->id]) }}" method="POST" style="display: none;">
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
