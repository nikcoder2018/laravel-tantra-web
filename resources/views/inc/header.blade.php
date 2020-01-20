<!-- HEADER -->
<header class="container">
    <div class="row">
        <div class="col-md-4 logo">
            <a href="{{ url('/') }}"><img src="{{asset('images/common/logo.png')}}" class="img-responsive" alt=""></a>
        </div>
        @guest
        <div class="col-md-8">
                <div class="logreg-info pull-right">
                    <a class="register-btn" href="{{ route('register') }}"><i class="fa fa-pencil-square-o"></i> <span>{{ __('Register') }}</span></a>
                    <i>or</i>
                    <a class="login-btn" data-toggle="tooltip"><i class="fa fa-lock"></i> <span>Sign in</span></a>
                    <div id="mcTooltipWrapper" class="login-tooltip">
                        <div id="mcTooltip">
                            <div id="login_tooltip">
                                <div class="closeto"> <span><i class="fa fa-close"></i> </span></div>
                                <form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
                                    @csrf
                                    <input id="userid" type="text" placeholder="Enter Email or User ID" class="form-control{{ $errors->has('email') || $errors->has('userid') ? ' is-invalid' : '' }}" name="userid" value="{{ old('userid') }}" required autofocus>
                                    @if ($errors->has('userid'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('userid') }}</strong>
                                        </span>
                                    @endif
    
                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                    <input id="password" type="password" placeholder="Enter Password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
    
                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                    <a class="forgotpass" href="{{ route('password.request') }}">{{ __('Lost your password?') }}</a>
                                    <button type="submit" class="button-small">{{ __('GO') }}</button>             
                                </form>
                            </div>
                        </div>
                        <div id="mcttCo"></div>
                    </div>
                </div>				
            </div>
        @else
        <div class="user-wrap ">
                <div class="user-avatar"><a class="username" href="#"><img src="storage/profile/{{Auth::user()->profile_picture}}" width="71" height="71" alt=""></a></div>
                <div class="logged-info">
                    <a class="username" href="#">{{Auth::user()->userid}}<br><span>Member since {{date('F, Y', strtotime(Auth::user()->date_registered))}}</span></a>
                </div>
                <a class="btns messages" data-original-title="View your messages" data-toggle="tooltip" href="#">
                    <i class="fa fa-comments-o"></i>
                    <i class="msg_ntf">1</i>
                </a>
                <a class="btns settings" data-original-title="View your profile" data-toggle="tooltip" href="/profile"><i class="fa fa-user"></i> </a>
                <a class="btns logout" data-original-title="Log out" data-toggle="tooltip" href="{{ route('logout') }}"
                onclick="event.preventDefault();document.getElementById('logout-form').submit();"><i class="fa fa-sign-out"></i> </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
                <div class="clear"></div>
            </div>
        @endguest
    </div>
</header>

<div class="container no-padding nav-divider"></div>
