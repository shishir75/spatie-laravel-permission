@extends('layouts.master')

@section('title', 'Create Role')

@push('css')

@endpush

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Create Role
                    <a href="{{ route('role.index') }}" class="btn btn-success float-right">All Roles</a>
                </div>
                <div class="card-body">
                    <form action="{{ route('role.store') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="title">Role Name</label>
                            <input type="text" class="form-control" name="name" id="name" placeholder="Enter Role Name" required>
                        </div>
                        <button type="submit" class="btn btn-primary float-right">Create Role</button>
                    </form>
                </div>
                </div>
        </div>
    </div>

@endsection

@push('js')

@endpush
