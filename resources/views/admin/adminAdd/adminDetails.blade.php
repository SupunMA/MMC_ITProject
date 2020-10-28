@extends('layouts.admin')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

<!-- Content Header (Page header) -->
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Admin Details</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Admin Details</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <div class="container" >
    <div class="row">
          
      <div class="col-lg-3 col-6">
<div class="info-box bg-info ">
  <span class="info-box-icon"> <i class="nav-icon fas fa-user-shield"></i></span>
  <div class="info-box-content">
    <span class="info-box-text">Administrators</span>
    <h3> <span class="info-box-number" data-toggle="counter-up">{{$wordCount = count($users)}}</span></h3>
  </div>
</div>
</div>


          </div>
          
          <hr>
          
          
       

          <div class="container-fluid" >
          
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card ">
                <div class="card-header text-bold"><h4>{{ __('ALL ADMINS') }}</h4></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                   
                    <table class="table table-hover">
                    <thead class="text-center">
                    <tr >
                    <th>ID</th>
                    <th>Name</th>
                    <th>Branch Name</th>
                    <th>Email</th>
                    <th>T-PHONE</th>
                    <th>ACTIONS</th>
                    </tr>
                    </thead>
                    <tbody class="text-center">
                    @foreach($users as $user)
                    
                    <tr>
                    <td>{{$user->aid}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->Bname}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->mobile}}</td>
                    <th> <a  href=""  class="btn btn-primary"><i class="fas fa-external-link-alt"></i> View</a>
                    <a href="#" class="btn btn-danger"><i class="fa fa-trash"> </i> Remove</a>
                    
                    </tr>
                    
                    @endforeach
                    </tbody>
                    </table>

                    
                    


                </div>
            </div>
        </div>
    </div>
</div>



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
@endsection
