@extends('layout.app')

@section('title', 'Where can i find?')

@section('content')
    <form method="POST" action="{{ route('posts.store') }}">
    @csrf
        <p>Title: <input type="text" name="title"
            value="{{ old('title') }}"></p>
        <p>Post: <input type = "text", name="post"
            value="{{ old('post') }}"></p>
        <p>User: <input type = "text", name="user_id"
            value="{{ old('user_id') }}"></p>
        <input type="submit" value="Share">
        <a href="{{ route('posts.index') }}">Cancel</a>
    </form>

@endsection

