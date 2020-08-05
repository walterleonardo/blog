<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
<link rel="stylesheet" href="{{asset('css/grid.css')}}">
<link rel="stylesheet" href="{{asset('css/style.css')}}">
<link rel="stylesheet" href="{{asset('css/camera.css')}}">
<link rel="stylesheet" href="{{asset('css/owl-carousel.css')}}">
      

<script src="{{asset('js/jquery.js')}}"></script>
<script src="{{asset('js/jquery-migrate-1.2.1.js')}}"></script>


    </head>
    <body>

@yield('content')
        




<script src="{{asset('js/script.js')}}"></script>

    </body>
</html>