<link rel="preload" href="{{ asset('css/app.css') }}" as="style">
<link rel="preload" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" as="fonts">

<!-- Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<x-app-layout>
<x-slot name="header">
   
    <div class="relative ">
      <h2 class="font-semibold text-xl text-center text-gray-800 leading-tight">
        {{ __('Create Lowongan ke Luar Negeri') }}
       
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
          <form action="{{ route('lowongan.store') }}" method="POST" enctype="multipart/form-data">
            @csrf  
            
            <div class="shadow overflow-hidden sm:rounded-md mx-auto">
              <div class="px-4 py-5 bg-white sm:p-6 mx-auto">
               
                <div class="grid grid-cols-6 gap-6">
                  
                  <div class="col-span-6 sm:col-span-3">
                    <label for="name" class="block text-lg font-bold text-gray-700">Job Name</label>
                    <input type="text" name="name" id="name" autocomplete="given-name" class="mt-1 focus:ring-primary focus:border-primary block w-full shadow-sm sm:text-lg border-gray-300 rounded-md" placeholder="Insert Job Name" required>
                  </div>
                  <div class="col-span-6 sm:col-span-3">
                    <label for="deadline" class="block text-lg font-bold text-gray-700">Deadline</label>
                    <input type="date" name="deadline" id="deadline" class="mt-1 focus:ring-primary focus:border-primary block w-full shadow-sm sm:text-lg border-gray-300 rounded-md" placeholder="Masukan Tanggal Lahir" required>
                  </div>
                  <div class="col-span-6 sm:col-span-3">
                    <label for="job_type" class="block text-lg font-bold text-gray-700">Job Type</label>
                    <select id="job_type" name="job_type" autocomplete="job_type" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-primary focus:border-primary sm:text-lg">
                      <option value="Contract">Contract</option>
                      <option value="Permanen">Permanen</option>
                    </select>
                  </div>
                  <div class="col-span-6 sm:col-span-3">
                    <label for="location" class="block text-lg font-bold text-gray-700">Job Location</label>
                    <input type="text" name="location" id="location" autocomplete="given-location" class="mt-1 focus:ring-primary focus:border-primary block w-full shadow-sm sm:text-lg border-gray-300 rounded-md" placeholder="Insert Job Location" required>
                  </div>
                  <div class="col-span-6 sm:col-span-3">
                    <label for="type_salary" class="block text-lg font-bold text-gray-700">Type Salary</label>
                    <input type="text" name="type_salary" id="type_salary" autocomplete="given-type_salary" class="mt-1 focus:ring-primary focus:border-primary block w-full shadow-sm sm:text-lg border-gray-300 rounded-md" placeholder="Insert Type Salary" required>
                  </div>
                  
                  <div class="col-span-6 sm:col-span-3">
                    <label for="salary" class="block text-lg font-bold text-gray-700">Salary</label>
                    <input type="number" name="salary" id="salary" autocomplete="given-salary" class="mt-1 focus:ring-primary focus:border-primary block w-full shadow-sm sm:text-lg border-gray-300 rounded-md" placeholder="Insert Salary" required>
                  </div>
                  <div class="col-span-6 sm:col-span-3">
                    <label for="job_position" class="block text-lg font-bold text-gray-700">Job Position</label>
                    <select id="job_position" name="job_position" autocomplete="job_position" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-primary focus:border-primary sm:text-lg">
                      <option value="Nurse">Nurse</option>
                      <option value="Caregiver">Caregiver</option>
                    </select>
                  </div>
                  <div class="col-span-6 sm:col-span-3">
                    <label for="experience" class="block text-lg font-bold text-gray-700">Minimun Experience</label>
                    <input type="text" name="experience" id="experience" autocomplete="given-experience" class="mt-1 focus:ring-primary focus:border-primary block w-full shadow-sm sm:text-lg border-gray-300 rounded-md" placeholder="Insert Minimum Experience" required>
                  </div>
                  <div class="col-span-6 sm:col-span-6">
                    <label for="job_desk" class="block text-lg font-bold text-gray-700">Job Desk</label>
                    <textarea name="job_desk" id="job_desk" class="mt-1 focus:ring-primary focus:border-primary block w-full shadow-sm sm:text-lg border-gray-300 rounded-md" placeholder="Insert Jobdesk" required></textarea>
                  </div>
                  <div class="col-span-6 sm:col-span-6">
                    <label for="term_condition" class="block text-lg font-bold text-gray-700">Term Condition</label>
                    <textarea name="term_condition" id="term_condition" class="mt-1 focus:ring-primary focus:border-primary block w-full shadow-sm sm:text-lg border-gray-300 rounded-md" placeholder="Insert Term Condition" required></textarea>
                  </div>
                  <div class="col-span-6 sm:col-span-6">
                    <label for="benefit" class="block text-lg font-bold text-gray-700">Benefit</label>
                    <textarea name="benefit" id="benefit" class="mt-1 focus:ring-primary focus:border-primary block w-full shadow-sm sm:text-lg border-gray-300 rounded-md" placeholder="Insert Benefit" required></textarea>
                  </div>
                  
                  <div class="col-span-6 sm:col-span-6">
                    <label for="Requirements" class="block text-lg font-bold text-gray-700">Requirements</label>
                    <textarea name="requirements" id="Requirements" class="mt-1 focus:ring-primary focus:border-primary block w-full shadow-sm sm:text-lg border-gray-300 rounded-md" placeholder="Insert Requirements" required></textarea>
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
</x-app-layout>