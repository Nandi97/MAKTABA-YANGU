@extends('layouts.main')
@section('title', 'Users')
@section('content')

<h2 class="card-title">{{ $title }} User</h2>

<form
    class="card-body form-control card px-10 bg-base-100 w-full"
    action="/user"
    method="post">
    @csrf

    @include('users.form')
</form>
@endsection
