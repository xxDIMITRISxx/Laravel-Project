@extends('layout.app')

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
                        </tr>
                    </thead>
                    <tbody>
                        {{-- <a href="{{ route('posts.create' )}}">Share Post</a> --}}
                        <ul>
                            @foreach ($posts as $post)
                                <tr>
                                    <td><a href="{{ route('posts.show', ['id' => $post->id]) }}">{{ $post->title }} </td>
                                    <td> {{ $post->region}} </td>
                                    <td> {{ ($post->user_id) }} </td>
                                </tr>                                
                            @endforeach
                        </ul>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    
@endsection


{{-- <a href="{{ route('posts.create' )}}">Share Post</a>
<ul>
    @foreach ($posts as $post)
        <li><a href="{{ route('posts.show', ['id' => $post->id]) }}">{{ $post->title }} </a></li>
    @endforeach
</ul> --}}

