@extends('layouts.admin-layout')

@section('content')
<div class="container col s8">
    <br><br>
    <div class="row">
        <div class="card-panel light-blue darken-4">
            <span class="24px white-text">Login | Administrator</span>
        </div>
    </div>
   
</div>
            @if($errors->any())
                <div class="alert alert-danger">
                    @foreach($errors->all() as $error)
                        <ul>
                            <li>{{ $error }}</li>
                        </ul>
                    @endforeach
                </div>
            @endif
<div class="valign-wrapper row">
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

        <div class="card-content center-align">
            <button type="submit" class="waves-effect waves-light hoverable btn btn-primary light-blue darken-4">
                {{ __('Login') }}
            </button>
        </div>

                        <!-- <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            </div>
                        </div> -->
    </form>
</div>
</div>
@endsection
