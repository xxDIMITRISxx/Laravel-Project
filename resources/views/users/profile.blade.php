@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 card">
                <div class="card-body">
                    <h2 class="card-title">Your Posts</h2>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>Region</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($user->posts as $post)
                                <tr>
                                    <td> <a href="{{ route('posts.show',['id' => $post->id]) }}">{{ $post->title }}</a></td>
                                    <td> {{ $post->region}} </td>
                                    <td> <a href="{{ route('posts.edit')}}">Edit</a></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <a href="{{ route('posts.create' )}}" class="btn btn-primary">Share Post</a>
                </div>
            </div>
        </div>
    </div>
@endsection