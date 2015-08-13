@extends('template')

@section('title')
    Listagem de posts | Blog
@stop
@section('content')
<h1>Listagem de Posts</h1>
        @foreach($posts as $post)
            <h3>{{ $post['title'] }}</h3><br>
            <p>{{ $post['content'] }}</p>
            <hr>
        @endforeach
@stop