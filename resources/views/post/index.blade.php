@extends('layouts.app')

@section('title', 'Posts')

@push('css')

@endpush

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                      Posts
                      <a href="{{ route('post.create') }}" class="btn btn-success float-right">Add New</a>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                              <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Title</th>
                                <th scope="col">Author</th>
                                <th scope="col">Action</th>
                              </tr>
                            </thead>
                            <tbody>
                                @foreach ($posts as $post)
                                    <tr>
                                        <th scope="row">{{ $loop->iteration }}</th>
                                        <td>{{ $post->title}}</td>
                                        <td>{{ $post->user->name }}</td>
                                        <td>
                                            <a href="{{ route('post.edit', $post->id) }}" class="btn btn-secondary">Edit</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                          </table>
                    </div>
                  </div>
            </div>
        </div>
    </div>

@endsection

@push('js')

@endpush
