@extends('front.layouts.master')
@section('title')
    All Cars
@endsection
@section('content')
    <main role="main">

        @include('front.partials.slider')
        @include('front.partials.underSlider')

      <div class="album py-5 bg-light">
        <div class="container">

          <div class="row">
              @foreach ($cars as $car)
                  <div class="col-md-6">
                    @include('front.cars.singleCarBig')
                  </div>
              @endforeach

          </div>
          {{ $cars->links() }}
        </div>

      </div>

    </main>
@endsection
