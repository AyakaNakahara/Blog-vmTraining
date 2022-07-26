@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1>{{$blog->title}}</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <img src="{{$blog->photo_url}}" alt="">
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <p>{{$blog->content}}</p>
        </div>
    </div>
    <form method="post" action="/delete/{{$blog->id}}">
        @csrf
        <button type="submit">削除</button>
    </form>
</div>
@endsection
