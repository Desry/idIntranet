@extends('layouts.admin-layout')

@section('content')

<div class="container col s8">
    <br><br>
    <div class="row">
        <div class="card-panel light-blue darken-4">
            <span class="24px white-text">Login | Administrator</span>
        </div>
    </div>
    <form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
        @csrf
        <div class="row">
            <div class="input-field hoverable col s6">
                <i class="material-icons prefix">account_circle</i>
                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="name" value="{{ old('email') }}" required autofocus>
                <label for="email">Email</label>

                @if ($errors->has('email'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </div>
        </div>


         <div class="row">
            <div class="input-field hoverable col s6">
                <i class="material-icons prefix">vpn_key</i>
                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : ''}}" name="password" value="{{ old('password') }}" required autofocus>
                <label for="password">Password</label>
                
                @if ($errors->has('password'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <!--<div class="row">
            <label>
                <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }} /> 
                    {{ __('Remember Me') }}
                <span>Remember Me</span>
            </label>
        </div> -->

        <div class="row">
            <label>
                <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }} /> 
                <span>Remember Me</span>
            </label>
        </div>
    

        <div class="form-group row mb-0">
            <div class="col-md-8 offset-md-4">
                <button type="submit" class="waves-effect waves-light hoverable btn btn-primary light-blue darken-4">
                    {{ __('Login') }}
                </button>

                <a class="waves-effect waves-light hoverable btn btn-link light-blue darken-4" href="{{ route('password.request') }}">
                    {{ __('Forgot Your Password?') }}
                </a>
            </div>
        </div>


    <br><br>
    </form>
<br><br>
</div>







<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-sm-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('Remember Me') }}
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
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> -->



@endsection
