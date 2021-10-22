@extends('layouts.main') @section('title', 'Users') @section('content')

<form
  class="card form-control card px-10 bg-base-100 w-full flex-1"
  action="/user"
  method="post"
>
  <h2 class="card-title">{{ $title }} User</h2>
  @csrf @include('users.form')
</form>
@endsection
