<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;

class RolesController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $title = 'Roles';
    $roles = Role::all();

    return view('roles/index', compact(['title', 'roles']));
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    $title = 'Create';

    return view('roles/create', compact(['title']));
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
      'description' => 'required',
    ]);

    // Create a reference to a new Role object
    $role = new Role();

    // Populate the new Role object with form input data
    $role->name = $request->name;
    $role->description = $request->description;

    // Save the new Role object into the database
    $role->save();

    // Redirect user back to the Roles page
    return redirect('roles');
  }

  /**
   * Display the specified resource.
   *
   * @param  \App\Models\Role  $role
   * @return \Illuminate\Http\Response
   */
  public function show(Role $role)
  {
    return redirect('roles');
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Models\Role  $role
   * @return \Illuminate\Http\Response
   */
  public function edit(Role $role)
  {
    $title = 'Update';

    return view('roles/edit', compact(['role', 'title']));
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Models\Role  $role
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, Role $role)
  {
    $request->validate([
      'name' => 'required',
      'description' => 'required',
    ]);

    // Populate the Role object with form input data
    $role->name = $request->name;
    $role->description = $request->description;

    // Update the Role object into the database
    $role->save();

    // Redirect user back to the Roles page
    return redirect('roles');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Models\Role  $role
   * @return \Illuminate\Http\Response
   */
  public function destroy(Role $role)
  {
    //
  }
}