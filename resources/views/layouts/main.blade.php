@include('layouts.header')

@include('layouts.navbar')

<div class="grid grid-cols-12">
    <!--sidebar-->
    <div class="col-span-2 px-2 pb-2 pt-4 sticky z-0">
        @include('layouts.sidebar')
    </div>

    <!--Main Area-->
    <div class="col-span-10 px-2 pt-4">
        @yield('content')
    </div>
</div>

@include('layouts.footer')
