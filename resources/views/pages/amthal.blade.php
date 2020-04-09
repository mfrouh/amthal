@extends('layouts.app')
@section('title')
{{ __('home.amthal') }}
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-3">
            <x-mostread></x-mostread>
        </div>
        <div class="col-lg-9">
            <x-post></x-post>
        </div>
    </div>
</div>
@endsection
