@extends('layout.app')

@section('title', 'Posts')

@section('content')
    <p><h3> Posts</h3></p>
    <a href="{{ route('posts.create' )}}">Share Post</a>
    <ul>
        @foreach ($posts as $post)
             <li><a href="{{ route('posts.show', ['id' => $post->id]) }}">{{ $post->title }} </a></li>
        @endforeach
    </ul>
    
@endsection


