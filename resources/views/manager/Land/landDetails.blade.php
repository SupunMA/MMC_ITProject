@extends('layouts.manager')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

<!-- Content Header (Page header) -->
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">LAND DETAILS</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Land Details</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <div class="container" >
    <div class="row counters">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="info-box bg-primary ">
            <span class="info-box-icon"><i class="fas fa-laptop-house"></i></span>
           <div class="info-box-content">
           <span class="info-box-text">Available Lands</span>
           <h3> <span class="info-box-number" data-toggle="counter-up"></span></h3>
          <!--  -->
        </div>
      </div>
      </div>
      <div class="col-lg-3 col-6">
<div class="info-box bg-danger ">
  <span class="info-box-icon"><i class="fas fa-hourglass-half"></i></span>
  <div class="info-box-content">
    <span class="info-box-text">Lands For Sale</span>
    <h3><span class="info-box-number" data-toggle="counter-up">
    
    </span></h3>
  </div>
</div>
</div>


          </div>
          
          <hr>
          
          <div class="text-left ">
          <a href="/manager/add/land" class="btn btn-info">Add New Land</a></div><br>
          </div>
       

          <div class="container-fluid" >
          
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card ">
                <div class="card-header text-bold"><h4>{{ __('ALL LOANS') }}</h4></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                   
                    <table class="table table-hover">
                    <thead class="text-center">
                    <tr >
                    <th>Loan ID</th>
                    <th>Client NIC</th>
                    <th>Client Mobile</th>
                    <th>Loan Amount</th>
                    <th>Loan Date</th>
                    <th>ACTIONS</th>
                    </tr>
                    </thead>
                    <tbody class="text-center">
                   @foreach($ddata['landdetails'] as $landdetail)
                    <tr>
                    <td>{{$landdetail->landID}}</td>
                    <td>{{$landdetail->nic}}</td>
                    <td>{{$landdetail->mobile}}</td>
                    <td>{{$landdetail->valueOfLand}}</td>
                    <td>{{$landdetail->valueOfLand}}</td>
                    <td> 
                    <a data-toggle="modal" data-target="#exampleModalCenter-{{$landdetail->landID}}"  class="btn btn-danger" href=""><i class="fa fa-trash"> </i> Delete</a>
                    @if($landdetail->saleable)
                                 <a href="/showClient/{{$landdetail->landID}}" class="btn btn-warning mt-1" ><i class="far fa-eye"></i>Remove From Sale List </a>
                          @else
                                 <a href="/hideClient/{{$landdetail->landID}}" class="btn btn-success mt-1" ><i class="far fa-eye-slash"></i> Add to Sale List</a>
                                            
                         @endif
                   
                    </td>
                   
                    <td> 
                    
                    <!-- Modal Delete-->
<div class="modal fade" id="exampleModalCenter-{{$landdetail->landID}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" style="background-color: rgba(170, 44, 44, 0.36);">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle"><i class="fas fa-exclamation-triangle"></i> Delete The <b style="color:red;"> {{$landdetail->landID}} Loan Details</b> ?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <ul class="text-left">
        
        <b>You will not be able to Restore <u style="color:red;"> {{$landdetail->nic}} - {{$landdetail->landID}}</u> Again.</b>
        </ul>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success" data-dismiss="modal"><i class="fas fa-times"></i> Cancel</button>
        <a type="button" class="btn btn-danger" href="/deleteLoan/{{$landdetail->landID}}"><i class="far fa-trash-alt"></i> Delete</a>
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
</div>
@endsection