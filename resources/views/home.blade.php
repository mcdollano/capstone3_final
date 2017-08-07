<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Growth Hack Philippines') }}</title>

    <!-- Styles -->
        <script src='https://cloud.tinymce.com/stable/tinymce.min.js'></script>
        
        <script>
            tinymce.init({
            selector: '#write_content'
            });
        </script>

        <link rel="stylesheet" type="text/css" href='{{asset("css/bootstrap.css")}}'>
        <link rel="stylesheet" type="text/css" href='{{asset("css/style.css")}}'>

        <link rel="stylesheet" href='{{asset("font-awesome/css/font-awesome.min.css")}}'>

        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        @include("admin")
        
</head>
<body>
   
    
</body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src='{{ asset ("js/bootstrap.min.js")}}'></script>
</html>