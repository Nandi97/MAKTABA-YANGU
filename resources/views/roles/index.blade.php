@extends('layouts.main') @section('title', 'Roles') @section('content')
<div
  class="
    flex
    justify-between
    flex-wrap
    md:flex-nowrap
    items-center
    pt-3
    pb-2
    mb-3
    border-b
    w-full
  "
>
  <div class="btn-group">
    <a class="btn btn-sm btn-primary btn-outline" href="/users">Users</a>
    <a
      class="btn btn-sm btn-active"
      class="active"
      aria-current="page"
      href="/roles"
      >Roles</a
    >
  </div>
  <a href="/roles/create" class="btn btn-secondary btn-sm"> Add Role </a>
</div>

<div class="w-full overflow-x-auto">
  <table class="table w-full table-compact">
    <thead>
      <tr>
        <th></th>
        <th>Name</th>
        <th>Description</th>
        <th></th>
      </tr>
    </thead>

    <tbody>
      @foreach($roles as $role)
      <tr>
        <td></td>
        <td>{{ $role->name }}</td>
        <td>{{ $role->description }}</td>
        <td>
          <a href="/roles/{{ $role->id }}/edit" class="btn btn-primary btn-sm">
            Edit
          </a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection
