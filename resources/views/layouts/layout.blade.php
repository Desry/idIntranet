<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>InfiniteDATA Intranet</title>

    <!-- favicon -->

    <link rel="shortcut icon" href="{{ asset('/images/infinitedate_logo.jpg') }}">

    <!-- CSS files -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"/>
    <link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen,projection"/>
    <link rel="stylesheet" href="css/materialize-social.css">
    <link rel="stylesheet" href="css/font-awesome-4.7.0/css/font-awesome.css">
    <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>


    <link href='css/fullcalendar.min.css' rel='stylesheet' />
    <link href='css/fullcalendar.print.min.css' rel='stylesheet' media='print' />
    
</head>
<body>
    @include('layouts.navbar')
    
    <div id="container">
       @yield('content')
    </div>
    
<!-- Scripts -->
<script type="text/javascript" src="js/jquery2-1-1.js"></script>
<script type="text/javascript" src="js/app2.js"></script>
<script type="text/javascript" src="js/materialize.min.js"></script>
<script src="js/init.js"></script>
<script src='js/moment.min.js'></script>
<script src='js/fullcalendar.min.js'></script>

<script>
    $(".dropdown-trigger").dropdown();
    $(document).ready(function(){
        $('.collapsible').collapsible();
    });
    $(document).ready(function(){
        $('.parallax').parallax();
    });
    $('.carousel.carousel-slider').carousel({
        fullWidth: true,
        indicators: true
    });
    $(document).ready(function(){
        $('.sidenav').sidenav();
    });
    $(document).ready(function(){
        $('.tap-target').tapTarget();
    });
    $('#open').click(function(){
        $('.tap-target').tapTarget('open');
    });
</script>

</body>
</html>