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
    
       <!--  <div class="row" id="alert_box">
            <div class="col s12 m12">
                <div class="card">
                    <div class="row">
                        <div class="col s12 m10">
                            
                            <div class="card-content white-text">
                                @if(session()->get('success'))
                                    {{ session()->get('success') }}
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
         -->
        <div class="upper">
            @if(session()->get('success'))
                <div class="red-text">
                    {{ session()->get('success') }}
                </div>
            @endif
        </div>

        <div class="container">
            <div class="row">
             <a href="{{ route('posts.create') }}" class="waves-effect waves-light btn blue"><i class="material-icons">add</i>New Post</a>
        
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

<script>
    $(".delete").on("submit", function(){
        return confirm("Delete post?");
    });

    $("document").ready(function() {
        setTimeout(function(){
            $("div.upper").remove();
        }, 3000 ); 

    });
</script>
       



@endsection