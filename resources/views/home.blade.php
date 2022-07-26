@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12">
            <table class="table">
                <tr>
                    <th>Title</th>
                    <th>Photo</th>
                    <th>Create at</th>
                    <th>Action</th>
                </tr>
                @foreach($blogs as $blog)
                <tr>
                    <td>{{$blog->title}}</td>
                    <td><img src="{{asset($blog->photo_url)}}" alt=""></td>
                    <td>{{$blog->created_at}}</td>
                    <td>
                        <a href="/blog/{{$blog->id}}">View</a>
                        <a href="/blog/edit/{{$blog->id}}">Edit</a>
                        <!-- <a href="">Delete</a> -->
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>
@endsection
