@extends('layouts')

@section('content')
    <div class="card">
        <div class="card-header">
            <div class="card-body">
                <div class="card-body">


                    <h5 class="card-title">Name: {{$batches->name}}</h5>
                    <h5 class="card-title">Course: {{$batches->course->name}}</h5>
                    <h5 class="card-text">Start Date: {{$batches->start_date}}</h5>


                </div>
            </div>
        </div>
    </div>
@endsection
