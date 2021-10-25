@include('layouts.header')
<!-- pc view -->
<div
  class="
    grid
    lg:grid-cols-12
    grid-cols-7
    h-screen
    w-screen
    overflow-y-auto
    drawer
  "
>
  <!--sidebar-->
  <div
    class="
      px-0
      pt-0
      drawer-side drawer-mobile
      md:col-span-2 md:px-1
      pb-2
      md:pt-3
      overflow-hidden
      h-screen
      col-span-1
    "
  >
    <button
      type="button"
      class="md:hidden fixed z-50 w-10 h-10 rounded-full bg-neutral block"
    ></button>
    @include('layouts.sidebar')
  </div>

  <!--Main Area-->
  <main
    class="
      col-span-6
      md:col-span-10
      px-0
      pt-0
      md:px-1 md:pt-1
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
