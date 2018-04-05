
@extends('layout')

@section('title', 'Mes Articles')


@section('content')
<div class="container-fluid">
    <h2 class="titrearticle">Mes articles</h2>
        @foreach($articles as $article)
                <ul>
                        <li><a href="/articles/{{$article->id}}">{{ $article->title}}</a></li>
                        <li>{{ $article->created_at}}</li>
                     

                        <a href="/articles/{{$article->id}}">a</a>
                </ul>
        @endforeach
</div>


@endsection
