@extends('layouts.main')

@section('title', 'Users')

@section('content')



<div class="flex justify-between flex-wrap md:flex-nowrap items-center pt-3 pb-2 mb-3 border-b">
  <h2>Create a User</h2>
</div>

<form action="create.blade.php" method="post">
  @include('./form.blade.php')
</form>


@endsection
