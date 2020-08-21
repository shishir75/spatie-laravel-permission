@extends('layouts.master')

@section('title', 'Posts')

@push('css')

@endpush

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                Posts
                @can('create post')
                <a href="{{ route('post.create') }}" class="btn btn-success float-right">Add New</a>
                @endcan
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Title</th>
                            <th scope="col">Author</th>
                            @can('edit post')
                            <th scope="col">Action</th>
                            @endcan
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($posts as $post)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $post->title}}</td>
                            <td>{{ $post->user->name }}</td>
                            @can('edit post')
                            <td>
                                <a href="{{ route('post.edit', $post->id) }}" class="btn btn-secondary">Edit</a>
                            </td>
                            @endcan()
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection

@push('js')

@endpush
