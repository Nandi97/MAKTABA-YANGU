@extends('layouts.main') @section('title', $title) @section('content')

<form
  class="card form-control card px-10 bg-base-100 w-full flex-1"
  action="/borrowers/{{ $borrower->id }}"
  method="POST"
>
  <h2 class="card-title">{{ $title }} Borrowers</h2>
  @method('put') @csrf @include('borrowers.form')
</form>
@endsection
