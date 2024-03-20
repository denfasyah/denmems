<div fixed-plugin>
      <a
        fixed-plugin-button
        class="fixed px-4 py-2 text-xl bg-white shadow-lg cursor-pointer bottom-8 right-8 z-990 rounded-circle"
      >
        <i class="py-2 pointer-events-none fa fa-cog"> </i>
      </a>
      <!-- -right-90 in loc de 0-->
      <div
        fixed-plugin-card
        class="z-sticky backdrop-blur-2xl backdrop-saturate-200 dark:bg-slate-850/80 shadow-3xl w-90 ease -right-90 fixed top-0 left-auto flex h-full min-w-0 flex-col break-words rounded-none border-0 bg-white/80 bg-clip-border px-2.5 duration-200"
      >
        <div class="px-6 pt-4 pb-0 mb-0 border-b-0 rounded-t-2xl">
          <div class="float-left">
            <h5 class="mt-4 mb-0 text-black dark:text-white">
              DENMEMS CONFIGURATOR
            </h5>
            <p class="text-black dark:text-white dark:opacity-80">
              See our dashboard options.
            </p>
          </div>
          <div class="float-right mt-6">
            <button
              fixed-plugin-close-button
              class="inline-block p-0 mb-4 text-sm font-bold leading-normal text-center uppercase align-middle transition-all ease-in bg-transparent border-0 rounded-lg shadow-none cursor-pointer hover:-translate-y-px tracking-tight-rem bg-150 bg-x-25 active:opacity-85 text-black dark:text-white"
            >
              <i class="fa fa-close"></i>
            </button>
          </div>
          <!-- End Toggle Button -->
        </div>
        <hr
          class="h-px mx-0 my-1 bg-transparent bg-gradient-to-r from-transparent via-black/40 to-transparent dark:bg-gradient-to-r dark:from-transparent dark:via-white dark:to-transparent"
        />
        <div class="flex-auto p-6 pt-0 overflow-auto sm:pt-4">
          <!-- Sidebar Backgrounds -->

          <!-- Sidenav Type -->
          <div class="mt-4 dark:hidden">
            <h6 class="mb-0 text-black dark:text-white">Sidenav Type</h6>
            <p
              class="text-sm leading-normal text-black dark:text-white dark:opacity-80"
            >
              Choose between 2 different sidenav types.
            </p>
          </div>
          <div class="flex dark:hidden">
            <button
              transparent-style-btn
              class="inline-block w-full px-4 py-3 mb-2 text-xs font-bold text-center text-white uppercase align-middle transition-all border border-transparent border-solid rounded-lg cursor-pointer xl-max:cursor-not-allowed xl-max:opacity-65 xl-max:pointer-events-none xl-max:bg-gradient-to-tl xl-max:from-purple-700 xl-max:to-pink-500 xl-max:text-white xl-max:border-0 hover:scale-102 hover:shadow-soft-xs active:opacity-85 leading-pro ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25 bg-gradient-to-tl from-blue-700 to-blue-500 bg-blue-500 hover:border-blue-500"
              data-class="bg-transparent"
              active-style
            >
              Sidenav White
            </button>
            <button
              white-style-btn
              class="inline-block w-full px-4 py-3 mb-2 ml-2 text-xs font-bold text-center uppercase align-middle transition-all bg-transparent border border-solid rounded-lg cursor-pointer xl-max:cursor-not-allowed xl-max:opacity-65 xl-max:pointer-events-none xl-max:bg-gradient-to-tl xl-max:from-purple-700 xl-max:to-pink-500 xl-max:text-white xl-max:border-0 hover:scale-102 hover:shadow-soft-xs active:opacity-85 leading-pro ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25 border-blue-500 bg-none text-blue-500 hover:border-blue-500"
              data-class="bg-white"
            >
              Sidenav Dark
            </button>
          </div>

          <!-- Navbar Fixed -->
          <div class="flex my-4">
            <h6 class="mb-0 text-black dark:text-white">Navbar Fixed</h6>
            <div class="block pl-0 ml-auto min-h-6">
              <input
                navbarFixed
                class="rounded-10 duration-250 ease-in-out after:rounded-circle after:shadow-2xl after:duration-250 checked:after:translate-x-5.3 h-5 relative float-left mt-1 ml-auto w-10 cursor-pointer appearance-none border border-solid border-gray-200 bg-slate-800/10 bg-none bg-contain bg-left bg-no-repeat align-top transition-all after:absolute after:top-px after:h-4 after:w-4 after:translate-x-px after:bg-white after:content-[''] checked:border-blue-500/95 checked:bg-blue-500/95 checked:bg-none checked:bg-right"
                type="checkbox"
              />
            </div>
          </div>
          <hr
            class="h-px my-6 bg-transparent bg-gradient-to-r from-transparent via-black/40 to-transparent dark:bg-gradient-to-r dark:from-transparent dark:via-white dark:to-transparent"
          />
          <div class="flex mt-2 mb-12">
            <h6 class="mb-0 text-black dark:text-white">Light / Dark</h6>
            <div class="block pl-0 ml-auto min-h-6">
              <input
                dark-toggle
                class="rounded-10 duration-250 ease-in-out after:rounded-circle after:shadow-2xl after:duration-250 checked:after:translate-x-5.3 h-5 relative float-left mt-1 ml-auto w-10 cursor-pointer appearance-none border border-solid border-gray-200 bg-slate-800/10 bg-none bg-contain bg-left bg-no-repeat align-top transition-all after:absolute after:top-px after:h-4 after:w-4 after:translate-x-px after:bg-white after:content-[''] checked:border-blue-500/95 checked:bg-blue-500/95 checked:bg-none checked:bg-right"
                type="checkbox"
              />
            </div>
          </div>
          <a
            target="_blank"
            class="dark:border dark:border-solid dark:border-white inline-block w-full px-6 py-2.5 mb-4 font-bold leading-normal text-center text-white align-middle transition-all bg-transparent border border-solid border-transparent rounded-lg cursor-pointer text-sm ease-in hover:shadow-xs hover:-translate-y-px active:opacity-85 tracking-tight-rem shadow-md bg-150 bg-x-25 bg-gradient-to-tl from-blue-800 to-blue-700 dark:bg-gradient-to-tl dark:from-slate-750 dark:to-gray-850"
            href="https://www.creative-tim.com/product/argon-dashboard-tailwind"
            >Gabung Disscord</a
          >

          <div class="w-full text-center">
            <a
              class="github-button"
              href="https://github.com/creativetimofficial/argon-dashboard-tailwind"
              data-img="octimg-star"
              data-size="large"
              data-show-count="true"
              aria-label="Star creativetimofficial/argon-dashboard on GitHub"
              >Star</a
            >
            <h6 class="mt-4 text-black dark:text-white">
              Thank you for sharing!
            </h6>
            <a
              href="https://twitter.com/intent/tweet?text=Check%20Argon%20Dashboard%20made%20by%20%40CreativeTim%20%23webdesign%20%23dashboard%20%23tailwindcss&amp;url=https%3A%2F%2Fwww.creative-tim.com%2Fproduct%2Fargon-dashboard-tailwind"
              class="inline-block px-5 py-2.5 mb-0 mr-2 font-bold text-center text-white align-middle transition-all border-0 rounded-lg cursor-pointer hover:shadow-xs hover:-translate-y-px active:opacity-85 leading-normal text-sm ease-in tracking-tight-rem shadow-md bg-150 bg-x-25 me-2 border-slate-700 bg-slate-700"
              target="_blank"
            >
              <i class="mr-1 fab fa-twitter"></i> Tweet
            </a>
            <a
              href="https://www.facebook.com/sharer/sharer.php?u=https://www.creative-tim.com/product/argon-dashboard-tailwind"
              class="inline-block px-5 py-2.5 mb-0 mr-2 font-bold text-center text-white align-middle transition-all border-0 rounded-lg cursor-pointer hover:shadow-xs hover:-translate-y-px active:opacity-85 leading-normal text-sm ease-in tracking-tight-rem shadow-md bg-150 bg-x-25 me-2 border-slate-700 bg-slate-700"
              target="_blank"
            >
              <i class="mr-1 fab fa-facebook-square"></i> Share
            </a>
          </div>
        </div>
      </div>
    </div>