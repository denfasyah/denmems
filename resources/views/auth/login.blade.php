<!DOCTYPE html>
<html lang="en" data-theme="nord">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @vite('resources/css/app.css')
    <link
      rel="shortcut icon"
      href="{{ asset('icons/logo.png') }}"
      type="image/x-icon"
    />

    <title>DENNMEMS | Login</title>
  </head>

  <body class="overflow-hidden">
    @include('sweetalert::alert') @if(session()->has('loginError'))
    <div class="flex justify-center items-center">
      <div role="alert" class="alert alert-error absolute top-2 w-80">
        <svg
          xmlns="http://www.w3.org/2000/svg"
          class="stroke-current shrink-0 h-6 w-6"
          fill="none"
          viewBox="0 0 24 24"
        >
          <path
            stroke-linecap="round"
            stroke-linejoin="round"
            stroke-width="2"
            d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z"
          />
        </svg>
        <span class="text-white">{{ session("loginError") }}</span>
      </div>
    </div>
    @endif

    <div
      class="hero min-h-screen bg-gradient-to-tl from-30% from-Blue to-white"
    >
      <div class="hero-content flex-col lg:flex-row-reverse">
        <!-- login form -->
        <div
          class="flex flex-col lg:flex-row-reverse lg:bg-white lg:px-5 rounded-md lg:py-5 shadow-2xl"
        >
          <div class="text-center lg:text-left lg:w-1/2">
            <div class="flex flex-col items-center justify-center dark">
              <div
                class="w-full mr-10 lg:mr-0 max-w-md bg-gradient-to-tl from-Blue to-Blue rounded-3xl shadow-2xl p-10"
              >
                <h2
                  class="container text-center text-3xl font-bold text-white mb-2"
                >
                  Welcome👋
                </h2>
                <p class="text-center text-lg font-bold text-white mb-2">
                  Log in to your Account
                </p>
                <!-- <p class="container text-xs text-white mb-2">
                  Welcome! Select method to log in
                </p> -->
                <!-- <div class="flex justify-center mb-7">
                  <a href="#">
                    <button
                      class="flex items-center mr-5 bg-white text-slate-800 font-bold text-xs py-2 px-6 rounded-md mt-4"
                    >
                      <img src="{{ asset('svg/google.svg') }}" alt="google" />
                      Google
                    </button>
                  </a>
                  <a href="#">
                    <button
                      class="flex items-center bg-white text-slate-800 font-bold text-xs py-2 px-4 rounded-md mt-4"
                    >
                      <img
                        src="{{ asset('svg/facebook.svg') }}"
                        alt="facebook"
                      />
                      Facebook
                    </button>
                  </a>
                </div> -->
                <!-- <div
                  class="text-xs font-semi-bold text-white text-center mb-5 relative"
                >
                  <div class="flex items-center">
                    <div class="flex-1 h-px bg-white"></div>
                    <div class="mx-4">Or continue with email</div>
                    <div class="flex-1 h-px bg-white"></div>
                  </div>
                </div> -->
                <form class="flex flex-col mt-5 w-80" action="/" method="POST">
                  @csrf
                  <div class="mb-3">
                    <div class="relative">
                      <span
                        class="absolute top-2.5 left-0 flex items-center pl-2 mb-3"
                      >
                        <img src="{{ asset('icons/email.svg') }}" alt="email" />
                      </span>
                      <input
                        placeholder="Email"
                        class="pl-10 bg-white text-black border-0 rounded-md p-2 w-full focus:outline-none focus:ring-1 focus:ring-blue-500 transition ease-in-out duration-150 @error('email') ring-2 ring-error @enderror"
                        type="email"
                        name="email"
                        id="email"
                        required
                        value="{{ old('email') }}"
                      />
                      @error('email')
                      <p class="text-red-500">{{ $message }}</p>
                      @enderror
                    </div>
                  </div>
                  <div class="mb-3">
                    <div class="relative">
                      <span
                        class="absolute top-2.5 left-0 flex items-center pl-2 mb-3"
                      >
                        <img
                          src="{{ asset('icons/password.svg') }}"
                          alt="password"
                        />
                      </span>
                      <span
                        class="absolute top-2.5 right-0 pr-3 flex items-center mb-3"
                        id="togglePassword"
                      >
                        <label class="swap">
                          <input
                            type="checkbox"
                            id="hide"
                            data-name="password"
                          />
                          <svg
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke-width="1.5"
                            stroke="currentColor"
                            class="swap-off w-5 h-5"
                          >
                            <path
                              stroke-linecap="round"
                              stroke-linejoin="round"
                              d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z"
                            />
                            <path
                              stroke-linecap="round"
                              stroke-linejoin="round"
                              d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"
                            />
                          </svg>
                          <svg
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke-width="1.5"
                            stroke="currentColor"
                            class="swap-on w-5 h-5"
                          >
                            <path
                              stroke-linecap="round"
                              stroke-linejoin="round"
                              d="M3.98 8.223A10.477 10.477 0 0 0 1.934 12C3.226 16.338 7.244 19.5 12 19.5c.993 0 1.953-.138 2.863-.395M6.228 6.228A10.451 10.451 0 0 1 12 4.5c4.756 0 8.773 3.162 10.065 7.498a10.522 10.522 0 0 1-4.293 5.774M6.228 6.228 3 3m3.228 3.228 3.65 3.65m7.894 7.894L21 21m-3.228-3.228-3.65-3.65m0 0a3 3 0 1 0-4.243-4.243m4.242 4.242L9.88 9.88"
                            />
                          </svg>
                        </label>
                      </span>
                      <input
                        id="password"
                        placeholder="Password"
                        class="pl-10 bg-white text-black border-0 rounded-md p-2 w-full focus:outline-none focus:ring-1 focus:ring-blue-500 transition ease-in-out duration-150 @error('password') ring-2 ring-error @enderror"
                        type="password"
                        name="password"
                        id="password"
                        required
                      />
                      @error('password')
                      <p class="text-red-500">{{ $message }}</p>
                      @enderror
                    </div>
                  </div>

                  <button
                    class="bg-Aqua text-white font-bold py-2 px-4 rounded-md mt-4 hover:bg-cyan-500 transition ease-in-out duration-150"
                    type="submit"
                  >
                    Login
                  </button>
                </form>
                <p class="text-white mt-4 text-center text-xs">
                  Don't have an account?
                  <a
                    class="text-xs text-white font-semibold -200 hover:underline mt-4"
                    href="/register"
                    >Register</a
                  >
                </p>
              </div>
            </div>
          </div>
          <!-- people img -->
          <img
            src="{{ asset('icons/logo.png') }}"
            class="hidden lg:flex lg:mr-8 w-96 h-96 rounded-md"
            alt=""
          />
        </div>
      </div>
    </div>

    <script>
      const _h = document.querySelectorAll('input[id="hide"]');
      _h.forEach((x) => {
        x.addEventListener("click", () => {
          let _p = document.getElementById(x.getAttribute("data-name"));
          _p.type =
            _p.type == "password" ? (_p.type = "text") : (_p.type = "password");
        });
      });
    </script>
  </body>
</html>
