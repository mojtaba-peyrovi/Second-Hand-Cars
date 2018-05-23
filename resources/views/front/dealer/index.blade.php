@extends('front.layouts.master')
@section('title')
    All Dealers
@endsection
@section('content')

    <div class="container mt-5">
        <h1>Dealers</h1>
        <hr>
        <table class="table table-striped mt-5">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Dealer Name</th>
              <th scope="col">City</th>
              <th scope="col">State</th>
              <th scope="col">Phone No.</th>
            </tr>
          </thead>
          <tbody>
              @foreach ($dealers as $dealer)

                      <tr>
                        <td scope="row">{{ $dealer->id }}</td>
                        <td>{{ $dealer->name }}</td>
                        <td>{{ $dealer->city }}</td>
                        <td>{{ $dealer->location }}</td>
                        <td>{{ $dealer->phone }}</td>
                        <td>
                            <a href="/dealers/{{ $dealer->id }}" class="btn btn-outline-primary">More About This Company</a>
                        </td>
                      </tr>
                
              @endforeach
          </tbody>
        </table>
        {{ $dealers->links() }}
    </div>
@endsection
