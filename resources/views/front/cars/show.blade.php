@extends('front.layouts.master')
@section('title')
    {{ $car->make }},{{ $car->model }}, {{ $car->year }}
@endsection
@section('content')
    <div class="container">


            <iframe width="100%" height="500px" src="{{ $car->video }}" style="margin-top:100px;"></iframe>



            <div  width="100%">
                <img src="{{ $car->image }}" class="img-responsive">
            </div>

    </div>

    <div class="container mt-5">
        <h1>{{ $car->make }},{{ $car->model }}, {{ $car->year }}, {{ $car->trim }}</h1>
        <hr>
        <div class="row">
            <span class="text-danger">Description:</span>
            <p>{{ $car->desc }}</p>
        </div>
        <ul class="list-group">
            <div class="row">
                <div class="col-md-6">
                    <li class="list-group-item"><span class="text-danger">Location:</span> {{ $car->city }}, {{ $car->location }}</li>
                    <li class="list-group-item"><span class="text-danger">Price:</span> {{ number_format( $car->price  , 0 , '.' , ',' )}}  THB</li>
                    <li class="list-group-item"><span class="text-danger">Mileage:</span> {{ number_format( $car->mileage  , 0 , '.' , ',' )}}  Km</li>
                </div>

                <div class="col-md-6">
                    <li class="list-group-item"><span class="text-danger">Transimission:</span> {{ $car->transmission }}</li>
                    <li class="list-group-item"><span class="text-danger">Color:</span>
                        <span>
                            <svg width="50" height="50">
                              <rect x="10" y="10" rx="10" ry="10" width="40" height="40"
                              style="fill:{{ $car->color }};opacity:0.9" />
                            </svg>
                        </span>
                    </li>
                </div>

            </div>
        </ul>
    </div>
@endsection
