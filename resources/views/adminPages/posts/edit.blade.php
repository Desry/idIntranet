@extends('layouts.admin-layout')
@section('content')

<style>
	.upper {
		margin-top: 40px;
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
                <a href="/posts" class="btn waves-effect waves-light btn-green">Back</a>
                <div class="card upper">
                    <div class="card-content">
                        <div class="card-title">Update Post</div>
                        <br><br>

                        @if($errors->any())
                            <div class="msg green-text">
                                @foreach($errors->all() as $error)
                                    <ul>
                                        <li>{{ $error }}</li>
                                    </ul>
                                @endforeach
                            </div>
                        @endif
                
                        <form method="post" action="{{ route('posts.update', $post->id) }}" enctype="multipart/form-data">
                            @method('PATCH')
                            @csrf
                            <div class="input-field col s6">
                                <input id="title" type="text" class="validate" name="title" value="{{ $post->title }}">
                                <label for="title">Title</label>
                            </div>
                            <div class="input-field col s6">
                                <textarea id="content" class="materialize-textarea" type="text" class="validate" name="content">{{ $post->content }}</textarea>
                                <label for="content">Content</label>
                            </div>
                            <div class="input-field col s6">
                                <input id="img_path" type="file" name="img_path">
                                <img src="{{ URL::to('/') }}/uploads/{{$post->img_path }}" height="100" width="100">
                                <input type="hidden" name="hidden_image" value="{{ $post->img_path }}">
                            </div>
                            <button type="submit" class="btn-floating waves-effect waves-light btn blue"><i class="material-icons">send</i>Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- timeOut for messages -->
<!-- 
<script>
    $(document).ready(function(){
        setTimeout(function(){
            $('div.upper').remove();
        }, 3000);
    });
</script> -->

@endsection

