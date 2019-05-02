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
                        <td>Delete</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach($posts as $post)
                        <tr>
                            <br>
                            <td><a href="{{ route('posts.edit', $post->id) }}">{{ $post->title }}</a></td>
                            <td>
                                <form method="post" action="{{ route('posts.destroy', $post->id) }}" class="delete">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn-floating waves-effect waves-light btn red"><i class="material-icons">delete</i></button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        </div>
    </div>
</div>

@endsection