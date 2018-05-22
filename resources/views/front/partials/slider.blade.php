<section class="jumbotron text-center bg-warning">
  <div class="container">
    <h1 class="jumbotron-heading">Search For Cars...</h1>
    <p class="lead text-muted">We are working hard to add as much cars as possible for you everyday. <strong>Enjoy browsing!</strong></p>


        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!-- Advance Search -->
                    <div class="advance-search">
                        {!! Form::open([ 'action' => 'carsController@table', 'method' => 'get']) !!}

                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    {!! Form::text('make', 'Car Make',['class' => 'form-control']) !!}
                                    <p class="help-block"></p>

                                </div>
                                <div class="form-group col-md-3">
                                    {!! Form::text('model', 'Model', ['class' => 'form-control form-control']) !!}
                                    <p class="help-block"></p>

                                </div>
                                <div class="form-group col-md-3">
                                    {!! Form::text('year', 'Year', ['class' => 'form-control form-control']) !!}
                                    <p class="help-block"></p>

                                </div>

                                <div class="form-group col-md-2">
                                    <button type="submit"
                                            class="btn btn-primary">
                                            Search Now
                                    </button>
                                </div>
                            </div>

                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>


  </div>
</section>
