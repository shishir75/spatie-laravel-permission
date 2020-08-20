@extends('layouts.master')

@section('title', 'Create User To Role')

@push('css')

@endpush

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Create User To Role
                    <a href="{{ route('role-permission.index') }}" class="btn btn-success float-right">All User To Roles</a>
                </div>
                <div class="card-body">
                    <form action="{{ route('user-role.store') }}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="inputState">Use Name</label>
                                    <select id="role" name="user_id" class="form-control" required>
                                        <option value="" selected disabled>Choose...</option>
                                        @foreach ($users as $user)
                                            <option value="{{ $user->id }}">{{ $user->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="title">Role Name</label>
                                    <select class="select2" multiple="multiple" name="role_id[]" data-placeholder="Select a Role" style="width: 100%;">
                                        @foreach ($roles as $role)
                                            <option value="{{ $role->id }}">{{ $role->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary float-right">Create User Role</button>
                    </form>
                </div>
                </div>
        </div>
    </div>

@endsection

@push('js')

@endpush
