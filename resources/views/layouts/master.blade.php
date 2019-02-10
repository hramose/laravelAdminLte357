<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Laravel 5.7 | @yield('title')</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  </head>
  <body class="hold-transition sidebar-mini">
    <div class="wrapper" id="app">

      @include('layouts.includes.nav')
      @include('layouts.includes.aside')

      <div class="content-wrapper">

        @yield('content')
      </div>

      @include('layouts.includes.footer')
    </div>
    
    <script src="{{ asset('js/app.js') }}"></script>
  </body>
</html>