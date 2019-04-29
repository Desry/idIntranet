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
    <link rel="stylesheet" href="{{ URL::asset('css/materialize.css') }}" media="screen,projection">
    <link rel="stylesheet" href="{{ URL::asset('css/materialize-social.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/font-awesome-4.7.0/css/font-awesome.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"/>


    <!-- FullCalendar CSS -->
    <link rel="stylesheet" href="{{ URL::asset('css/fullcalendar.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/fullcalendar.print.min.css') }}" media="print">


</head>
<body>

    @include('layouts.navbar')
    
    <div id="container">
       @yield('content')
    </div>
    
<!-- Scripts -->
<script type="text/javascript" src="{{ URL::asset('js/jquery2-1-1.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/materialize.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/init.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/moment.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/fullcalendar.min.js') }}"></script>

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

            eventClick: function(eventObj) {

                var formDate = $.fullCalendar.formatDate(eventObj.start, 'Mon-DD-YYYY');
                
                if (eventObj.url) {
                    alert(
                        eventObj.title + '.\n' +
                        'Will open ' + eventObj.url + ' in a new tab'
                    );

                    window.open(eventObj.url);
                    return false; // prevents browser from following link in current tab.
                } else {

                    alert(eventObj.title + '\n' + eventObj.formDate);
                }
            },
            eventLimit: true, // when too many events in a day, show the popover

            events: [
               @foreach($events as $event)
               {
                    title: '{{ $event->event_name }}',
                    start: '{{ $event->event_date }}',
                    eventColor: '{{ $event->event_color }}'

               },
               @endforeach
            ]
        });
    });

</script>

</body>
</html>