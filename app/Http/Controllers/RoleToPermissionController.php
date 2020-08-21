<?php

namespace App\Http\Controllers;

use App\Http\Requests\RolePermissionRequest;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleToPermissionController extends Controller
{
    public function __construct()
    {
        $this->middleware( 'role:admin' );
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roles = Role::all();

        // $role = Role::findById(4);

        // $permissions = $role->permissions;

        // foreach($permissions as $permission)
        // {
        //     echo $permission->name;
        // }

        return view( 'role-permission.index', compact( 'roles' ) );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::all();
        $permissions = Permission::all();

        return view( 'role-permission.create', compact( 'roles', 'permissions' ) );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store( RolePermissionRequest $request )
    {
        $role_id = $request->role_id;
        $permissions_id = $request->permission_id;

        $role = Role::findById( $role_id );

        foreach ( $permissions_id as $permission_id ) {
            $permission = Permission::findById( $permission_id );

            $role->givePermissionTo( $permission );
        }

        return redirect()->route( 'role-permission.index' );
    }
}
