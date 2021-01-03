@extends('layouts.app')

@section('title', 'Where can i find?')

@section('content')
    <div class="container">
        <div class="card bg-light mb-3">
            <div class="card-header">
                <h2 class="card-title">Post</h2>
            </div>
            <div class = "card-body">
                    <p><b>User:</b> {{ $post->user_id}} </p>
                    <p><b>Title:</b>{{ $post->title }}</p>
                    <p><b>Region:</b> {{$post->region }}</p>
                    <p><b>Description:</b> {{ $post->description }}</p>
                    <p><b>Tags</b> {{ $post->tags->name }} </p>
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
            <br>
            <h3>Comments</h3>
            <form method="POST" action="{{ route('comment.store') }}">
            @csrf
                <div class="card bg-light mb-3">
                    <div class="card-header">
                        <i>By</i>
                        <b>{{ Auth::user()->username }}</b> 
                    </div>
                    <div class="card-body">
                        <textarea name="description" id="description" type="text" class="form-control @error('description') is-invalid @enderror" placeholder="Add Comment..." rows="4"></textarea>
                        <input type="hidden" name="post_id" value="{{ $post->id }}"/>
                        <br>
                        <input type="submit" value="Comment" class="btn btn-primary">
                    </div>
                </div>
            </form>
            @foreach ($comments  as $comment)
            <div class="card bg-light mb-3">
                <div class="card-header">
                    <i>By</i>
                    <a href="{{ route('users.show', ['user' => $comment->user->username]) }}"> {{ $comment->user->username }} </a>
                    <i>Date : </i>
                    {{ $comment->created_at}}
                </div>
                <div class="card-body">
                    <p class="card-text">{{ $comment->description}}</p>
                </div>
                    <div class="card-footer">
                        <div class="d-flex">
                            @if (Auth::user()->id == $comment->user->id)
                            <a href="{{ route('comment.edit', ['id' => $comment->id]) }}" class="btn btn-primary">Edit</a>
                                <form action="{{ route('comment.destroy', ['comment' => $comment]) }}" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <button class="btn btn-dark">Delete</button>
                                </form>
                               
                            @endif
                        </div>
                    </div>
            </div>
        @endforeach
        <div class="d-flex justify-content-center">
            {!! $comments->links() !!}
        </div>
    </div>
@endsection

