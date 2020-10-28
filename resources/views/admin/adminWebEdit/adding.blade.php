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
  <div class="card-header">{{ __('ENTER BRANCH DETAILS') }}</div>
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

  <form class="needs-validation" novalidate action="/uploadBranch" method="post">
  @csrf
  <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="validationCustom01">Branch Name</label>
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroupPrepend"><i class="far fa-keyboard"></i></span>
        </div>
      <input type="text" class="form-control" name="Bname" id="validationCustom01" placeholder="Branch Name" value="" required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    </div>

    <div class="col-md-4 mb-3">
      <label for="validationCustom02">Branch Address</label>
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroupPrepend"><i class="fas fa-map-marker-alt"></i></span>
        </div>
      <input type="text" class="form-control" name="Baddress" id="validationCustom02" placeholder="Branch Address" value="" required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    </div>

    <div class="col-md-4 mb-3">
      <label for="validationCustomUsername">Telephone</label>
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text"  id="inputGroupPrepend"><i class="fas fa-phone-volume"></i></span>
        </div>
        <input type="text" class="form-control" name="Tele" id="validationCustomUsername" placeholder="Telephone" aria-describedby="inputGroupPrepend" required>
        <div class="invalid-feedback">
        Please provide a valid Telephone Number.
        </div>
      </div>
    </div>
  </div>

  <div class="form-row">
    <div class="col-md-6 mb-3">
      <label for="validationCustom03">Google Map Location</label>
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text"  id="inputGroupPrepend"><i class="fas fa-map-marked-alt"></i></span>
        </div>
      <input type="text" class="form-control" name="map" id="validationCustom03" placeholder="Paste Link Here" required>
      <div class="invalid-feedback">
        Please provide a valid Link.
      </div>
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
