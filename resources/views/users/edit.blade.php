@extends('layouts.main') @section('title', $title) @section('content')

<form
  class="card form-control card px-10 bg-base-100 w-full flex-1"
  action="/users/{{ $user->id }}"
  method="POST"
>
  <h2 class="card-title">{{ $title }} User</h2>
  @method('put') @csrf @include('books.form')
</form>
@endsection
