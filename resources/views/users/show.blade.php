@extends('layouts.main') @section('title', 'Users') @section('content')
<div class="w-full">
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
    <!-- Topbar -->
    <h1 class="card-title">{{ $user->name }}</h1>

    <div class="flex flex-row mb-2 md:mb-0">
      <div class="btn-group mr-2">
        <a href="/users" class="btn btn-sm btn-secondary btn-outline">
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
        <a href="/users/create" class="btn btn-sm btn-primary btn-outline">
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
        <a
          href="/users/{{ $user->id }}/edit"
          class="btn btn-sm btn-dark btn-outline"
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
              d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"
            />
          </svg>
        </a>
        <button type="button" class="btn btn-sm btn-outline btn-warning">
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
        </button>
      </div>
    </div>
  </div>
  <!--Content-->
  <div class="grid grid-rows-1 grid-cols-12">
    <div class="col-span-12 md:col-span-4">
      <div class="card mb-3 image-full">
        <figure>
          <img
            src="{{ $user->avatar }}"
            alt="Cover Image"
            class="card-img-top"
          />
        </figure>
      </div>
    </div>
    <div class="col-span-12 md:col-span-8 pl-3">
      <div class="card pb-0">
        <table class="table mb-0">
          <tr>
            <td class="flex flex-row">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                class="h-6 w-6 text-primary"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z"
                />
              </svg>
              {{ $user->name }}
            </td>
          </tr>
          <tr>
            <td class="flex flex-row">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                class="h-6 w-6 text-primary pr-2"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207"
                />
              </svg>
              {{ $user->email }}
            </td>
          </tr>
          <tr>
            <td class="flex flex-row">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                class="h-6 w-6 text-primary pr-2"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4"
                />
              </svg>
              {{ $user->role->name }}
            </td>
          </tr>
        </table>
      </div>
    </div>
  </div>

  <!-- <div
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
  <h1 class="h2">User does not exist!</h1>
</div> -->

  @endsection
</div>
