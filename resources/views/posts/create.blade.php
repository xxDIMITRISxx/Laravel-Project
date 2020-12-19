@extends('layout.app')

@section('title', 'Post Share')

@section('content')
    <form method="POST" action="{{ 'posts.store") }}></form>
    @csrf
        <p>Title: <input type="text" name="title"></p>
        <p>Post: <input type = "text", name="post"> </p>
        <p>input type="share" value="share">
        <a href="{{ route('posts.index') }}"Cancel</a>
    </form>

@endsection

