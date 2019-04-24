@extends('layouts.admin-layout')
@section('content')

<div class="row admin-main">
    <div class="col s3">
        <ul id="slide-out" class="sidenav sidenav-fixed grey darken-4">
            <li>
                <div class="user-view">
                    <div class="background">
                        <img src="{{ URL::asset('images/wroclaw_parallax.jpg') }}">
                    </div>
                    <a href="#user"><img src="{{ URL::asset('images/user.jpg') }}" class="circle responsive-img"></a>
                    <a href="#name"><span class="white-text name">Administrator</span></a>
                    <a href="#email"><span class="white-text email">admin@gmail.com</span></a>
                </div>
            </li>
            <li>
                <a href="{{ route('home') }}" class="admin-menu"><i class="admin-icons material-icons">person</i>Profile</a>
            </li>
            <li>
                <a href="{{ route('posts.index') }}" class="admin-menu"><i class="admin-icons material-icons">announcement</i>Announcements</a>
            </li>
            <li>
                <a href="{{ route('events.index') }}" class="admin-menu"><i class="admin-icons material-icons">event</i>Events</a>
            </li>
            <li>
                <a href="#!" class="admin-menu"><i class="admin-icons material-icons">insert_drive_file</i>Files</a>
            </li>

            <li><div class="divider"></div></li>

            <li>
                <a class="admin-menu" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                    <i class="admin-icons material-icons">exit_to_app</i>
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </li>
        </ul>
    </div>


    <div class="col s9">
        <div class="row">
            <div class="col s2 right">
                <img class="responsive-img right" id="id_logo" src="{{ URL::asset('images/infinitedata_logo.jpg') }}">
            </div>
        </div>

        <div class="row">
          <h6>Admin Content</h6>

        </div>
    </div>
</div>
</div>


@endsection
