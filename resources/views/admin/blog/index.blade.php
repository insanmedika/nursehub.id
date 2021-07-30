<link rel="preload" href="{{ asset('css/app.css') }}" as="style">
  <link rel="preload" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" as="fonts">
  
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
<x-app-layout>
  <x-slot name="header">
     
      <div class="relative ">
        <h2 class="font-semibold text-xl text-center font-bold text-gray-800 leading-tight">
          {{ __('Lowongan Kerja Keluar Negeri') }}
         
      </h2>
        <div class="absolute top-0 right-0 h-16 w-auto">
          
          <a href="{{ route('blog.create') }}" class="bg-primary text-white font-bold py-2 px-4 rounded"> Tambah Artikel</a>
        </div>
      </div>
  </x-slot>
  
<body>
  <section class="relative mx-auto py-8 bg-white min-w-screen animation-fade animation-delay">
    <div class="container px-0 px-8 mx-auto sm:px-12 xl:px-5">
      
      <table class="border-collapse border border-green-800 mx-auto w-full">
        <thead>
          <tr>
            <th class="border border-gray-600 text-lg">No</th>
            <th class="border border-gray-600 text-lg">Judul Artikel</th>
            <th class="border border-gray-600 text-lg">Category</th>
            
            <th class="border border-gray-600 text-lg">Aksi</th>

          </tr>
        </thead>
        <tbody>
          @php
           $i=1;   
          @endphp
          @foreach ($blog as $data)
              
          <tr>
            <td class="border border-gray-600 text-center">{{$i++}}</td>
            <td class="border border-gray-600 px-2">{{$data->judul}}</td>
            <td class="border border-gray-600 px-2 text-center">{{$data->category}}</td>
          
            <td class="border border-gray-600 text-center">
              <a href="/blog/{{$data->slug_judul}}" class="bg-gray-500 text-white font-bold py-2 px-4 rounded inline-flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                </svg>&nbsp;
                <span>Lihat</span>
              </a>
              <a href="/dashboard/blog/edit/{{$data->id}}" class="bg-yellow-300 text-white font-bold py-2 px-4 rounded inline-flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                </svg>Edit</span>
              </a>
              <a href="/dashboard/blog/destroy/{{$data->id}}"  onclick="return confirm('yakin?');" class="bg-red-500 text-white font-bold py-2 px-4 rounded inline-flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                </svg>&nbsp;
                <span>Hapus</span>
              </a>
            </td>
          </tr>
          @endforeach
          <?php echo $blog->render(); ?>
          @if (session('status'))
          <div class="bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md" role="alert">
            <div class="flex">
              <div class="py-1"><svg class="fill-current h-6 w-6 text-teal-500 mr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z"/></svg></div>
              <div>
                <p class="font-bold">{{ session('status') }}</p>
              </div>
            </div>
          </div>
          
          @elseif(session('failed'))
          <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
            <strong class="font-bold">{{ session('failed') }}</strong>
            <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
              <svg class="fill-current h-6 w-6 text-red-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title><path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/></svg>
            </span>
          </div>
          
          @endif
        </tbody>
      </table>
    </div>
  </section>
</body>
  
</x-app-layout>
