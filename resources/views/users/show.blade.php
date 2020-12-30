@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 card">
                <div class="card-body">
                    <h2 class="card-title"> <b>{{ $user->username}}</b> posts</h2>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>  Title</th>
                                <th>Region</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($user->posts as $post)
                                <tr>
                                    <td> <a href="{{ route('posts.show',['id' => $post->id]) }}">{{ $post->title }}</a></td>
                                    <td> {{ $post->region}} </td>
                                    @if (Auth::user()->username == $post->user->username)
                                        <td> <a href="{{ route('posts.edit', ['id' => $post->id]) }}">Edit</a></td>
                                    @else
                                        <td> <a href="{{ route('posts.show', ['id' => $post->id]) }}">View</a></td>
                                    @endif
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <a href="{{ route('posts.index' )}}" class="btn btn-dark">Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection

{{-- 
@foreach($user->posts as $post)
                    <div class="post">
                        <a 
                        href="{{ route('posts.show', ['id' => $post->id]) }} "
                            class="user-link d-block p-4 mb-4 rounded h3 text-center"
                            target="nofollow"
                            style="boarder:2px sold {{ $user->text_color }}; color: {{ $user->text_color}}">{{ $post->title }}
                        </a>
                    </div>
                @endforeach --}}

               {{--  <td> <a href="/posts/edit/{{ $post->id }}">Edit</a></td> --}}