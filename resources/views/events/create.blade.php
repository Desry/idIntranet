@extends('layouts.admin-layout')
@section('content')

<div class="row admin-main">
    <div class="col s3">
        @include('layouts.admin-sidenav')
    </div>
     <div class="col s9">
        <div class="row">
            <div class="col s2 right">
                <img class="responsive-img right" id="id_logo" src="images/infinitedata_logo.jpg">

            </div>
        </div>
        
        <div class="row">
            <div class="container">
              <div class="col card s8">
                <form method="POST" action="{{ route('events.store') }}" role="form">
    @csrf
    <div class="card-content">
      <div class="form-group row">
        <div class="input-field col s12">
          <i class="material-icons">event</i>
          <label for="event_name">Event Name</label>
          <input type="text" name="event_name" class="form-control{{ $errors->has('event_name') ? ' is-invalid' : '' }}">
        </div>
      </div>
    </div>
  </form>
              </div>
            </div>
        </div>
    </div>
</div>

<div class="col card s10 pull-s1 m6 pull-m3 l4 pull-l4">
  <form method="POST" action="{{ route('events.store') }}" role="form">
    @csrf
    <div class="card-content">
      <div class="form-group row">
        <div class="input-field col s12">
          <i class="material-icons">event</i>
          <label for="event_name">Event Name</label>
          <input type="text" name="event_name" class="form-control{{ $errors->has('event_name') ? ' is-invalid' : '' }}">
        </div>
      </div>
    </div>
  </form>



</div>

<input type="text" class="datepicker">

 <div class="col card s10 pull-s1 m6 pull-m3 l4 pull-l4">
        <form method="POST" action="{{ route('login.custom') }}" role="form">
            @csrf
            <div class="card-content">
                <div class="form-group row">
                    <div class="input-field col s12">
                        <i class="material-icons prefix">account_circle</i>
                        <label for="email">Email address</label>
                        <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                        @if ($errors->has('email'))
                            <span class="invalid-feedback red-text" role="alert">
                                {{ $errors->first('email') }}
                            </span>
                        @endif
                    </div>

                    <div class="input-field col s12">
                        <i class="material-icons prefix">vpn_key</i>
                        <label for="password">Password </label>
                        <input id="password" type="password" class="form-control{{ $errors->has('password') ? 'is-invalid' : '' }}" name="password" value="{{ old('password') }}" required autofocus>
        
                        @if ($errors->has('password'))
                            <span class="invalid-feedback red-text" role="alert">
                                {{ $errors->first('password') }}
                            </span>
                        @endif
                    </div>
                </div>
            </div>
        </form>
</div>


@endsection