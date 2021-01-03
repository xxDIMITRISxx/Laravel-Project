@extends('layouts.app')

@section('title', 'Where can i find?')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 card">
                <div class="card-body">
                    <h2 class="card-title">Share Post</h2>
                        <form method="POST" action="{{ route('posts.store') }}">
                            @csrf
                                {{-- Title insertion --}}
                            <div class="row">    
                                <div class="col-12 col-md-7">
                                    <div class="form-group">
                                        <label for="title">Title</label>
                                        <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" placeholder="Title"
                                        value="{{ old('title') }}">
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
                                        value="{{ old('region') }}">
                                        @if ($errors->first('region'))
                                        <div class="invalid-feedback">{{ $errors->first('title') }}</div>
                                        @endif
                                    </div>
                                </div>
                                    {{-- post insertion --}}
                                    <div class="col-12 col-md-12">
                                    <div class="form-group">
                                        <label for="post">Post</label>
                                        <textarea name="post" id="description" type="text" class="form-control @error('post') is-invalid @enderror" placeholder="Where can i find..." rows="4" value="{{ old('post') }}"></textarea>
                                        {{-- <input type="text" name="post" class="form-control @error('post') is-invalid @enderror" placeholder="Where can i find..."
                                        value="{{ old('post') }}"> --}}
                                        <div class="form-group">
                                            
                                        </div>
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
{{-- 
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 card">
                <div class = "card-body">
                    <h2 class="card-title">Share Post</h2>
                    <form method="POST" action="{{ route('posts.store') }}">
                    @csrf
                        <div class="row">
                            <div class="col-12 col-md-7">
                                <div class="form-group">
                                    <label for="title">Title</label>
                                    <input type="text" name="title" class="form-control" placeholder="Where can i find..." value="{{ old('title') }}">
                                </div>
                            </div>
                            <div class="col-12 col-md-5">
                                <div class="form-group">
                                    <label for="title">Region</label>
                                    <input type="text" id="region" class="form-control" placeholder="Where can i find..." value="{{ old('region') }}">
                                </div>
                            </div>
                            <div class="col-12 col-md-12">
                                <div class="form-group">
                                    <label for="title">Description</label>
                                    <input type="text" id="post" class="form-control" placeholder="Where can i find..." value="{{ old('post') }}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <input type="submit" value="Share" class="btn btn-primary">
                            
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection --}}
{{-- 
<form method="POST" action="{{ route('posts.store') }}">
    @csrf
        <p>Title: <input type="text" name="title"
            value="{{ old('title') }}"></p>
        <p>Post: <input type = "text", name="post"
            value="{{ old('post') }}"></p>
        <p>Region: <input type = "text", name="region"
            value="{{ old('region') }}"></p>
        <input type="submit" value="Share" class="btn btn-primary">
        <a href="{{ route('posts.index') }}" class="btn btn-primary">Cancel</a>
    </form> --}}