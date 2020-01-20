{{--
<header>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                        <a class="nav-link" href="/">News <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/posts">Blogs</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/ranking">Register</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="/ranking">Ranking</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/topup">Topup</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/downloads">Downloads</a>
                        </li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                   Welcome, {{ Auth::user()->userid }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="/home">User Panel</a>

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
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
</header>
--}}
<!-- NAVMENU -->
<div class="container navigation no-padding">
        <div class="navbar navbar-inverse" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                </button>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li class="{{ Request::is('/') ? 'active' : '' }}">
                        <a href="{{ url('/') }}"><span class="fa fa-home"></span> Home</a>
                    </li>
                    <li class="dropdown {{ Request::is('ranking*') ? 'active' : '' }}">
                        <a href="{{ url('ranking') }}"><span class="fa fa-trophy"></span> Ranking</a>
                        <ul class="sub-menu dropdown-menu">
                            <li><a href="{{ url('ranking/monthly') }}"><span class="fa fa-calendar"></span> {{__('Monthly')}}</a></li>
                            <li><a href="{{ url('ranking/overall') }}"><span class="fa fa-calendar"></span> {{__('Overall')}}</a></li>
                            <li><a href="{{ url('ranking/ashram') }}"><span class="fa fa-star"></span> {{__('Ashram')}}</a></li>
                        </ul>
                    </li>
                    @guest
                    @else
                        <li class="{{ Request::is('setting') ? 'active' : '' }}"><a href="{{ url('setting') }}"><span class="fa fa-cog"></span> Settings</a></li>
                        <li class="{{ Request::is('shop*') ? 'active' : '' }}"><a href="/shop"><span class="fa fa-shopping-cart"></span> Shop</a></li>
                    @endguest
                    <li class="{{ Request::is('forums*') ? 'active' : '' }}"><a href="/"><span class="fa fa-comments-o"></span> Forums</a></li>
                    <li class="{{ Request::is('downloads') ? 'active' : '' }}"><a href="/downloads"><span class="fa fa-download"></span> Downloads</a></li>
                </ul>

                <div class="search-top">
                    <form method="get" id="sform">
                        <input name="s" type="search">
                    </form>
                </div>
            </div>
        </div>
    </div>