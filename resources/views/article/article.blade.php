
@extends('layout')

@section('title', 'Mes Articles')


@section('content')
<div class="container-fluid">
    <h2 class="titrearticle">{{ $article['title']}}</h2>
                <p>{{ $article['content']}}</p>
</div>


@endsection