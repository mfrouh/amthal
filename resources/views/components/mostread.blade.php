<div class="card shadow-sm border-0 border-raduis-0 mb-3">
    <div class="card-header bg-primary text-@lang('home.left')">@lang('home.mostread')</div>
    @foreach ($posts as $k=> $post)
    <div class="card-body shadow-sm p-2  text-@lang('home.left')">
       <div class="row">
           <div class="col-3 pt-2 pl-0 text-center">
              <a href="/post/{{$post->id}}" class="btn btn-success brdrd">{{$k+1}}</a>
           </div>
           <div class="col-9 pt-2 pr-0 text-center smaller">
              <a class="alink" href="/post/{{$post->id}}">{{$post->content}}</a>
           </div>
       </div>
    </div>
    @endforeach
</div>
