
@extends('layout')

@section('title', 'Mes Articles')


@section('content')
<div class="container-fluid">
    <h2 class="titrearticle">{{ $article['title']}}</h2>
                <p>{{ $article['title']}}</p>
</div>


@endsection