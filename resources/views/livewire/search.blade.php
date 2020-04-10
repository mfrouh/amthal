    <div>
    <input wire:model="search"  class="form-control border-raduis-4-left border-raduis-4-right brdrd" style="height: calc(2.25rem + 0px);position: relative" type="text" placeholder="@lang('home.search')"/>
    <div class="list-group  form-text" style="position:absolute;width: 236px;z-index:11">
        @if (!empty($search))
            <div class="list-group-item p-2  bg-yellow">@lang('home.writers')</div>

           @forelse($writers as $writer)
           <a class="alink" href="/writer/{{$writer->id}}">
                <div class="list-group-item p-2 smaller">
                <img src="{{url('/storage/writer')}}/{{$writer->image}}" class="searchwriter" >
                {{$writer->name}}
                </div>
            </a>
           @empty
               <div class="list-group-item p-2 smaller">@lang('home.empty')</div>
           @endforelse
            <div class="list-group-item p-2  bg-yellow">@lang('home.books')</div>

           @forelse($books as $book)
           <a class="alink" href="/book/{{$book->id}}">
                <div class="list-group-item p-2 smaller">
                <img src="{{url('/storage/book')}}/{{$book->image}}" class="searchwriter" >
                {{$book->name}}
                </div>
            </a>
           @empty
               <div class="list-group-item p-2 smaller">@lang('home.empty')</div>
           @endforelse
           <div class="list-group-item p-2  bg-yellow">@lang('home.amthal')</div>

           @forelse($posts as $post)
           <a class="alink" href="/post/{{$post->id}}"><div class="list-group-item p-2 smaller">{{$post->content}}</div></a>
           @empty
               <div class="list-group-item p-2 smaller">@lang('home.empty')</div>
           @endforelse

           <div class="list-group-item p-2 bg-yellow">@lang('home.aqwal')</div>

           @forelse($articles as $article)
              <a class="alink" href="/article/{{$article->id}}"> <div class="list-group-item p-2 smaller">{{$article->content}}</div></a>
           @empty
               <div class="list-group-item p-2 smaller">@lang('home.empty')</div>
           @endforelse


        @endif
    </div>
</div>
