
@extends('layouts.admin')

@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

<!-- Content Header (Page header) -->
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Add Admin</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Add Admin</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <div class="container" >
    <div class="row counters">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="info-box bg-warning ">
            <span class="info-box-icon"><i class="fas fa-user-circle"></i></span>
           <div class="info-box-content">
           <span class="info-box-text">Unknown Employees</span>
           <h3> <span class="info-box-number" data-toggle="counter-up">{{$wordCount = count($ddata['branch'])}}</span></h3>
          <!--  -->
        </div>
      </div>
      </div>
      </div>
      </div>
       

   <div class="container" >     
    <div class="row justify-content-center">
        <div class="col-md-12 ">
           
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

        </div>
      </div>   
  </div>



  <div class="container-fluid">

  <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card ">
                <div class="card-header text-bold"><h4>{{ __('ALL UNKNOWN EMPLOYEES') }}</h4></div>

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
                    <th>Registered Branch</th>
                    <th>Name</th>
                    <th>Email Address</th>
                    <th>NIC</th>
                    <th>ACTIONS</th>
                    </tr>
                    </thead>
                    <tbody class="text-center">
                    
                    @foreach($ddata['branch'] as $branch)
                    
                    <tr>
                    <td>{{$branch->aid}}</td>
                   
                    <td>
                    {{$branch->Bname}}
                    
                    </td>
                    <td>{{$branch->name}}</td>
                    <td>{{$branch->email}}</td>
                    <td>{{$branch->nic}}</td>
                    <th>
                    <a  href=""  class="btn btn-primary"><i class="fas fa-external-link-alt"></i> View</a>
                    <a data-toggle="modal" href="" data-target="#exampleModalCenter-{{$branch->aid}}" class="btn btn-danger"><i class="fa fa-trash"> </i> Delete</a>
                    <a href="#" class="btn btn-success"><i class="far fa-eye-slash"></i> Make Admin</a></th>
                    
                    <td>
                                                <!-- Modal -->
                          <div class="modal fade" id="exampleModalCenter-{{$branch->aid}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" style="background-color: rgba(170, 44, 44, 0.36);">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalLongTitle"><i class="fas fa-exclamation-triangle"></i> Delete The <b style="color:red;">{{$branch->name}} </b> ?</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body">
                                  <ul class="text-left">
                                  <li>Details about {{$branch->name}}  will be deleted.</li>
                                  
                                  <b>You will not be able to Restore <u style="color:red;">{{$branch->name}} </u> Again.</b>
                                  </ul>
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-success" data-dismiss="modal"><i class="fas fa-times"></i> Cancel</button>
                                  <a type="button" class="btn btn-danger" href=""><i class="far fa-trash-alt"></i> Delete</a>
                                </div>
                              </div>
                            </div>
                          </div><!--End of the model-->

                    </td>
                    </tr>
                    
                    @endforeach
                    </tbody>
                    </table>

                    
                    


                </div>
            </div>
        </div>
    </div>
  </div><!--table content fluid end div-->




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
</div>   <!--wrap end div-->

@endsection
