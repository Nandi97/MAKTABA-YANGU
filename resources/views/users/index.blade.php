@extends('layouts.main') @section('title', 'Users') @section('content')
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
    <a class="btn btn-sm btn-active" aria-current="page" href="/users">Users</a>

    <a class="btn btn-sm btn-primary btn-outline" href="/roles">Roles</a>
  </div>
  <a href="/users/create" class="btn btn-secondary btn-sm">
    <i></i>
    Add User
  </a>
</div>

<div class="flex flex-wrap">
  <div class="grid grid-cols-12">
    @foreach ($users as $user)
    <div class="card-body col-span-12 sm:col-span-6 md:col-span-3">
      <a href="/users/{{ $user->id }}">
        <img src="{{ $user->avatar }}" />
      </a>

      <div class="card-body">
        <h2 class="card-title">{{ $user->name }}</h2>
        <div>
          {{ $user->role->name }}
        </div>
      </div>
    </div>
    @endforeach
  </div>
</div>

@endsection
