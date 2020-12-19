@extends('layout.app')

@section('title', 'Posts')

@section('content')
    <p><h3> Posts</h3></p>
    
    <ul>
        @foreach ($posts as $post)
             <li><a href="{{ route('posts.singlePost', ['id' => $post->id]) }}">{{ $post->title }} </a></li>
        @endforeach
    </ul>
@endsection


