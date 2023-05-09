@extends('layouts.app')
@section('content')
<div class="container">
    <form action="/articles" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="title">Title: </label>
            <input type="text" class="form-control" required="required" name="title"></br>
            <label for="content">Content: </label>
            <textarea type="text" class="form-control" required="required" name="content"></textarea></br>
            <label for="image">Feature Image: </label>
            <input type="file" class="form-control" required="required" name="image"></br>
            <button type="submit" name="submit" class="btn btn-primary float-right">Simpan</button>
        </div>
    </form>
</div>
@endsection