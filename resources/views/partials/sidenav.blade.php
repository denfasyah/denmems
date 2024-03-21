<!-- sidenav  -->
<aside
  class="fixed inset-y-0 flex-wrap items-center justify-between block w-full p-0 my-4 overflow-y-auto antialiased transition-transform duration-200 -translate-x-full bg-white border-0 shadow-xl dark:shadow-none dark:bg-slate-850 max-w-64 ease-nav-brand z-990 xl:ml-6 rounded-2xl xl:left-0 xl:translate-x-0"
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
        src="{{ asset('img/logo.png') }}"
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

  <div
    class="items-center block w-auto max-h-screen overflow-auto h-sidenav grow basis-full"
  >
    <ul class="flex flex-col pl-0 mb-0">
      <li class="mt-0.5 w-full">
        <a
          class="py-2.7 bg-blue-500/13 text-black dark:text-white dark:opacity-80 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap rounded-lg px-4 font-semibold transition-colors"
          href="./pages/dashboard.html"
        >
          <div
            class="mr-2 flex h-8 w-10 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5"
          >
            <img src="{{ asset('img/newicon.svg') }}" alt="" class="w-5" />
          </div>
          <span class="ml-1 duration-300 opacity-100 pointer-events-none ease"
            >New</span
          >
        </a>
      </li>

      <li class="mt-0.5 w-full">
        <a
          class="text-black dark:text-white dark:opacity-80 py-2.7 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap px-4 transition-colors"
          href="./pages/profile.html"
        >
          <div
            class="mr-2 flex h-8 w-10 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5"
          >
            <img src="{{ asset('img/latesticon.svg') }}" alt="" class="w-5" />
          </div>
          <span class="ml-1 duration-300 opacity-100 pointer-events-none ease"
            >Latest</span
          >
        </a>
      </li>

      <li class="mt-0.5 w-full">
        <a
          class="text-black dark:text-white dark:opacity-80 py-2.7 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap px-4 transition-colors"
          href="./pages/sign-in.html"
        >
          <div
            class="mr-2 flex h-8 w-10 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5"
          >
            <img src="{{ asset('img/trendsidenav.png') }}" alt="" class="w-5" />
          </div>
          <span class="ml-1 duration-300 opacity-100 pointer-events-none ease"
            >Trending</span
          >
        </a>
      </li>

      <li class="mt-0.5 w-full">
        <a
          class="text-black dark:text-white dark:opacity-80 py-2.7 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap px-4 transition-colors"
          href="./pages/sign-up.html"
        >
          <div
            class="mr-2 flex h-8 w-10 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5"
          >
            <img src="{{ asset('img/usericon.svg') }}" alt="" class="w-5" />
          </div>
          <span class="ml-1 duration-300 opacity-100 pointer-events-none ease"
            >Profile</span
          >
        </a>
      </li>
    </ul>
  </div>
  <hr
    class="h-px mt-0 bg-transparent bg-gradient-to-r from-transparent via-black/40 to-transparent dark:bg-gradient-to-r dark:from-transparent dark:via-white dark:to-transparent"
  />
  <footer class="pt-4">
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