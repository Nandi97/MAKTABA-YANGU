@extends('layouts.main') @section('title', $title) @section('content')
<h2 class="card-title">{{ $title }} Role</h2>

<form class="card-body px-10 bg-base-100 w-full" action="/roles" method="POST">
  @csrf @include('roles.form')
</form>
@endsection
