<div class="navbar-fixed">
    <nav class="white" role="navigation">
        <div class="nav-wrapper container">
            <a id="logo-container" href="/"><img class="logo-img" src="{{URL::asset('/images/infinitedata_logo.jpg')}}" alt="InfiniteDATA Logo"></a>
            <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
            <ul class="right hide-on-med-and-down">
               @guest
                     <li @if(isset($activenavbar) and $activenavbar == 'login') class="active" @endif><a href="/login">Login</a></li>
               <!--  <li @if(isset($activenavbar) and $activenavbar == 'register') class="active" @endif><a href="/register">Register</a></li> -->
               @else
                    <ul class="right hide-on-med-and-down">
                         <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </ul>
                @endguest

            </ul>
        </div>
    </nav>
</div>
<ul class="sidenav" id="mobile-demo">
    <li><a href="/login">Login</a></li>
   <!--  <li><a href="/register">Register</a></li>
 -->
</ul>




<!--  <ul class="navbar-nav ml-auto"> -->
<!-- Authentication Links -->
    <!-- @guest
        <li class="nav-item">
            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
        </li>
        @else
            <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                {{ Auth::user()->name }} <span class="caret"></span>
                </a>

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </li>
    @endguest -->
</ul>