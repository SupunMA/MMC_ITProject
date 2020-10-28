@extends('PaymentSlipFormParent')

@section('main')

<div class="jumbotron text-center">
    <div align="right">
        <a href="/payment-slip-all-data" class="btn btn-default">Back</a>
    </div>
    <img src="{{ URL::to('/') }}/images/{{ $data->ScanCopyImg }}" class="img-thumbnail"/>
    </br>
    <h3>Customer ID - {{ $data-> CusID }}</h3>
    <h3>Bank - {{ $data-> Bank }}</h3>
</div>

@endsection