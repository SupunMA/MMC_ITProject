@extends('layouts.unknown')

@section('content')
<div class="content-wrapper">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header" style="color:white;background-color:red;"><i class="fas fa-edit"></i> <b>{{ __('System Message') }}</b></div>

                <div class="card-body" style="color:Red;">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                   Hello <b>{{ Auth::user()->name }} !</b> <br>{{ __('You are logged in to the System but Company has not accepted yor Request. After accepting, you will be able to access the system as an Employee!') }}<br><b> <br>{{ __('Thank you! (system message)') }}
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
