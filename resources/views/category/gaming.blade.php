@extends('layout.main') @section('content')


<div class="container">
  <div class="flex flex-wrap mt-5 -mx-3 scroll-behavior">

    <!-- Postingan -->
    <div class="relative pb-5 px-3 lg:mt-0 mb-6 w-full lg:w-7/12 lg:mb-0 lg:flex-none">
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

                    <div class="absolute right-0 mt-5">
                      <img src="{{ asset('icons/bookmarkicon.svg') }}" alt="">
                    </div>

                    <h5
                      class="font-bold mt-4 ml-5 h-4 text-black dark:text-white"
                    >
                    <a href="/profile">{{ $post->user->name }}</a>  
                    </h5>
                    
                    <span class="text-xs ml-5 text-black dark:text-white"
                      >10.00</span
                    >

                  </div>
                </div>
                <p class="mb-1 font-semibold text-black dark:text-white">
                  {{ $post->caption }}
                </p>

                <!-- <img src="{{ asset('icons/example.png') }}" alt="" class="w-full"> -->

                <div class="flex w-full gap-3 mt-5">
                  <!-- icon like -->
                  <div class="flex items-center gap-1 h-10 bg-white dark:bg-slate-850 rounded-2xl">
                  <img src="{{ asset('icons/likeicon.svg') }}" alt="">
                  <p class="mt-4 mr-2 text-xs font-bold font-inter text-slate-500 dark:text-white">1M </p>
                  </div>

                  <!-- icon comment -->
                  <div class="flex items-center gap-1 h-10 bg-white dark:bg-slate-850 rounded-2xl">
                    <img src="{{ asset('icons/commenticon.svg') }}" alt="">
                    <p class="mt-4 mr-2 text-xs font-bold font-inter text-slate-500 dark:text-white">12 </p>
                  </div>

                  <!-- icon share -->
                  <div class="flex items-center gap-1 h-10 bg-white dark:bg-slate-850 rounded-2xl">
                    <img src="{{ asset('icons/shareicon.svg') }}" alt="">
                    <p class="mt-4 mr-2 text-xs font-bold font-inter text-slate-500 dark:text-white">12 </p>
                  </div>

                  <div class="bg-Blue text-white text-xs px-2 mt-2.5 h-5 rounded-xl absolute right-10">
                    <a href="{{ $post->category->slug }}">{{ $post->category->name }}</a>
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
        <div class="flex-auto  px-4 pb-4">
          <div class="flex  flex-wrap justify-center mt-5 -mx-3">
<h1 class="text-2xl text-center text-black dark:text-white font-bold">Halo, pengguna DennMems👋 </h1>
</div>
<p class="text-black  dark:text-white">Kami ingin memastikan pengalaman Anda di platform ini menyenangkan bagi semua orang. Mohon untuk memposting dengan penuh pertimbangan dan menjauhi konten yang tidak pantas. Terima kasih🙇Selamat bersenang senang akwokwaokwok😭</p>
    </div>
    </div>



  </div>
</div>

@endsection
