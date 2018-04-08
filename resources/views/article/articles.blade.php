
@extends('layout')

@section('title', 'Mes Articles')


@section('content')
<div class="container">
<h2 class="titrearticle">My Posts</h2>
@foreach($articles as $article)
      <div class="row">
        <div class="col-md-8">
                <div class="container-fluid">

                        <div class="card mb-4">
                                <img class="card-img-top" src="http://placehold.it/750x300" alt="Card image cap">
                                <div class="card-body">
                                        <h3 class="card-title"><a href="/articles/{{$article->id}}">{{ $article->title}}</a></h3>
                                        <p class="card-text">{{ $article->content}}</p>
                                        <div class="row">
                                                <form action="{{ route('articles.edit', $article->id) }}">
                                                        <input type="submit" class="btn btn-outline-dark" value="Edit">
                                                </form>

                                                <form method="POST" action="/articles/{{$article->id}}">
                                                {{ csrf_field() }}
                                                {{ method_field('DELETE') }}
                                                        <input type="submit" class="btn btn-outline-dark" value="Delete" style="margin-left:10px">
                                                </form>
                                        </div>
                                </div>
                                <div class="card-footer text-muted">
                                {{ $article->created_at}}
                                </div>
                        </div>
                </div>
        </div>
      </div>
      @endforeach
</div>

@endsection
