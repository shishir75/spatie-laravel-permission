@extends('layouts.master')

@section('title', 'User To Role')

@push('css')

@endpush

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    User To Role
                    <a href="{{ route('user-role.create') }}" class="btn btn-success float-right">Add New</a>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                            <th scope="col">User</th>
                            <th scope="col">Role</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                                <tr>
                                    <th scope="row">{{ $user->name }}</th>
                                        @php
                                            $roles = $user->getRoleNames();
                                        @endphp
                                    <td>
                                        @foreach ($roles as $role)
                                            <button class="btn btn-sm btn-info"> {{ $role }} </button>
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
