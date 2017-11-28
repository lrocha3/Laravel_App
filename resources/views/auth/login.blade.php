@extends('layouts.app')

@section('content')

<link href="{{asset('/css/login.css') }}" rel="stylesheet">



<div class="background_big">
      </div>

            <div class="vertical-center">
                <div class="login-page">

                  <div class="form">
                  <h3>Almost there</h3>

                    <form class="login-form form-horizontal" method="POST" action="{{ route('login') }}" role="form">
                        {{ csrf_field() }}


                      <input id="email" type="email" placeholder="email" name="email" value="{{ old('email') }}" required autofocus>
                      <input id="password" type="password" placeholder="password" name="password" required>




                        @if ($errors->has('email') || $errors->has('password'))
                            <span class="help-block">
                                <strong>Try again my friend.</strong>
                            </span>
                        @endif

                        <div class="my_check_box">
                        <span>  Remember me
                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
                      </span>
                      </div>

                                <div class="login_button">
                                <button><span>login</span></button>
                              </div>

                                <p>
                                  <div class="message">
                                <a href="{{ route('password.request') }}">
                                Forgot Your Password? </a>
                              </div>
                              </p>


                    </form>
            </div>
        </div>
    </div>
@endsection
