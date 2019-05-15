@extends('layouts.admin-layout')

@section('content')

<style>
    .upper {
        margin-top: 20px;
        margin-bottom: 20px;
    }
    #alert-box {
        margin-top: 40px;
        margin-bottom: 60px;
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

       

        <div class="container">
            
            <div class="row">
                <div class="upper">
                @if(session()->get('success'))
                    <div class="msg green-text">
                        {{ session()->get('success') }}
                    </div>
                @endif
            </div>

            <a href="{{ route('posts.create') }}" class="waves-effect waves-light btn blue">New Post</a>
        
            <br>
            <table class="responsive-table highlight">
                <thead>
                    <tr>
                        <td>Post</td>
                        <td>View</td>
                        <td>Delete</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach($posts as $post)
                        <tr>
                            <br>
                            <td><a href="{{ route('posts.edit', $post->id) }}">{{ $post->title }}</a></td>
                            <td>
                                <!-- <a href="{{ route('posts.show', $post->id) }}" onclick="viewPost()" class="btn-floating waves-effect waves-light btn green"><i class="material-icons">pageview</i></a> -->
                                <button id="postBtn" onclick="viewPost()" class="btn-floating waves-effect waves-light btn green"><i class="material-icons">pageview</i></button>
                            </td>
                            <td>
                                <form method="post" action="{{ route('posts.destroy', $post->id) }}" class="delete">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn-floating waves-effect waves-light btn red"><i class="material-icons">delete</i></button>
                                </form>
                            </td>
                        </tr>

                        <div class="modal" id="viewPost">
                            <div class="modal-content">
                                <h3>Title</h3>
                                <p>Test modal</p>
                            </div>
                            <div class="modal-footer">
                                <a href="#!" onclick="Custombox.modal.close()" class="waves-effect waves-light blue white-text btn-flat">Close</a>
                            </div>
                        </div>

                    @endforeach
                </tbody>
            </table>
        </div>
        </div>
    </div>
</div>

@endsection