@extends('layouts.master')

@section('title', 'Permissions')

@push('css')

@endpush

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Permissions
                    <a href="{{ route('permission.create') }}" class="btn btn-success float-right">Add New</a>
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
                            @foreach ($permissions as $permission)
                                <tr>
                                    <th scope="row">{{ $loop->iteration }}</th>
                                    <td>{{ $permission->name}}</td>
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
