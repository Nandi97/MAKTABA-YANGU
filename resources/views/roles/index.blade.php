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
    <a href="/roles/create" class="btn btn-primary btn-sm">
        <i></i>
        Add Role
    </a>
</div>

<table class="table">
	<thead>
		<tr>
			<th></th>
			<th>Name</th>
			<th>Description</th>
			<th></th>
		</tr>
	</thead>

	<tbody>
		@foreach($roles as $role)
		<tr>
			<td></td>
			<td>{{ $role->name }}</td>
			<td>{{ $role->description }}</td>
			<td>
				<a href="/roles/{{ $role->id }}/edit" class="btn btn-primary btn-sm">
					Edit
				</a>
			</td>
		</tr>
		@endforeach
	</tbody>
</table>
@endsection

