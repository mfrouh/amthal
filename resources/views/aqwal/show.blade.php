@extends('layouts.app')
@section('title')
{{$article->content}}
@endsection
@section('content')
<div class="container">
    <div class="row">
        <x-showarticle :article=$article></x-showarticle>
    </div>
    <hr>
        <x-morearticles :article=$article></x-morearticles>
</div>
@endsection
