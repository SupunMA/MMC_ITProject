@extends('layouts.admin')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

<!-- Content Header (Page header) -->
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Add Directors</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active"><a href="#">Add Directors</a>  
              <li class="breadcrumb-item ">Dashboard  
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <div class="container" >
    <div class="row">

          
          <hr>
          
         
          <div class="container-fluid" >
          
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card ">
                        <div class="card-header text-bold"><h5>{{ __('Directors') }}</h5></div>

                        <div class="card-body">
                            @if (session('status'))
                            <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                            </div>
                            @endif
                                @if ($errors->any())
                                <div class="alert alert-danger">
                                <h4><i class="fas fa-times-circle"></i> Sorry, we could not upload or update data.</h4>
                                </div>
                                  <div class="alert alert-warning">
                                      <ul>
                                          @foreach ($errors->all() as $error)
                                              <li>{{ $error }}</li>
                                          @endforeach
                                      </ul>
                                  </div>
                                 
                              @endif
                            <div class="row">
                            <!-- 1st client card image -->
                            @foreach($directors as $director)
                              <div class="card mr-3 text-center" style="width: 18rem;" >
                                  <h5><b >Director:- {{$director->did}}</b></h5>
                                  <img class="card-img-top" src="{{URL::asset('/storage/OwnerPhotos/'.$director['Photo'])}}" alt="Director's image" width="250" height="250">
                                  <div class="card-body">
                                      <b>Name : <h5>{{$director->Name}}</b></h5>
 
                                          <!-- <ul class="card-text"> -->
                                         <b>position : {{$director->post}}</b>  <br><br>
                                            <a class="btn btn-primary" data-toggle="tooltip" href="{{$director->facebook}}" target="_blank" title="facebook"><i class="fab fa-facebook" ></i></a>  
                                            <a class="btn btn-primary "data-toggle="tooltip" href="{{$director->twitter}}" target="_blank" title="Twitter"><i class="fab fa-twitter" ></i></a>  
                                            <a class="btn btn-primary " data-toggle="tooltip" href="{{$director->in}}" target="_blank" title="in"><i class="fab fa-invision" ></i> </a>  
    
                                        <br>
                                            <a href="" class="btn btn-secondary mt-1" data-toggle="modal" data-target="#ModalCenter-{{$director->did}}"><i class="far fa-edit"></i> Edit</a>
                                            <!-- <a href="#" class="btn btn-danger"><i class="fa fa-trash"> </i> Delete</a> -->
                                            @if($director->hide)
                                            <a href="/showDirector/{{$director->did}}" class="btn btn-warning mt-1" ><i class="far fa-eye"></i> Show</a>
                                            @else
                                             <a href="/hideDirector/{{$director->did}}" class="btn btn-success mt-1" ><i class="far fa-eye-slash"></i> Hide</a>
                                            
                                            @endif
                                                <!-- Button trigger modal -->
                                                <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                                                  Launch demo modal
                                                </button> -->

                                                <!-- Modal -->
                                                <div class="modal fade" id="ModalCenter-{{$director->did}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" style="background-color: rgba(145, 10, 255, 0.24);">
                                                  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                                                    <div class="modal-content">
                                                      <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLongTitle">Edit <b>{{$director->did}}</b> Director's Details</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                          <span aria-hidden="true">&times;</span>
                                                        </button>
                                                      </div>
                                                            <div class="container">
                                                            <div class="">

                                                                  <form class="form-group" action="adminAddingOwner" enctype='multipart/form-data' method="post">
                                                                  @csrf
                                                                      <label>Upload Image</label>
                                                                      <hr>
                                                                      <img id='img-{{$director->did}}'  alt="Image has not been selected !" src="{{URL::asset('/storage/OwnerPhotos/'.$director['Photo'])}}" height="250" width="250"/>
                                                                      <div class="input-group ">
                                                                                  <small id="" class="form-text text-muted">(Use 400x400 image size for good experience)..</small>
                                                                                  </div>
                                                                      <hr>
                                                                      <input type="hidden" name='directorID' value='{{$director->did}}'>
                                                                      
                                                                      <div class="input-group">
                                                                          <span class="input-group-btn">
                                                                              <span class="btn btn-warning btn-file" >
                                                                                  Select Image <input type="file" name="photo" id="director-{{$director->did}}">
                                                                                  
                                                                              </span>
                                                                          </span>
                                                                          <input type="text" class="form-control" readonly>
                                                                          
                                                                      </div><br>
                                                                      <div class="input-group">
                                                                      <input type="text" name="dname" placeholder="Name of the Director" value="{{$director->Name}}" class="form-control">
                                                                      <input type="text" name="dposition" placeholder="Director's Position" value="{{$director->post}}" class="form-control">
                                                                      </div>
                                                                     
                                                                      <div class="input-group">
                                                                      <small id="" class="form-text text-muted">Paste Social Media Links Here..</small>
                                                                      </div>
                                                                      <div class="input-group">
                                                                      <div class="input-group-prepend">
                                                                        <span class="input-group-text"  id="inputGroupPrepend"><i class="fab fa-facebook" ></i></i></span>
                                                                      </div>
                                                                      <input type="text" name="fb" value="{{$director->facebook}}" placeholder="Facebook" class="form-control">
                                                                      <div class="input-group-prepend">
                                                                        <span class="input-group-text"  id="inputGroupPrepend"><i class="fab fa-twitter" ></i></span>
                                                                      </div>
                                                                      <input type="text" name="twt" value="{{$director->twitter}}" placeholder="Twitter" class="form-control">
                                                                      <div class="input-group-prepend">
                                                                        <span class="input-group-text"  id="inputGroupPrepend"><i class="fab fa-invision" ></i></span>
                                                                      </div>
                                                                      <input type="text" name="in" value="{{$director->in}}" placeholder="in" class="form-control">
                                                                      </div>
                                                                      

                                                                      <div class="modal-footer">
                                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                        <button type="submit" class="btn btn-primary">Save changes</button>
                                                                      </div>
                                                                  </form>
                                                             </div>
                                                             </div> 

                                                             <script> //model script
                                                              $(document).ready( function() {
                                                                    $(document).on('change', '.btn-file :file', function() {
                                                                  var input = $(this),
                                                                    label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
                                                                  input.trigger('fileselect', [label]);
                                                                  });

                                                                  $('.btn-file :file').on('fileselect', function(event, label) {
                                                                      
                                                                      var input = $(this).parents('.input-group').find(':text'),
                                                                          log = label;
                                                                      
                                                                      if( input.length ) {
                                                                          input.val(log);
                                                                      } else {
                                                                          if( log ) alert(log);
                                                                      }
                                                                    
                                                                  });
                                                                  function readURL(input) {
                                                                      if (input.files && input.files[0]) {
                                                                          var reader = new FileReader();
                                                                          
                                                                          reader.onload = function (e) {
                                                                              $('#img-{{$director->did}}').attr('src', e.target.result);
                                                                          }
                                                                          
                                                                          reader.readAsDataURL(input.files[0]);
                                                                      }
                                                                  }

                                                                  $("#director-{{$director->did}}").change(function(){
                                                                      readURL(this);
                                                                  }); 	
                                                                });

                                                              </script>
                                                     
                                                    </div>
                                                  </div>
                                                </div>



                                   </div><!-- Card body-->
                                </div><!--card-->
                    @endforeach
                           </div> <!--card column-->             
                    


                </div><!--card row justify-content-center-->
            </div><!--card container-fluid--> 
        
    </div><!-- Container-->

</div> <!--row-->
</div> <!-- Content Wrapper. Contains page content -->




<script>// tooltip script
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();   
});


</script>

@endsection





