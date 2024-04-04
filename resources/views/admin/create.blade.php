@extends('admin.layout.app')
@section('content')

<div class="card mb-4">
    <div class="card-header">
        Create
    </div>
    <div class="card-body">
        <form action="{{ route('posts.store')}}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="post" class="form-label">Post Title</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{old('title')}}">
                @error('title')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="content" class="form-label">Post Content</label>
                <textarea class="form-control @error('content') is-invalid @enderror" id="content" rows="2" name="content">
                    {{old('content')}}
                </textarea>
                @error('content')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-primary float-end">Submit</button>
            </div>
        </form>
    </div>
</div>

@endsection
