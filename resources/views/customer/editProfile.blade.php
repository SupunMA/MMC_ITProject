@extends('layouts.customer')

@section('content')
<div class="content-wrapper">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-11">
            <div class="card">
                <div class="card-header">{{ __('Edit Profile') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                   

     <section>
        <div class="container-fluid">
          <div class="row mb-2">
           <div class="col-sm-6">
              <h1>Profile</h1>
           </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/customer">Home</a></li>
              <li class="breadcrumb-item active">User Profile</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    

    
      <div class="container-fluid">
        <div class="row justify-content-center">
          <div class="col-md-9">

            <!-- Profile Image -->
            <div class="card card-primary card-outline ">
              <div class="card-body box-profile">
                <div class="text-center">
                  <img class="profile-user-img img-fluid img-circle"
                       src="{{ URL::asset('img\logo3.png') }}"
                       alt="User profile picture">
                </div>

                <h3 class="profile-username text-center">You have registered under <b>{{($ddata['customer']->Bname)}}</b> Branch</h3>

                <p class="text-muted text-center"><font size="2"><i>Your Branch</i></font></p>


                @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
                
   <div class="row justify-content-center">
   
    <div class="col-lg-8">
    <form action="/customerUpdate" method="post">
                <ul class="list-group list-group-unbordered mb-3">
       @csrf         
                <p class="text-muted text-center"><font size="2"><i>Your Personal Details</i></font></p>
                      <li class="list-group-item">
                      <input type="hidden" name="cid" class="float-right form-control" value="{{($ddata['customer']->cid)}}">
                        <b>Name</b> <input type="text" name="name" class="float-right form-control" value="{{($ddata['customer']->nameWithIn)}}" required> 
                      </li>
                      <li class="list-group-item">
                        <b>Address</b> <input type="text" name="address" class="float-right form-control" value="{{($ddata['customer']->address)}}" required>
                      </li>
                      <li class="list-group-item">
                        <b>Mobile</b> <input type="text" name="mobile" class="float-right form-control" value="0{{($ddata['customer']->mobile)}}" required>
                      </li>
                    </ul>
                 </div>   
    
                <div class="col-md-5">
                <p class="text-muted text-center"><font size="2"><i>*NIC/Branch details can not be change</i></font></p>
                     <input type="submit" class="btn btn-warning btn-block" value="Update">
                </div>
 </div>
              
  </form>                         
                
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

         
           




                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
