@extends('layouts.layout')

@section('content')

    

    <div id='announcements-header'>
        <h5 class="center-align">Announcements</h5>
        <hr id="header-hr">
    </div>
    

    @foreach ($posts as $post)
        <div class="container">
            <div class="row">
                <div class="card hoverable card-large">
                    <div class="card-image">
                        <!-- <img src="images/sample-1.jpg"> -->
                        <img src="{{ URL::to('/') }}/uploads/{{ $post->img_path }}">
                    </div>
                    <div class="card-content">
                        <h4 class="card-title blue-text">{{ $post->title }}</h4>
                        <p class="timestamp grey-text">{{ $post->updated_at }}</p>
                        <p>{{str_limit($post->content, 100, '...')}}</p>
                    </div>
                    <div class="card-action">
                        <a href="#">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
    <br><br>
@include('layouts.footer')

@endsection

