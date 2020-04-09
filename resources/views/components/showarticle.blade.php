<div class="col-12">
 <div class="card mt-5 shadow-sm">
    <div class="card-body text-center" dir="{{direction($article->content)}}">
       <img src="{{url('/storage/writer')}}/{{$article->writer->image}}" class="img-writer shadow" style="{{floattext($article->content)=='right'?"left":"right"}}:0px" >
       <i class="fa fa-quote-{{floattext($article->content)=='right'?"right ml-3 right":"left mr-3 left"}} "></i>
          <br>
           {{$article->content}}
           <br>
        <i class="fa fa-quote-{{floattext($article->content)=='right'?"left mr-3 left":"right ml-3 right"}}"></i><br>
        <a href="/writer/{{$article->writer->id}}" class="btn btn-outline-primary btn-sm brdrd {{floattext($article->content)=='right'?"right":"left"}}">{{$article->writer->name}}</a>
    </div>
 </div>
</div>
