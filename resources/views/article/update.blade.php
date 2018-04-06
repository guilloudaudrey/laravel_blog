@extends('layout')

@section('title', 'Nouvel Article')

@section('content')
<div class="container">
    <h2>Edit</h2>
    <form method="POST" action="/articles/{{$article->id}}">
    {{ csrf_field() }}
    {{ method_field('PATCH') }}
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" name="title" value="{{$article->title}}">
        </div>
        
        <div class="form-group">
            <label for="content">Content</label>
            <input type="text" class="form-control" name="content" value="{{$article->content}}">
        </div>
        <div class="form-group">
            <label class="form-check-label" for="is_enabled">Enabled</label><br>
            <?php
                if($article->is_enabled == 1){
            ?>
                    <input type="radio" name="is_enabled" value="1" checked="checked"> Yes<br>
                    <input type="radio" name="is_enabled" value="0"> No<br>

            <?php
                } else {
            ?>
                    <input type="radio" name="is_enabled" value="1"> Yes<br>
                    <input type="radio" name="is_enabled" value="0" checked="checked"> No<br>
            <?php
                }
            ?>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection