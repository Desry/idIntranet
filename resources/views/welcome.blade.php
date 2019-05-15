@extends('layouts.layout')
@section('content')
<div class="container">
    <div class="section">
        
        <div class="row">
            <div id="calendardiv">
                <div id='calendar'></div>
            </div>
        </div>
        
        <div class="row">
            <div class="col s12 m12">
                <div class="carousel carousel-slider center">
                    @foreach($posts->take(5) as $post)
                        <!-- <div class="carousel-item" href="#one!">
                            <img src="{{ URL::to('/') }}/uploads/{{ $post->img_path }}">
                        </div> -->
                        <div class="carousel-item red white-text" href="#one!">
                            <h2>{{ $post->title }}</h2>
                            <p>{{ str_limit($post->content, 100, '...') }}</p>
                        </div>
                    @endforeach
                    <!-- <div class="carousel-item red white-text" href="#one!">
                        @foreach($posts->take(5) as $post)
                            <h2>{{ $post->title }}</h2>
                            <p class="white-text">{{ $post->content }}</p>
                        @endforeach
                    </div>
                    <a class="carousel-item" href="#one!"><img src="images/istock-492539318-2000x1421.jpg"></a>
                    <div class="carousel-item amber white-text" href="#two!">
                        <h2>InfiniteDATA puts up its Manila site</h2>
                        <p class="white-text">Led by site manager and InfiniteDATA customer success manager Ariel Kenneth Ampol, InfiniteDATA ........</p>
                    </div>
                    <div class="carousel-item green white-text" href="#three!">
                        <h2>Automate NOW! Warsaw #3 on October 24!</h2>
                        <p class="white-text">For the third time, more than 700 IT professionals will gather for Automate NOW! which focuses on data warehousing, automation, big data, business intelligence......</p>
                    </div>
                    <div class="carousel-item blue white-text" href="#four!">
                        <h2>Fourth Panel</h2>
                        <p class="white-text">This is your fourth panel</p>
                    </div> -->
                </div>
            </div>
        </div>

        <!-- modal to show Announcement details -->
        <div class="modal" id="showPost">
            <div class="modal-content">
                <h4>{{ $post->title }}</h4>
                <img src="{{ URL::to('/') }}/uploads/{{ $post->img_path }}" width="100" height="100">
                <p>{{ $post->content }}</p>
            </div>
            <div class="modal-footer">
                <a href="#!" class="modal-close waves-effect waves-green btn-flat">Close</a>
            </div>
        </div>


        <div class="row">
            <div class="col s12 m6">
                <div class="card blue darken-4">
                    <div class="card-content white-text">
                        <span class="card-title">Announcements</span>
                        <ul class="collection grey-text text-darken-4">

                            @foreach($posts->take(5) as $post)
                                <li class="collection-item avatar">
                                    <img src="{{ URL::to('/') }}/uploads/{{ $post->img_path }}" alt="" class="circle">
                                    <span><a href="#showPost" class="modal-trigger">{{ $post->title }}</a></span>
                                    <!-- <span class="title">{{ $post->title }}</span> -->
                                    <p>{{ $post->updated_at }}</p>
                                </li>
                            @endforeach
               
                        </ul>
                    </div>
                    <div class="card-action">
                        <a href="https://login.replicon.com/" target="_blank" style="color: white">e-Leave Tool</a>
                        <a href="/announcements" style="color: white">See all announcements</a>
                    </div>
                </div>
            </div>

            <div class="col s12 m6">
                <div class="card green darken-4">
                    <div class="card-content white-text">
                        <span class="card-title">Files</span>
                        <ul class="collection grey-text text-darken-4">
                            <li class="collection-item avatar">
                                <i class="material-icons circle">people</i>
                                <span class="title">Professional Services</span>
                                <p>File</p>
                                <a href="#!" class="secondary-content"><i class="material-icons">file_download</i></a>
                            </li>
                            <li class="collection-item avatar">
                                <i class="material-icons circle blue">build</i>
                                <span class="title">Labs</span>
                                <p>File</p>
                                <a href="#!" class="secondary-content"><i class="material-icons">file_download</i></a>
                            </li>
                            <li class="collection-item avatar">
                                <i class="material-icons circle">face</i>
                                <span class="title">Customer Success</span>
                                <p>File</p>
                                <a href="#!" class="secondary-content"><i class="material-icons">file_download</i></a>
                            </li>
                            <li class="collection-item avatar">
                                <i class="material-icons circle">attach_money</i>
                                <span class="title">Sales/Marketing</span>
                                <p>File</p>
                                <a href="#!" class="secondary-content"><i class="material-icons">file_download</i></a>
                            </li>
                        </ul>
                        <div class="card-action">
                            <a href="/resources" style="color: white">See all Files</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@include('layouts.footer')

@endsection