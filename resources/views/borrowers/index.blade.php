@extends('layouts.main') @section('title', 'Borrowers') @section('content')
<div class="card">
  <div
    class="
      inset-x-0
      z-50
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
      <a class="btn btn-sm btn-active" aria-current="page" href="/borrowers">
        Borrowers
      </a>

      <a class="btn btn-sm btn-primary btn-outline" href="/books">Books</a>
    </div>
    <a href="/borrowers/create" class="btn btn-secondary btn-sm">
      <i></i>
      Add Borrower
    </a>
  </div>

  <div class="flex flex-wrap">
    <div class="grid grid-cols-12">
      @foreach ($borrowers as $borrower)
      <div class="card-body col-span-12 sm:col-span-6 md:col-span-3">
        <a href="/borrowers/{{ $borrower->id }}">
          <img src="{{ $borrower->avatar }}" />
        </a>

        <div class="card-body">
          <h2 class="card-title">{{ $borrower->name }}</h2>
          <div>
            {{ $borrower->phone_no }}
          </div>
          <div>
            {{ $borrower->email }}
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</div>

@endsection
