@extends('layouts.main')

@section('title', 'Users')

@section('content')
<div class="flex justify-between flex-wrap md:flex-nowrap
    items-center pt-3 pb-2 mb-3 border-b">
    <ul class="list-reset flex flex-row">
        <li class="mr-3">
            <a class="inline-block border border-blue-400 rounded py-1 px-3 bg-blue-400 text-black hover:shadow-lg" aria-current="page"
                href="users">Users</a>
        </li>
        <li class="mr-3">
            <a class="inline-block border border-blue-400 rounded hover:border-grey-lighter text-blue hover:shadow-lg hover:bg-blue-700 py-1 px-3" href="\roles">Roles</a>
        </li>
    </ul>
<button class="inline-block border rounded py-1 px-3 border-blue-500 hover:bg-blue-700">
    <a href="create">
        <i></i>
        Add User
    </a>
</button>
</div>


    <div class="grid grid-rows-1">

            <div class="grid grid-cols-12 sm:col-span-2 md:col-span-2">
                <div class="h-auto py-20 px-10 w-2/3 bg-gray-500 flex flex-col space-y-5 mx-auto rounded-3xl shadow-xl hover:rotate-1 transition-transform">
                    <a href="show">
                        <img src="#" alt=""
                        class="card-img-top">
                    </a>

                    <div class="card-body">
                        <div class="font-bold">name</div>

                            <div class="font-light">
                                <div class="grid grid-rows-1">
                                    <div class="grid grid-cols-1">
                                        role name
                                        </div>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                </div>


@endsection
