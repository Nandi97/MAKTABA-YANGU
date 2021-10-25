@extends('layouts.main') @section('title', 'Borrowers') @section('content')

<form
  class="card form-control card px-10 bg-base-100 w-full flex-1"
  action="/borrower"
  method="post"
>
  <h2 class="card-title">{{ $title }} Borrower</h2>
  @csrf @include('borrowers.form')
</form>
@endsection
