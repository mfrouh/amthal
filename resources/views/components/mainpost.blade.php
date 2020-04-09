<div class="row">
  @foreach ($posts as $post)
    <div class="col-lg-4 mt-5">
       <div class="card shadow-sm">
         <div class="card-body text-center" dir="{{direction($post->content)}}">
           <a class="alink" href="/post/{{$post->id}}">
           <i class="fa fa-quote-{{floattext($post->content)=='right'?"right ml-3 right":"left mr-3 left"}} "></i>
               <br>
               {{$post->content}}
               <br>
           <i class="fa fa-quote-{{floattext($post->content)=='right'?"left mr-3 left":"right ml-3 right"}}"></i><br>
           </a>
         </div>
       </div>
    </div>
  @endforeach
</div>
