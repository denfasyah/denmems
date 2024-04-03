@extends('layout.main') @section('search')
<form
  class="relative flex flex-wrap items-stretch w-full transition-all rounded-lg ease"
  action="/gaming"
>
  <span
    class="text-sm ease leading-5.6 absolute z-50 -ml-px flex h-full items-center whitespace-nowrap rounded-lg rounded-tr-none rounded-br-none border border-r-0 border-transparent bg-transparent py-2 px-2.5 text-center font-normal text-slate-500 transition-all"
  >
    <i class="fas fa-search"></i>
  </span>
  <input
    type="text"
    class="pl-9 text-sm focus:shadow-primary-outline ease w-1/100 leading-5.6 relative -ml-px block min-w-0 flex-auto rounded-lg border border-solid border-gray-300 dark:bg-slate-850 text-black dark:text-white bg-white bg-clip-padding py-2 pr-3 transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none focus:transition-shadow"
    placeholder="Type here..."
    name="search"
    value="{{ request('search') }}"
  />
</form>
@endsection @section('content')

<div class="container">
  <div class="flex flex-wrap mt-5 -mx-3 scroll-behavior">
    <!-- Postingan -->
    <div
      class="relative pb-5 px-3 lg:mt-0 mb-6 w-full lg:w-7/12 lg:mb-0 lg:flex-none"
    >
      @foreach($posts as $post)
      <div
        class="flex flex-col mt-4 min-w-0 break-words bg-white dark:bg-slate-850 shadow-soft-xl rounded-2xl bg-clip-border"
      >
        <div class="flex-auto px-4 pb-4">
          <div class="flex flex-wrap -mx-3">
            <div class="w-full px-3">
              <div class="flex flex-col h-full">
                <div class="avatar flex items-center">
                  <div class="mask mask-circle w-10 lg:w-14 md:w-14 sm:w-8">
                    <img src="{{ asset('icons/anime.png') }}" />
                  </div>
                  <div class="flex flex-col gap-2">
                    <div class="absolute gap-2 flex right-0 mt-5">
                      <img src="{{ asset('icons/bookmarkicon.svg') }}" alt="" />
                      <div class="dropdown dropdown-bottom dropdown-end">
                        <div tabindex="0" role="button" class="">
                          <div class="avatar flex items-center">
                            <div class="mask mask-circle w-7">
                              <img src="{{ asset('icons/more.svg') }}" alt="" />
                            </div>
                          </div>
                        </div>
                        <ul
                          tabindex="0"
                          class="dropdown-content z-[1] mt-2 menu shadow bg-base-100 rounded-box w-36"
                        >
                          <li class="">
                            <a href="/profile">Edit</a>
                          </li>
                          <li class="">
                            <a href="/profile">Delete</a>
                          </li>
                        </ul>
                      </div>
                    </div>

                    <h5
                      class="font-bold mt-4 ml-5 h-4 text-black dark:text-white"
                    >
                      <a href="/profile">{{ $post->user->name }}</a>
                    </h5>

                    <span
                      class="text-xs ml-5 text-black dark:text-white"
                      >{{ $post->created_at->diffForHumans() }}</span
                    >
                  </div>
                </div>
                <p class="mb-1 font-semibold text-black dark:text-white">
                  {{ $post->caption }}
                </p>

                <!-- <img src="{{ asset('icons/example.png') }}" alt="" class="w-full"> -->

                <div class="flex w-full gap-3 mt-5">
                  <!-- icon like -->
                  <div
                    class="flex items-center gap-1 h-10 bg-white dark:bg-slate-850 rounded-2xl"
                  >
                    <img src="{{ asset('icons/likeicon.svg') }}" alt="" />
                    <p
                      class="mt-4 mr-2 text-xs font-bold font-inter text-slate-500 dark:text-white"
                    >
                      1M
                    </p>
                  </div>

                  <!-- icon comment -->
                  <div
                    class="flex items-center gap-1 h-10 bg-white dark:bg-slate-850 rounded-2xl"
                  >
                    <img src="{{ asset('icons/commenticon.svg') }}" alt="" />
                    <p
                      class="mt-4 mr-2 text-xs font-bold font-inter text-slate-500 dark:text-white"
                    >
                      12
                    </p>
                  </div>

                  <!-- icon share -->
                  <div
                    class="flex items-center gap-1 h-10 bg-white dark:bg-slate-850 rounded-2xl"
                  >
                    <img src="{{ asset('icons/shareicon.svg') }}" alt="" />
                    <p
                      class="mt-4 mr-2 text-xs font-bold font-inter text-slate-500 dark:text-white"
                    >
                      12
                    </p>
                  </div>

                  <div
                    class="bg-Blue text-white text-xs px-2 mt-2.5 h-5 rounded-xl absolute right-10"
                  >
                    <a
                      href="{{ $post->category->slug }}"
                      >{{ $post->category->name }}</a
                    >
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      @endforeach
    </div>

    <div class="pb-5 px-3 mt-5 hidden lg:mt-0 mb-6 lg:w-5/12 lg:mb-0 lg:flex">
      <div
        class="flex flex-col mt-4 min-w-0 break-words bg-white dark:bg-slate-850 h-72 shadow-soft-xl rounded-tl-2xl roundeb-bl-2xl bg-clip-border"
      >
        <div class="flex-auto px-4 pb-4">
          <div class="flex flex-wrap justify-center mt-5 -mx-3">
            <h1
              class="text-2xl text-center text-black dark:text-white font-bold"
            >
              Halo, pengguna DennMems👋
            </h1>
          </div>
          <p class="text-black dark:text-white">
            Kami ingin memastikan pengalaman Anda di platform ini menyenangkan
            bagi semua orang. Mohon untuk memposting dengan penuh pertimbangan
            dan menjauhi konten yang tidak pantas. Terima kasih🙇Selamat
            bersenang senang akwokwaokwok😭
          </p>
        </div>
      </div>
    </div>
  </div>

  @endsection
</div>
