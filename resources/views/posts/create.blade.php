@extends('layouts.app')

@section('title', 'Where can i find?')

@section('content')
    <form method="POST" action="{{ route('posts.store') }}">
    @csrf
        <p>Title: <input type="text" name="title"
            value="{{ old('title') }}"></p>
        <p>Post: <input type = "text", name="post"
            value="{{ old('post') }}"></p>
        <p>Region: <input type = "text", name="region"
            value="{{ old('region') }}"></p>
        <input type="submit" value="Share" class="btn btn-primary">
        <a href="{{ route('posts.index') }}" class="btn btn-primary">Cancel</a>
    </form>

@endsection

