@extends('layouts.main') @section('title', $book->title) @section('content')
<div>
  <div
    class="
      sticky
      top-0
      z-40
      flex
      justify-between
      flex-wrap
      md:flex-nowrap
      items-center
      pt-3
      pb-2
      mb-3
      border-b
    "
  >
    <!-- Toopbar -->
    <h2 class="card-title">{{ $book->title }}</h2>

    <div class="flex flex-row mb-2 mb-md-0">
      <div class="btn-group mr-2">
        <a href="/books" class="btn btn-sm btn-outline btn-secondary">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            class="h-6 w-6"
            fill="none"
            viewBox="0 0 24 24"
            stroke="currentColor"
          >
            <path
              stroke-linecap="round"
              stroke-linejoin="round"
              stroke-width="2"
              d="M11 17l-5-5m0 0l5-5m-5 5h12"
            />
          </svg>
        </a>
        <a href="/books/create" class="btn btn-sm btn-outline btn-primary">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            class="h-6 w-6"
            fill="none"
            viewBox="0 0 24 24"
            stroke="currentColor"
          >
            <path
              stroke-linecap="round"
              stroke-linejoin="round"
              stroke-width="2"
              d="M12 6v6m0 0v6m0-6h6m-6 0H6"
            />
          </svg>
        </a>
        <a href="/books/{{ $book->id }}/edit" class="btn btn-sm btn-outline">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            class="h-6 w-6"
            fill="none"
            viewBox="0 0 24 24"
            stroke="currentColor"
          >
            <path
              stroke-linecap="round"
              stroke-linejoin="round"
              stroke-width="2"
              d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"
            />
          </svg>
        </a>
      </div>

      <div class="btn-group mr-2">
        <a
          href="/books/{{ $book->id }}/lend"
          class="btn btn-sm btn-outline btn-success"
        >
          <svg
            xmlns="http://www.w3.org/2000/svg"
            class="h-6 w-6"
            fill="none"
            viewBox="0 0 24 24"
            stroke="currentColor"
          >
            <path
              stroke-linecap="round"
              stroke-linejoin="round"
              stroke-width="2"
              d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"
            />
          </svg>
        </a>
        <a href="/books/{{ $book->id }}/destroy" class="btn btn-sm btn-danger">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            class="h-6 w-6"
            fill="none"
            viewBox="0 0 24 24"
            stroke="currentColor"
          >
            <path
              stroke-linecap="round"
              stroke-linejoin="round"
              stroke-width="2"
              d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"
            />
          </svg>
        </a>
      </div>
    </div>
  </div>
  <!--Content-->

  <div class="card bordered grid grid-cols-12">
    <div class="card col-span-3">
      <figure>
        <img src="{{ $book->cover }}" />
      </figure>
    </div>
    <div class="card-body overflow-x-auto col-span-9">
      <table class="table w-full">
        <tr>
          <td><b>Author</b></td>
          <td><b>Originally Published On</b></td>
        </tr>

        <tr>
          <td>{{ $book->author }}</td>
          <td>{{ $book->publishDate }}</td>
        </tr>

        <tr>
          <td colspan="2"><b>Description</b></td>
        </tr>

        <tr>
          <td colspan="2" style="word-wrap: normal">
            <p>
              {{ $book->description }}
            </p>
          </td>
        </tr>
      </table>
      <table class="table w-full table-zebra">
        <tbody>
          <tr>
            <td><b>Borrower</b></td>
            <td><b>Borrowed on</b></td>
            <td><b>Returned on</b></td>
          </tr>
          <tr>
            <td>user</td>
            <td></td>
            <td></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
  @endsection
</div>
