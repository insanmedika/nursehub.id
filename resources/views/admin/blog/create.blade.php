<link rel="preload" href="{{ asset('css/app.css') }}" as="style">
<link rel="preload" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" as="fonts">
<script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
<!-- Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<x-app-layout>
<x-slot name="header">
   
    <div class="relative ">
      <h2 class="font-semibold text-xl text-center text-gray-800 leading-tight">
        {{ __('Create Artikel') }}
       
    </h2>
     
    </div>
</x-slot>
<section>
  <div class="w-full mx-auto container mt-2">
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
          <form action="{{ route('blog.store') }}" method="POST" enctype="multipart/form-data">
            @csrf  
            
            <div class="shadow overflow-hidden sm:rounded-md mx-auto">
              <div class="px-4 py-5 bg-white sm:p-6 mx-auto">
               
                <div class="grid grid-cols-6 gap-6">
                  
                  <div class="col-span-6 sm:col-span-3">
                    <label for="judul" class="block text-lg font-bold text-gray-700">Judul</label>
                    <input type="text" name="judul" id="judul" autocomplete="given-name" class="mt-1 focus:ring-primary focus:border-primary block w-full shadow-sm sm:text-lg border-gray-300 rounded-md" placeholder="Masukan Judul Artikel" required>
                  </div>
                  <div class="col-span-6 sm:col-span-3">
                    <label for="meta_desc" class="block text-lg font-bold text-gray-700">Meta Desc</label>
                    <input type="text" name="meta_desc" id="deadline" class="mt-1 focus:ring-primary focus:border-primary block w-full shadow-sm sm:text-lg border-gray-300 rounded-md" placeholder="Masukan Deskripsi Artikel" required>
                  </div>
                  <div class="col-span-6 sm:col-span-3">
                    <label for="post_type" class="block text-lg font-bold text-gray-700">Post Type</label>
                    <select id="post_type" name="post_type" autocomplete="post_type" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-primary focus:border-primary sm:text-lg">
                      <option value="Draft">Draft</option>
                      <option value="Post">Post</option>
                    </select>
                  </div>
                  <div class="col-span-6 sm:col-span-3">
                    <label for="category" class="block text-lg font-bold text-gray-700">Category</label>
                    <input type="text" name="category" id="deadline" class="mt-1 focus:ring-primary focus:border-primary block w-full shadow-sm sm:text-lg border-gray-300 rounded-md" placeholder="Masukan Category Artikel" required>
                  </div>
                  <div class="col-span-6 sm:col-span-3">
                    <label for="image" class="block text-lg font-bold text-gray-700">Image</label>
                    <input required type="file" name="image" class="form-control">
                  </div>
                  
                  <div class="col-span-1 sm:col-span-6" style="margin-top: 20px;"> 
                    <b>Content</b>
                    
                      <textarea name="content" id="content">
                            
                        </textarea>
                   
                  </div>
               
                  
                 
              </div>
              <div class="px-4 py-3 bg-white text-left sm:px-6 mt-5">
                <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-lg font-medium rounded-md text-white bg-primary hover:bg-primary focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary">
                  Insert
                </button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
<script src="https://cdn.ckeditor.com/4.15.0/full/ckeditor.js"></script>
            
            <script>
                // Replace the <textarea id="editor1"> with a CKEditor 4
                // instance, using default configuration.
                CKEDITOR.replace( 'content' );
            </script>
</x-app-layout>