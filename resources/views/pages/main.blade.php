@extends('layouts.app')
@section('title')
{{ __('home.amthal') }}
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-3">
            <x-mostwriter></x-mostwriter>
        </div>
        <div class="col-lg-9">
            <div class="row">
                <x-mainarticle></x-mainarticle>
            </div>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-lg-3">
            <x-mostread></x-mostread>
        </div>
        <div class="col-lg-9">
            <x-mainpost></x-mainpost>
        </div>
    </div>
    <hr>
    <div class="row">
        <x-mainwriter></x-mainwriter>
    </div>
</div>
@endsection
