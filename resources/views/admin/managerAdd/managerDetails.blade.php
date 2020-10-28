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
            <!-- small box -->
            <div class="info-box bg-success ">
            <span class="info-box-icon"><i class="far fa-building"></i></span>
           <div class="info-box-content">
           <span class="info-box-text">Branches</span>
          <span class="info-box-number">410</span>
        </div>
      </div>
      </div>
      <div class="col-lg-3 col-6">
<div class="info-box bg-warning ">
  <span class="info-box-icon"><i class="far fa-building"></i></span>
  <div class="info-box-content">
    <span class="info-box-text">Shown Branches</span>
    <span class="info-box-number">410</span>
  </div>
</div>
</div>

<div class="col-lg-3 col-6">
<div class="info-box bg-secondary ">
  <span class="info-box-icon"><i class="far fa-building"></i></span>
  <div class="info-box-content">
    <span class="info-box-text">Hidden Branches</span>
    <span class="info-box-number">410</span>
  </div>

</div>


            </div>
          </div>
          
          <hr>
          
          <div class="text-left ">
          <a href="/adminAddingBranch" class="btn btn-primary">Add New</a></div><br>
          </div>
       

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
                    <th>ADDRESS</th>
                    <th>T-PHONE</th>
                    <th>MAP LOCATION</th>
                    <th>ACTIONS</th>
                    </tr>
                    </thead>
                    <tbody class="text-center">
                    <tr>
                    <td>Branch ID</td>
                    <td>Branch Name</td>
                    <td>Branch ADDRESS</td>
                    <td>TELE-PHONE</td>
                    <td>GOOGLE MAP LOCATION</td>
                    <th> <a href="#" class="btn btn-secondary "><i class="far fa-edit"></i> Edit</a>
                    <a href="#" class="btn btn-danger"><i class="fa fa-trash"> </i> Delete</a>
                    <a href="#" class="btn btn-success"><i class="far fa-eye-slash"></i> Hide</a></th>
                    </tr>

                    </tbody>
                    </table>

                    
                    


                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
