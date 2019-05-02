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
                        <img class="materialboxed" src="{{ URL::to('/') }}/uploads/{{ $post->img_path }}" data-caption="{{ $post->title }}">
                    </div>
                    <div class="card-content">
                        <h4 class="card-title blue-text">{{ $post->title }}</h4>
                        <p class="timestamp grey-text">{{ $post->updated_at }}</p>
                        <p>{{str_limit($post->content, 100, '...')}}</p>
                    </div>
                    <div class="card-action">
                        <a class="modal-trigger" href="#details">Read More</a>
                    </div>

                    <div id="details" class="modal">
                        <div class="modal-content">
                            <h4>{{ $post->title }}</h4>
                            <img src="{{ URL::to('/') }}/uploads/{{ $post->img_path }}" width="100" height="100">
                            <p>{{ $post->content }}</p>
                        </div>
                        <div class="modal-footer">
                            <a href="#!" class="modal-close waves-effect waves-green btn-flat">Close</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
    <br><br>


   
@include('layouts.footer')

@endsection

