@extends('front.layouts.master')
@section('title')
    {{ $dealer->name }}
@endsection
@section('content')
    <div id="map" width="100%">
        <img src="holder.js/1700x400" class="img-responsive">
    </div>
    <div class="container mt-5">
        <h1>{{ $dealer->name }}</h1>
        <hr>
        <ul class="list-group">
          <li class="list-group-item"><span class="text-danger">Location:</span> {{ $dealer->city }}, {{ $dealer->location }}</li>
          <li class="list-group-item"><span class="text-danger">Phone No:</span> {{ $dealer->phone }}</li>
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
