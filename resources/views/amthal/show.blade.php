@extends('layouts.app')
@section('title')
{{$post->content}}
@endsection
@section('content')
<div class="container">
    <div class="row">
        <x-showpost :post=$post></x-showpost>
    </div>
    <hr>
        <x-moreposts :post=$post></x-moreposts>
</div>
@endsection
