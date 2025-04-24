@extends('layouts')

@section('content')
    <div class="card">
        <div class="card-header">
            <div class="card-body">
                <div class="card-body">


                    <h5 class="card-title">Name: {{$enrollments->enroll_no}}</h5>
                    <h5 class="card-title">Student: {{$enrollments->student->name}}</h5>
                    <h5 class="card-text">Batch: {{$enrollments->batch->name}}</h5>
                    <h5 class="card-text">Join Date: {{$enrollments->join_date}}</h5>
                    <h5 class="card-text">Fee: {{$enrollments->fee}}</h5>



                </div>
            </div>
        </div>
    </div>
@endsection
