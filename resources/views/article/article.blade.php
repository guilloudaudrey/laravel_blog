
@extends('layout')

@section('title', 'Mes Articles')


@section('content')
<div class="container-fluid">
    <h2 class="titrearticle">{{ $article['title']}}</h2>
                <p>{{ $article['content']}}</p>



    @foreach($comments as $comment)
    <div class="media mb-4">
        <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
            <div class="media-body">
                <h5 class="mt-0">Comment</h5>
                <h6>{{$comment->title}}</h6>
                <p>{{$comment->content}}</p>
            </div>
    </div>
@endforeach


<a href="/articles"><--- Posts list</a>
</div>
@endsection