<div class="col-lg-3 text-center">
    <img src="{{url('/storage/writer')}}/{{$writer->image}}" class="mainwriter" >
</div>
<div class="col-lg-9">
   <div class="card brdrd shadow-sm border-0 ">
      <div class="card-body text-@lang('home.left') ">
        <div class="row">
           <div class="col-4 p-2">@lang('home.name')  :  <a class="btn btn-outline-primary  btn-sm brdrd">{{$writer->name}}</a></div>
           @if($writer->born)
           <div class="col-4 p-2">@lang('home.born') : <a class="btn btn-outline-success btn-sm brdrd">{{$writer->born}}</a></div>
           @endif
           @if($writer->died)
           <div class="col-4 p-2">@lang('home.died') : <a class="btn btn-outline-danger btn-sm brdrd">{{$writer->died}}</a></div>
           @endif
        </div>
        <div class="row p-2">@lang('home.information'):</div>
        <div class="row p-2  brdrd">{{$writer->information}}</div>
      </div>
   </div>
</div>
