<div class="card mb-4 box-shadow">
  <img class="card-img-top" src="{{ $car->image }}" alt="Card image cap">
  <div class="card-body">
    <div class="card-title text-info text-center">
        <strong>{{ $car->make }}, {{ $car->model }}, {{ $car->year }}</strong>
    </div>

    <ul class="list-group my-2">


                <li class="list-group-item"><span class="text-danger">Price:</span> {{ number_format( $car->price  , 0 , '.' , ',' )}}  THB</li>
                <li class="list-group-item"><span class="text-danger">Mileage:</span> {{ number_format( $car->mileage  , 0 , '.' , ',' )}}  Km</li>
                <li class="list-group-item"><span class="text-danger">Location:</span> {{ $car->city }} - {{ $car->location }}</li>





    </ul>

    <div class="d-flex justify-content-between align-items-center">
        <small class="text-muted float-left">{{ $car->created_at->DiffForHumans()}}</small>
      <div class="btn-group float-right">
        <button type="button" class="btn btn-sm btn-warning">Read more</button>
      </div>

    </div>
  </div>
</div>
