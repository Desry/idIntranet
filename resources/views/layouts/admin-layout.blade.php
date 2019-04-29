<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <link rel="stylesheet" href="{{ URL::asset('css/materialize.css') }}" media="screen,projection">
    <link rel="stylesheet" href="{{ URL::asset('css/materialize-social.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/font-awesome-4.7.0/css/font-awesome.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"/>


    <!-- FullCalendar CSS -->
    <link rel="stylesheet" href="{{ URL::asset('css/fullcalendar.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/fullcalendar.print.min.css') }}" media="print">

    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">
    
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>InfiniteDATA Intranet</title>


</head>
<body>
    
    @yield('content')
    


<script type="text/javascript" src="{{ URL::asset('js/jquery2-1-1.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/materialize.min.js') }}"></script>
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
        $('.datepicker').datepicker();
    });
    
    $(document).ready(function(){
        $('.timepicker').timepicker();
    });
       
    $(document).ready(function(){
        $('#calendarAdmin').fullCalendar({
            header: {
                left: 'prev, next, today',
                center: 'title',
                right: 'month, agendaWeek, agendaDay, listMonth'
            },
            //theme: true,
            navLinks: true, //can click day/week names to navigate views
            businessHours: true,
            showNonCurrentDates: false,

            selectable: true,
            selectHelper: true,
            select: function(start, end) {
                var title = prompt('Event Title: ');
                var eventData;
                if (title) {
                    eventData = {
                        title: title,
                        start: start,
                        end: end
                    };
                    $('#calendarAdmin').fullCalendar('renderEvent', eventData, true);
                }
                $('#calendarAdmin').fullCalendar('unselect');
            },
            
            eventClick: function(event) {
                $(".closon").click(function(){
                    $('#calendarAdmin').fullCalendar('removeEvents', event._id);
                });
            },
            
            droppable: true,
            editable: true,
            eventLimit: true, // when too many events in a day, show the popover

            events: [
               @foreach($events as $event)
               {
                    title: '{{ $event->event_name }}',
                    start: '{{ $event->event_date }}',
                    url : '{{ route('events.edit', $event->id) }}'
               },
               @endforeach
            ]
        });
    });

</script>
        
</body>
</html>
