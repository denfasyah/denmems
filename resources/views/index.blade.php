@extends('layout.main') @section('content')

<div class="container">
<div class="flex justify-center flex-wrap mt-6 -mx-3 scroll-behavior">
          <div
            class="w-full pb-5 px-3 mt-5 lg:mt-0 mb-6 lg:mb-0 lg:flex-none"
            id="youranswer"
          >
            <div
              class="shadow-xl relative flex min-w-0 flex-col break-words rounded-2xl border-0 border-solid bg-white dark:bg-slate-850 bg-clip-border p-4"
            >
              <div class="relative h-full overflow-hidden bg-cover rounded-xl">
                <div
                  class="bg-white dark:bg-slate-850 p-5 rounded-2xl relative"
                >
                  <h2
                    class="text-md lg:text-xl text-black dark:text-white md:text-xl sm:text-md font-bold mb-4 flex items-center justify-center"
                  >
                    Create
                  </h2>
                  <hr class="h-0.5 bg-slate-400" />
                  <form role="form text-left" id="editor"></form>
                  <div class="flex justify-end gap-2 mt-5">
                    <input
                      type="text"
                      class="w-full bg-white dark:bg-slate-850 border-2 border-blue-800"
                    />
                    <button
                      class="bg-Blue text-white dark:text-white rounded-xl lg:px-10 md:px-7 sm:px-5 px-4 py-1"
                    >
                      Create
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- quest -->
          <div class="w-full pb-5 px-3 mt-5 lg:mt-0 mb-6 lg:mb-0 lg:flex-none">
            <div
              class="flex flex-col min-w-0 break-words bg-white dark:bg-slate-850 shadow-soft-xl rounded-2xl bg-clip-border"
            >
              <div class="flex-auto px-4 pb-4">
                <div class="flex flex-wrap -mx-3">
                  <div class="max-w-full px-3 lg:w-1/2 lg:flex-none">
                    <div class="flex flex-col h-full">
                      <div class="avatar flex items-center">
                        <div
                          class="mask mask-circle w-10 lg:w-14 md:w-14 sm:w-8"
                        >
                          <img src="{{ asset('img/anime.png') }}" />
                        </div>
                        <div class="flex flex-col gap-2">
                          <h5
                            class="font-bold mt-4 ml-5 h-4 text-black dark:text-white"
                          >
                            Adent
                          </h5>
                          <span class="text-xs ml-5 text-black dark:text-white"
                            >10.00</span
                          >
                        </div>
                      </div>
                      <p class="mb-1 font-semibold text-black dark:text-white">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Similique, laudantium?
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- answer -->
            <!-- 1 -->
            <div
              class="mt-5 flex flex-col min-w-0 break-words bg-white dark:bg-slate-850 shadow-soft-xl rounded-2xl bg-clip-border"
            >
              <div class="flex-auto px-4 pb-4">
                <div class="flex flex-wrap -mx-3">
                  <div class="max-w-full px-3 lg:w-1/2 lg:flex-none">
                    <div class="flex flex-col h-full">
                      <div class="avatar flex items-center">
                        <div
                          class="mask mask-circle w-10 lg:w-14 md:w-14 sm:w-8"
                        >
                          <img src="{{ asset('img/anime.png') }}" />
                        </div>
                        <div class="flex flex-col gap-2">
                          <h5
                            class="font-bold mt-4 ml-5 h-4 text-black dark:text-white"
                          >
                            Adent
                          </h5>
                          <span class="text-xs ml-5 text-black dark:text-white"
                            >10.00</span
                          >
                        </div>
                      </div>
                      <p class="mb-1 font-semibold text-black dark:text-white">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Similique, laudantium
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
</div>

@endsection