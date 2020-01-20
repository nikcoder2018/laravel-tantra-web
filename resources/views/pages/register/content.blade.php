<div class="container main-content no-padding">
        <div class="page_header">
            <div class="col-lg-6">
                <h1>Registration</h1>
            </div>
            <div class="col-lg-6 breadcrumbs">
                <strong><a href="./index.html">Home</a> / Registration</strong>
            </div>
        </div>
        <div class="reg-form container">
            <div class="col-md-7 reg-form-inner">
                <div class="heading">
                    <h3>JOIN {{config('app.name')}} TODAY FOR free!</h3>
                    <div class="clear"></div>
                </div>
                <form method="POST" action="{{ route('register') }}" aria-label="{{ __('Register') }}">
                    @csrf
                    <label for="userid">{{ __('UserID') }}</label>
                    <input id="userid" type="text" class="{{ $errors->has('userid') ? ' is-invalid' : '' }}" name="userid" value="{{ old('userid') }}" required autofocus>
                    @if ($errors->has('userid'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('userid') }}</strong>
                        </span>
                    @endif
                    <label for="email">{{ __('E-Mail Address') }}</label>

                    <input id="email" type="email" class="{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                    @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif

                    <label for="password">{{ __('Password') }}</label>
                    <input id="password" type="password" class="{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                    @if ($errors->has('password'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif

                    <label for="password-confirm">{{ __('Confirm Password') }}</label>
                    <input id="password-confirm" type="password" name="password_confirmation" required>
                        
                    <label for="firstname">{{ __('Firstname') }}</label>
                    <input id="firstname" type="text" class="{{ $errors->has('firstname') ? ' is-invalid' : '' }}" name="firstname" value="{{ old('firstname') }}" required autofocus>
                        
                    @if ($errors->has('firstname'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('firstname') }}</strong>
                        </span>
                    @endif

                    <label for="lastname">{{ __('Lastname') }}</label>
                    <input id="lastname" type="text" class="{{ $errors->has('lastname') ? ' is-invalid' : '' }}" name="lastname" value="{{ old('lastname') }}" required autofocus>

                    @if ($errors->has('lastname'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('lastname') }}</strong>
                         </span>
                    @endif

                    <p class="checkbox-reg">
                        <label><input type="checkbox" required> <span>I certify that I agree to the <a href="./index.html" target="_blank">Game Rules &amp; Conditions!</a></span></label>
                    </p>
                    <p class="submit"><button type="submit" class="button-green button-small center-block"> <i class="fa fa-sign-in"></i> Sign up today!</button>
                    </p>
                </form>
            </div>
        </div>
    </div>
</div>