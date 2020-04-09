@extends('layouts.app')
@section('title')
{{ __('home.aqwal') }}
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-3">
            <x-mostwriter></x-mostwriter>
        </div>
        <div class="col-lg-9">
            <x-article></x-article>
        </div>
    </div>
</div>
@endsection
