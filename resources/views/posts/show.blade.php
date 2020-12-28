@extends('layouts.app')

@section('title', 'Where can i find?')

@section('content')
    <div class="container">
        <div class="col-12 card">
            <div class = "card-body">
                <h2 class="card-title">Post</h2>
                
                <table class="table table-bordered">
                    <thead>
                        <tr class="table-primary">
                            <th>User:</th>
                            <th>Title:</th>
                            <th>Region:</th>
                            <th>Description:</th>
                        </tr>
                    </thead>
                    <tbody>
                        <ul>
                            <tr>
                                <td>{{ $post->user_id}}</td>
                                <td>{{ $post->title }}</td>
                                <td>{{$post->region }}</td>
                                <td>{{ $post->description }}</td>
                            </tr>                                
                        </ul>
                    </tbody>
                </table>
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

