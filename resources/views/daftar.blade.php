<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="google-site-verification" content="YiqTH3wxYSM6O7v5nsl5EayhiG8y4vbwOLSQHHMxNiM" />
        <title>Formulir Lowongan Kerja ke Luar Negeri</title>
        <meta name="description" content="Isi Formulir Kerja Keluar Negeri Sekarang Juga dan Jadikan Mimpimu Kenyataan bersama Nursehub ID">
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
    <section>
      <div class="w-full mx-auto container">
        <div class="sm:mt-0 mx-auto">
          <div class=" mx-auto">
            
            <div class="mx-auto sm:w-5/6 w-full">
              @if ($errors->any())
                  <div class="alert alert-danger">
                      <ul>
                          @foreach ($errors->all() as $error)
                          <div class="bg-white text-left py-4 lg:px-4">
                            <div class="p-2 bg-red-800 items-center text-red-100 leading-none lg:rounded-full flex lg:inline-flex" role="alert">
                              <span class="flex rounded-full bg-red-500 uppercase px-2 py-1 text-xs font-bold mr-3">Error</span>
                              <span class="font-semibold mr-2 text-left flex-auto">
                                {{$error}}
                              </span>
                              <button onclick="closeAlert(event)"><svg class="fill-current h-6 w-6 text-red-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title><path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/></svg></button>
                            </div>
                          </div>
                          @endforeach
                      </ul>
                  </div>
              @endif
              <form action="/formulir/submit" method="POST" enctype="multipart/form-data">
                @csrf  
                
                <div class="shadow overflow-hidden sm:rounded-md mx-auto">
                  <div class="px-4 py-5 bg-white sm:p-6 mx-auto">
                   
                    <div class="grid grid-cols-6 gap-6">
                      
                      <div class="col-span-6 sm:col-span-3">
                        <label for="name" class="block text-lg font-bold text-gray-700">Nama Lengkap</label>
                        <input type="text" name="name" id="name" autocomplete="given-name" class="mt-1 focus:ring-primary focus:border-primary block w-full shadow-sm sm:text-lg border-gray-300 rounded-md" placeholder="Masukan Nama Anda" required>
                      </div>
                      <div class="col-span-6 sm:col-span-3">
                        <label for="no_ktp" class="block text-lg font-bold text-gray-700">No KTP</label>
                        <input type="number" name="no_ktp" id="no_ktp" autocomplete="given-name" class="mt-1 focus:ring-primary focus:border-primary block w-full shadow-sm sm:text-lg border-gray-300 rounded-md" placeholder="Masukan No KTP Anda" required>
                      </div>
                      <div class="col-span-6 sm:col-span-3">
                        <label for="gambar_ktp" class="block text-lg font-bold text-gray-700">Bagian Depan KTP</label>
                        <input type="file" name="gambar_ktp" id="gambar_ktp" autocomplete="given-name" class="mt-1 focus:ring-primary focus:border-primary block w-full shadow-sm sm:text-lg border-gray-300 rounded-md" placeholder="Tambahkan Foto Depan KTP Anda" required accept=".png, .jpg, .jpeg, .pdf">
                        *Masukan File KTP Kurang dari 2 MB

                      </div>
        
                      <div class="col-span-6 sm:col-span-3">
                        <label for="email" class="block text-lg font-bold text-gray-700">Email address</label>
                        <input type="text" name="email" id="email" autocomplete="email" class="mt-1 focus:ring-primary focus:border-primary block w-full shadow-sm sm:text-lg border-gray-300 rounded-md" placeholder="Masukan email yang bisa dihubungi" required>
                      </div>
    
                      <div class="col-span-6 sm:col-span-3">
                        <label for="telpon" class="block text-lg font-bold text-gray-700">Telphone</label>
                        <input type="text" name="telpon" id="telpon" class="mt-1 focus:ring-primary focus:border-primary block w-full shadow-sm sm:text-lg border-gray-300 rounded-md" placeholder="Masukan Nomer Wa" required>
                      </div>
    
                      <div class="col-span-6 sm:col-span-3">
                        <label for="tempat" class="block text-lg font-bold text-gray-700">Tempat Lahir</label>
                        <input type="text" name="tempat" id="tempat" class="mt-1 focus:ring-primary focus:border-primary block w-full shadow-sm sm:text-lg border-gray-300 rounded-md" placeholder="Masukan Tempat Lahir" required>
                      </div>
    
                      <div class="col-span-6 sm:col-span-3">
                        <label for="tanggal_lahir" class="block text-lg font-bold text-gray-700">Tanggal Lahir</label>
                        <input type="date" name="tanggal_lahir" id="tanggal_lahir" class="mt-1 focus:ring-primary focus:border-primary block w-full shadow-sm sm:text-lg border-gray-300 rounded-md" placeholder="Masukan Tanggal Lahir" required>
                      </div>
                      <div class="col-span-6 sm:col-span-3">
                      </div>
                      <div class="col-span-6 sm:col-span-6">
                        <label for="alamat" class="block text-lg font-bold text-gray-700">Alamat</label>
                        <textarea name="alamat" id="alamat" class="mt-1 focus:ring-primary focus:border-primary block w-full shadow-sm sm:text-lg border-gray-300 rounded-md" placeholder="Masukan Alamat Domisili" required></textarea>
                      </div>
                      
                    
                      <div class="col-span-6 sm:col-span-3">
                        <label for="tinggi" class="block text-lg font-bold text-gray-700">Tinggi Pelamar</label>
                        <input type="number" name="tinggi" id="tinggi" autocomplete="given-tinggi" class="mt-1 focus:ring-primary focus:border-primary block w-full shadow-sm sm:text-lg border-gray-300 rounded-md" placeholder="Masukan Tinggi Anda" required>
                      </div>
        
                      <div class="col-span-6 sm:col-span-3">
                        <label for="berat" class="block text-lg font-bold text-gray-700">Berat Pelamar</label>
                        <input type="number" name="berat" id="berat" autocomplete="berat" class="mt-1 focus:ring-primary focus:border-primary block w-full shadow-sm sm:text-lg border-gray-300 rounded-md" placeholder="Masukan Berat Anda" required>
                      </div>
                      <div class="col-span-6 sm:col-span-3">
                        <label for="jenis_kelamin" class="block text-lg font-bold text-gray-700">Jenis Kelamin</label>
                        <select id="jenis_kelamin" name="jenis_kelamin" autocomplete="jenis_kelamin" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-primary focus:border-primary sm:text-lg">
                          <option value="Pria">Pria</option>
                          <option value="Wanita">Wanita</option>
                          
                        </select>
                      </div>
                      <div class="col-span-6 sm:col-span-3">
                        <label for="status" class="block text-lg font-bold text-gray-700">Status</label>
                        <select id="status" name="status" autocomplete="status" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-primary focus:border-primary sm:text-lg">
                          <option value="Menikah">Menikah</option>
                          <option value="Single">Single</option>
                          
                        </select>
                      </div>
    
                      <div class="col-span-6 sm:col-span-3">
                        <label for="pendidikan" class="block text-lg font-bold text-gray-700">Pendidikan Terakhir</label>
                        <select id="pendidikan" name="pendidikan" autocomplete="pendidikan" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-primary focus:border-primary sm:text-lg">
                          <option value="SMK Kesehatan">SMK Kesehatan</option>
                          <option value="D3 Keperawatan">D3 Keperawatan</option>
                          <option value="D3 Kebidanan">D3 Kebidanan</option>
                          <option value="D3 Keperawatan">D4 Keperawatan</option>
                          <option value="D4 Kebidanan">D4 Kebidanan</option>
                          <option value="S1 Keperawatan">51 Keperawatan</option>
                        </select>
                      </div>
    
                      <div class="col-span-6 sm:col-span-3">
                        <label for="posisi" class="block text-lg font-bold text-gray-700">Program Kerja</label>
                        <select id="posisi" name="posisi" autocomplete="posisi" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-primary focus:border-primary sm:text-lg">
                          <option value="Perawat ke Jerman">Perawat ke Jerman</option>
                          <option value="Caregiver ke Jerman">Caregiver ke Jerman</option>
                         
                        </select>
                      </div>
                      <div class="col-span-6 sm:col-span-3">
                        <label for="agama" class="block text-lg font-bold text-gray-700">Agama</label>
                        <select id="agama" name="agama" autocomplete="agama" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-primary focus:border-primary sm:text-lg">
                          <option value="Islam">Islam</option>
                          <option value="Protestan">Protestan</option>
                          <option value="Katholik">Katholik</option>
                          <option value="Buddha">Buddha</option>
                          <option value="Hindu">Hindu</option>
                          <option value="Kong Hu Chu">Kong Hu Chu</option>
                         
                        </select>
                      </div>
                      <div class="col-span-6 sm:col-span-3">
                        <label for="sekolah" class="block text-lg font-bold text-gray-700">Nama Sekolah</label>
                        <input type="text" name="sekolah" id="sekolah" class="mt-1 focus:ring-primary focus:border-primary block w-full shadow-sm sm:text-lg border-gray-300 rounded-md" placeholder="Masukan Nama Sekolah" required>
                      </div>
                      <div class="col-span-6 sm:col-span-3">
                        <label for="tahun_lulus" class="block text-lg font-bold text-gray-700">Tahun Lulus</label>
                        <input type="number" name="tahun_lulus" id="tahun_lulus" class="mt-1 focus:ring-primary focus:border-primary block w-full shadow-sm sm:text-lg border-gray-300 rounded-md" placeholder="Masukan Tahun Lulus" required>
                      </div>
                      <div class="col-span-6 sm:col-span-3">
                      </div>
                      <div class="col-span-6 sm:col-span-6">
                        <label for="penyakit" class="block text-lg font-bold text-gray-700">Riwayat Penyakit</label>
                        <textarea name="penyakit" id="penyakit" class="mt-1 focus:ring-primary focus:border-primary block w-full shadow-sm sm:text-lg border-gray-300 rounded-md" placeholder="Masukan Riwayat Penyakit" required></textarea>
                      </div>
                     
                      <div class="col-span-6 sm:col-span-6">
                        <label for="motivasi" class="block text-lg font-bold text-gray-700">Motivasi Bekerja</label>
                        <textarea name="motivasi" id="motivasi" class="mt-1 focus:ring-primary focus:border-primary block w-full shadow-sm sm:text-lg border-gray-300 rounded-md" placeholder="Masukan Motivasi Anda Bekerja" required></textarea>
                      </div>
                     
                      <div class="col-span-6 sm:col-span-3">
                        <div class="col-span-6 sm:col-span-3">
                          <label for="pendaftaran" class="block text-lg font-bold text-gray-700">Tempat Pendaftaran</label>
                          <select id="pendaftaran" name="pendaftaran" autocomplete="pendaftaran" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-primary focus:border-primary sm:text-lg">
                            <option value="Jakarta">Jakarta</option>
                            
                          </select>
                        </div>
                      </div>
                      <div class="col-span-6 sm:col-span-3">
                        <label for="informasi" class="block text-lg font-bold text-gray-700">Mendapat Informasi dari mana ?</label>
                        <select id="informasi" name="informasi" autocomplete="pendaftaran" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-primary focus:border-primary sm:text-lg">
                          <option value="Google">Google</option>
                          <option value="Facebook">Facebook</option>
                          <option value="Instagram">Instagram</option>
                          <option value="Teman">Teman</option>
                          <option value="Sekolah">Sekolah</option>
                          <option value="Lainnya">Lainnya</option>
                        </select>
                      </div>
                      <div class="col-span-6 sm:col-span-3">
                        <label for="transkip_nilai" class="block text-lg font-bold text-gray-700">Transkip Nilai Terbaru</label>
                        <input type="file" name="transkip_nilai" id="transkip_nilai" autocomplete="given-name" class="mt-1 focus:ring-primary focus:border-primary block w-full shadow-sm sm:text-lg border-gray-300 rounded-md" placeholder="Tambahkan Foto Depan KTP Anda" required accept=".png, .jpg, .jpeg, .pdf">
                        *Masukan File Transkip Nilai Kurang dari 2 MB
                      </div>
                      <div class="col-span-6 sm:col-span-3">
                        <label for="cv" class="block text-lg font-bold text-gray-700">CV</label>
                        <input type="file" name="cv" id="cv" autocomplete="given-name" class="mt-1 focus:ring-primary focus:border-primary block w-full shadow-sm sm:text-lg border-gray-300 rounded-md" placeholder="Tambahkan Foto Depan KTP Anda" required accept=".png, .jpg, .jpeg, .pdf">
                        *Masukan File CV Kurang dari 2 MB
                      </div>
                      <div class="col-span-6 sm:col-span-3">
                        <label for="ijazah" class="block text-lg font-bold text-gray-700">Ijazah</label>
                        <input type="file" name="ijazah" id="ijazah" autocomplete="given-name" class="mt-1 focus:ring-primary focus:border-primary block w-full shadow-sm sm:text-lg border-gray-300 rounded-md" placeholder="Tambahkan Foto Depan KTP Anda" required accept=".png, .jpg, .jpeg, .pdf">
                        *Masukan File Ijazah Kurang dari 2 MB
                      </div>
                      <div class="col-span-6 sm:col-span-3">
                      </div>
                      
                     
                  </div>
                  <div class="px-4 py-3 bg-white text-center sm:px-6 mt-5">
                    <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-lg font-medium rounded-md text-white bg-primary hover:bg-primary focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary">
                      Kirim Lamaran
                    </button>
                  </div>
                </div>
              </form>
            </div>
          </div>
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
