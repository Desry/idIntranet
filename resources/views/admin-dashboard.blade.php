@extends('layouts.admin-layout')
@section('content')
<!-- <div class="container">
    <div class="row justify-content-center">
        <br><br>
        <div class="row">
            <div class="card-panel light-blue darken-4">
                <span class="white-text">Dashboard | Administrator</span>
            </div>

            <div class="card-panel grey darken-4">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif

                <span class="black-text">You are logged in!</span>
            </div>
        </div>
    </div>
</div> -->

<div class="row admin-main">
    <div class="col s3">
        <ul id="slide-out" class="sidenav sidenav-fixed grey darken-4">
            <li>
                <div class="user-view">
                    <div class="background">
                        <img src="images/wroclaw_parallax.jpg">
                    </div>
                    <a href="#user"><img src="images/user.jpg" class="circle responsive-img"></a>
                    <a href="#name"><span class="white-text name">Administrator</span></a>
                    <a href="#email"><span class="white-text email">admin@gmail.com</span></a>
                </div>
            </li>
            <li>
                <a href="#!" class="admin-menu white-text"><i class="material-icons white-text">announcement</i>Announcements</a>
            </li>
            <li>
                <a href="#!" class="admin-menu white-text"><i class="material-icons white-text">event</i>Events</a>
            </li>
            <li>
                <a href="#!" class="admin-menu white-text"><i class="material-icons white-text">insert_drive_file</i>Files</a>
            </li>
            <li><div class="divider"></div></li>

            <li>
                <a class="white-text" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                    <i class="material-icons white-text">exit_to_app</i>
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </li>
        </ul>
    </div>


    <div class="col s9">
        <div class="row">
            <div class="col s2 offset-s10">
                <img class="responsive-img right" id="id_logo" src="images/infinitedata_logo.jpg">
            </div>
        </div>

        <div class="row">
        </div>
        
    </div>
</div>
</div>





@endsection
