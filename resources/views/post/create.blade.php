@extends('layouts.master')

@section('title', 'Posts')

@push('css')

@endpush

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Create Post
                    <a href="{{ route('post.index') }}" class="btn btn-success float-right">All Posts</a>
                </div>
                <div class="card-body">
                    <form action="{{ route('post.store') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" class="form-control" name="title" id="title" placeholder="Enter Title" required>
                            </div>
                            <div class="form-group">
                            <label for="body">Body</label>
                            <textarea name="body" id="body" cols="30" rows="10" class="form-control" required placeholder="Enter Body"></textarea>
                            </div>

                            <button type="submit" class="btn btn-primary float-right">Create Post</button>
                    </form>
                </div>
                </div>
        </div>
    </div>

@endsection

@push('js')

@endpush
