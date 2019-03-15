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


    <!-- Full Calendar CSS files -->
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
<!-- <script type="text/javascript" src="js/app2.js"></script> -->
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


    $(document).ready(function(){
        $('#calendar').fullCalendar({
            header: {
                left: 'prev, next, today',
                center: 'title',
                right: 'month, agendaWeek, agendaDay, listMonth'
            },
            //theme: true,
            navLinks: true, //can click day/week names to navigate views
            businessHours: true,
            showNonCurrentDates: false,
            events: [
                {
                    title: 'Sales Meeting',
                    start: '2019-03-02T13:00:00',
                    constraint: 'businessHours',
                    color: 'black'
                },
                {
                    title: 'Company dinner',
                    start: '2019-03-20T16:00:00'
                },
            ]
        });
    });

    //dynamically get events

  

    /*$(document).ready(function() {
        $('#calendar').fullCalendar({
            header: {
                left: 'prev,next,today',
                center: 'title',
                right: 'month,agendaWeek,agendaDay,listMonth'
            },
            defaultDate: '2018-03-12',
            navLinks: true, // can click day/week names to navigate views
            businessHours: true, // display business hours
            editable: true,
            events: [
                {
                    title: 'Business Lunch',
                    start: '2018-03-03T13:00:00',
                    constraint: 'businessHours'
                },
                {
                    title: 'Meeting',
                    start: '2018-03-13T11:00:00',
                    constraint: 'availableForMeeting', // defined below
                    color: '#257e4a'
                },
                {
                    title: 'Conference',
                    start: '2018-03-18',
                    end: '2018-03-20'
                },
                {
                    title: 'Party',
                    start: '2018-03-29T20:00:00'
                },

                // areas where "Meeting" must be dropped
                {
                    id: 'availableForMeeting',
                    start: '2018-03-11T10:00:00',
                    end: '2018-03-11T16:00:00',
                    rendering: 'background'
                },
                {
                    id: 'availableForMeeting',
                    start: '2018-03-13T10:00:00',
                    end: '2018-03-13T16:00:00',
                    rendering: 'background'
                },

                // red areas where no events can be dropped
                {
                    start: '2018-03-24',
                    end: '2018-03-28',
                    overlap: false,
                    rendering: 'background',
                    color: '#ff9f89'
                },
                {
                    start: '2018-03-06',
                    end: '2018-03-08',
                    overlap: false,
                    rendering: 'background',
                    color: '#ff9f89'
                }
            ]
        });

    });*/
</script>

</body>
</html>