@extends('layouts.admin-layout')
@section('content')

<style>
    .upper {
        margin-top: 20px;
        margin-bottom: 20px;
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
                
                <div class="upper">
                    @if(session()->get('success'))
                        <div class="msg green-text">
                            {{ session()->get('success') }}
                        </div>
                    @endif
                </div>

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
    </div>
</div>


@endsection




