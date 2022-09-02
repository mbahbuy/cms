<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ URL::asset('/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('/bootstrap-icons/bootstrap-icons.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('/css/style.css') }}">

    <title>Buyung Blog | {{ $title }}</title>
  </head>
  <body>

    @include('partials.navbar')

      <div class="container mt-4">
        @yield('container')
      </div>


    <script src="{{ URL::asset('/js/bootstrap.js') }}"></script>
    </body>
</html>
