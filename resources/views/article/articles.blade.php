
@extends('layout')

@section('title', 'Page Title')

@section('sidebar')
    @parent
    <p>This is appended to the master sidebar.</p>
@endsection

@section('content')
@foreach($articles as $article)
        <p>{{ $article}}</p>
@endforeach

@endsection