@extends('layouts.manager')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

<!-- Content Header (Page header) -->
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Add Land</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Add Land</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
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

    <div class="card text-white bg-white col-lg-12" >
  <div class="card-header">{{ __('ENTER LOAN DETAILS') }}</div>
  <div class="card-body">
  @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

  <form class="needs-validation" novalidate action="/uploadLand" enctype='multipart/form-data' method="post">
  @csrf
  <div class="">
    <div class="col-md-6 mb-3">
      <label for="validationCustom01">Customer NIC</label>
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroupPrepend"><i class="far fa-keyboard"></i></span>
        </div>
        <!-- <input id="nic" type="text" class="form-control @error('nic') is-invalid @enderror" name="nic" value="{{ old('nic') }}" placeholder="123456789 / 123456789012" required maxlength="12"> -->
        <select  name=nicList id=nicList size=5 class="form-control" required>
          <option value="" disabled style="color:Black;font-weight:bold;">#Select Customer NIC</b>
          @foreach($ddata['nic'] as $bdata)
          <option value="{{$bdata->cid}}">{{$bdata->nic}}
          @endforeach
          </select>
      <div class="valid-feedback">
        Looks good!
      </div> 
      <div class="invalid-feedback">
        Please Select NIC number !
      </div>
    </div>
    </div>
    
    <div class="col-md-6 mb-3">
      <label for="validationCustom02">Add Land Images</label>
     
        
       <input id="LandImages" type="file" class="form-control @error('LandImages') is-invalid @enderror" name="LandImages" value="{{ old('LandImages') }}"  required  >
      <div class="valid-feedback">
        Looks good!
      </div>
      <div class="invalid-feedback">
        Add Valid Images
      </div>
    </div>
  




    <div class="col-md-6 mb-3">
      <label for="validationCustom02">Value Of The Land</label>
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroupPrepend"><i class="far fa-keyboard"></i></span>
        </div>
       <input id="land" type="number" min="100000" max="5000000" step="5000"  class="form-control @error('land') is-invalid @enderror" name="land" value="{{ old('land') }}" placeholder="1 Lakh - 5 Million" required  oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength = "7">
      <div class="valid-feedback">
        Looks good!
      </div>
      <div class="invalid-feedback">
        Between Rs.100,000 - Rs.5,000,000
      </div>
    </div>
    </div>

    <div class="col-md-6 mb-3">
      <label for="validationCustomUsername">Perches</label>
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text"  id="inputGroupPrepend"><i class="far fa-keyboard"></i></span>
        </div>
        
        <input type="number" name="LandAddress" class="form-control" placeholder="Add Perches" required>
        
        </select>
        <div class="invalid-feedback">
        Please provide a valid Amount.
        </div>
      </div>
    </div>
  

  <div class="col-md-6 mb-3">
      <label for="validationCustomUsername">Land Address</label>
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text"  id="inputGroupPrepend"><i class="far fa-keyboard"></i></span>
        </div>
        
        <input type="text" name="LandAddress" class="form-control" placeholder="Add Address" required>
        
        </select>
        <div class="invalid-feedback">
        Please provide a valid Address.
        </div>
      </div>
    </div>
  </div>

  
    <div class="col-md-6 mb-3">
      <label for="validationCustom03">Land Map Location</label>
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text"  id="inputGroupPrepend"><i class="far fa-keyboard"></i></span>
        </div>
        <input type="text" name="LandMap" class="form-control" placeholder="Paste Link Here" required>
      <div class="invalid-feedback">
        Please provide a valid Link.
      </div>
    </div>
    </div>
 


  
    <div class="col-md-6 mb-3">
      <label for="validationCustom03">Date</label>
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text"  id="inputGroupPrepend"><i class="far fa-keyboard"></i></span>
        </div>
        <input id="landDate" type="text" value="<?php echo date('Y-m-d'); ?>" class="form-control @error('loanDate') is-invalid @enderror" name="landDate" value="{{ old('loanDate') }}" required autocomplete="landDate" pattern="\d{4}-\d{2}-\d{2}" placeholder="yyyy-mm-dd" required>
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
</div>
</div>  
</div>
@endsection
