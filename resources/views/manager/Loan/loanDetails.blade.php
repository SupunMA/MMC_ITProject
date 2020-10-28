@extends('layouts.manager')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

<!-- Content Header (Page header) -->
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">LOAN DETAILS</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Loan Details</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <div class="container" >
    <div class="row counters">
          
 


          </div>
          
          <hr>
          
          <div class="text-left ">
          <a href="/manager/add/loan" class="btn btn-primary">Add New Loan</a></div><br>
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
                   @foreach($ddata['loandetails'] as $loanDetail)
                    <tr>
                    <td>{{$loanDetail->LoanID}}</td>
                    <td>{{$loanDetail->nic}}</td>
                    <td>{{$loanDetail->mobile}}</td>
                    <td>{{$loanDetail->LoanAmount}}</td>
                    <td>{{$loanDetail->loanDate}}</td>
                    <td> <a href="" class="btn btn-secondary " data-toggle="modal" data-target="#editModalCenter-{{$loanDetail->LoanID}}"><i class="far fa-edit"></i> Edit</a>
                    <a data-toggle="modal" data-target="#exampleModalCenter-{{$loanDetail->LoanID}}"  class="btn btn-danger" href=""><i class="fa fa-trash"> </i> Delete</a>
                   
                   
                    </td>
                   
                    <td> 
                    
                    <!-- Modal Delete-->
<div class="modal fade" id="exampleModalCenter-{{$loanDetail->LoanID}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" style="background-color: rgba(170, 44, 44, 0.36);">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle"><i class="fas fa-exclamation-triangle"></i> Delete The <b style="color:red;"> {{$loanDetail->LoanID}} Loan Details</b> ?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <ul class="text-left">
        
        <b>You will not be able to Restore <u style="color:red;"> {{$loanDetail->nic}} - {{$loanDetail->LoanID}}</u> Again.</b>
        </ul>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success" data-dismiss="modal"><i class="fas fa-times"></i> Cancel</button>
        <a type="button" class="btn btn-danger" href="/deleteLoan/{{$loanDetail->LoanID}}"><i class="far fa-trash-alt"></i> Delete</a>
      </div>
    </div>
  </div>
</div>


                 <!-- Modal edit-->
<div class="modal fade" id="editModalCenter-{{$loanDetail->LoanID}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" style="background-color: rgba(170, 44, 44, 0.36);">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle"><i class="fas fa-exclamation-triangle"></i> Delete The <b style="color:red;"> {{$loanDetail->LoanID}} Loan Details</b> ?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form class="needs-validation" novalidate action="/editLoan" method="post">
        <input type="hidden" value="{{$loanDetail->LoanID}}" name="LoanID" >
        
  @csrf
  <div class="">
    <div class="col-md-12 mb-6">
      <label for="validationCustom01">Customer NIC</label>
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroupPrepend"><i class="far fa-keyboard"></i></span>
        </div>
        <!-- <input id="nic" type="text" class="form-control @error('nic') is-invalid @enderror" name="nic" value="{{ old('nic') }}" placeholder="123456789 / 123456789012" required maxlength="12"> -->
        <select  name=nicList id=nicList size=5 class="form-control" required>
          <option value="" disabled style="color:Black;font-weight:bold;">#Select NIC</b>
          
          <option value="{{$loanDetail->cid}}">{{$loanDetail->nic}}
          
          </select>


      
      
      
      
      
      <div class="valid-feedback">
        Looks good!
      </div> 
      <div class="invalid-feedback">
        Please Select NIC number !
      </div>
    </div>
    </div>
    
    <div class="col-md-12 mb-6">
      <label for="validationCustom02">Amount Of The Loan</label>
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroupPrepend"><i class="fas fa-map-marker-alt"></i></span>
        </div>
       <input id="loan" type="number" min="100000" max="1000000" step="1000"  class="form-control @error('loan') is-invalid @enderror" name="loan" value="{{$loanDetail->LoanAmount}}" placeholder="1 Lakh - 1 Million" required  oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength = "7">
      <div class="valid-feedback">
        Looks good!
      </div>
      <div class="invalid-feedback">
        Between Rs.100,000 - Rs.1,000,000
      </div>
    </div>
    </div>

    <div class="col-md-12 mb-6">
      <label for="validationCustomUsername">Interest Rate</label>
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text"  id="inputGroupPrepend"><i class="fas fa-phone-volume"></i></span>
        </div>
        <select class="form-control" name="intRate">
        <option>{{$loanDetail->IntRate}}</option>
        <option >3</option>
        <option>5</option>
        
        </select>
        <div class="invalid-feedback">
        Please provide a valid Telephone Number.
        </div>
      </div>
    </div>
  </div>

  
    <div class="col-md-12 mb-6">
      <label for="validationCustom03">Late Fee Rate</label>
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text"  id="inputGroupPrepend"><i class="fas fa-map-marked-alt"></i></span>
        </div>
        <select class="form-control" name="lateFeeRate">
        <option>{{$loanDetail->lateRate}}</option>
        <option>1</option>
        <option >3</option>
        <option>5</option>
        </select>
      <div class="invalid-feedback">
        Please provide a valid Link.
      </div>
    </div>
    </div>
 


  
    <div class="col-md-12 mb-6">
      <label for="validationCustom03">Date</label>
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text"  id="inputGroupPrepend"><i class="fas fa-map-marked-alt"></i></span>
        </div>
        <input id="loanDate" type="text" value="{{$loanDetail->loanDate}}" class="form-control @error('loanDate') is-invalid @enderror" name="loanDate" value="{{ old('loanDate') }}" required autocomplete="loanDate" pattern="\d{4}-\d{2}-\d{2}" placeholder="yyyy-mm-dd" required>
      <div class="invalid-feedback">
        Please provide a valid Date.
      </div>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    </div>
 


  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
      <label class="form-check-label" for="invalidCheck">
        Confirm Details
      </label>
      <div class="invalid-feedback">
        You must confirm data.
      </div>
    </div>
  </div>
  <button class="btn btn-success" type="submit">Submit Form</button>
  <input class="btn btn-danger" type="reset" value='Reset form'> 
</form>

<!-- Nic list ascending js -->
<script language="JavaScript" type="text/javascript">
function sortlist() {
var lb = document.getElementById('nicList');
arrTexts = new Array();

for(i=0; i<lb.length; i++)  {
  arrTexts[i] = lb.options[i].text;
}

arrTexts.sort();

for(i=0; i<lb.length; i++)  {
  lb.options[i].text = arrTexts[i];
  //lb.options[i].value = arrTexts[i];
}
}
</script><!--END Nic list ascending js  -->


<!--Onload function call ascending NIC -->
<script>
window.onload = sortlist;
</script><!--END Onload function call ascending NIC -->



<script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fas fa-times"></i> Cancel</button>
        
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
