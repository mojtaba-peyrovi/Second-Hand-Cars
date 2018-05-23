@extends('front.layouts.master')
@section('title')
    {{ $dealer->name }}
@endsection
@section('content')
    <div id="map" style="width=100%;">
        @include('front.dealer.dealerMap')
    </div>
    <div class="container mt-5">
        <h1>{{ $dealer->name }}</h1>
        <hr>
        <ul class="list-group">
            <div class="row">
                <div class="col-md-4">
                    <li class="list-group-item"><span class="text-danger">Location:</span> {{ $dealer->city }}, {{ $dealer->location }}</li>
                    <li class="list-group-item"><span class="text-danger">Phone No:</span> {{ $dealer->phone }}</li>
                     <li class="list-group-item"><span class="text-danger">Website:</span><a href="{{ $dealer->website }}"> {{ $dealer->website }}</a></li>
                </div>

                <div class="col-md-4">
                    <li class="list-group-item"><span class="text-danger">Address:</span> {{ $dealer->address }}</li>
                    <li class="list-group-item"><span class="text-danger">Email:</span> {{ $dealer->email }}</li>
                </div>
                <div class="col-md-4">
                    <li class="list-group-item"><span class="text-danger">Contact Person:</span> {{ $dealer->contact_person }}</li>
                    <li class="list-group-item"><span class="text-danger">Job Title:</span> {{ $dealer->job_title }}</li>
                </div>
            </div>
        </ul>
        <h3 class="mt-5 text-info">All Dealer's Cars</h3>
        <hr>
        <div class="row">
            @foreach ($dealer->cars as $car)
                <div class="col-md-4">
                    @include('front.cars.singleCarSmall')
                </div>
            @endforeach
        </div>
    </div>


@endsection
