@extends('layouts.app')

@section('content')
{{-- <div class="container">
    <div class="row justify-content-center">
       
    <div class="col-md-5">
        <h3 class="text-center mb-4 mt-2">Puja imatges del teu Restaurant</h3>

        <form enctype="multipart/form-data" action="{{ route('agregarRestaurant') }}" method="post">
        {{csrf_field()}}


            <div class="form-group">
                <input type="text" class="form-control" id="nomRest" name="nomRest" placeholder="Introdueix el nom">
            </div>

            <div class="form-group">
                <textarea name="descRest" id="descRest" cols="30" rows="10"></textarea>
                <!-- <input type="text" class="form-control" id="descRest" name="descRest" placeholder="Introdueix una petita descripcio"> -->
            </div>

            <div class="form-group">
                <input required type="file" class="form-control" name="images[]" placeholder="address" multiple>
            </div>

            <input type="hidden" name="idUser" id="idUser" value="{{Auth::user()->id}}">
            <button class="btn btn-success btn-block" type="submit">Confirmar</button>

        </form>

        @if(session('agregar'))
            <div class="alert alert-success mt-3">
            {{session('agregar')}}</div>
        @endif
    </div>
    </div>
</div> --}}

<html>
 <head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Image Upload in Laravel using Dropzone</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/dropzone.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/dropzone.js"></script>
 </head>
 <body>
  <div class="container-fluid">
      <br />
    <h3 align="center">Image Upload in Laravel using Dropzone</h3>
    <br />
        
      <div class="panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title">Select Image</h3>
        </div>
        <div class="panel-body">
          <form enctype='multipart/form-data' id="dropzoneForm" class="dropzone" action="{{ route('dropzone.upload') }}">
            @csrf
            <input type="hidden" name="idRest" id="idRest" value="{{$id_restaurant}}">

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


 </body>
</html>

<script type="text/javascript">

  Dropzone.options.dropzoneForm = {
    autoProcessQueue : false,
    acceptedFiles : ".png,.jpg,.gif,.bmp,.jpeg",
    parallelUploads: 10,

    init:function(){
      var submitButton = document.querySelector("#submit-all");
      var nameUser = $('#nameUser').val();

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
      data:{id:$('#idRest').val()},
      success:function(data)
      {
        $('#uploaded_image').html(data);
      }
    })

  }

  $(document).on('click', '.remove_image', function(){
    var name = $(this).attr('id');
    $.ajax({
      url:"{{ route('dropzone.delete') }}",
      data:{name : name,id:$('#idRest').val()}, 
      success:function(data){
        load_images();
      }
    })
  });

</script>



@endsection 
