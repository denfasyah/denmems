<!DOCTYPE html>
<html data-theme="nord">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @vite('resources/css/app.css')

   <link rel="shortcut icon" href="{{ asset('img/logo.png') }}" type="image/x-icon">
    <title>DENNMEMS</title>
    <!--     Fonts and imgs     -->
    <link
      href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700"
      rel="stylesheet"
    />
    <!-- Font Awesome imgs -->

    <!-- Nucleo imgs -->
    <link href="./assets/css/nucleo-imgs.css" rel="stylesheet" />
    <link href="./assets/css/nucleo-svg.css" rel="stylesheet" />

    <!-- Main Styling -->
    <link
      href="./assets/css/argon-dashboard-tailwind.css?v=1.0.1"
      rel="stylesheet"
    />
  </head>

  <body
    class="m-0 font-sans text-base antialiased font-normal dark:bg-slate-900 leading-default bg-gray-50 text-slate-500"
  >
  <div class="absolute w-full bg-blue-800 min-h-75"></div>

  @include('partials.sidenav')
  <main
      class="relative h-full max-h-screen transition-all duration-200 ease-in-out xl:ml-68 rounded-xl"
    >
  @include('partials.navbar')
  @yield('content')
  </main>
  @include('partials.uiconfig')

  </body>
  <!-- Popper -->
  <script src="https://unpkg.com/@popperjs/core@2"></script>
  <script
    src="https://kit.fontawesome.com/42d5adcbca.js"
    crossorigin="anonymous"
  ></script>
  <!-- plugin for charts  -->
  <script src="./assets/js/plugins/chartjs.min.js" async></script>
  <!-- plugin for scrollbar  -->
  <script src="./assets/js/plugins/perfect-scrollbar.min.js" async></script>
  <!-- main script file  -->
  <script src="./assets/js/argon-dashboard-tailwind.js?v=1.0.1" async></script>
</html>