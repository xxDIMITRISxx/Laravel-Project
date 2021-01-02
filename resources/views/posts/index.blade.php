@extends('layouts.app')

@section('title', 'Where can i find?')

@section('content')
    <div class="container">
        <div class="col-12 card">
            <div class = "card-body">
                <h2 class="card-title">Posts</h2>
                
                <a href="{{ route('posts.create' )}}" class="btn btn-primary">Share Post</a>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Post Title</th>
                            <th>Region</th>
                            <th>User</th>
                            <th>Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        <ul>
                            @foreach ($posts as $post)
                                <tr>
                                    <td><a href="{{ route('posts.show', ['id' => $post->id]) }}">{{ $post->title }} </td>
                                    <td> {{ $post->region }} </td>
                                    <td> <b><a href="{{ route('users.show', ['user' => $post->user->username]) }}"> {{ ($post->user->username) }} </b> </td>
                                    <td> {{ $post->created_at}} </td>
                                </tr>                                
                            @endforeach
                        </ul>
                    </tbody>
                </table>
                </div>
            </div>
        </div>
        <br>
        <div class="d-flex justify-content-center">
            {!! $posts->links() !!}
        </div>
    </div>
   
@endsection