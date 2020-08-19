@extends('layouts.master')

@section('title', 'Create Permission')

@push('css')

@endpush

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Create Permission
                    <a href="{{ route('permission.index') }}" class="btn btn-success float-right">All Roles</a>
                </div>
                <div class="card-body">
                    <form action="{{ route('permission.store') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="title">Permission Name</label>
                            <input type="text" class="form-control" name="name" id="name" placeholder="Enter Permission Name" required>
                        </div>
                        <button type="submit" class="btn btn-primary float-right">Create Permission</button>
                    </form>
                </div>
                </div>
        </div>
    </div>

@endsection

@push('js')

@endpush
