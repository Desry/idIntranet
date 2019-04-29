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
        <div class="row">
            <div class="container">
               <div class="card upper">
                    <div class="card-title">Create Event</div>
                        <div class="card-content">
                            
                            @if($errors->any())
                                <div class="green-text">
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
                                    <label for="event_name">Event Name</label>
                                </div>
                                <div class="input-field col s6">
                                    <textarea id="content" class="materialize-textarea" type="text" class="validate" name="description" placeholder="Event description"></textarea>
                                    <label for="description">Event Description</label>
                                </div>
                                <div class="input-field col s6">
                                    <input type="text" class="datepicker" name="event_date">
                                    <label for="event_date">Event Date</label>
                                </div>
                                <div class="input-field col s6">
                                    <input type="text" name="event_color">
                                    <label for="event_color">Event Color</label>
                                </div>


                               <!--  <div class="input-field col s6">
                                    <input type="text" class="timepicker">
                                    <label for="event_time">Event Time</label>
                                </div> -->
                    
                                <button type="submit" class="btn-floating waves-effect waves-light btn blue"><i class="material-icons">send</i>Submit</button>

                                <br><br>
                            </form>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection




