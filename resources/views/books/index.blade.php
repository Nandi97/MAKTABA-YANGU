@extends('layouts.main') @section('title', $title) @section('content')
<div class="card block">
  <div
    class="
      sticky
      top-0
      z-30
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
      <a class="btn btn-sm btn-primary btn-outline" href="/books">Books</a>
    </div>
    <a href="/books/create" class="btn btn-secondary btn-sm"> Add Book </a>
  </div>

  <div class="flex flex-wrap">
    <div class="grid grid-cols-12 gap-3">
      @foreach ($books as $book)
      <div class="col-span-12 sm:col-span-6 md:col-span-2">
        <div class="card bordered compact mb-3" style="border-radius: 7px">
          <a href="/books/{{ $book->id }}">
            <img
              src="{{ $book->cover }}"
              style="background-size: contain; height: 200px"
            />
          </a>

          <div class="card-body">
            <b>{{ $book->title }}</b>
            <div>
              {{ $book->author }}
            </div>
          </div>
        </div>
      </div>
      @endforeach
    </div>
    @endsection
  </div>
</div>
