@extends('layouts')

@section('content')
    <div class="card">
        <div class="card-header">
            <div class="card-body">
                <div class="card-body">


                    <h5 class="card-title">Name: {{$courses->name}}</h5>
                    <h5 class="card-title">Syllabus: {{$courses->syllabus}}</h5>
                    <h5 class="card-text">Duration: {{$courses->duration}}</h5>


                </div>
            </div>
        </div>
    </div>
@endsection
