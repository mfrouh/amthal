    <div>
    <input wire:model="search" class="form-control brdrd" style="position: relative" type="text" placeholder="@lang('home.search')"/>


    <div class="list-group"  style="position:absolute;width: 236px;">
        @if (!empty($search))
            <div class="list-group-item p-2  bg-yellow">@lang('home.writers')</div>

           @forelse($writers as $writer)
           <a class="alink" href="/writer/{{$writer->id}}">
                <div class="list-group-item p-2">
                <img src="{{url('/storage/writer')}}/{{$writer->image}}" class="searchwriter" >
                {{$writer->name}}
                </div>
            </a>
           @empty
               <div class="list-group-item p-2">@lang('home.empty')</div>
           @endforelse

           <div class="list-group-item p-2  bg-yellow">@lang('home.amthal')</div>

           @forelse($posts as $post)
           <a class="alink" href="/post/{{$post->id}}"><div class="list-group-item p-2">{{$post->content}}</div></a>
           @empty
               <div class="list-group-item p-2">@lang('home.empty')</div>
           @endforelse

           <div class="list-group-item p-2 bg-yellow">@lang('home.aqwal')</div>

           @forelse($articles as $article)
              <a class="alink" href="/article/{{$article->id}}"> <div class="list-group-item p-2">{{$article->content}}</div></a>
           @empty
               <div class="list-group-item p-2">@lang('home.empty')</div>
           @endforelse
        @endif
    </div>
</div>
