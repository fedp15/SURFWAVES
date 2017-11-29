<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">

<link href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/cosmo/bootstrap.min.css" rel="stylesheet" integrity="sha384-h21C2fcDk/eFsW9sC9h0dhokq5pDinLNklTKoxIZRUn3+hvmgQSffLLQ4G4l2eEr" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/styles.css')}}">
    <title>@yield('title', 'SURF WAVES™')</title>
  </head>
  <body>
    @include('store.partials.nav')
    @yield('content')
    @include('store.partials.footer')

    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src"{{asset('js/pinterest_grid.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>

  </body>
</html>
