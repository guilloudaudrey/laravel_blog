@extends('layout')

@section('title', 'Nouvel Article')

@section('content')
<h2>Nouvel Article</h2>
<form method="POST" action="/articles">
{{ csrf_field() }}
    <div class="form-group">
        <label for="exampleInputEmail1">Title</label>
        <input type="text" class="form-control" name="title">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Content</label>
        <input type="text" class="form-control" name="content">
    </div>
    <div class="form-group">
        <label class="form-check-label" for="is_enabled">Enabled</label><br>
        <input type="radio" name="is_enabled" value="1"> Yes<br>
        <input type="radio" name="is_enabled" value="0"> No<br>
        <!-- <input type="checkbox" class="form-check-input" name="is_enabled"> -->
  </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection