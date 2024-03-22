@extends('layout.main') @section('content')

<div class="container">
  <div class="flex flex-wrap mt-6 -mx-3 scroll-behavior">
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
                class="border-Blue focus:border-Blue focus:outline-none active:border-Blue input px-[10px] py-[11px] w-full text-xs bg-[#e8e8e8] border-2 rounded-[5px]  placeholder:text-black/25"
              />
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
                name="caption"
                class="border-Blue focus:border-Blue focus:outline-none active:border-Blue input px-[10px] py-[11px] w-full text-xs bg-[#e8e8e8] border-2 rounded-[5px]  placeholder:text-black/25 file:bg-Blue file:text-white file:text-sm file:font-medium file:border-none file:rounded-lg cursor-pointer"
              />
            </div>

            <div class="flex flex-col">
              <label
                for="category"
                class="text-blue-500 text-xs font-semibold relative top-2 ml-[7px] px-[3px] bg-[#e8e8e8] w-fit"
                >Category</label
              >
            <select class="select select-bordered w-full border-Blue focus:border-Blue focus:outline-none active:border-Blue input px-[10px] py-[11px] text-xs bg-[#e8e8e8] border-2 rounded-[5px]  placeholder:text-black/25" name="category">
              <option disabled selected>Choose Category</option>
              <option>Gaming</option>
              <option>Anime</option>
              <option>Technology</option>
              <option>Dark</option>
              <option>Random</option>
            </select>
          </div>
            
            <div class="flex justify-end">
            <button class="bg-Blue text-white mt-5 p-2 text-sm rounded-b-2xl rounded-tr-2xl btn hover:bg-Blue">Create</button>
          </div>
          </div>

        </dialog>
      </div>

      <label class="swap">
        <!-- this hidden checkbox controls the state -->
        <input type="checkbox" />

        <!-- volume on icon -->
        <span class="bg-Blue rounded swap-on">
          <img
            src="{{ asset('icons/ascending.png') }}"
            alt="iconterbaru"
            class="ml-1"
          />
        </span>
        
        <!-- volume off icon -->
        <span class="bg-Blue rounded swap-off">
        <img
        src="{{ asset('icons/descending.png') }}"
        alt="iconterlama"
        class=" fill-Blue"
        />
      </label>
    </span>
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
                  <div class="mask mask-circle w-10 lg:w-14 md:w-14 sm:w-8">
                    <img src="{{ asset('icons/anime.png') }}" />
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

      <!-- 2 -->
      <div
        class="mt-5 flex flex-col min-w-0 break-words bg-white dark:bg-slate-850 shadow-soft-xl rounded-2xl bg-clip-border"
      >
        <div class="flex-auto px-4 pb-4">
          <div class="flex flex-wrap -mx-3">
            <div class="max-w-full px-3 lg:w-1/2 lg:flex-none">
              <div class="flex flex-col h-full">
                <div class="avatar flex items-center">
                  <div class="mask mask-circle w-10 lg:w-14 md:w-14 sm:w-8">
                    <img src="{{ asset('icons/anime.png') }}" />
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

      <!-- 3 -->
      <div
        class="mt-5 flex flex-col min-w-0 break-words bg-white dark:bg-slate-850 shadow-soft-xl rounded-2xl bg-clip-border"
      >
        <div class="flex-auto px-4 pb-4">
          <div class="flex flex-wrap -mx-3">
            <div class="max-w-full px-3 lg:w-1/2 lg:flex-none">
              <div class="flex flex-col h-full">
                <div class="avatar flex items-center">
                  <div class="mask mask-circle w-10 lg:w-14 md:w-14 sm:w-8">
                    <img src="{{ asset('icons/anime.png') }}" />
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
