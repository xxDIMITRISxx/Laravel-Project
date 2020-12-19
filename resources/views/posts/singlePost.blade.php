@extends('layout.app')

@section('title', 'Post')

@section('content')
    <p>Post : </p>
    <ul>
        <li>User: {{ $post->user_id}}</li>
        <li>Title: {{ $post->title }}</li>
        <li>{{ $post->description }}</li>
    </ul>
@endsection