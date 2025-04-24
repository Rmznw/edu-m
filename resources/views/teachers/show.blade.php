@extends('layouts')

@section('content')
    <div class="card card-animate"
         style="transform-style: preserve-3d">
        <div class="card-inner">
    <div class="card">
        <div class="card-header">
            <div class="card-body">
                <div class="card-body">


                    <h5 class="card-title">Name: {{$teacher->name}}</h5>
                    <h5 class="card-title">Last Name: {{$teacher->lastname}}</h5>
                    <h5 class="card-title">Age: {{$teacher->age}}</h5>
                    <p class="card-text">Address: {{$teacher->address}}</p>
                    <p class="card-text">Mobile: {{$teacher->phone_number}}</p>

                </div>
            </div>

        </div>
            </div>
        </div>
    </div>
@endsection
