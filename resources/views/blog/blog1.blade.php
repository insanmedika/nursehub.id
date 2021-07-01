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
                  <div class="bg-cover bg-center h-auto xl:h-2/4 text-white py-24 px-10 xl:py-24 xl:px-24 object-fill text-center" style="background-image: url(/assets/images/kami-nursehub.jpeg)">
                    <p class="font-bold text-sm  uppercase mb-5 text-white bg-primary inline-block p-2">Perawat</p>
                    <h1 class="text-3xl xl:text-4xl font-bold mb-2">Ingin Kerja Menjadi Perawat Di Jerman ? Simak Ini Dulu</h1>
                   
                  </div> <!-- container -->
                <br>
                </div>
            </div>
            </div>
    </div>

      <div class="max-w-screen-xl mx-auto">
        <article class="py-1 px-4">
          
          
          <div class="max-w-3xl mx-auto">
            <p class="text-left max-w-3xl">
              <span>Juni 22, by</span>
              <a class="ml-1 text-indigo-600 hover:underline" href="/">Ramdan CM</a>
            </p>
            <p class="mb-4 mt-4">
              Tenaga kerja kesehatan, terutama perawat kini sedang banyak dibutuhkan di luar negeri. Banyak sekali negara - negara maju seperti Jerman, Jepang dan juga Belanda membutuhkan tenaga perawat.
            </p>
            <p>
              Karena tingginya angka lansia di negara maju, banyak sekali kerja sama yang dilakukan negara maju dengan Indonesia. Salah satunya adalah Nursehub ID. Nursehub ID merupakan hasil kerjasama antara Insan Medika dengan APGLOBAL. Skema kerja sama ini menggunakan skema kerja triple win. Melalui kerja sama ini, diharapkan mempermudah perawat yang berasal dari Indonesia untuk bekerja di Jerman
            </p>
          </div>
        </article>
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
