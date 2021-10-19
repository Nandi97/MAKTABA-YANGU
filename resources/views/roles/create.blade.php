@extends('layouts.main')

@section('title', $title)

@section('content')
<h2>{{ $title }}</h2>

<form action="/roles" method="POST">
    @csrf

    @include('roles.form')
</form>
@endsection
