<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Users';
        $users = User::all();

        return view('users.index', compact(['title','users']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Create';
        $roles = Role::all();

        return view('users.create', compact(['roles','title']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         // Validate form input data
        $request->validate([
            'name' => 'required',
            'phoneNo' => 'required',
            'address' => 'required',
            'roleId' => 'required',
            'avatar' => 'required',
        ]);

        // Create a reference to a new Role object
        $user = new User();

        // Populate the new Role object with form input data
        $user->name = $request->name;
        $user->phoneNo = $request->phoneNo;
        $user->address = $request->address;
        $user->roleId = $request->roleId;
        $user->avatar = $request->avatar;

        // Redirect user back to the Roles page
        return redirect('users');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return view('users.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        $title = 'Update';

        return view('users.edit', compact(['user','title']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $request->validate([
            'name' => 'required',
            'phoneNo' => 'required',
            'address' => 'required',
            'roleId' => 'required',
            'avatar' => 'required',
        ]);

        // Populate the User object with form input data
        $user->name = $request->name;
        $user->phoneNo = $request->phoneNo;
        $user->address = $request->address;
        $user->roleId = $request->roleId;
        $user->avatar = $request->avatar;

          // Update the Role object into the database
        $user->save();

           // Redirect user back to the Roles page
        return redirect('users');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}
