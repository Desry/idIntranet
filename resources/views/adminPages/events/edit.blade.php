@extends('layouts.admin-layout')
@section('content')

<style>
	.upper {
		margin-top: 40px;
	}
	
</style>


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
                <a href="/events" class="btn waves-effect waves-light btn-green">Back</a>
                <div class="card upper">
                    <div class="card-content">
                        <div class="card-title">Update Event</div>
                            <br><br>
                            @if($errors->any())
                                <div class="msg red-text">
                                    @foreach($errors->all() as $error)
                                        <ul>
                                            <li>{{ $error }}</li>
                                        </ul>
                                    @endforeach
                                </div>
                            @endif


                        <form method="post" action="{{ route('events.update', $event->id) }}" enctype="multipart/form-data">
                            @method('PATCH')
                            @csrf
                            <div class="input-field col s6">
                                <input id="event_name" type="text" class="validate" name="event_name" value="{{ $event->event_name }}">
                                <label for="event_name">Event Name</label>
                            </div>
                            <div class="input-field col s6">
                                <textarea id="content" class="materialize-textarea" type="text" class="validate" name="description">{{ $event->description }}</textarea>
                                <label for="description">Event Description</label>
                            </div>
                            <div class="input-field col s6">
                                <input type="text" class="datepicker" name="event_date" placeholder="Start date" value="{{ $event->event_sdate }}">
                                <label for="event_sdate">Start Date</label>
                            </div>
                            <div class="input-field col s6">
                                <input type="text" class="timepicker" name="event_stime" placeholder="Start time" value="{{ $event->event_stime }}">
                                <label for="event_stime">Start Time</label>
                            </div>
                            <div class="input-field col s6">
                                <input type="text" class="datepicker" name="event_edate" placeholder="End date" value="{{ $event->event_edate }}">
                                <label for="event_edate">End Date</label>
                            </div>
                            <div class="input-field col s6">
                                <input type="text" class="timepicker" name="event_etime" placeholder="End time" value="{{ $event->event_etime }}">
                                <label for="event_etime">End Time</label>
                            </div>
                            <button type="submit" class="btn-floating waves-effect waves-light btn blue"><i class="material-icons">send</i>Submit</button>
                        </form>
                        <br><br>
                    </div>
                </div>
            </div>    
        </div>
    </div>
</div>

@endsection

