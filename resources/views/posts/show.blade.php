@extends('layout.app')

@section('title', 'Where can i find?')

@section('content')
    <p>Post : </p>
    <ul>
        <li>User: {{ $post->user_id}}</li>
        <li>Title: {{ $post->title }}</li>
        <li>Region: {{$post->region }}</li>
        <li>Description: {{ $post->description }}</li>
    </ul>

    <form method="POST"
        action="{{ route('posts.destroy', ['id' => $post->id]) }}">
        @csrf
        @method('DELETE')
        <button> Delete</button>
    </form>

    <a href="{{ route('posts.index' )}}">Back</a>
@endsection