<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PDF</title>

  <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('img/fav/apple-icon-57x57.png') }}" >
<link rel="apple-touch-icon" sizes="60x60" href="{{ asset('img/fav/apple-icon-60x60.png') }}" >
<link rel="apple-touch-icon" sizes="72x72" href="{{ asset('img/fav/apple-icon-72x72.png') }}">
<link rel="apple-touch-icon" sizes="76x76" href="{{ asset('img/fav/apple-icon-76x76.png') }}">
<link rel="apple-touch-icon" sizes="114x114" href="{{ asset('img/fav/apple-icon-114x114.png') }}">
<link rel="apple-touch-icon" sizes="120x120" href="{{ asset('img/fav/apple-icon-120x120.png') }}">
<link rel="apple-touch-icon" sizes="144x144" href="{{ asset('img/fav/apple-icon-144x144.png') }}">
<link rel="apple-touch-icon" sizes="152x152" href="{{ asset('img/fav/apple-icon-152x152.png') }}">
<link rel="apple-touch-icon" sizes="180x180" href="{{ asset('img/fav/apple-icon-180x180.png') }}">
<link rel="icon" type="image/png" sizes="192x192"  href="{{ asset('img/android-icon-192x192.png') }}">
<link rel="icon" type="image/png" sizes="32x32" href="{{ asset('img/fav/favicon-32x32.png') }}">
<link rel="icon" type="image/png" sizes="96x96" href="{{ asset('img/fav/favicon-96x96.png') }}">
<link rel="icon" type="image/png" sizes="16x16" href="{{ asset('img/fav/favicon-16x16.png') }}">
<link rel="manifest" href="{{ asset('img/fav/manifest.json') }}">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="{{ asset('img/fav/ms-icon-144x144.png') }}">
<meta name="theme-color" content="#ffffff">



  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome"" -->
  <link rel="stylesheet" href="{{ URL::asset('plugins/fontawesome-free/css/all.min.css') }}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="{{ URL::asset('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{ URL::asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{ URL::asset('plugins/jqvmap/jqvmap.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ URL::asset('dist/css/adminlte.min.css') }}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{ URL::asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{ URL::asset('plugins/daterangepicker/daterangepicker.css') }}">
  <!-- summernote -->
  <link rel="stylesheet" href="{{ URL::asset('plugins/summernote/summernote-bs4.css') }}">
  <!-- Google Font: Source Sans Pro -->
  <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
 <!-- fullCalendar -->
 <link rel="stylesheet" href="{{ URL::asset('plugins/fullcalendar/main.min.css') }}">
  <link rel="stylesheet" href="{{ URL::asset('plugins/fullcalendar-daygrid/main.min.css') }}">
  <link rel="stylesheet" href="{{ URL::asset('plugins/fullcalendar-timegrid/main.min.css') }}">
  <link rel="stylesheet" href="{{ URL::asset('plugins/fullcalendar-bootstrap/main.min.css') }}">
<style>

.btn-file {
    position: relative;
    overflow: hidden;
}
.btn-file input[type=file] {
    position: absolute;
    top: 0;
    right: 0;
    min-width: 100%;
    min-height: 100%;
    font-size: 100px;
    text-align: right;
    filter: alpha(opacity=0);
    opacity: 0;
    outline: none;
    background: white;
    cursor: inherit;
    display: block;
}

#img-upload{
    width: 100%;
}

</style>












</head>
<body>
  

<!-- Content Wrapper. Contains page content -->


<!-- Content Header (Page header) -->
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
            <h1 class="m-0 text-dark text-center">Add Branches</h1>
          </div><!-- /.col -->
         
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <div class="container" >
    <div class="row counters">
          
      


          </div>
          
          <hr>
          
          
       

          <div class="container-fluid" >
          
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card ">
                <div class="card-header text-bold"><h4>{{ __('ALL BRANCHES') }}</h4></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <a href="/convertPDF" class="btn btn-primary">PDF</a></div><br>
                    <table class="table table-hover">
                    <thead class="text-center">
                    <tr >
                    <th>ID</th>
                    <th>Name</th>
                    <th>ADDRESS</th>
                    <th>T-PHONE</th>
                    
                    </tr>
                    </thead>
                    <tbody class="text-center">
                    @foreach($branchDATA as $bdata)
                    <tr>
                    <td>{{$bdata->bid}}</td>
                    <td>{{$bdata->Bname}}</td>
                    <td>{{$bdata->Baddress}}</td>
                    <td>{{$bdata->Phone}}</td>
                   
                    
                    <td> 
                    
                    <!-- Modal -->
<div class="modal fade" id="exampleModalCenter-{{$bdata->bid}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" style="background-color: rgba(170, 44, 44, 0.36);">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle"><i class="fas fa-exclamation-triangle"></i> Delete The <b style="color:red;">{{$bdata->Bname}} Branch</b> ?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <ul class="text-left">
        <li>Clients' Details which are under {{$bdata->Bname}} Branch will be deleted.</li>
        <li>Employees' Details which are under {{$bdata->Bname}} Branch will be deleted.</li>
        <li>Loans' Details which are under {{$bdata->Bname}} Branch will be deleted.</li>
        <b>You will not be able to Restore <u style="color:red;">{{$bdata->Bname}} Branch</u> Again.</b>
        </ul>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success" data-dismiss="modal"><i class="fas fa-times"></i> Cancel</button>
        <a type="button" class="btn btn-danger" href="deleteBranch/{{$bdata->bid}}"><i class="far fa-trash-alt"></i> Delete</a>
      </div>
    </div>
  </div>
</div>
                    
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                    </table>

                    <!-- Button trigger modal -->
<!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
  Launch demo modal
</button> -->



          <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/mobile-nav/mobile-nav.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/waypoints/waypoints.min.js"></script>
  <script src="lib/counterup/counterup.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/isotope/isotope.pkgd.min.js"></script>
  <script src="lib/lightbox/js/lightbox.min.js"></script>
  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>
           
                    


                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
