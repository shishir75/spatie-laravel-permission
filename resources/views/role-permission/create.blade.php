@extends('layouts.master')

@section('title', 'Create Role To Permission')

@push('css')

@endpush

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Create Role To Permission
                    <a href="{{ route('role-permission.index') }}" class="btn btn-success float-right">All Role To Permissions</a>
                </div>
                <div class="card-body">
                    <form action="{{ route('role-permission.store') }}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="inputState">Role Name</label>
                                    <select id="role" name="role_id" class="form-control" required>
                                        <option value="" selected disabled>Choose...</option>
                                        @foreach ($roles as $role)
                                            <option value="{{ $role->id }}">{{ $role->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="title">Permission Name</label>
                                    <select class="select2" multiple="multiple" name="permission_id[]" data-placeholder="Select a State" style="width: 100%;">
                                        @foreach ($permissions as $permission)
                                            <option value="{{ $permission->id }}">{{ $permission->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary float-right">Create Role Permission</button>
                    </form>
                </div>
                </div>
        </div>
    </div>

@endsection

@push('js')

@endpush
