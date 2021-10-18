@extends('layouts.main')

@section('title', 'Roles')

@section('content')

<div class="flex justify-between flex-wrap md:flex-nowrap
items-center pt-3 pb-2 mb-3 border-b">
    <ul class="list-reset flex flex-row">
        <li class="mr-3">
            <a class="inline-block border border-blue-400 rounded hover:border-grey-lighter text-blue hover:shadow-lg hover:bg-blue-700 py-1 px-3" href="../users/">Users</a>
        </li>
        <li class="mr-3">
            <a class="inline-block border border-blue-400 rounded py-1 px-3 bg-blue-400 text-black hover:shadow-lg" class="active" aria-current="page" href="../roles/">Roles</a>
        </li>
    </ul>
    <button class="inline-block border rounded py-1 px-3 border-blue-500 hover:bg-blue-700">
        <a href="../roles/create.blade.php">
            <i></i>
            Add Role
        </a>
    </button>
</div>

<table class="order-collapse border border-gray-800">
    <thead>
        <tr>
            <th></th>
            <th>Name</th>
            <th>Description</th>
            <th></th>
        </tr>
    </thead>

    <tbody>

            <tr>
                <td></td>
                    <td></td>
                        <td></td>
                            <td>
                                <button class="bg-white border-blue-700 hover:">
                                    <a href="../roles/update.blade.php">
                                        <i class="bi bi-pencil"></i>
                                        Edit Role
                                    </a>
                                </button>
                            </td>
                        </tr>

                        </tbody>
                    </table>
                    @endsection

