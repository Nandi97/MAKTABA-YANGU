@include('layouts.header')

<div
  class="
    grid grid-cols-12
    h-screen
    w-screen
    overflow-y-auto
    drawer drawer-mobile
  "
>
  <!--sidebar-->
  <div class="drawer-side col-span-2 px-1 pb-2 pt-3 overflow-hidden h-screen">
    @include('layouts.sidebar')
  </div>

  <!--Main Area-->
  <main
    class="
      col-span-10
      px-1
      pt-1
      h-screen
      flex-grow
      block
      overflow-x-hidden
      bg-base-100
      drawer-content
    "
  >
    @include('layouts.navbar')
    <div class="z-20 flex items-center w-full px-2 py-1 h-screen card compact">
      <main class="card flex-1 overflow-y-auto z-10">@yield('content')</main>
    </div>
  </main>
</div>

@include('layouts.footer')
