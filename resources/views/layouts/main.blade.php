@include('layouts.header')
<!-- pc view -->
<div
  class="
    grid
    md:grid-cols-12
    grid-cols-7
    h-screen
    w-screen
    overflow-y-auto
    drawer
  "
>
  <!--sidebar-->
  @include('layouts.sidebar')
  <!--Main Area-->
  <main
    class="
      col-span-6
      md:col-span-10
      flex-grow
      block
      overflow-x-hidden
      bg-base-100
      drawer-content
    "
  >
    @include('layouts.navbar')
    <div class="z-20 flex items-center w-full md:px-2 md:py-1 px-0 py-0 card">
      <main class="p-2 flex z-10 justify-items start w-full h-full">
        @yield('content')
      </main>
    </div>
  </main>
</div>

@include('layouts.footer')
