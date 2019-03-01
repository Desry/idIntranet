@extends('layouts.admin-layout')

@section('content')

<div class="container col s8">
    <br><br>
    <div class="row">
        <div class="card-panel light-blue darken-4">
            <span class="white-text">Register</span>
        </div>
    </div>
    <form method="POST" action="{{ route('register') }}" aria-label="{{ __('Register') }}" class="col s14">
        @csrf
        <div class="row">
            <div class="input-field hoverable col s12">
                <i class="material-icons prefix">contacts</i>
                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>
                <label for="first_name">Name</label>

                @if ($errors->has('name'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="row">
            <div class="input-field hoverable col s6">
                <i class="material-icons prefix">email</i>
                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : ''}}" name="email" value="{{ old('email') }}" required autofocus>
                <label for="email">Email</label>
                
                @if ($errors->has('email'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </div>

            <div class="input-field hoverable col s6">
                <i class="material-icons prefix">account_circle</i>
                <input id="role" type="text" class="form-control{{ $errors->has('role') ? ' is-invalid' : ''}}" name="role" value="{{ old('role') }}" required autofocus>
                <label for="role">Role</label>
                
                @if ($errors->has('role'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('role') }}</strong>
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

            <div class="input-field hoverable col s6">
                <i class="material-icons prefix">replay</i>
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autofocus>
                <label for="password-confirm">Confirm Password</label>
                
            </div>
        </div>

        <p class="center-align">
            <button type="submit" class="waves-effect waves-light hoverable btn btn-primary light-blue darken-4">
            {{ __('Register') }}
            </button>
        </p>

    <br><br>
    </form>
<br><br>
</div>
<!-- <div class="container">
    <div class="row justify-content-center">
         <br>
        <div class="col-md-8">
            <div class="card">

                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}" aria-label="{{ __('Register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                          <div class="form-group row">
                            <label for="email" class="col-sm-4 col-form-label text-md-right">{{ __('Role') }}</label>

                            <div class="col-md-6">
                                <input id="role" type="text" class="form-control{{ $errors->has('role') ? ' is-invalid' : '' }}" name="role" value="{{ old('role') }}" required autofocus>

                                @if ($errors->has('role'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('role') }}</strong>
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
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> -->
@endsection
