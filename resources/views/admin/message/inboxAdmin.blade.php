
@extends('layouts.admin')

@section('content')

<!-- Content Wrapper. Contains page content -->
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Inbox</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Inbox</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-3">
          <a href="/composeAdmin" class="btn btn-primary btn-block mb-3">Compose</a>

          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Folders</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="card-body p-0">
              <ul class="nav nav-pills flex-column">
                <li class="nav-item active">
                  <a href="/inboxAdmin" class="nav-link">
                    <i class="fas fa-inbox"></i> Inbox
                    <span class="badge bg-primary float-right"></span>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="/sentAdmin" class="nav-link">
                    <i class="far fa-envelope"></i> Sent
                  </a>
                </li>
                
                <li class="nav-item">
                  <a href="/TrashAdmin" class="nav-link">
                    <i class="far fa-trash-alt"></i> Trash
                  </a>
                </li>
              </ul>
            </div>
            <!-- /.card-body -->
          </div>
          
        </div>
        <!-- /.col -->
        <div class="col-md-9">
          <div class="card card-primary card-outline">
            <div class="card-header">
              <h3 class="card-title">Inbox</h3>

              
              <!-- /.card-tools -->
            </div>
            <!-- /.card-header -->
            <div class="card-body p-0">
              
              <div class="table-responsive mailbox-messages">
                <table class="table table-hover table-striped">
                  <tbody>
                  @foreach($ddata['adminInbox'] as $msg)  
                  <!-- return data from AdminController -->
                  @if($msg->delete)
                  @else
                  <tr>
                    <td>
                    
                    <div class="btn-group">
                    
                    <form action="/deleteInboxMSG/{{$msg->msgID}}" method="get" > 
                    
                  <button type="submit" class="btn btn-default btn-sm" title="Move to Trash"><i class="far fa-trash-alt"></i></button>
                  </form>
                  <form action="#" method="get">
                  <input type="hidden" value="{{$msg->msgID}}"> 
                  <button type="submit" class="btn btn-default btn-sm" title="Reply"><i class="fas fa-share"></i></button>
                  </form>
                  <form action="#" method="get">
                  <input type="hidden" value="{{$msg->msgID}}"> 
                  <button type="submit" class="btn btn-default btn-sm" title="Mark as Read" ><i class="fas fa-check-double"></i></button>
                  </form>
                </div>
                
                    </td>
                    
                    <td class="mailbox-name"><a href="/readAdmin/{{$msg->msgID}}">{{$msg->nic}} {{$msg->name}}</a></td>
                    <td class="mailbox-subject"><b>{{$msg->sendSub}}...</b>
                    </td>
                    <td class="mailbox-attachment"></td>
                    <td class="mailbox-date">{{$msg->sendDate}}</td>
                  </tr>
                  @endif
                 @endforeach
                  </tbody>
                </table>
                <!-- /.table -->
              </div>
              <!-- /.mail-box-messages -->
            </div>
            <!-- /.card-body -->
            
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->




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

  <script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<!-- Summernote -->
<script src="../../plugins/summernote/summernote-bs4.min.js"></script>
<!-- Page Script -->
<script>
  $(function () {
    //Add text editor
    $('#compose-textarea').summernote()
  })
</script>
</div>   <!--wrap end div-->

@endsection
