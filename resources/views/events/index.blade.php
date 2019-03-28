@extends('layouts.admin-layout')
@section('content')

<div class="row admin-main">
    <div class="col s3">
        @include('layouts.admin-sidenav')
    </div>
     <div class="col s9">
        <div class="row">
            <div class="col s2 right">
                <img class="responsive-img right" id="id_logo" src="images/infinitedata_logo.jpg">

            </div>
        </div>
        <div class="row create-event-btn">
            <div class="container">
                <a href="{{ route('events.create') }}" class="waves-effect waves-light btn"><i class="material-icons">add</i>Create Event</a>

                <input type="text" class="datepicker">

            </div>
        </div>
        
        <div class="row">
            <div class="container">
                <div id="calendar-admin"></div>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function(){
        $('#calendar-admin').fullCalendar({
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
               @foreach($events as $event)
               {
                    title: '{{ $event->event_name }}',
                    start: '{{ $event->event_date }}',  
               }
               @endforeach
            ]
        });
    });
</script>

@endsection




