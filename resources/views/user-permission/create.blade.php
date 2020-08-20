@extends('layouts.master')

@section('title', 'Create User To Permission')

@push('css')

@endpush

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Create User To Permission (Direct)
                    <a href="{{ route('user-permission.index') }}" class="btn btn-success float-right">All User To Permissions</a>
                </div>
                <div class="card-body">
                    <form action="{{ route('user-permission.store') }}" method="post">
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
                                    <label for="title">Permission Name</label>
                                    <select class="select2" multiple="multiple" name="permission_id[]" data-placeholder="Select a Permission" style="width: 100%;">
                                        @foreach ($permissions as $permission)
                                            <option value="{{ $permission->id }}">{{ $permission->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary float-right">Create User Permission</button>
                    </form>
                </div>
                </div>
        </div>
    </div>

@endsection

@push('js')

@endpush
