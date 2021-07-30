<link rel="preload" href="{{ asset('css/app.css') }}" as="style">
  <link rel="preload" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" as="fonts">
  <meta name="csrf-token" content="{{ csrf_token() }}" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/dropzone.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/dropzone.js"></script>
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<x-app-layout>
  <x-slot name="header">
     
  <body id="page-top">
  <!-- Page Wrapper -->
  <div id="wrapper">
    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">
      <!-- Main Content -->
      <div id="content">
        <!-- End of Topbar -->
        <!-- Begin Page Content -->
        @if (session('status'))
        <div class="alert alert-success" role="alert">
          <button type="button" class="close" data-dismiss="alert">×</button>
          {{ session('status') }}
        </div>
        @elseif(session('failed'))
        <div class="alert alert-danger" role="alert">
          <button type="button" class="close" data-dismiss="alert">×</button>
          {{ session('failed') }}
        </div>
        @endif
        <div class="container-fluid">
        <br />
        <h3 align="center">Upload Image untuk Artikel</h3>
        <br />
            
          <div class="panel panel-default">
            <div class="panel-heading">
              <h3 class="panel-title">Select Image</h3>
            </div>
            <div class="panel-body">
              <form id="dropzoneForm" class="dropzone" action="/dashboard/storage/store">
                @csrf
              </form>
              <div align="center">
                <button type="button" class="btn btn-info" id="submit-all">Upload</button>
              </div>
            </div>
          </div>
          <br />
          <div class="panel panel-default">
            <div class="panel-heading">
              <h3 class="panel-title">Uploaded Image</h3>
            </div>
            <div class="panel-body" id="uploaded_image">
          
        </div>
      </div>
    </div>
    <!-- /.container-fluid -->

  </div>
  <!-- End of Main Content -->

  <!-- Footer -->
  <!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
 </body>
      <script type="text/javascript">

Dropzone.options.dropzoneForm = {
  autoProcessQueue : false,
  acceptedFiles : ".png,.jpg,.gif,.bmp,.jpeg",

  init:function(){
    var submitButton = document.querySelector("#submit-all");
    myDropzone = this;

    submitButton.addEventListener('click', function(){
      myDropzone.processQueue();
    });

    this.on("complete", function(){
      if(this.getQueuedFiles().length == 0 && this.getUploadingFiles().length == 0)
      {
        var _this = this;
        _this.removeAllFiles();
      }
      load_images();
    });

  }

};

load_images();

function load_images()
{
  $.ajax({
    url:"{{ route('dropzone.fetch') }}",
    success:function(data)
    {
      $('#uploaded_image').html(data);
    }
  })
}

$(document).on('click', '.remove_image', function(){
  var name = $(this).attr('id');
  $.ajax({
    url:"/dashboard/storage/delete",
    data:{name : name},
    success:function(data){
      load_images();
    }
  })
});

</script>
  </x-slot>
  
<body>
  <section class="relative mx-auto py-8 bg-white min-w-screen animation-fade animation-delay">
    <div class="container px-0 px-8 mx-auto sm:px-12 xl:px-5">
      
      
    </div>
  </section>
</body>
  
</x-app-layout>
