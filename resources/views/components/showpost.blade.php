<div class="col-12">
    <div  class="accordion" id="accordionExample">
       <div class="card shadow-sm border-0 border-raduis-0 mb-3">
          <div class="card-body text-@lang('home.left')"id="heading{{$post->id}}" >
             <a class="p-2 brdrd bg-primary {{floattext($post->content)}}" dir="{{direction($post->content)}}"   type="menu"  data-toggle="collapse" data-target="#collapse{{$post->id}}" aria-expanded="true" aria-controls="collapseOne">
                <i class="fa fa-quote-{{floattext($post->content)=='right'?"right ml-3":"left mr-3"}}"></i>
                  {{$post->content}}
                <i class="fa fa-quote-{{floattext($post->content)=='right'?"left mr-3":"right ml-3"}}"></i>
             </a>
          </div>
          <div id="collapse{{$post->id}}" class="collapse" aria-labelledby="heading{{$post->id}}" data-parent="#accordionExample">
             <div class="card-body myborder-{{floattext($post->content)=="left"?"left":"right"}} text-{{floattext($post->content)}}" style="line-height:2.2" dir="{{direction($post->content)}}">
               @if ($post->details)
                 {{$post->details}}
               @else
               <p class="text-center">@lang('home.notfounddetails')</p>
               @endif
             </div>
          </div>
       </div>
    </div>
</div>
