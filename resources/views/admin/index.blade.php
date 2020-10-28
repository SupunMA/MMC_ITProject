@extends('layouts.admin')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<div class="container" >
    <div class="row justify-content-center">
        <div class="col-md-12">
        <!-- <div class="row"> -->
       

       <!-- <iframe scrolling="no" frameborder="no" clocktype="html5" style="overflow:hidden;border:0;margin:0;padding:0;width:200px;height:200px;"src="https://www.clocklink.com/html5embed.php?clock=023&timezone=GMT0530&color=black&size=200&Title=&Message=&Target=&From=2020,1,1,0,0,0&Color=black"></iframe> -->
        <div id="6313200c57247139e4e3ff0f4d4cefe2" class="ww-informers-box-854753"><p class="ww-informers-box-854754"><a href="https://world-weather.info/forecast/sri_lanka/colombo/14days/">https://world-weather.info</a><br><a href="https://world-weather.info/forecast/usa/madison_1/">https://world-weather.info</a></p></div><script async type="text/javascript" charset="utf-8" src="https://world-weather.info/wwinformer.php?userid=6313200c57247139e4e3ff0f4d4cefe2"></script><style>.ww-informers-box-854754{-webkit-animation-name:ww-informers54;animation-name:ww-informers54;-webkit-animation-duration:1.5s;animation-duration:1.5s;white-space:nowrap;overflow:hidden;-o-text-overflow:ellipsis;text-overflow:ellipsis;font-size:12px;font-family:Arial;line-height:18px;text-align:center}@-webkit-keyframes ww-informers54{0%,80%{opacity:0}100%{opacity:1}}@keyframes ww-informers54{0%,80%{opacity:0}100%{opacity:1}}</style>
         
            <!-- </div> -->
            <div class="card">
            
                <div class="card-header"><b>{{ __('Dashboard') }}</b></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in Admin!') }}

                   


                   
                <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" style="background-color: rgba(170, 44, 44, 0.36);">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle"><i class="fas fa-exclamation-triangle"></i> Delete The Branch ?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <ul>
        <li>Clients' Details which are under this Branch will be deleted.</li>
        <li>Employees' Details which are under this Branch will be deleted.</li>
        </ul>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success" data-dismiss="modal">No</button>
        <button type="button" class="btn btn-danger"><i class="far fa-trash-alt"></i> Delete</button>
      </div>
    </div>
  </div>
</div>

                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
