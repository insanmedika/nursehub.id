<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Blog Tentang Lowongan Kerja Perawat Ke Luar Negeri</title>
        <meta name="description" content="Kumpulan Artikel seputar lowongan kerja ke luar negeri">
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
                  <div class="bg-cover bg-center h-auto xl:h-2/4 text-white py-24 px-10 xl:py-24 xl:px-24 object-fill text-center" style="background-image: url(/assets/images/kami-nursehub.jpeg)">
                    <p class="font-bold text-sm uppercase mb-5 text-white bg-primary inline-block p-2">Nursehub ID</p>
                    <h1 class="text-3xl xl:text-4xl font-bold mb-2">Blog Tentang Lowongan Kerja ke Luar Negeri</h1>
                    <p class="text-xl xl:text-xl mb-8 leading-6">Kami menghadirkan artikel - artikel tentang lowongan kerja ke luar negeri</p>
                   
                  </div> <!-- container -->
                <br>
                </div>
            </div>
            </div>
    </div>

      <div class="max-w-screen-xl mx-auto">
      <main class="mt-10">
        <div class="block md:flex md:space-x-2 px-2 lg:p-0">
          <a 
            class="mb-4 md:mb-0 w-full md:w-2/3 relative rounded inline-block" 
            style="height: 24em;"
            href="#"
          >
            <div class="absolute left-0 bottom-0 w-full h-full z-10"
              style="background-image: linear-gradient(180deg,transparent,rgba(0,0,0,.7));"></div>
            <img src="/assets/images/siap-kerja-keluar-negeri.jpeg" class="absolute left-0 top-0 w-full h-full rounded z-0 object-cover" />
            <div class="p-4 absolute bottom-0 left-0 z-20">
              <span class="px-4 py-1 bg-gray-700 text-gray-200 inline-flex items-center justify-center mb-2">Perawat</span>
              <h2 class="text-4xl font-semibold text-gray-100 leading-tight">
                Ingin Kerja Menjadi Perawat Di Jerman ? <br> Simak Ini Dulu
              </h2>
              <div class="flex mt-3">
              
                <div>
                  <p class="font-semibold text-gray-200 text-sm"> Ramdan Chandra </p>
                  <p class="font-semibold text-gray-400 text-xs"> 21 Juni, 2021 </p>
                </div>
              </div>
            </div>
          </a>
  
          <a class="w-full md:w-1/3 relative rounded" 
            style="height: 24em;"
            href="#"
          >
            <div class="absolute left-0 top-0 w-full h-full z-10"
              style="background-image: linear-gradient(180deg,transparent,rgba(0,0,0,.7));"></div>
            <img src="/assets/images/kerja-ke-jerman.jpeg" class="absolute left-0 top-0 w-full h-full rounded z-0 object-cover" />
            <div class="p-4 absolute bottom-0 left-0 z-20">
              <span class="px-4 py-1 bg-black text-gray-200 inline-flex items-center justify-center mb-2">Perawat</span>
              <h2 class="text-3xl font-semibold text-gray-100 leading-tight">Lirik Lowongan Perawat ini, Gaji hingga 3500 Euro</h2>
              <div class="flex mt-3">
               
                <div>
                  <p class="font-semibold text-gray-200 text-sm"> Ramdan Chandra </p>
                  <p class="font-semibold text-gray-400 text-xs"> 21 Juni, 2021 </p>
                </div>
              </div>
            </div>
          </div>
        </a>
  
        <div class="block lg:flex lg:space-x-2 px-2 lg:p-0 mt-10 mb-10">
          <!-- post cards -->
          <div class="w-full lg:w-2/3">
  
            <a class="block rounded w-full lg:flex mb-10"
              href="#"
            >
              <div 
                class="h-48 lg:w-48 flex-none bg-cover text-center overflow-hidden opacity-75"
                style="background-image: url('/assets/images/siap-kerja-keluar-negeri.jpeg')" 
                title="deit is very important"
              >
              </div>
              <div class="bg-white rounded px-4 flex flex-col justify-between leading-normal">
                <div>
                  <div class="mt-3 md:mt-0 text-gray-700 font-bold text-2xl mb-2">
                    Ingin Kerja Menjadi Perawat di Jerman ? Simak ini dulu
                  </div>
                  <p class="text-gray-700 text-base">
                    Tahukah anda, ternyata banyak sekali kebutuhan tenaga kerja diluar negeri khususnya kesehatan. Terutama di Negara Jerman, 
                    Kebutuhan perawat di negeri tersebut sangatlah tinggi.
                  </p>
                </div>
                <div class="flex mt-3">
                  <img src="https://randomuser.me/api/portraits/men/86.jpg"
                    class="h-10 w-10 rounded-full mr-2 object-cover" />
                  <div>
                    <p class="font-semibold text-gray-700 text-sm capitalize"> eduard franz </p>
                    <p class="text-gray-600 text-xs"> 14 Aug </p>
                  </div>
                </div>
              </div>
            </a>
  
            <div class="rounded w-full lg:flex mb-10">
              <div class="h-48 lg:w-48 flex-none bg-cover text-center overflow-hidden opacity-75"
                style="background-image: url('https://images.unsplash.com/photo-1515003197210-e0cd71810b5f?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2100&q=80')" title="deit is very important">
              </div>
              <div class="bg-white rounded px-4 flex flex-col justify-between leading-normal">
                <div>
                  <div class="mt-3 md:mt-0 text-gray-700 font-bold text-2xl mb-2">
                    Integer commodo, sapien ut vulputate viverra
                  </div>
                  <p class="text-gray-700 text-base">
                    Nam malesuada aliquet metus, ac commodo augue mollis sit amet. 
                    Nam bibendum risus sit amet metus semper consectetur.
                    Proin consequat ullamcorper eleifend.
                    Nam bibendum risus sit amet metus semper consectetur.
                  </p>
                </div>
                <div class="flex mt-3">
                  <img src="https://randomuser.me/api/portraits/women/54.jpg"
                    class="h-10 w-10 rounded-full mr-2 object-cover" />
                  <div>
                    <p class="font-semibold text-gray-700 text-sm capitalize"> Serenity Hughes </p>
                    <p class="text-gray-600 text-xs"> 14 Aug </p>
                  </div>
                </div>
              </div>
            </div>
  
            <div class="rounded w-full lg:flex mb-10">
              <div class="h-48 lg:w-48 flex-none bg-cover text-center overflow-hidden opacity-75"
                style="background-image: url('https://images.unsplash.com/photo-1512621776951-a57141f2eefd?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2100&q=80')" title="deit is very important">
              </div>
              <div class="bg-white rounded px-4 flex flex-col justify-between leading-normal">
                <div>
                  <div class="mt-3 md:mt-0 text-gray-700 font-bold text-2xl mb-2">
                    Suspendisse varius justo eu risus laoreet fermentum non aliquam dolor
                  </div>
                  <p class="text-gray-700 text-base">
                    Mauris porttitor, velit at tempus vulputate, odio turpis facilisis dui, 
                    vitae eleifend odio ipsum at odio. Phasellus luctus scelerisque felis eget suscipit. 
                  </p>
                </div>
                <div class="flex mt-3">
                  <img src="https://randomuser.me/api/portraits/men/86.jpg"
                    class="h-10 w-10 rounded-full mr-2 object-cover" />
                  <div>
                    <p class="font-semibold text-gray-700 text-sm capitalize"> eduard franz </p>
                    <p class="text-gray-600 text-xs"> 14 Aug </p>
                  </div>
                </div>
              </div>
            </div>
  
          </div>
  
          <!-- right sidebar -->
          <div class="w-full lg:w-1/3 px-3">
            <!-- topics -->
            <div class="mb-4">
              <h5 class="font-bold text-lg uppercase text-gray-700 px-1 mb-2"> Popular Topics </h5>
              <ul>
                <li class="px-1 py-4 border-b border-t border-white hover:border-gray-200 transition duration-300">
                  <a href="#" class="flex items-center text-gray-600 cursor-pointer">
                    <span class="inline-block h-4 w-4 bg-green-300 mr-3"></span>
                    Lowongan Kerja ke Jerman
                    <span class="text-gray-500 ml-auto">2 articles</span>
                    <i class='text-gray-500 bx bx-right-arrow-alt ml-1'></i>
                  </a>
                </li>
                <li class="px-1 py-4 border-b border-t border-white hover:border-gray-200 transition duration-300">
                  <a href="#" class="flex items-center text-gray-600 cursor-pointer">
                    <span class="inline-block h-4 w-4 bg-indigo-300 mr-3"></span>
                    Lowongan Kerja ke Belanda
                    <span class="text-gray-500 ml-auto">1 articles</span>
                    <i class='text-gray-500 bx bx-right-arrow-alt ml-1'></i>
                  </a>
                </li>
                <li class="px-1 py-4 border-b border-t border-white hover:border-gray-200 transition duration-300">
                  <a href="#" class="flex items-center text-gray-600 cursor-pointer">
                    <span class="inline-block h-4 w-4 bg-yellow-300 mr-3"></span>
                    Lowongan Kerja ke Inggris
                    <span class="text-gray-500 ml-auto">1 articles</span>
                    <i class='text-gray-500 bx bx-right-arrow-alt ml-1'></i>
                  </a>
                </li>
                <li class="px-1 py-4 border-b border-t border-white hover:border-gray-200 transition duration-300">
                  <a href="#" class="flex items-center text-gray-600 cursor-pointer">
                    <span class="inline-block h-4 w-4 bg-blue-300 mr-3"></span>
                    Lowongan Kerja ke Jepang
                    <span class="text-gray-500 ml-auto">0 articles</span>
                    <i class='text-gray-500 bx bx-right-arrow-alt ml-1'></i>
                  </a>
                </li>
              </ul>
            </div>
  
            <!-- divider -->
            <div class="border border-dotted"></div>
  
            <!-- subscribe -->
            <div class="p-1 mt-4 mb-4">
              <h5 class="font-bold text-lg uppercase text-gray-700 mb-2"> Subscribe </h5>
              <p class="text-gray-600">
                Subscribe to our newsletter. We deliver the best health related articles to your inbox
              </p>
              <input placeholder="your email address"
                class="text-gray-700 bg-gray-100 rounded-t hover:outline-none p-2 w-full mt-4 border" />
              <button class="px-4 py-2 bg-indigo-600 text-gray-200 rounded-b w-full capitalize tracking-wide">
                Subscribe
              </button>
            </div>
  
            <!-- divider -->
            <div class="border border-dotted"></div>
  
          </div>
  
        </div>
      </main>
      <!-- main ends here -->
  
     
      </div>
      <section class="bg-gray-700">
        <div class="max-w-screen-xl px-4 py-12 mx-auto space-y-8 overflow-hidden text-white sm:px-6 lg:px-8">
            <nav class="flex flex-wrap justify-center -mx-5 -my-2">
                <div class="px-5 py-2">
                    <a href="#" class="text-base leading-6 hover:text-gray-900">
                        Home
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
    <section class="relative mx-auto py-1 bg-white shadow sticky bottom-0 z-50">
        <div class="px-7 bg-white shadow-lg rounded-2xl sm:hidden">
            <div class="flex">
                <div class="flex-1 group">
                    <a href="#" class="flex items-end justify-center text-center mx-auto px-4 pt-2 w-full text-gray-400 group-hover:text-primary border-b-2 border-transparent group-hover:border-primary">
                        <span class="block px-1 pt-1 pb-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mx-auto" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                              </svg>
                            <span class="block text-xs pb-1">Home</span>
                        </span>
                    </a>
                </div>
               
                <div class="flex-1 group">
                    <a href="#" class="flex items-end justify-center text-center mx-auto px-4 pt-2 w-full text-gray-400 group-hover:text-primary border-b-2 border-transparent group-hover:border-primary">
                        <span class="block px-1 pt-1 pb-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mx-auto" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                              </svg>
                            <span class="block text-xs pb-1">Search</span>
                        </span>
                    </a>
                </div>
                <div class="flex-1 group">
                    <a href="#" class="flex items-end justify-center text-center mx-auto px-4 pt-2 w-full text-gray-400 group-hover:text-primary border-b-2 border-transparent group-hover:border-primary">
                        <span class="block px-1 pt-1 pb-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mx-auto" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                              </svg>
                            <span class="block text-xs pb-1">Blog</span>
                        </span>
                    </a>
                </div>
                <div class="flex-1 group">
                    <a href="#" class="flex items-end justify-center text-center mx-auto px-4 pt-2 w-full text-gray-400 group-hover:text-primary border-b-2 border-transparent group-hover:border-primary">
                        <span class="block px-1 pt-1 pb-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mx-auto" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z" />
                              </svg>
                            <span class="block text-xs pb-1">Chat</span>
                        </span>
                    </a>
                </div>
            </div>
        </div>
        </section>
    </body>
</html>
