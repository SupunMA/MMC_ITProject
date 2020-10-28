@extends('PaymentSlipParent')

@section('content')

@if($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach($errors->all() as $error)
        <li> {{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/10.5.1/sweetalert2.min.js"></script>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/10.5.1/sweetalert2.min.css">
</head> 
<body> -->
    </br>
    <div class="row">
    <div class="col-sm-3"></div>
    <div class="col-sm-6">
    <form method="post" action="/saveSlipData" enctype="multipart/form-data" 
            class="shadow-lg p-4 mb-4 bg-white">
    @csrf

    
    <div class="row">
    <div class="col-sm-1"></div>
    <div class="col-sm-10 text-center">
    <h1>Instalment Payment</h1>
    </div>
    </div>
    </br></br>

    <div class="row">
        <div class="col-sm-1"></div>
        <div class="col-sm-5">
            <p><b> Customer ID      :</b></p>
        </div>
        <div class="col-sm-5">
            <input type="hidden" id="cusId" name="cusId" min="1" class="col-xs-5 form-control"></br>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-1"></div>
        <div class="col-sm-5">
            <p><b> Term      :</b></p>
        </div>
        <div class="col-sm-5">
        <input type="number" id="term" name="term" min="1" class="col-xs-5 form-control"></br>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-1"></div>
        <div class="col-sm-5">
            <p><b> Bank      :</b></p>
        </div>
        <div class="col-sm-5">
        <input type="text" id="bank" name="bank" class="col-xs-5 form-control" ></br>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-1"></div>
        <div class="col-sm-5">
            <p><b> Paid amount      :</b></p>
        </div>
        <div class="col-sm-5">
        <input type="text" id="paidAmount" name="paidAmount" class="col-xs-5 form-control" ></br>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-1"></div>
        <div class="col-sm-5">
            <p><b>Upload scan image of your slip : </br>(File size = Upto 2MB)      </b></p>
        </div>
        <div class="col-sm-5">
        <input type="file" id="slipImg" name="slipImg"  class="col-xs-5" accept="image/*" ></br>
        </div>
    </div></br>

    <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-6">
        <input type="submit" value="Submit" name="submit" class="col-xs-5 form-control btn-info"/></br>
        </div>
    </div>

    </form>
    <div class="col-sm-3"></div>
    </div>
    </div>
    


    
<!--</body>
</html>-->

@endsection
