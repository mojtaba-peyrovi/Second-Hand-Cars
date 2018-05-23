<div class="card mb-4 box-shadow">
  <img class="card-img-top" src="{{ $car->image }}" alt="Card image cap">
  <div class="card-body">
    <div class="card-title text-info">
        {{ $car->make }}, {{ $car->model }}, {{ $car->year }}
    </div>
    <strong>Dealer: </strong><a href="/dealers/{{ $car->dealer->id }}">{{ $car->dealer->name }}</a>
    <ul class="list-group my-2">
        <div class="row">
            <div class="col-md-6">
                <li class="list-group-item"><span class="text-danger">Price:</span> {{ number_format( $car->price  , 0 , '.' , ',' )}}  THB</li>
                <li class="list-group-item"><span class="text-danger">Mileage:</span> {{ number_format( $car->mileage  , 0 , '.' , ',' )}}  Km</li>
                <li class="list-group-item"><span class="text-danger">Location:</span> {{ $car->city }} - {{ $car->location }}</li>
                <li class="list-group-item"><span class="text-danger">Color:</span>
                    <span>
                        <svg width="50" height="50">
                          <rect x="10" y="10" rx="10" ry="10" width="40" height="40"
                          style="fill:{{ $car->color }};opacity:0.9" />
                        </svg>
                    </span>
                </li>
                <li class="list-group-item"><span class="text-danger">Transimission:</span> {{ $car->transmission }}</li>
            </div>
            <div class="col-md-6">
                <li class="list-group-item"><span class="text-danger">Engine:</span> {{ number_format( $car->engine  , 0 , '.' , ',' )}}  cc</li>
                <li class="list-group-item"><span class="text-danger">Description:</span> {{ Str_limit($car->desc, 170) }}</li>


            </div>
        </div>

    </ul>

    <div class="d-flex justify-content-between align-items-center">
        <small class="text-muted float-left">{{ $car->created_at->diffForHumans() }}</small>
      <div class="btn-group float-right">
        <a href="#" class="btn btn-info" type="button">View Map</a>
        <a href="/cars/{{ $car->id }}" class="btn btn-warning" type="button">read more</a>
      </div>

    </div>
  </div>
</div>
