<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <script src="{{asset('js/app.js')}}"></script>
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->
    <title>Document</title>

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    @include('inc.navbar')
    <div class="">
            @yield('content')
    </div>

    <footer class="footer">
      <div class="container text-center">
        <span> Pratama | 2018© All Right Reserved </span>
      </div>
    </footer>
</body>
</html>
