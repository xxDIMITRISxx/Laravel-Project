@extends('layouts.app')

@section('title', 'Where can i find?')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 card">
                <div class="card-body">
                    <h2 class="card-title">Share Post</h2>
                        <form method="POST" action="{{ route('posts.store') }} " enctype="multipart/form-data">
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
                                        <textarea name="post" id="description" type="text" class="form-control @error('post') is-invalid @enderror" placeholder="Where can i find..." rows="4"></textarea>
                                        {{-- <input type="text" name="post" class="form-control @error('post') is-invalid @enderror" placeholder="Where can i find..."
                                        value="{{ old('post') }}"> --}}
                                        <div class="form-group">
                                            
                                    </div>

                                    <div class="form-group">
                                        <label for="file">Choose Image</label>
                                        <input type="file" name="file" class="form-control" onchange="previewFile(this)" />
                                        <img id="previewImg" alt="post image" style="max-width:130px;margin-top:20px;" />
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

<script>
    function previewFile(input) {
    var file=$("input[type=file]").get(0).files[0];
    if(file)
    {
        var reader = new FileReader();
        reader.onload = function() {
            $('#previewImg').attr("src",reader.result);
        }
        reader.readAsDataURL(file);
    }
}
</script>

