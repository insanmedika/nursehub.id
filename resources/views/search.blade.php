<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Cari Lowongan Kerja ke Luar Negeri Terbaik hanya di Nursehub ID</title>
        <meta name="description" content="Cari Lowongan sesuai passionmu dengan gaji terbaik yang bisa kamu dapatkan. Kunjungi Nursehub ID sekarang juga">
        <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css">
        <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
        <meta name="google-site-verification" content="YiqTH3wxYSM6O7v5nsl5EayhiG8y4vbwOLSQHHMxNiM" />
        <script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
        <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
        <link rel="preload" href="{{ asset('css/app.css') }}" as="style">
        <link rel="preload" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" as="fonts">
        
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <!-- Styles -->
        

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
        <!-- Google Tag Manager -->
        <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-MCPZTXG');</script>
        <!-- End Google Tag Manager -->
    </head>
    <body class="antialiased">
      <!-- Google Tag Manager (noscript) -->
      <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MCPZTXG"
      height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
      <!-- End Google Tag Manager (noscript) -->
      <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
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
            <button onclick="window.location.href='tel:02154342314'" class="md:hidden rounded-lg focus:outline-none focus:shadow-outline sm:ml-20">
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
          @include('layouts.navbar')

        </div>
      </div>
     
      <!-- Section 16 -->
      <section class="relative" style="background-image: url('/assets/images/search-jobs.jpeg')">
          <div class="absolute inset-0 bg-gradient-to-b from-black to-transparent opacity-30"></div>
      
          <div class="relative z-20 px-4 py-24 mx-auto text-center text-white max-w-7xl lg:py-32">
              <div class="flex flex-wrap text-white">
                  <div class="relative w-full px-4 mx-auto text-center xl:flex-grow-0 xl:flex-shrink-0">
      
                      <h1 class="mt-0 mb-2 text-4xl font-bold text-white sm:text-5xl lg:text-7xl">Search Jobs</h1>
                      <p class="mt-0 mb-4 text-base text-white sm:text-lg lg:text-xl">
                          Find the best jobs at Nursehub ID
                      </p>
      
                  </div>
              </div>
          </div>
      
          <div class="relative z-30 h-48 px-10 bg-white lg:h-32">
              <form action="/search" method="post" class="flex flex-col items-center h-auto max-w-lg p-6 mx-auto space-y-3 overflow-hidden transform -translate-y-12 bg-white rounded-lg shadow-md lg:h-24 lg:max-w-6xl lg:flex-row lg:space-y-0 lg:space-x-3">
                @csrf  
                <div class="w-full h-12 border-2 border-gray-200 rounded-lg lg:border-0 lg:w-auto lg:flex-1">
                      <input name="name" type="text" class="w-full h-full px-4 font-medium text-gray-700 rounded-lg sm:text-lg focus:bg-gray-50 focus:outline-none" placeholder="What Are You Searching For?">
                  </div>
                  <div class="w-0.5 bg-gray-100 h-10 lg:block hidden"></div>
                  <div class="relative flex items-center w-full h-12 border-2 border-gray-200 rounded-lg lg:w-auto lg:border-0 lg:flex-1">
                      <input name="location" type="text" class="w-full h-full px-4 font-medium text-gray-700 rounded-lg sm:text-lg focus:bg-gray-50 focus:outline-none" placeholder="Location?">
                      <svg class="absolute right-0 w-6 h-6 mr-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                  </div>
                  <div class="w-full h-full lg:w-auto">
                      <button type="submit" class="bg-gray-700 inline-flex items-center justify-center w-full h-full px-4 py-2 text-base font-medium leading-6 text-white whitespace-no-wrap bg-primary border border-transparent rounded-md shadow-sm lg:w-64">SEARCH</button>
                  </div>
              </form>
          </div>
      
      </section>
      <section class="relative container mx-auto py-2">
      
        <div class="border-2 py-6 px-10 flex flex-col justify-center sm:py-12">
          <h3 class="text-xl font-bold">Related Job</h3>
          <hr class="mb-5 mt-5">
          @if(count($all)<1)
              <h3>Lowongan Tidak Tersedia</h3>
            @endif
          <div class="grid md:grid-cols-2 px-10">
          @if(count($_POST)>0)
          @foreach ($search as $data)
                  
              <div class="mb-5">
                <h3 class="font-bold text-xl">{{$data->name}}</h3> 
                <p class="font-medium text-gray-500">{{$data->job_position}}, Work in {{$data->location}}</p>
                <p class="font-medium text-gray-500">{{$data->salary}} &nbsp; {{$data->type_salary}}</p>
                <p class="font-medium text-gray-500">Recruited By Nursehub.id</p></div>
              <div class="align-middle inline-block mx-auto right-0">
                <a href="/lowongan/{{$data->slug_judul}}" class="inline-flex justify-center py-2 w-36 px-4 border border-transparent shadow-sm text-lg font-medium rounded-md text-white bg-primary hover:bg-primary focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary">Apply</a>
              </div>
              @endforeach
          @else
          @foreach ($all as $data)
                  
              <div class="mb-5">
                <h3 class="font-bold text-xl">{{$data->name}}</h3> 
                <p class="font-medium text-gray-500">{{$data->job_position}}, Work in {{$data->location}}</p>
                <p class="font-medium text-gray-500">{{$data->salary}} &nbsp; {{$data->type_salary}}</p>
                <p class="font-medium text-gray-500">Recruited By Nursehub.id</p></div>
              <div class="align-middle inline-block mx-auto right-0">
                <a href="/lowongan/{{$data->slug_judul}}" class="inline-flex justify-center py-2 w-36 px-4 border border-transparent shadow-sm text-lg font-medium rounded-md text-white bg-primary hover:bg-primary focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary">Apply</a>
                <hr class="mb-5 mt-5">

              </div>
              @endforeach
              @endif
          </div>
          
        </div>
    </section>
        <section class="bg-gray-700">
            <div class="max-w-screen-xl px-4 py-12 mx-auto space-y-8 overflow-hidden text-white sm:px-6 lg:px-8">
                <nav class="flex flex-wrap justify-center -mx-5 -my-2">
                    <div class="px-5 py-2">
                        <a href="#" class="text-base leading-6 hover:text-gray-900">
                            Dashboard
                        </a>
                    </div>
                    <div class="px-5 py-2">
                        <a href="#" class="text-base leading-6 hover:text-gray-50">
                            Blog
                        </a>
                    </div>
                    <div class="px-5 py-2">
                        <a href="#" class="text-base leading-6 hover:text-gray-50">
                            Tentang Kami
                        </a>
                    </div>
                    <div class="px-5 py-2">
                        <a href="#" class="text-base leading-6 hover:text-gray-50">
                            Hubungi Kami
                        </a>
                    </div>
                   
                </nav>
                <div class="flex justify-center mt-8 space-x-6">
                   
                    <a href="https://instagram.com/nursehub.id" class="text-gray-400 hover:text-gray-500">
                        <span class="sr-only">Instagram</span>
                        <svg class="w-6 h-6" aria-hidden="true" fill="white" viewBox="0 0 24 24">
                            <path fill-rule="evenodd" d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z" clip-rule="evenodd"></path>
                        </svg>
                    </a>
                    
                </div>
                <p class="mt-8 text-base leading-6 text-center text-white">
                    © 2021 Nursehub ID. All rights reserved.
                </p>
            </div>
        </section>
        @include('layouts.menu')
       
    </body>
</html>
