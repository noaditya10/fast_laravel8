<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href={{ asset('css/app.css') }}>
    <link href="{{asset ('css/bootstrap-icons.css')}}" rel="stylesheet" />
    <link href="{{asset ('css/style.css')}}" rel="stylesheet" />
    <title>Belajar Laravel | {{$title}}</title>
  </head>
  <body>
    <div class='navigasi'> @include('layouts.navbar') </div>
    <div class='container'>
      <div class='post-content mt-5'> @yield('content') </div>
      <div class='footer'> @include('layouts.footer') </div>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
  </body>
</html>