
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">


    <title>S.H. Cars | @yield('title')</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ URL::to('css/bootstrap.min.css')}} " rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ URL::to('css/album.css')}}" rel="stylesheet">
  </head>

  <body>

    @include('front.partials.header')

    @yield('content')

    @include('front.partials.footer')


    @yield('scripts')


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script  src="https://code.jquery.com/jquery-3.3.1.js"  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/holder/2.9.4/holder.js" charset="utf-8"></script>

  </body>
</html>
