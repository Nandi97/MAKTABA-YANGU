<div
  class="
    bg-neutral
    drawer-side drawer-mobile
    md:col-span-2
    pb-2
    overflow-hidden
    h-screen
    col-span-1
  "
>
  <aside
    class="
      sticky
      flex flex-col
      border-base-200
      text-neutral-content
      h-full
      top-0
      z-40
    "
  >
    <div>
      <div
        class="
          sticky
          navbar
          inset-x-0
          top-0
          z-50
          w-full
          transition
          duration-200
          ease-in-out
          border-base-200
          bg-neutral
        "
      >
        <div class="flex flex-1 px-4 py-3 mx-2">
          <a href="/" class="flex flex-row">
            <img
              src="/images/maktabayangu-logo.png"
              height="55px"
              width="45px"
              class="pl-3 pb-3"
              alt="Maktaba logo"
            />
            <span class="flex-none hidden md:flex">Maktaba Yangu</span>
          </a>
        </div>
      </div>

      <div>
        <ul
          class="
            menu
            flex flex-col flex-shrink
            compact
            md:gap-4 md:pt-3
            pt-15
            md:px-3
          "
        >
          @php $jsonString =
          file_get_contents(base_path('resources/links/links.json')); $links =
          json_decode($jsonString, true); foreach($links as $link) echo '
          <li
            class="
              sidebar-link
              rounded-full
              md:hover:bg-green-500
              outline-green-500
            "
          >
            <a href="'. $link['path'] .'">
              <span
                class="iconify-inline mr-2"
                data-icon="'. $link['icon'] .'"
              ></span>
              <span class="flex-none hidden md:flex">'.$link['title'].'</span>
            </a>
          </li>
          '; @endphp
        </ul>
      </div>
    </div>
  </aside>
</div>
