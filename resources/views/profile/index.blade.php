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
                      <!-- <img src="{{ asset('icons/bookmarkicon.svg') }}" alt="" /> -->
                      <div class="dropdown dropdown-bottom dropdown-end">
                        <div tabindex="0" role="button" class="">
                          <div class="avatar flex items-center">
                            <div class="mask mask-circle w-7">
                              <img src="{{ asset('icons/more.svg') }}" alt="" />
                            </div>
                          </div>
                        </div>
                        <ul
                          class="dropdown-content z-[1] mt-2 menu shadow bg-base-100 rounded-box w-32"
                        >
                          <li class="">
                            <button class="" onclick="showEditModal()">
                              <a href="{{ route('profile.edit', $post) }}">Edit</a>
                            </button>
                          </li>
                          <dialog id="editModal" class="modal">
                            <div class="modal-box pb-10">
                              <form method="dialog">
                                <button
                                  class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2"
                                  onclick="hideEditModal()"
                                >
                                  ✕
                                </button>
                              </form>
                              <h3 class="font-bold text-lg text-center">
                                Postingan
                              </h3>
                              <form
                                action="{{ route('profile.update', $post) }}"
                                method="post"
                              >
                                @method('put') @csrf
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
                                      class="border-Blue focus:border-Blue focus:outline-none active:border-Blue input px-[10px] py-[11px] w-full text-xs bg-[#e8e8e8] border-2 rounded-[5px] placeholder:text-black/25 @error('caption') ring-2 ring-error @enderror"
                                      required
                                      value="{{ $post->caption }}"
                                    />
                                    @error('caption')
                                    <p class="text-red-500">{{ $message }}</p>
                                    @enderror
                                  </div>

                                  <div class="flex flex-col">
                                    <label
                                      for="picture"
                                      class="text-blue-500 text-xs font-semibold relative top-2 ml-[7px] px-[3px] bg-[#e8e8e8] w-fit"
                                      >Picture</label
                                    >
                                    <input
                                      id="picture"
                                      type="file"
                                      placeholder="Ketik disini ..."
                                      name="picture"
                                      class="border-Blue focus:border-Blue focus:outline-none active:border-Blue input px-[10px] py-[11px] w-full text-xs bg-[#e8e8e8] border-2 rounded-[5px] placeholder:text-black/25 file:bg-Blue file:text-white file:text-sm file:font-medium file:border-none file:rounded-lg cursor-pointer"
                                    />
                                  </div>

                                  <div class="flex flex-col">
                                    <label
                                      for="category"
                                      class="text-blue-500 text-xs font-semibold relative top-2 ml-[7px] px-[3px] bg-[#e8e8e8] w-fit"
                                      >Category</label
                                    >
                                    <select
                                      class="select select-bordered w-full border-Blue focus:border-Blue focus:outline-none active:border-Blue input px-[10px] py-[11px] text-xs bg-[#e8e8e8] border-2 rounded-[5px] placeholder:text-black/25"
                                      name="category_id"
                                      required
                                    >
                                      <option disabled selected>
                                        Choose one category
                                      </option>
                                      <option value="1">Gaming</option>
                                      <option value="2">Anime</option>
                                      <option value="3">Technology</option>
                                      <option value="4">Dark</option>
                                      <option value="5">Random</option>
                                    </select>
                                  </div>
                                </div>

                                <div class="flex justify-end">
                                  <button
                                    type="submit"
                                    class="font-bold border-2 border-Blue text-black dark:text-white hover:text-white mt-5 p-2 text-sm rounded-b-2xl rounded-tr-2xl btn hover:bg-Blue"
                                  >
                                    Create
                                  </button>
                                </div>
                              </form>
                            </div>
                          </dialog>

                          <!-- <li class="mx-5">
                            <a href="{{ route('profile.edit', $post) }}"
                              >Edit</a
                            >
                          </li> -->

                          <li class="">
                            <form
                              action="{{ route('profile.destroy', $post) }}"
                              method="post"
                            >
                              @csrf @method('delete')
                              <button
                                onclick="return confirm('Yakin ingin menghapus?')"
                              >
                                Delete post
                              </button>
                            </form>
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
  <script>
    function showEditModal() {
      var modal = document.getElementById("editModal");
      modal.showModal();
    }

    function hideEditModal() {
      var modal = document.getElementById("editModal");
      modal.close();
    }
  </script>
  @include('sweetalert::alert') @endsection
</div>
