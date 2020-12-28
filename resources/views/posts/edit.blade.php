@extends('layouts.app')

@section('title', 'Where can i find?')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 card">
                <div class="card-body">
                    <h2 class="card-title">Editing Post</h2>
                        <form method="POST" action="{{ route('posts.edit' ,[$post->id])) }}">
                            @csrf
                                {{-- Title insertion --}}
                            <div class="row">    
                                <div class="col-12 col-md-7">
                                    <div class="form-group">
                                        <label for="title">Title</label>
                                        <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" placeholder="Title"
                                        value="{{ $post->title }}">
                                        @if ($errors->first('title'))
                                            <div class="invalid-feedback">{{ $errors->first('title') }}</div>
                                        @endif
                                    </div>
                                </div>
                                {{-- Region insertion --}}
                                <div class="col-12 col-md-5">
                                    <div class="form-group">
                                        <label for="region">Region</label>
                                        <input type="text" name="region" class="form-control @error('region') is-invalid @enderror" placeholder="Swansea"
                                        value="{{ $post->region }}">
                                        @if ($errors->first('region'))
                                        <div class="invalid-feedback">{{ $errors->first('title') }}</div>
                                        @endif
                                    </div>
                                </div>
                                    {{-- post insertion --}}
                                    <div class="col-12 col-md-12">
                                    <div class="form-group">
                                        <label for="post">Post</label>
                                        <input type="text" name="post" class="form-control @error('post') is-invalid @enderror" placeholder="Where can i find..."
                                        value="{{ $post->post }}">
                                        @if ($errors->first('post'))
                                        <div class="invalid-feedback">{{ $errors->first('title') }}</div>
                                        @endif
                                    </div>
                                </div> 
                            </div>
                            <input type="submit" value="Share" class="btn btn-primary">
                            <a href="{{ route('posts.index') }}" class="btn btn-dark">Cancel</a>
                        </form>
                </div>
            </div>
        </div>
    </div>

@endsection