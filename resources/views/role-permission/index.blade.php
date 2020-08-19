@extends('layouts.master')

@section('title', 'Role To Permissions')

@push('css')

@endpush

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Role To Permissions
                    <a href="{{ route('role-permission.create') }}" class="btn btn-success float-right">Add New</a>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                            <th scope="col">Role</th>
                            <th scope="col">Permissions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($roles as $role)
                                <tr>
                                    <th scope="row">{{ $role->name }}</th>
                                    @php
                                        $permissions = $role->permissions;
                                    @endphp
                                    <td>
                                        @foreach ($permissions as $permission)
                                            <button class="btn btn-sm btn-info"> {{ $permission->name}} </button>
                                        @endforeach
                                    </td>
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
