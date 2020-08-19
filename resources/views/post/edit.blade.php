@extends('layouts.master')

@section('title', 'Edit Post')

@push('css')

@endpush

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Update Post
                    <a href="{{ route('post.index') }}" class="btn btn-success float-right">All Posts</a>
                </div>
                <div class="card-body">
                    <form action="{{ route('post.update', $post->id) }}" method="post">
                        @csrf
                        @method('put')

                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" class="form-control" name="title" id="title" value="{{ $post->title }}" placeholder="Enter Title" required>
                            </div>
                            <div class="form-group">
                            <label for="body">Body</label>
                            <textarea name="body" id="body" cols="30" rows="10" class="form-control" required placeholder="Enter Body">{{ $post->body }}</textarea>
                            </div>

                            <button type="submit" class="btn btn-primary float-right">Update Post</button>
                    </form>
                </div>
                </div>
        </div>
    </div>

@endsection

@push('js')

@endpush
