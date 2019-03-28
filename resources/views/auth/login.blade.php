@extends('layouts.admin-layout')

@section('content')

<div class="navbar-fixed">
    <nav class="white" role="navigation">
        <div class="nav-wrapper container">
            <a id="logo-container" href="/"><img class="logo-img right" src="{{URL::asset('/images/infinitedata_logo.jpg')}}" alt="InfiniteDATA"></a>
    </nav>
</div>
<br><br>
<div class="container col s8">
    <div class="row">
        <div class="card-panel light-blue darken-4">
            <span class="24px white-text">Login | Administrator</span>
        </div>
    </div>
   
</div>
<div class="valign-wrapper row">
    <div class="col card s10 pull-s1 m6 pull-m3 l4 pull-l4">
            <form role="form" method="POST" action="{{ url('/login') }}">
                @csrf
                <div class="input-field col s12 {{ $errors->has('email') ? ' has-error' : '' }}">
                    <i class="material-icons prefix">account_circle</i>
                    <label for="email">Email address</label>
                    <input id="email" type="email" class="validate" name="email" value="{{ old('email') }}" required>
                    @if ($errors->has('email'))
                        <div class="col s12">
                            <span class="red-text">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        </div>
                    @endif
                </div>

                <div class="input-field col s12 {{ $errors->has('password') ? ' has-error' : '' }}" required>
                    <i class="material-icons prefix">vpn_key</i>
                    <label for="password">Password </label>
                    <input type="password" name="password" class="validate" min="8" id="password">
                    @if ($errors->has('password'))
                        <span class="red-text">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="input-field col s12 center-align">
                    <button type="submit" class="btn waves-effect waves-light light-blue darken-4">Login</button>
                    <p>
                        <a class="" href="{{ url('/password/reset') }}">Forgot Your Password?</a>
                    </p>
                </div>
            </form>
        </div>
    </div>
@endsection
