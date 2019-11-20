<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Build App PWA Using Laravel and Framework7</title>
        <link rel="stylesheet" href="{{ asset('css/font-awesome/css/afont-awesome.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/framework7.bundle.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <style>
      .mr-2 { margin-right: 10px; }
    </style>
    </head>
    <body>
      @include('partials.panel-left')
      <div class="view view-main view-init safe-areas" data-master-detail-breakpoint="800" data-url="/">
        @yield('content')
       </div>


      <script src="{{ asset('js/framework7.bundle.min.js') }}"></script>
      <script src="{{ asset('js/routes.js') }}"></script>
      <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
