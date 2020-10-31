@extends('layouts.customer')

@section('content')
<div class="content-wrapper">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-11">
                <div class="card">
                    <div class="card-header">{{ __('My Loans') }}</div>

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
                                        <h1>My Loans</h1>
                                    </div>
                                    <div class="col-sm-6">
                                        <ol class="breadcrumb float-sm-right">
                                            <li class="breadcrumb-item"><a href="/customer">Home</a></li>
                                            <li class="breadcrumb-item active">Loans</li>
                                        </ol>
                                    </div>
                                </div>
                            </div><!-- /.container-fluid -->
                        </section>

                        <table class="table table-hover">
                            <thead class="text-center">
                                <tr>
                                    <th>Loan ID</th>
                                    <th>Loan Amount</th>
                                    <th>Interest Rate</th>
                                    <th>Late Fee Rate</th>
                                    <th>Loan Date</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                @foreach($ddata['loan'] as $loans)
                                <tr>
                                    <td>{{$loans->LoanID}}</td>
                                    <td>Rs.{{$loans->LoanAmount}}</td>
                                    <td>{{$loans->IntRate}}%</td>
                                    <td>{{$loans->lateRate}}%</td>
                                    <td>{{$loans->loanDate}}</td>

                                </tr>
                                @endforeach
                            </tbody>
                        </table>




                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
