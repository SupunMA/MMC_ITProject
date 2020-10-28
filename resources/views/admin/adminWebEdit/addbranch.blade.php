@extends('layouts.admin')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

<!-- Content Header (Page header) -->
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Add Branches</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Add Branches</a></li>
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
            <div class="info-box bg-success ">
            <span class="info-box-icon"><i class="far fa-building"></i></span>
           <div class="info-box-content">
           <span class="info-box-text">Branches</span>
           <h3> <span class="info-box-number" data-toggle="counter-up">{{$wordCount = count($branchDATA)}}</span></h3>
          <!--  -->
        </div>
      </div>
      </div>
      <div class="col-lg-3 col-6">
<div class="info-box bg-warning ">
  <span class="info-box-icon"><i class="far fa-building"></i></span>
  <div class="info-box-content">
    <span class="info-box-text">Shown Branches</span>
    <h3><span class="info-box-number" data-toggle="counter-up">
    <?php  
$x=0;  
$y=0;
$z=1;
?>
    @foreach($branchDATA as $bdata)
       @if($bdata->hide)
       <?php $x=$x+$z;  ?>
       @else
       <?php $y=$y+$z;  ?>
       @endif
    @endforeach
    {{$y}}
    
    
    </span></h3>
  </div>
</div>
</div>

<div class="col-lg-3 col-6">
<div class="info-box bg-secondary ">
  <span class="info-box-icon"><i class="far fa-building"></i></span>
  <div class="info-box-content">
    <span class="info-box-text">Hidden Branches</span>
    <h3> <span class="info-box-number" data-toggle="counter-up">{{$x}}</span></h3>
  </div>

</div>


            </div>
          </div>
          
          <hr>
          
          <div class="text-left ">
          <a href="/adminAddingBranch" class="btn btn-primary">Add New</a>{!! "&nbsp;" !!}<a href="/convertPDF" target='_blank' class="btn btn-danger"><i class="far fa-file-pdf"></i> Generate PDF</a></div><br>
          
          </div>
       

          <div class="container-fluid" >
          
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card ">
                <div class="card-header text-bold"><h4>{{ __('ALL BRANCHES') }}</h4></div>

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
                    <th>ADDRESS</th>
                    <th>T-PHONE</th>
                    <th>MAP LOCATION</th>
                    <th>ACTIONS</th>
                    </tr>
                    </thead>
                    <tbody class="text-center">
                    @foreach($branchDATA as $bdata)
                    <tr>
                    <td>{{$bdata->bid}}</td>
                    <td>{{$bdata->Bname}}</td>
                    <td>{{$bdata->Baddress}}</td>
                    <td>{{$bdata->Phone}}</td>
                    <td><a href="{{$bdata->GoogleURL}}" target="_blank">View On Google Map</td>
                    <td> <a href="editeBranch/{{$bdata->bid}}" class="btn btn-secondary "><i class="far fa-edit"></i> Edit</a>
                    <a data-toggle="modal" data-target="#exampleModalCenter-{{$bdata->bid}}"  class="btn btn-danger" href=""><i class="fa fa-trash"> </i> Delete</a>
                    @if($bdata->hide)
                    <a href="showBranch/{{$bdata->bid}}" class="btn btn-warning"><i class="fas fa-eye"></i> Show</a>
                    @else
                    <a href="hideBranch/{{$bdata->bid}}" class="btn btn-success"><i class="far fa-eye-slash"></i> Hide</a>
                    </td>
                    @endif
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
</div>
@endsection
