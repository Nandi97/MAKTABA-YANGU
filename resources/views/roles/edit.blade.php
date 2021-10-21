@extends('layouts.main')

@section('title', $title)

@section('content')
<h2>{{ $title }}</h2>

<form class="card-body form-control card px-10 bg-base-100 w-full" action="/roles/{{ $role->id }}" method="POST">
    @method('put')
    @csrf

    @include('roles.form')
</form>
@endsection
