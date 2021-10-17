@include('/resources/views/layouts/header.blade.php')

<div>
    <div class="container">
        <h1>Create User Role</h1>

        <form action="create.blade.php" method="post">
            @include('form.blade.php')
        </form>
    </div>
</div>

@include('/resources/views/layouts/footer.blade.php')
