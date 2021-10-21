@include('layouts.header')

<div class="grid grid-cols-12 h-screen w-screen overflow-visible">
  <!--sidebar-->
  <div class="drawer-side col-span-2 px-2 pb-2 pt-3 overflow-hidden h-screen">
    @include('layouts.sidebar')
  </div>

  <!--Main Area-->
  <div class="col-span-10 px-2 pt-1 h-screen">
    @include('layouts.navbar')
    <div class="flex items-center w-full px-2 py-1 h-screen card compact">
      <main class="card flex-1 overflow-y-auto">@yield('content')</main>
    </div>
  </div>
</div>

@include('layouts.footer')
