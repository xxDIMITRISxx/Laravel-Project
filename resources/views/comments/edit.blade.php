@extends('layouts.app')

@section('title', 'Where can i find?')

@section('content')
    <div class="container">
        <div class="card bg-light mb-3">
            <div class="card-header">
                <h2 class="card-title">Edit Post</h2>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('comment.update' , $comment->id) }}">
                    @csrf
                        <div class="card bg-light mb-3">
                            <div class="card-header">
                                <i>By</i>
                                <b>{{ Auth::user()->username }}</b> 
                            </div>
                            <div class="card-body">
                                <textarea name="description" id="comment" type="text" class="form-control @error('description') is-invalid @enderror" placeholder="Add Comment..." rows="4" ></textarea>
                                <br>
                                <input type="submit" value="Comment" class="btn btn-primary">
                                <a href="{{ route('posts.show', $comment->post_id)}}" class="btn btn-dark">Back</a>
                            </div>
                        </div>
                    </form>
            </div>
        </div>
    </div>
@endsection