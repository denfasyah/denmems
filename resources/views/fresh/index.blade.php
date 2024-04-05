@extends('layout.main') 

@section('search')
<form
class="relative flex flex-wrap items-stretch w-full transition-all rounded-lg ease" action="/fresh"
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
@endsection


@section('content')



<div class="container">
  <div class="flex flex-wrap mt-5 -mx-3 scroll-behavior">

    <div
      class="flex justify-between items-center w-full pb-5 px-3 mt-5 lg:mt-0 mb-6 lg:mb-0 lg:flex-none"
      id="youranswer"
    >
      <div
        class="flex min-w-0 flex-col break-words rounded-2xl border-0 border-solid"
      >
        <!-- You can open the modal using ID.showModal() method -->
        <button
          class="btn bg-Blue border-none text-white hover:bg-Blue rounded-b-2xl rounded-tr-2xl"
          onclick="my_modal_3.showModal()"
        >
          Buat Postingan
        </button>
        <dialog id="my_modal_3" class="modal">
          <div class="modal-box pb-10">
            <form method="dialog">
              <button
                class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2"
              >
                ✕
              </button>
            </form>
            <h3 class="font-bold text-lg text-center ">Postingan</h3>
<form  action="/fresh" method="post" enctype="multipart/form-data">
  @csrf
            <div>
            <div class="flex flex-col">
              <label
                for="caption"
                class="text-blue-500 text-xs font-semibold relative top-2 ml-[7px] px-[3px] bg-[#e8e8e8] w-fit"
                >Caption</label
              >
              <input
                id="caption"
                type="text"
                placeholder="Ketik disini ..."
                name="caption"
                class="border-Blue focus:border-Blue focus:outline-none active:border-Blue input px-[10px] py-[11px] w-full text-xs bg-[#e8e8e8] border-2 rounded-[5px]  placeholder:text-black/25 @error('caption') ring-2 ring-error @enderror"
                required
              />
              @error('caption')
              <p class="text-red-500"> {{ $message }} </p>
              @enderror
            </div>

            <div class="flex flex-col">
              <label
                for="image"
                class="text-blue-500 text-xs font-semibold relative top-2 ml-[7px] px-[3px] bg-[#e8e8e8] w-fit"
                >Image</label
              >
              <input
                id="image"
                type="file"
                placeholder="Ketik disini ..."
                name="image"
                class="border-Blue focus:border-Blue focus:outline-none active:border-Blue input px-[10px] py-[11px] w-full text-xs bg-[#e8e8e8] border-2 rounded-[5px]  placeholder:text-black/25 file:bg-Blue file:text-white file:text-sm file:font-medium file:border-none file:rounded-lg cursor-pointer"
              />
            </div>

            <div class="flex flex-col">
              <label
                for="category"
                class="text-blue-500 text-xs font-semibold relative top-2 ml-[7px] px-[3px] bg-[#e8e8e8] w-fit"
                >Category</label
              >
            <select class="select select-bordered w-full border-Blue focus:border-Blue focus:outline-none active:border-Blue input px-[10px] py-[11px] text-xs bg-[#e8e8e8] border-2 rounded-[5px]  placeholder:text-black/25" name="category_id" required>
            <option disabled selected>Choose one category</option>
              <option value="1">Gaming</option>
              <option value="2">Anime</option>
              <option value="3">Technology</option>
              <option value="4">Dark</option>
              <option value="5">Random</option>
            </select>
          </div>
          </div>
            
            <div class="flex justify-end">
            <button type="submit" class="font-bold border-2 border-Blue text-black dark:text-white hover:text-white mt-5 p-2 text-sm rounded-b-2xl rounded-tr-2xl btn hover:bg-Blue">Create</button>
          </div>
        </form>
          </div>

        </dialog>
      </div>

      <label class="swap">
        <!-- this hidden checkbox controls the state -->
        <input type="checkbox" />

        <!-- asscending on icon -->
        <span class="bg-Blue rounded swap-on">
          <img
            src="{{ asset('icons/ascending.png') }}"
            alt="iconterbaru"
            class="ml-1"
          />
        </span>
        
        <!-- descending off icon -->
        <span class="bg-Blue rounded swap-off">
        <img
        src="{{ asset('icons/descending.png') }}"
        alt="iconterlama"
        class=" fill-Blue"
        />
      </label>
    </span>
    </div>



    <!-- Postingan -->
    <div class="relative pb-5 px-3 lg:mt-0 mb-6 w-full lg:w-7/12 lg:mb-0 lg:flex-none">
      @foreach($posts as $post)
      <div
        class="flex mt-4 flex-col min-w-0 break-words bg-white dark:bg-slate-850 shadow-soft-xl rounded-2xl bg-clip-border"
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
                    <a href="/profile/{{ $post->user->name }}">{{ $post->user->name }}</a>  
                    </h5>
                    
                    <span class="text-xs ml-5 text-black dark:text-white"
                      >{{ $post->created_at->diffForHumans() }}</span
                    >

                  </div>
                </div>
                <p class="mb-1 font-semibold text-black dark:text-white">
                  {{ $post->caption }}
                </p>

                @if ($post->image)
                <img src="{{ asset('storage/' . $post->image) }}" alt="" class="w-full">
                @endif

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


    @include('partials.greeting')


  </div>
</div>
@include('sweetalert::alert')

@endsection
