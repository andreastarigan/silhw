<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>SILHW</title>

    <link rel="icon" type="image/png" href="{{asset('admin/img/favicon.png')}}" />
    <!-- Styles -->
    <link href="{{ asset('css/app1.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('css/grayscale.min.css') }}" rel="stylesheet">
     <link rel="shortcut icon" href="{{ asset('template/logo.png') }}">
    <style>

        .panel-transparent {
            background: none;
        }

        .panel-transparent .panel-heading{
            background: rgba(122, 130, 136, 0,7)!important;
        }

        .panel-transparent .panel-body{
            background: rgba(46, 51, 56, 0.7)!important;
        }
        .x {
           font-family: "Rockwell ", "Rockwell Bold", monospace;
           
			
       </style>
   </head>
   <body class="download-section">
      
    @yield('content')
    

    <!-- Scripts -->
    <script src="{{ asset('js/app1.js') }}"></script>
    <script src="{{ URL::asset('js/grayscale.min.js') }}"></script>
</body>
</html>
