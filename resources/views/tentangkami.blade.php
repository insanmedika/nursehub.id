<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css">
        <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
        
        <script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
        <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <!-- Styles -->
        

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
      <div class="relative mx-auto py-1 bg-gray-700 sticky top-0 z-50">
        <div x-data="{ open: false }" class="flex flex-col max-w-screen-xl px-4 mx-auto md:items-center md:justify-between md:flex-row md:px-6 lg:px-8">
          <div class="p-4 flex flex-row items-center justify-between">
            <a href="/" class="text-lg font-semibold tracking-widest text-gray-900 uppercase rounded-lg dark-mode:text-white focus:outline-none focus:shadow-outline">
              <div class="flex flex-row">
                <img src="/assets/images/logo.png" alt="Logo Insan Medika" class="w-auto h-6 mx-auto"> 
              </div>
            </a>
            <div class="md:hidden">

            </div>
            <button class="md:hidden rounded-lg focus:outline-none focus:shadow-outline sm:ml-20">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="white">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
              </svg>
            </button>
            <button class="md:hidden rounded-lg focus:outline-none focus:shadow-outline" @click="open = !open">
              <svg fill="white" viewBox="0 0 20 20" class="w-6 h-6">
                <path x-show="!open" fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                <path x-show="open" fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
              </svg>
            </button>
          </div>
          <nav :class="{'flex': open, 'hidden': !open}" class="flex-col flex-grow pb-4 md:pb-0 hidden md:flex md:justify-end md:flex-row">
            <a class="px-4 py-2 mt-2 text-sm font-black text-white bg-transparent rounded-lg md:mt-0 md:ml-4 hover:text-white focus:text-gray-900 hover:bg-primary" href="/">Home</a>
            <a class="px-4 py-2 mt-2 text-sm font-black text-white bg-transparent rounded-lg md:mt-0 md:ml-4 hover:text-white focus:text-gray-900 hover:bg-primary" href="/blog">Blog</a>
            <a class="px-4 py-2 mt-2 text-sm font-black text-white bg-transparent rounded-lg md:mt-0 md:ml-4 hover:text-white focus:text-gray-900 hover:bg-primary" href="/formulir">Lowongan</a>
            <a class="px-4 py-2 mt-2 text-sm font-black text-white bg-transparent rounded-lg md:mt-0 md:ml-4 hover:text-white focus:text-gray-900 hover:bg-primary" href="/tentang-kami">Tentang Kami</a>
            </div>    
          </nav>
        </div>
      </div>
     


    <div class="mx-auto">
        <!-- Slides -->
            <div class="flex flex-col w-full overflow-hidden">
            <div class="swiper-slide">
                <div id="slider-1" class="mx-auto">
                  <div class="bg-cover bg-center h-auto xl:h-3/4 text-white py-24 px-10 xl:py-36 xl:px-48 object-fill text-center" style="background-image: url(/assets/images/kami-nursehub.jpeg)">
                    <p class="font-bold text-sm uppercase mb-5 text-white bg-primary inline-block p-2">Lowongan Perawat dan Caregiver</p>
                    <h1 class="text-3xl xl:text-4xl font-bold mb-2">Formulir Pendaftaran Perawat ke Luar Negeri</h1>
                    <p class="text-xl xl:text-xl mb-8 leading-6">Isilah Form dibawah ini dengan benar</p>
                   
                  </div> <!-- container -->
                <br>
                </div>
            </div>
            </div>
    </div>
    
    </body>
</html>
