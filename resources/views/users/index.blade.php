@extends('layouts.main') @section('title', 'Users') @section('content')
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
    "
>
    <div class="list-reset flex flex-row">

            <a
                class="
                    inline-block
                    border border-blue-400
                    rounded
                    py-1
                    px-3
                    bg-blue-400
                    text-black
                    hover:shadow-lg
                "
                aria-current="page"
                href="users"
                >Users</a
            >


            <a
                class="
                    inline-block
                    border border-blue-400
                    rounded
                    hover:border-grey-lighter
                    text-blue
                    hover:shadow-lg hover:bg-blue-700
                    py-1
                    px-3
                "
                href="roles"
                >Roles</a
            >

    </div>
    <a href="/users/create" class="btn btn-primary btn-sm">
            <i></i>
            Add User
        </a>
</div>

<div class="flex flex-wap">
	<div class="grid grid-cols-12">
		@foreach ($users as $user)
            <div class="card-body sm:col-span-6 md:col-span-3">
                <figure>
                    <img src="{{ $user->avatar }}">
                </figure>

                <div class="card-body">
                    <h2 class="card-title">{{ $user->name }}</h2>
                    <div>
                        {{ $user->role->name }}
                    </div>
                </div>
            </div>
		@endforeach
	</div>
</div>

@endsection
