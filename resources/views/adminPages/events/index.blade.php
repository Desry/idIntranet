@extends('layouts.admin-layout')
@section('content')

<div class="row admin-main">
    <div class="col s3">
        @include('layouts.admin-sidenav')
    </div>
     <div class="col s9">
        <div class="row">
            <div class="col s2 right">
                <img class="responsive-img right" id="id_logo" src="{{ URL::asset('images/infinitedata_logo.jpg') }}">

            </div>
        </div>
        <!-- <div class="row create-event-btn">
            <div class="container">
                <a href="{{ route('events.create') }}" class="waves-effect waves-light btn"><i class="material-icons">add</i>Create Event</a>
            </div>

            <br>
            
            <div class="divider"></div>
        </div> -->

        <div class="row">
            <div class="container">
               <div class="card hoverable upper">
                    <div class="card-content">
                        <div class="card-title"> Create Event</div>

                        @if($errors->any())
                            <div class="red-text">
                                @foreach($errors->all() as $error)
                                    <ul>
                                        <li>{{ $error }}</li>
                                    </ul>
                                @endforeach
                            </div>
                        @endif

                        <form method="post" action="{{ route('events.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="input-field col s6">
                                <input placeholder="Event name" id="event_name" type="text" class="validate" name="event_name">
                            </div>
                            <div class="input-field col s6">
                                <textarea id="content" class="materialize-textarea" type="text" class="validate" name="description" placeholder="Event description"></textarea>
                            </div>
                            <div class="input-field col s6">
                                <input type="text" class="datepicker" name="event_date" placeholder="Event date">
                            </div>

                            <!--  <div class="input-field col s6">
                                <input type="text" class="timepicker">
                            </div> -->
                    
                            <button type="submit" class="btn-floating waves-effect waves-light btn blue"><i class="material-icons">send</i>Submit</button>

                            <br><br>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <br><br>

        <div class="row">
            <div class="container">
                <div id="calendarAdmin"></div>
            </div>
        </div>


        <div class="modal" id="updateEvent" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <h4>Update Event</h4>

                            Title:
                            <br />
                            <input type="text" class="form-control" name="event_name" id="event_name">

                            Event Date:
                            <br />
                            <input type="text" class="form-control" name="event_date" id="event_date">
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <input type="button" class="btn btn-primary" id="eventUpdate" value="Save">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection




