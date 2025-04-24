@extends('layouts')

@section('content')
    <div class="card">
        <div class="card-header">
            <div class="card-body">
                <div class="card-body">

                    <h5 class="card-title">Name: {{$students->name}}</h5>
                    <h5 class="card-title">Last Name: {{$students->lastname}}</h5>
                    <h5 class="card-title">Age: {{$students->age}}</h5>
                    <p class="card-text">Address: {{$students->address}}</p>
                    <p class="card-text">Mobile: {{$students->phone_number}}</p>

                </div>
            </div>
        </div>
    </div>
@endsection
