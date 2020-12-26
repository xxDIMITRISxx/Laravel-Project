@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6 offset-md-3">
                @foreach($user->posts as $post)
                    <div class="post">
                        <a 
                            href="{{ $post->post }}" 
                            class="user-link d-block p-4 mb-4 rounded h3 text-center"
                            target="nofollow"
                            style="boarder:2px sold {{ $user->text_color }}; color: {{ $user->text_color}}"                       
                        >{{ $post->title }}</a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection