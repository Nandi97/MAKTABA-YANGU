@extends('layouts.main') @section('title', $title) @section('content')
<h2 class="card-title">{{ $title }} Book</h2>

<form
  class="card-body form-control card px-10 bg-base-100 w-full"
  action="/books"
  method="POST"
>
  @csrf @include('books.form')
</form>
@endsection
