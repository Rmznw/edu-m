@extends('layouts')

@section('content')
    <div class="card">
        <div class="card-header">
            <div class="card-body">
                <div class="card-body">


                    <h5 class="card-title">Enroll No: {{$payments->enroll_no}}</h5>
                    <h5 class="card-title">Paid Date: {{$payments->paid_date}}</h5>
                    <h5 class="card-text">Amount: {{$payments->amount}}</h5>


                </div>
            </div>
        </div>
    </div>
@endsection
