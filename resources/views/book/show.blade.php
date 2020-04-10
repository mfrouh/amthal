@extends('layouts.app')
@section('title')
{{$book->name}}
@endsection
@section('content')
<div class="container">
    {{-- <div class="row">
        <x-infowriter :writer=$writer></x-infowriter>
    </div>
    <hr>
        <x-writerarticles :writer=$writer></x-writerarticles> --}}
</div>
@endsection
