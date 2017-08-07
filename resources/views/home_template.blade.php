<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    

    <title>{{ config('app.name', 'Growth Hack Philippines') }}</title>

    <!--FACEBOOK SHARE-->
    @yield("meta_fb")
  
</head>

    <!-- Styles -->
        <script src='https://cloud.tinymce.com/stable/tinymce.min.js'></script>
        
        <script>
            tinymce.init({
            selector: '#write_content'
            });
        </script>

        <link rel="stylesheet" type="text/css" href='{{asset("css/bootstrap.css")}}'>
        <link rel="stylesheet" type="text/css" href='{{asset("css/style.css")}}'>
        <script type="text/javascript" src="{{ URL::to('js/jquery.min.js') }}"></script>




        <link rel="stylesheet" href='{{asset("font-awesome/css/font-awesome.min.css")}}'>

        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600|Roboto+Condensed" rel="stylesheet" type="text/css">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        @include("navbar")
        
</head>
<body class="home_template_body">

<!--FACEBOOK COMMENT-->

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src ="//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.10&appId=152673230403";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<!--FACEBOOK LIKE AND SHARE-->

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.10&appId=158583131379466";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<!--FACEBOOK LIKE AND SHARE 2-->

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.10&appId=736866899830566";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
  
   @yield("register_content")
   @yield("display_articles")
   @yield("view_article")
   @yield("display_category_business")
   @yield("display_category_startup")
   @yield("display_category_career")
   @yield("display_category_leadership")
   @yield("edit_profile")
   @yield("search_result")

   
</body>
     @include("analytics")
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src='{{ asset ("js/bootstrap.min.js")}}'></script>
    @include("footer")
   
</html>