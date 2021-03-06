@extends('layouts.manager')

@section('content')
<div class="content-wrapper">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Customer Details') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in! manager') }}
                </div>
            </div>
        </div>
    </div>
</div>
</div> <!--End wrapper-->
@endsection
