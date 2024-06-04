<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <nav
          :class="isVisible ? 'top-0' : '-top-[80px]'"
          class="fixed w-full transition duration-300 z-10 h-[80px]"
        >
          <div
            class="container mx-auto justify-between py-[21px] lg:px-0 px-5 items-center flex"
          >
            <div
              class="bg-slate-900/5 px-1.5 py-1 rounded-[10px] lg:flex hidden items-center justify-center gap-x-1.5"
            >
              <img src="./assets/svgs/star.svg" alt="" />
              <span class="text-sm">Book More Events, Risk Free!</span>
              <img src="./assets/svgs/star.svg" alt="" />
            </div>
            <h1 class="text-4xl font-normal text-blue-700 font-modak">partydip</h1>
            <div class="px-2 py-1.5 bg-rose-200 rounded-[10px]">
              <span class="text-sm">Launching Summer 2024</span>
            </div>
          </div>
        </nav>
    </body>
</html>
