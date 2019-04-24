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

		<div class="card upper">
			<div class="card-title">Create Post</div>
			<div class="card-content">
				@if($errors->any())
				<div class="red-text">
					@foreach($errors->all() as $error)
						<ul>
							<li>{{ $error }}</li>
						</ul>
					@endforeach
				</div>
				@endif
				<form method="post" action="{{ route('posts.store') }}" enctype="multipart/form-data">
					@csrf
					<div class="input-field col s6">
          				<input placeholder="Title" id="title" type="text" class="validate" name="title">
          				<label for="title">Title</label>
        			</div>
        			<div class="input-field col s6">
        				<textarea id="content" class="materialize-textarea" type="text" class="validate" name="content" placeholder=""></textarea>
        				<label for="content">Content</label>
        			</div>

                    <div class="input-field col s6">
                        <input type="file" name="img_path">
                    </div>
                    
        			<button type="submit" class="btn-floating waves-effect waves-light btn blue"><i class="material-icons">send</i>Submit</button>
        		</form>
        	</div>
        </div>
    </div>
</div>



@endsection

