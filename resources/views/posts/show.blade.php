@extends('layouts.app')

@section('title', 'Where can i find?')

@section('content')
    <div class="container">
        <div class="col-12 card">
            <div class = "card-body">
                <h2 class="card-title">Post</h2>
                    <p><b>User:</b> {{ $post->user_id}} </p>
                    <p><b>Title:</b>{{ $post->title }}</p>
                    <p><b>Region:</b> {{$post->region }}</p>
                    <p><b>Description:</b> {{ $post->description }}</p>
                    @if (Auth::user()->username == $post->user->username)
                    <form method="POST"
                        action="{{ route('posts.destroy', ['id' => $post->id]) }}">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-primary">Delete</button>
                        <a href="{{ route('posts.index' )}}" class="btn btn-dark">Back</a>
                    </form>
                    @else 
                    <a href="{{ route('posts.index' )}}" class="btn btn-dark">Back</a>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection

{{-- @section('content')
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
        <button class="btn btn-primary">Delete</button>
        <a href="{{ route('posts.index' )}}" class="btn btn-primary">Back</a>
    </form>
@endsection --}}

