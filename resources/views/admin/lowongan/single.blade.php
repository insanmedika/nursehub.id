<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="google-site-verification" content="YiqTH3wxYSM6O7v5nsl5EayhiG8y4vbwOLSQHHMxNiM" />
        <title>{{$post[0]->name}} Terbaru | Nursehub ID</title>
        <meta name="description" content="Kami menyediakan {{$post[0]->name}} Terbaru dan Terupdate. Kunjungi Nursehub.id sekarang juga">
        <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css">
        <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
        <link rel="preload" href="{{ asset('css/app.css') }}" as="style">
        <link rel="preload" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" as="fonts">
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
          @include('layouts.navbar')
        </div>
      </div>
     


    <div class="mx-auto">
        <!-- Slides -->
            <div class="flex flex-col w-full overflow-hidden">
            <div class="swiper-slide">
                <div id="slider-1" class="mx-auto">
                  <div class="bg-cover bg-center h-auto xl:h-3/4 text-white py-24 px-10 xl:py-36 xl:px-48 object-fill text-center" style="background-image: url(/assets/images/kami-nursehub.jpeg)">
                    <p class="font-bold text-sm uppercase mb-5 text-white bg-primary inline-block p-2">Lowongan {{$post[0]->job_position}}</p>
                    <h1 class="text-3xl xl:text-4xl font-bold mb-2">{{$post[0]->name}}</h1>
                    <h2 class="text-xl xl:text-2xl font-medium mb-2">Kami Mencari Kandidat Terbaik untuk bekerja ke Luar Negeri</h2>
                  </div> <!-- container -->
                <br>
                </div>
            </div>
            </div>
    </div>
    <section class="w-full mx-auto container -mt-6 lg:mt-5">
      <div class="lg:flex gap-5 grid lg:grid-cols-2 container">
        <div class="lg:w-4/12">
          <div class="border-2 py-6  flex flex-col justify-center sm:py-12">
  
            <div class="py-3 text-center sm:max-w-xl sm:mx-auto  px-5 mt-10">
              <img src="/assets/images/logo.png" alt="" class="w-48 mx-auto">
              <hr class="mt-5">
              <h2 class="text-xl font-bold">{{$post[0]->name}}</h2>
              <p class="text-lg font-medium">{{$post[0]->job_type}}</p>
              <a href="https://forms.gle/v1jtcBxoKs5oWm7s9" class="inline-flex justify-center py-2 w-36 px-4 border border-transparent shadow-sm text-lg font-medium rounded-md text-white bg-primary hover:bg-primary focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary">Apply</a>
            </div>
            <div class="table w-full px-5">
              <div class="table-row-group">
                <br>
                <div class="table-row mb-5">
                  <div class="table-cell align-middle inline-block">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-700" viewBox="0 0 20 20" fill="currentColor">
                      <path d="M4 3a2 2 0 100 4h12a2 2 0 100-4H4z" />
                      <path fill-rule="evenodd" d="M3 8h14v7a2 2 0 01-2 2H5a2 2 0 01-2-2V8zm5 3a1 1 0 011-1h2a1 1 0 110 2H9a1 1 0 01-1-1z" clip-rule="evenodd" />
                    </svg>
                  </div>
                  <div class="table-cell">
                     Deadline of application
                    <br><b>{{$post[0]->deadline}}</b>
                  </div>
                </div>
                <br>
                <div class="table-row ">
                  <div class="table-cell align-middle inline-block">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-700" viewBox="0 0 20 20" fill="currentColor">
                      <path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z" />
                      <path fill-rule="evenodd" d="M4 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v11a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm3 4a1 1 0 000 2h.01a1 1 0 100-2H7zm3 0a1 1 0 000 2h3a1 1 0 100-2h-3zm-3 4a1 1 0 100 2h.01a1 1 0 100-2H7zm3 0a1 1 0 100 2h3a1 1 0 100-2h-3z" clip-rule="evenodd" />
                    </svg>
                  </div>
                  <div class="table-cell">
                     Job Type
                    <br><b>{{$post[0]->job_type}}</b>
                  </div>
                </div>
                <br>
                <div class="table-row ">
                  <div class="table-cell align-middle inline-block">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-700" viewBox="0 0 20 20" fill="currentColor">
                      <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd" />
                    </svg>
                  </div>
                  <div class="table-cell">
                     Location
                    <br><b>{{$post[0]->location}}</b>
                  </div>
                </div>
                <br>
                <div class="table-row ">
                  <div class="table-cell align-middle inline-block">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-700" viewBox="0 0 20 20" fill="currentColor">
                      <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd" />
                    </svg>
                  </div>
                  <div class="table-cell">
                     Job Position
                    <br><b>{{$post[0]->job_position}}</b>
                  </div>
                </div>
                <br>
                <div class="table-row ">
                  <div class="table-cell align-middle inline-block">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                      <path d="M8.433 7.418c.155-.103.346-.196.567-.267v1.698a2.305 2.305 0 01-.567-.267C8.07 8.34 8 8.114 8 8c0-.114.07-.34.433-.582zM11 12.849v-1.698c.22.071.412.164.567.267.364.243.433.468.433.582 0 .114-.07.34-.433.582a2.305 2.305 0 01-.567.267z" />
                      <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-13a1 1 0 10-2 0v.092a4.535 4.535 0 00-1.676.662C6.602 6.234 6 7.009 6 8c0 .99.602 1.765 1.324 2.246.48.32 1.054.545 1.676.662v1.941c-.391-.127-.68-.317-.843-.504a1 1 0 10-1.51 1.31c.562.649 1.413 1.076 2.353 1.253V15a1 1 0 102 0v-.092a4.535 4.535 0 001.676-.662C13.398 13.766 14 12.991 14 12c0-.99-.602-1.765-1.324-2.246A4.535 4.535 0 0011 9.092V7.151c.391.127.68.317.843.504a1 1 0 101.511-1.31c-.563-.649-1.413-1.076-2.354-1.253V5z" clip-rule="evenodd" />
                    </svg>
                  </div>
                  <div class="table-cell">
                     Salary
                    <br><b>{{$post[0]->salary}}&nbsp;{{$post[0]->type_salary}}</b>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="w-full mb-5">
          <div class="border-2 py-6 px-5 flex  flex-col justify-center sm:py-12">
            <h3 class="text-xl font-bold">Job Description</h3>
            <p class="text-lg">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat, sed nesciunt impedit libero inventore reiciendis natus quod est sint voluptates enim rerum ad eaque omnis cumque obcaecati? Praesentium, quos sit.</p>
            <hr class="mt-5 mb-5">
            <h3 class="text-xl font-bold">Term and Condition</h3>
            <p class="text-lg whitespace-pre-line">{{$post[0]->term_condition}}</p>
            <hr class="mt-5 mb-5">
            <h3 class="text-xl font-bold">Benefit</h3>
            <p class="text-lg whitespace-pre-line">{{$post[0]->benefit}}</p>
            <hr class="mt-5 mb-5">
            <h3 class="text-xl font-bold">Candidat Requiretments</h3>
            <p class="text-lg whitespace-pre-line">{{$post[0]->requirement}}</p>
            
          </div>
          <div class="border-2 py-6 px-10 flex mt-5 flex-col justify-center sm:py-12">
            <h3 class="text-xl font-bold">Related Job</h3>
            <hr class="mb-5 mt-5">
            @if(count($lainnya)<1)
                <h3>Lowongan Tidak Tersedia</h3>
              @endif
            <div class="grid md:grid-cols-2 px-10">
              @foreach ($lainnya as $data)
                  
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
              
              
            </div>
            
          </div>
        </div>
        <div>
          
        </div>
      </div>
    </section>
        <section class="bg-gray-700">
            <div class="max-w-screen-xl px-4 py-12 mx-auto space-y-8 overflow-hidden text-white sm:px-6 lg:px-8">
                <nav class="flex flex-wrap justify-center -mx-5 -my-2">
                    <div class="px-5 py-2">
                        <a href="/" class="text-base leading-6 hover:text-gray-900">
                            Home
                        </a>
                    </div>
                    <div class="px-5 py-2">
                        <a href="/blog" class="text-base leading-6 hover:text-gray-50">
                            Blog
                        </a>
                    </div>
                    <div class="px-5 py-2">
                        <a href="/search" class="text-base leading-6 hover:text-gray-50">
                            Lowongan
                        </a>
                    </div>
                    <div class="px-5 py-2">
                        <a href="https://wa.me/6281336696699" class="text-base leading-6 hover:text-gray-50">
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
            <script>
              function closeAlert(event){
                let element = event.target;
                while(element.nodeName !== "BUTTON"){
                  element = element.parentNode;
                }
                element.parentNode.parentNode.removeChild(element.parentNode);
              }
            </script>
            <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    </body>
</html>
