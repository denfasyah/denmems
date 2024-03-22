<!-- sidenav  -->
<aside
  class="fixed inset-y-0 flex-wrap items-center justify-between block w-full p-0 my-4 transition-transform duration-200 -translate-x-full bg-white border-0 shadow-xl dark:shadow-none dark:bg-slate-850 max-w-64 ease-nav-brand z-990 xl:ml-6 rounded-2xl xl:left-0 xl:translate-x-0"
  aria-expanded="false"
>
  <div class="h-19">
    <i
      class="absolute top-0 right-0 p-4 opacity-50 cursor-pointer fas fa-times text-black dark:text-white xl:hidden"
      sidenav-close
    ></i>
    <a
      class="block px-8 py-6 m-0 text-sm whitespace-nowrap text-black dark:text-white"
      href="/"
      target="_blank"
    >
      <img
        src="{{ asset('icons/logo.png') }}"
        class="inline h-full max-w-full transition-all duration-200 ease-nav-brand max-h-12"
        alt="main_logo"
      />

      <span
        class="ml-1 font-semibold transition-all duration-200 ease-nav-brand"
        >DENNMEMS</span
      >
    </a>
  </div>

  <hr
    class="h-px mt-0 bg-transparent bg-gradient-to-r from-transparent via-black/40 to-transparent dark:bg-gradient-to-r dark:from-transparent dark:via-white dark:to-transparent"
  />

  <div class="items-center block w-auto max-h-screen h-sidenav grow basis-full">
    <ul class="flex flex-col pl-0 mb-0">
      <li class="mt-0.5 w-full">
        <a
          class="@if (request()->is('fresh'))py-2.7 bg-blue-500/13 font-semibold @endif text-black dark:text-white dark:opacity-80 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap rounded-lg px-4  transition-colors"
          href="{{ route('fresh') }}"
        >
          <div
            class="mr-2 flex h-8 w-10 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5"
          >
            <img src="{{ asset('icons/newicon.svg') }}" alt="" class="w-5" />
          </div>
          <span class="ml-1 duration-300 opacity-100 pointer-events-none ease"
            >Fresh</span
          >
        </a>
      </li>

      <li class="mt-0.5 w-full">
        <a
          class="@if (request()->is('trending'))py-2.7 bg-blue-500/13 font-semibold @endif text-black dark:text-white dark:opacity-80 py-2.7 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap px-4 transition-colors"
          href="{{ route('trending') }}"
        >
          <div
            class="mr-2 flex h-8 w-10 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5"
          >
            <img
              src="{{ asset('icons/trendsidenav.png') }}"
              alt=""
              class="w-5"
            />
          </div>
          <span class="ml-1 duration-300 opacity-100 pointer-events-none ease"
            >Trending</span
          >
        </a>
      </li>

      <li class="w-full mt-4">
        <h6
          class="pl-6 ml-2 text-xs font-bold leading-tight uppercase text-black dark:text-white opacity-60"
        >
          Category
        </h6>
      </li>

      <li class="mt-0.5 w-full">
        <a
          class="@if (request()->is('gaming'))py-2.7 bg-blue-500/13 font-semibold @endif text-black dark:text-white dark:opacity-80 py-2.7 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap px-4 transition-colors"
          href="{{ route('gaming') }}"
        >
          <div
            class="mr-2 flex h-8 w-10 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5"
          >
            <img src="{{ asset('icons/gamingicon.png') }}" alt="" class="w-6" />
          </div>
          <span class="ml-1 duration-300 opacity-100 pointer-events-none ease"
            >Gaming</span
          >
        </a>
      </li>

      <li class="mt-0.5 w-full">
        <a
          class="@if (request()->is('anime'))py-2.7 bg-blue-500/13 font-semibold @endif text-black dark:text-white dark:opacity-80 py-2.7 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap px-4 transition-colors"
          href="{{ route('anime') }}"
        >
          <div
            class="mr-2 flex h-8 w-10 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5"
          >
            <img src="{{ asset('icons/animeicon.png') }}" alt="" class="w-8" />
          </div>
          <span class="ml-1 duration-300 opacity-100 pointer-events-none ease"
            >Anime</span
          >
        </a>
      </li>

      <li class="mt-0.5 w-full">
        <a
          class="@if (request()->is('technology'))py-2.7 bg-blue-500/13 font-semibold @endif text-black dark:text-white dark:opacity-80 py-2.7 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap px-4 transition-colors"
          href="{{ route('technology') }}"
        >
          <div
            class="mr-2 flex h-8 w-10 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5"
          >
            <img src="{{ asset('icons/codeicon.svg') }}" alt="" class="w-5" />
          </div>
          <span class="ml-1 duration-300 opacity-100 pointer-events-none ease"
            >Technology</span
          >
        </a>
      </li>

      <li class="mt-0.5 w-full">
        <a
          class="@if (request()->is('dark'))py-2.7 bg-blue-500/13 font-semibold @endif text-black dark:text-white dark:opacity-80 py-2.7 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap px-4 transition-colors"
          href="{{ route('dark') }}"
        >
          <div
            class="mr-2 flex h-8 w-10 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5"
          >
            <img src="{{ asset('icons/darkicon.png') }}" alt="" class="w-5" />
          </div>
          <span class="ml-1 duration-300 opacity-100 pointer-events-none ease"
            >Dark</span
          >
        </a>
      </li>

      <li class="mt-0.5 w-full">
        <a
          class="@if (request()->is('random'))py-2.7 bg-blue-500/13 font-semibold @endif text-black dark:text-white dark:opacity-80 py-2.7 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap px-4 transition-colors"
          href="{{ route('random') }}"
        >
          <div
            class="mr-2 flex h-8 w-10 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5"
          >
            <img src="{{ asset('icons/randomicon.png') }}" alt="" class="w-5" />
          </div>
          <span class="ml-1 duration-300 opacity-100 pointer-events-none ease"
            >Random</span
          >
        </a>
      </li>
    </ul>
  </div>
  <hr
    class="mt-40 h-px bg-transparent bg-gradient-to-r from-transparent via-black/40 to-transparent dark:bg-gradient-to-r dark:from-transparent dark:via-white dark:to-transparent"
  />
  <footer class="">
    <div class="w-full px-2 mx-auto">
      <div class="flex flex-wrap items-center -mx-3 lg:justify-between">
        <div class="w-full max-w-full px-10 mt-0 mb-6 shrink-0">
          <div
            class="text-sm leading-normal text-center text-slate-500 lg:text-left"
          >
            ©
            <script>
              document.write(new Date().getFullYear() + ",");
            </script>
            made with <i class="fa fa-heart"></i> <br />
            <a
              href="https://www.creative-tim.com"
              class="font-semibold text-black dark:text-white"
              target="_blank"
              >By Adent</a
            >
          </div>
        </div>
      </div>
    </div>
  </footer>
</aside>

<!-- end sidenav -->
