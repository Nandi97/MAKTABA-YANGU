@include('layouts.header')
<div class="flex flex-col h-screen w-screen">
@include('layouts.navbar')
<main class="flex-1 overflow-y-auto">
<div class="grid grid-cols-12 z-0">
    <!--sidebar-->
    <div class="col-span-2 px-2 pb-2 pt-4 overflow-hidden h-screen sticky">
        @include('layouts.sidebar')
    </div>

    <!--Main Area-->
    <div class="col-span-10 px-2 pt-4 h-screen">
        <div class="rounded-lg shadow-lg bg-white h-screen overflow-y-auto px-3">
        @yield('content')
    </div>
    </div>
</div>
</main>
</div>

@include('layouts.footer')
