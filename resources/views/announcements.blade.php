@extends('layouts.layout')

@section('content')


    <div id='announcements-header'>
        <h5 class="center-align">Announcements</h5>
        <hr id="header-hr">
    </div>

    <div class="container announcements-content">
        <div class="card hoverable medium card-medium">
            <div class="card-image waves-effect waves-block waves-light">
                <img class="activator posts-image" src="images/posts/manila_office.jpg">
            </div>
            <div class="card-content">
                <span class="card-title activator grey-text text-darken-4">InfiniteDATA expands in PH, opens its office in Makati<i class="material-icons right">more_vert</i></span>
                <p><a href="#">This is a link</a></p>
            </div>
            <div class="card-reveal">
                <span class="card-title grey-text text-darken-4">InfiniteDATA opens its office in Manila<i class="material-icons right">close</i></span>
                <p>Here is some more information about this product that is only revealed once clicked on.</p>
            </div>
        </div>


         <div class="card hoverable medium card-medium">
            <div class="card-image waves-effect waves-block waves-light">
                <img class="activator posts-image" src="images/posts/manila_office.jpg">
            </div>
            <div class="card-content">
                <span class="card-title activator grey-text text-darken-4">InfiniteDATA expands in PH, opens its office in Makati<i class="material-icons right">more_vert</i></span>
                <p><a href="#">This is a link</a></p>
            </div>
            <div class="card-reveal">
                <span class="card-title grey-text text-darken-4">InfiniteDATA opens its office in Manila<i class="material-icons right">close</i></span>
                <p>Here is some more information about this product that is only revealed once clicked on.</p>
            </div>
        </div>
            


    </div>

    <!-- <div id="calendardiv">
        <div id='calendar'>
        </div>
    </div> -->


@include('layouts.footer')

@endsection

<!-- dynamic getting of events -->
