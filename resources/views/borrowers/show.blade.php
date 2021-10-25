@extends('layouts.main') @section('title', $borrower->name) @section('content')

<div
  class="
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
  <h1 class="h2">{{ $borrower->name }}</h1>

  <div class="mb-2 mb-md-0">
    <div class="btn-group m-2">
      <a href="/borrowers" class="btn btn-sm btn-secondary btn-outline">
        <i class="bi bi-arrow-left-short"></i>
      </a>
      <a href="/borrowers/create" class="btn btn-sm btn-primary btn-outline">
        <i class="bi bi-plus"></i>
      </a>
      <a
        href="/borrowers/{{ $borrower->id }}/edit"
        class="btn btn-sm btn-dark btn-outline"
      >
        <i class="bi bi-pencil-square"></i>
      </a>
      <button type="button" class="btn btn-sm btn-outline btn-warning">
        <i class="bi bi-trash"></i>
      </button>
    </div>
  </div>
</div>

<div class="grid grid-rows-1">
  <div class="col-span-12 md:col-span-4">
    <div class="card mb-3 image-full">
      <figure>
        <img
          src="{{ $borrower->avatar }}"
          alt="Cover Image"
          class="card-img-top"
        />
      </figure>
    </div>
  </div>
  <div class="col-span-12 md:col-span-8">
    <div class="card pb-0">
      <table class="table mb-0">
        <tr>
          <td>
            <i class="bi bi-person-circle text-primary"></i>
            {{ $borrower->name }}
          </td>
          <td>
            <i class="bi bi-telephone text-primary"></i>
            {{ $borrower->phone_no }}
          </td>
          <td>
            <i class="bi bi-person-bounding-box text-primary"></i>
            {{ $borrower->email }}
          </td>
        </tr>
      </table>
    </div>
  </div>
</div>

<div
  class="
    lex
    justify-content-between
    flex-wrap flex-md-nowrap
    align-items-center
    pt-3
    pb-2
    mb-3
    border-bottom
  "
>
  <h1 class="h2">Borrower does not exist!</h1>
</div>

@endsection
