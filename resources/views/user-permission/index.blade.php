@extends('layouts.master')

@section('title', 'User To Permissions')

@push('css')

@endpush

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    User To Permissions
                    <a href="{{ route('user-permission.create') }}" class="btn btn-success float-right">Add New</a>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                            <th scope="col">User Name</th>
                            <th scope="col">Direct Permissions</th>
                            <th scope="col">Permissions via Roles</th>
                            <th scope="col">All Permissions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                                <tr>
                                    <th scope="row">{{ $user->name }}</th>
                                        @php
                                            $direct_permissions = $user->getDirectPermissions();
                                            $permissions_via_roles = $user->getPermissionsViaRoles();
                                            $all_permissions = $user->getAllPermissions();
                                        @endphp
                                    <td>
                                        @foreach ($direct_permissions as $direct_permission)
                                            <button class="btn btn-sm btn-info"> {{ $direct_permission->name }} </button>
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach ($permissions_via_roles as $permissions_via_role)
                                            <button class="btn btn-sm btn-info"> {{ $permissions_via_role->name }} </button>
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach ($all_permissions as $all_permission)
                                            <button class="btn btn-sm btn-info"> {{ $all_permission->name }} </button>
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
