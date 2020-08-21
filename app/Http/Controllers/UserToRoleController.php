<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserToRoleRequest;
use App\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class UserToRoleController extends Controller
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
        $users = User::all();

        return view( 'user-role.index', compact( 'users' ) );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::all();
        $roles = Role::all();

        return view( 'user-role.create', compact( 'users', 'roles' ) );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store( UserToRoleRequest $request )
    {
        $user = User::findOrFail( $request->user_id );
        $roles_id = $request->role_id;

        foreach ( $roles_id as $role_id ) {
            $user->assignRole( $role_id );
        }

        return redirect()->route( 'user-role.index' );
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show( $id )
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit( $id )
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update( Request $request, $id )
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id )
    {
        //
    }
}
