@extends('layouts.master')

@section('title', 'Roles')

@push('css')

@endpush

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Posts
                    <a href="{{ route('role.create') }}" class="btn btn-success float-right">Add New</a>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Name</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($roles as $role)
                                <tr>
                                    <th scope="row">{{ $loop->iteration }}</th>
                                    <td>{{ $role->name}}</td>
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
