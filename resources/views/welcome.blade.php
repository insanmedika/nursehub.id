<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Lowongan Kerja ke Perawat Ke Luar Negeri dan Dapatkan Penghasilan Tinggi | Nursehub ID</title>
        <meta name="description" content="Jadikan mimpimu kenyataan untuk bekerja ke luar negeri dan dapatkan penghasilan hingga 3500 Euro">
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
                    <div class="bg-cover bg-center h-auto xl:h-3/4 text-white py-24 px-10 xl:py-36 xl:px-48 object-fill" style="background-image: url(/assets/images/kami-nursehub.jpeg)">
                    <p class="font-bold text-sm uppercase mb-5 text-white bg-primary inline-block p-2">Perawat</p>
                    <h1 class="text-3xl xl:text-4xl font-bold mb-2 sm:w-3/4">Jadilah Perawat di Jerman dan dapatkan penghasilan hingga 3500 Euro / Bulan</h1>
                    <p class="text-lg xl:text-xl mb-8 leading-6 sm:w-3/4"><b>Daftar sekarang</b> dan jadikan mimpimu menjadi kenyataan bersama <b>Nursehub ID</b> untuk bekerja menjadi Perawat di Jerman</p>
                    <a href="/formulir" rel="nofollow" class="bg-primary py-4 px-8 text-white font-bold uppercase text-sm rounded hover:bg-gray-200 hover:text-gray-800">Daftar Sekarang</a>
                </div> <!-- container -->
                <br>
                </div>
            </div>
            </div>
    </div>
    <section class="mx-auto container mt-5">
        <h2 class="text-3xl font-bold text-center">List Lowongan Kerja ke Luar Negeri</h2>
        <hr class="border-primary mb-5 mt-2 border-2">
        <div x-data="{swiper: null}"
            x-init="swiper = new Swiper($refs.container, {
                loop: true,
                slidesPerView: 1,
                spaceBetween: 0,
            
                breakpoints: {
                    640: {
                    slidesPerView: 1,
                    spaceBetween: 0,
                    },
                    768: {
                    slidesPerView: 2,
                    spaceBetween: 0,
                    },
                    1024: {
                    slidesPerView: 3,
                    spaceBetween: 0,
                    },
                },
                })"
            class="relative w-full sm:w-11/12 mt-5 mx-auto flex flex-row"
            >


  <div class="swiper-container" x-ref="container">
    <div class="swiper-wrapper">
      <!-- Slides -->
     
      <div class="swiper-slide">
        <div class="flex flex-col rounded-2xl ">
          <div class="swiper-slide rounded-2xl">
            <div class="flex flex-col rounded-2xl overflow-hidden">
                <div class="mx-5 h-full w-full grid place-content-center">
                    <div class="bg-primary rounded-2xl text-white p-8 text-center h-72 w-full mx-auto">
                      <h3 class="text-3xl mb-3">Lowongan Kerja Perawat ke Jerman</h3>
                      <p class="text-lg mt-2">Dapatkan peluang bekerja ke Jerman bersama Nushub ID</p>
               
                    </div>
                    <div class="bg-white py-8 px-10 text-center rounded-md shadow-lg transform -translate-y-20 sm:-translate-y-24 w-10/12 mx-auto">
                      <h2 class="font-semibold text-2xl mb-6">Persyaratan</h2>
                        <div>
                            <ul class="list-disc text-left">
                                <li>Lulusan D3 Keperawatan / S1 Keperawatan</li>
                                <li>Sehat Jasmani dan Rohani</li>
                                <li>Siap Belajar Bahasa Jerman Dulu sebelum diberangkatkan</li>
                                <li>Siap Menitipkan Deposite sebelum berangkat. Deposite akan dikembalikan jika perawat sudah tiba di Jerman</li>
                            </ul>
                        </div>
                      <button onclick="window.location.href='/formulir'" class="mt-5 rounded-md bg-gradient-to-r from-blue-400 to-indigo-500 text-xl text-white pt-3 pb-4 px-8 inline">Daftar Sekarang</button>
                    </div>
                </div>
            </div>
          </div>
          
        </div>
      </div>
      <div class="swiper-slide">
        <div class="flex flex-col rounded-2xl overflow-hidden">
          <div class="swiper-slide rounded-2xl">
            <div class="flex flex-col rounded-2xl overflow-hidden">
                <div class="mx-5 h-full w-full grid place-content-center">
                    <div class="bg-primary rounded-2xl text-white p-8 text-center h-72 w-full mx-auto">
                      <h3 class="text-3xl mb-3">Lowongan Kerja Perawat ke UK</h3>
                      <p class="text-lg mt-2">Dapatkan peluang bekerja ke UK bersama Nushub ID</p>
               
                    </div>
                    <div class="bg-white py-8 px-10 text-center rounded-md shadow-lg transform -translate-y-20 sm:-translate-y-24 w-10/12 mx-auto">
                      <h2 class="font-semibold text-2xl mb-6">Persyaratan</h2>
                        <div>
                            <ul class="list-disc text-left">
                                <li>Lulusan D3 Keperawatan / S1 Keperawatan</li>
                                <li>Sehat Jasmani dan Rohani</li>
                                <li>Siap Belajar Bahasa Inggris Dulu sebelum diberangkatkan</li>
                                <li>Siap Menitipkan Deposite sebelum berangkat. Deposite akan dikembalikan jika perawat sudah tiba di UK</li>
                            </ul>
                        </div>
                      <button class="mt-5 rounded-md bg-gradient-to-r from-blue-400 to-indigo-500 text-xl text-white pt-3 pb-4 px-8 inline">Belum Tersedia</button>
                    </div>
                </div>
            </div>
          </div>
          
        </div>
      </div>
      <div class="swiper-slide">
        <div class="flex flex-col rounded-2xl overflow-hidden">
          <div class="swiper-slide rounded-2xl">
            <div class="flex flex-col rounded-2xl overflow-hidden">
                <div class="mx-5 h-full w-full grid place-content-center">
                    <div class="bg-primary rounded-2xl text-white p-8 text-center h-72 w-full mx-auto">
                      <h3 class="text-3xl mb-3">Lowongan Kerja Perawat ke Belanda</h3>
                      <p class="text-lg mt-2">Dapatkan peluang bekerja ke Belanda bersama Nushub ID</p>
               
                    </div>
                    <div class="bg-white py-8 px-10 text-center rounded-md shadow-lg transform -translate-y-20 sm:-translate-y-24 w-10/12 mx-auto">
                      <h2 class="font-semibold text-2xl mb-6">Persyaratan</h2>
                        <div>
                            <ul class="list-disc text-left">
                                <li>Lulusan D3 Keperawatan / S1 Keperawatan</li>
                                <li>Sehat Jasmani dan Rohani</li>
                                <li>Siap Belajar Bahasa Belanda Dulu sebelum diberangkatkan</li>
                                <li>Siap Menitipkan Deposite sebelum berangkat. Deposite akan dikembalikan jika perawat sudah tiba di Belanda</li>
                            </ul>
                        </div>
                      <button class="mt-5 rounded-md bg-gradient-to-r from-blue-400 to-indigo-500 text-xl text-white pt-3 pb-4 px-8 inline">Belum Tersedia</button>
                    </div>
                </div>
            </div>
          </div>
          
        </div>
      </div>
      
      <div>
        <h3></h3>
      </div>
    </div>
  </div>
  
    </section>
    <section class="relative py-16 bg-white min-w-screen animation-fade animation-delay">
        <div class="container px-0 px-8 mx-auto sm:px-12 xl:px-5">
            
            <h2 class="text-3xl font-bold text-center">Frequently Asked Questions</h2>
            <hr class="border-primary mb-5 mt-2 border-2">
            <div class="w-full px-6 py-6 mx-auto mt-10 bg-white border border-gray-200 rounded-lg sm:px-8 md:px-12 sm:py-8 sm:shadow lg:w-5/6 xl:w-2/3">
                <h3 class="text-lg font-bold text-primary sm:text-xl md:text-2xl">Bagaimana cara daftar perawat ke luar negeri ?</h3>
                <p class="mt-2 text-base text-gray-600 sm:text-lg md:text-normal">
                    Jika anda berminat untuk menjadi perawat ke luar negeri bersama Nursehub ID. Anda bisa langsung klik daftar sekaran dan isi formulir yang kami berikan. Setelah anda mengisi formulir, kami akan melakukan validasi apakah anda sudah memenuhi persyaratan untuk bisa bekerja di luar negeri
                </p>
            </div>
            <div class="w-full px-6 py-6 mx-auto mt-10 bg-white border border-gray-200 rounded-lg sm:px-8 md:px-12 sm:py-8 sm:shadow lg:w-5/6 xl:w-2/3">
                <h3 class="text-lg font-bold text-primary sm:text-xl md:text-2xl">Apa maksud adanya Deposite ?</h3>
                <p class="mt-2 text-base text-gray-600 sm:text-lg md:text-normal">
                    Deposite artinya anda harus menyimpan uang terlebih dahulu sebagai jaminan sebelum diberangkatkan ke Jerman. Jika anda sudah tiba ke negara tujuan, uang anda akan kami kembalikan 100%
                </p>
            </div>
            <div class="w-full px-6 py-6 mx-auto mt-10 bg-white border border-gray-200 rounded-lg sm:px-8 md:px-12 sm:py-8 sm:shadow lg:w-5/6 xl:w-2/3">
                <h3 class="text-lg font-bold text-primary sm:text-xl md:text-2xl">Apa saja faktor penentu perawat bisa diberangkatkan ke luar negeri</h3>
                <p class="mt-2 text-base text-gray-600 sm:text-lg md:text-normal">
                    Perawat merupakan warga negara Indonesia yang taat dan sudah lulus sertifikasi bahasa negara tujuan.
                </p>
            </div>
            <div class="w-full px-6 py-6 mx-auto mt-10 bg-white border border-gray-200 rounded-lg sm:px-8 md:px-12 sm:py-8 sm:shadow lg:w-5/6 xl:w-2/3">
                <h3 class="text-lg font-bold text-primary sm:text-xl md:text-2xl">Berapa lama saya harus belajar bahasa ?</h3>
                <p class="mt-2 text-base text-gray-600 sm:text-lg md:text-normal">
                    Jika anda masih awam dan belum mengerti sama sekali, biasanya butuh antara 4 - 6 bulan untuk bisa menguasai suatu bahasa
                </p>
            </div>
        </div>
    </section>
       
        <section class="w-full py-12 bg-white sm:py-20" x-data="{ page: 1, total_pages: 3 }">
            <div class="flex flex-col items-center justify-center mx-auto xl:flex-row max-w-7xl">
                <div class="relative flex flex-col items-start justify-center w-full h-full max-w-2xl px-6 mx-auto xl:max-w-none xl:w-2/5">
        
                    <h2 class="text-3xl font-bold leading-none text-gray-900 sm:w-full sm:text-6xl text-3">Blog tentang Lowongan Kerja</h2>
                    <div class="w-20 h-1 mt-3 ml-1 bg-primary rounded-full"></div>
                    <div class="relative flex mt-6 space-x-2">
                        <div @click="if(page > 1){ page-=1 }" class="flex items-center justify-center w-10 h-10 text-white bg-primary rounded cursor-pointer hover:bg-primary">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                        </div>
                        <div @click="if(page < total_pages){ page+=1 }" class="flex items-center justify-center w-10 h-10 text-white bg-primary rounded cursor-pointer hover:bg-primary">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        </div>
                    </div>
                    <svg class="absolute top-0 right-0 hidden w-auto h-24 mt-20 text-primary fill-current sm:block xl:mr-5 xl:-mt-24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 180 74"><defs></defs><g fill-rule="nonzero"><path d="M43.13 71.58c.29-.025.58-.025.87 0 .3 0 .71-.14 1-.17.54 0 1.08-.19 1.62-.23l2.3-.17 4.65-.25 6.47-.26h.68c3-.15 6-.3 9-.53 1.68-.14 5.83-.49 6.21-.52.63 0 4.36-.53 5-.63.25 0 1.95-.35 3.35-.58-.09-1-.55-1.77-.62-2.71-4.33.66-8.7 1.18-13 1.51-5.34.4-10.71.66-16.08 1l-7 .39c-1.4 0-2.82-.31-4.17-.26a2 2 0 00-1 .31c-.3.21-.4.16-.5.3a1.18 1.18 0 00-.12.81c.06.84.66 2.11 1.34 1.99zM106.33 62.04l.5-.23c.31-.13.72-.33 1.16-.56.88-.46 1.94-1 2.59-1.38l.56-.31a31.87 31.87 0 002.81-1.74 48.77 48.77 0 0014-13.59 38.22 38.22 0 004.34-8.87 28.9 28.9 0 001.51-9.86 31.56 31.56 0 00-3.3-13.46 23.9 23.9 0 00-3.62-5.22 20.47 20.47 0 00-2.38-2.22c-.42-.34-.89-.63-1.33-.94a10.88 10.88 0 00-1.38-.85A18.21 18.21 0 00109.16.92c-.5.11-1 .22-1.45.33-.45.11-.88.31-1.3.47-.42.16-.86.3-1.27.49-.41.19-.8.41-1.21.61A27.71 27.71 0 0098.5 6.5l-1.51 1.42-1.59 1.84c-.51.66-1 1.36-1.44 2-.44.64-.75 1.28-1 1.78a22.66 22.66 0 00-2 5 23.44 23.44 0 00-.82 5.31 26.71 26.71 0 00.72 7c.22 1.16.65 2.26 1 3.38a33.94 33.94 0 001.41 3.21 36.93 36.93 0 008.44 10.95 47.5 47.5 0 005.77 4.43 35.5 35.5 0 0010.02 4.59 86.41 86.41 0 0010 2.09 84.59 84.59 0 0018.2.51c4.8-.31 9.33-.8 13.8-1.39 2.25-.3 4.49-.63 6.76-1l3.43-.59.83-.11a15.59 15.59 0 001.98-.25 46 46 0 014.66-.82c.69-.12 2.24-.87 2.34-1.35.06-.28-.19-.56-.15-.85.09-.65-1.16-1.47-2.06-1.25-.9.22-1.89.51-2.84.73-.95.22-2 .37-3 .62a9.82 9.82 0 00-1.16.38c-.19.06-.39.13-.58.18l-.29.08-.69.12c-3.55.62-7 1.3-10.81 1.68-5.54.53-11.42 1.31-17.15 1.37a73.61 73.61 0 01-18.84-1.81 41.54 41.54 0 01-16.81-8.06 37.32 37.32 0 01-7.9-8.78 27.1 27.1 0 01-4.12-10.8C91.25 17.6 98.76 6.5 108.89 3.76a15.83 15.83 0 0114.56 3.4 23.24 23.24 0 017.36 13.74 28.32 28.32 0 01.29 8 28.05 28.05 0 01-2.06 7.7 37.16 37.16 0 01-5 8.63 39.08 39.08 0 01-7 7l-.87.66-.14.11c-1.69 1.29-3.61 2.56-5.55 3.75a54.34 54.34 0 01-12 5.4c-.42 1-1 2.35-.6 3.17 1.18-.35 2.25-.69 3.52-1.19.8-.28 1.61-.63 2.44-1 .83-.37 1.66-.72 2.49-1.09z"></path><path d="M46.93 71a8.72 8.72 0 011.16 0c.51 0 1.48.05 2 0l8.52-.5c8.84-.54 17.78-1 26.66-2.45 2.33-.38 4.67-.8 7-1.29a56.65 56.65 0 0010.45-3.26 85.2 85.2 0 009.11-4.57 48.44 48.44 0 0014-12c.86-1 1.57-2.14 2.33-3.2s1.34-2.12 1.89-3.23a35.91 35.91 0 002.81-7.11 31.08 31.08 0 00.4-12.78 6.21 6.21 0 01-1.89 2.64 25.44 25.44 0 01-1 9.32l-.09.26a21.31 21.31 0 01-.69 2 41.94 41.94 0 01-3.72 7.43 41.78 41.78 0 01-5.3 6.63 52.72 52.72 0 01-15.45 10.61 73.71 73.71 0 01-18.17 5.41 207.23 207.23 0 01-24.09 2.59l-15.92.87a4.07 4.07 0 01-.01 2.63zM21.1 71.79a1.43 1.43 0 01-.27-1.49 2.72 2.72 0 011.81-1.54c1-.14 2.13.44 3.2.44 1.47 0 2.94-.27 4.42-.39 1-.08 1.92 0 2.86-.15a17 17 0 012.57-.11 5.7 5.7 0 001.17 0 3 3 0 011.12-.16c1 .18 1.3 2.22.71 2.91-.45.53-1.56.36-2.18.36h-2.67c-2.13.13-4.28 0-6.41.1-.91 0-1.8.24-2.7.35-.9.11-1.7.15-2.56.2a1.31 1.31 0 01-1.07-.52zM7.5 71.7a3.09 3.09 0 010-1 1.26 1.26 0 01.4-.74 2.18 2.18 0 012.16-.49 9.2 9.2 0 002.87 0 9.22 9.22 0 013.1 0 2 2 0 011.17.72c.46.6.61 1.35-.14 1.8a5.18 5.18 0 01-2.91.44c-1.34-.13-2.75.53-4.15.76a2 2 0 01-1.34-.22A2.49 2.49 0 017.5 71.7zM.01 71.57c.082-.29.2-.569.35-.83a1.91 1.91 0 013.27-.25c.54.63.61 2.26-.16 2.72a4.27 4.27 0 01-1.32.44c-1.12.1-2.05-.23-2.14-2.08z"></path></g></svg>
        
                </div>
                <div class="box-content relative flex items-center w-full h-auto max-w-2xl py-5 mx-auto overflow-hidden xl:w-3/5 rounded-xl bg-gradient-to-r from-transparent via-transparent to-gray-100">
        
                    <!-- Slide Page 1 -->
                    <div class="flex px-6 space-x-6 transition duration-500 ease-out transform xl:pl-6 h-94" :class="{ '-translate-x-full pr-10' : page > 1, 'relative': page == 1, 'absolute': page != 1 }">
        
                        <!-- story 1 -->
                        <div class="flex flex-col flex-shrink-0 w-full overflow-hidden rounded-lg shadow-lg">
                            <div class="flex-shrink-0">
                                <a href="#_">
                                    <img class="object-cover w-full h-32 sm:h-48" src="/assets/images/siap-kerja-keluar-negeri.jpeg" alt="">
                                </a>
                            </div>
                            <div class="flex flex-col justify-between flex-1 p-6 bg-white">
                                <div class="flex-1">
                                    <p class="inline-block py-1 pl-10 pr-4 mb-2 -ml-10 text-xs font-medium leading-5 text-white transform -translate-y-2 bg-primary rounded">
                                            Jerman
                                    </p>
                                    <a href="#_" class="block">
                                        <span class="mt-2 text-base font-semibold leading-tight leading-7 text-gray-900 sm:text-xl">
                                           Ingin Kerja Menjadi Perawat Di Jerman ? Simak ini Dulu
                                        </span>
                                        <span class="block mt-3 text-sm leading-6 text-gray-500 sm:text-sm">
                                            Tahukah anda, ternyata banyak sekali kebutuhan tenaga kerja diluar negeri khususnya kesehatan.
                                        </span>
                                    </a>
                                </div>
                                <div class="items-center hidden mt-6 sm:flex">
                                    <div class="relative">
                                        <p class="text-xs font-medium leading-5 text-gray-500">
                                            <a href="#_" class="hover:underline">Ramdan Chandra</a>
                                            <span class="mx-1">·</span><time class="ml-1">Juni 21, 2021</time>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
        
                        <!-- story 2 -->
                        
                    </div>
        
                    <!-- Slide Page 2 -->
                    <div class="flex space-x-6 transition duration-500 ease-out transform h-94" :class="{ '-translate-x-full pr-10' : page > 2, 'translate-x-full' : page < 2, 'translate-x-0 ml-5' : page == 2, 'relative': page == 2, 'absolute': page != 2 }" x-cloak="">
        
                        <!-- story 3 -->
                        <div class="flex flex-col flex-shrink-0 w-full overflow-hidden rounded-lg shadow-lg">
                            <div class="flex-shrink-0">
                                <a href="#_">
                                    <img class="object-cover w-full h-32 sm:h-48" src="/assets/images/kerja-ke-jerman.jpeg" alt="">
                                </a>
                            </div>
                            <div class="flex flex-col justify-between flex-1 p-6 bg-white">
                                <div class="flex-1">
                                    <p class="inline-block py-1 pl-10 pr-4 mb-2 -ml-10 text-xs font-medium leading-5 text-white transform -translate-y-2 bg-primary rounded">
                                        <a href="#_" class="hover:underline" rel="category">
                                            Perawat
                                        </a>
                                    </p>
                                    <a href="#_" class="block">
                                        <span class="mt-2 text-base font-semibold leading-tight leading-7 text-gray-900 sm:text-xl">
                                            Lirik Lowongan Perawat ini Gaji hingga 3500 Euro
                                        </span>
                                        <span class="block mt-3 text-sm leading-6 text-gray-500 sm:text-sm">
                                            Memiliki gaji tinggi sebagai seorang perawat adalah sebuah impian. Tapi biasanya akan sulit mendapatkan pekerjaan sebagai perawat yang memiliki gaji yang fantastis.
                                        </span>
                                    </a>
                                </div>
                                <div class="items-center hidden mt-6 sm:flex">
                                    <div class="relative">
                                        <p class="text-xs font-medium leading-5 text-gray-500">
                                            <a href="#_" class="hover:underline">John Doe</a>
                                            <span class="mx-1">·</span><time class="ml-1">January 21, 2022</time>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
        
                        <!-- story 4 -->
                        
                    </div>
                    <!-- End slide page 2 -->
        
                    <!-- Slide Page 3 -->
                    <div class="flex space-x-6 transition duration-500 ease-out transform h-94" :class="{ 'translate-x-full' : page < 3, 'translate-x-0 ml-5' : page == 3, 'relative': page == 3, 'absolute': page != 3 }" x-cloak="">
        
                        <!-- story 5 -->
                        <div class="flex flex-col flex-shrink-0 w-full overflow-hidden rounded-lg shadow-lg">
                            <div class="flex-shrink-0">
                                <a href="#_">
                                    <img class="object-cover w-full h-32 sm:h-48" src="/assets/images/caregiver-ke-jerman.jpeg" alt="">
                                </a>
                            </div>
                            <div class="flex flex-col justify-between flex-1 p-6 bg-white">
                                <div class="flex-1">
                                    <p class="inline-block py-1 pl-10 pr-4 mb-2 -ml-10 text-xs font-medium leading-5 text-white transform -translate-y-2 bg-primary rounded">
                                        <a href="#_" class="hover:underline" rel="category">
                                            Caregiver
                                        </a>
                                    </p>
                                    <a href="#_" class="block">
                                        <span class="mt-2 text-base font-semibold leading-tight leading-7 text-gray-900 sm:text-xl">
                                            Inilah Saatnya Caregiver Bekerja Keluar Negeri
                                        </span>
                                        <span class="block mt-3 text-sm leading-6 text-gray-500 sm:text-sm">
                                            Pasti ga akan pernah ke bayang gimana rasanya seorang caregiver bisa bekerja keluar negeri. Gaji yang cukup besar menjadi impian semua orang.
                                        </span>
                                    </a>
                                </div>
                                <div class="items-center hidden mt-6 sm:flex">
                                    <div class="relative">
                                        <p class="text-xs font-medium leading-5 text-gray-500">
                                            <a href="#_" class="hover:underline">Ramdan CM</a>
                                            <span class="mx-1">·</span><time class="ml-1">Juni 21, 2021</time>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
        
                        <!-- story 6 -->
                        
                    </div>
                    <!-- End slide page 3 -->
        
                </div>
            </div>
        </section>
        <section class="w-full py-12 bg-white sm:py-20">
            <div class="flex flex-col items-center justify-center mx-auto xl:flex-row ">
                <div class="relative flex flex-col items-start justify-center w-full h-full  px-6 mx-auto  xl:w-3/5">
            
                    <h2 class="w-full container text-3xl font-bold text-left"> Nursehub ID, Aplikasi Penyaluran Perawat ke Luar Negeri</h2>
                    <p class="w-full py-8 mx-auto -mt-2 text-lg text-left text-gray-700 intro">Nursehub ID merupakan platform penyaluran perawat ke luar negeri. Nursehub ID akan membantu anda para perawat dan caregiver yang ingin bekerja ke luar negeri dengan aman. Kami siap menyalurkan perawat untuk bekerja di luar negeri seperti Jepang, Jerman dll.</p>
                </div>
            </div>
        </section>
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
        <section class="relative mx-auto py-2 px-4  shadow-2 sticky bottom-1 z-50">
            <div class="px-7 bg-white shadow-lg rounded-2xl sm:hidden">
                <div class="flex">
                    <div class="flex-1 group">
                        <a href="/" class="flex items-end justify-center text-center mx-auto px-4 pt-2 w-full text-gray-400 group-hover:text-primary border-b-2 border-transparent group-hover:border-primary">
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
                        <a href="/blog" class="flex items-end justify-center text-center mx-auto px-4 pt-2 w-full text-gray-400 group-hover:text-primary border-b-2 border-transparent group-hover:border-primary">
                            <span class="block px-1 pt-1 pb-2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mx-auto" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                  </svg>
                                <span class="block text-xs pb-1">Blog</span>
                            </span>
                        </a>
                    </div>
                    <div class="flex-1 group">
                        <a href="https://wa.me/6281336696699" class="flex items-end justify-center text-center mx-auto px-4 pt-2 w-full text-gray-400 group-hover:text-primary border-b-2 border-transparent group-hover:border-primary">
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
