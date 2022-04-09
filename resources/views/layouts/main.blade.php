<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{-- Font --}}
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="icon" type="image/png" href="/img/icon.png">
    <title>Survey Pelanggan</title>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 
    <script src='https://cdn.jsdelivr.net/npm/chart.js@3.7.1/dist/chart.min.js'></script>
    <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@2.0.0"></script> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    {{-- My Styles --}}
    <link rel="stylesheet" href="/css/styles.css">
  </head>
  <body>
    
    @include('partials.navbar')
    <div class="container">
        @yield('container')
    </div>
    {{-- @include('layouts.footer') --}}

    {{-- <script src="/js/jquery-3.6.0.min.js"></script>
    <script src="/js/popper.js"></script> --}}

  </body>
</html>