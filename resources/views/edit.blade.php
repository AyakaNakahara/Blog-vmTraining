@extends('layouts.app')
@section('content')
<div class="container">
    <h1>編集画面</h1>
    <form method="post" action="/edit/{{$blog->id}}" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <input name="title" value="{{$blog->title}}"></input>
    </div>
    <div class="row">
        <div class="col-12">
            <input type="file" name="photo">
        </div>
    </div>
    <div class="row">
        <textarea name="content">{{$blog->content}}</textarea>
    </div>
        <button type="submit" class="row">変更</button>
    </form>
</div>
@endsection
