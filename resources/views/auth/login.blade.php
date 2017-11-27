@extends('layouts.app')

@section('content')

<div class="background_big">
      </div>
            <div class="vertical-center">
                <div class="login-page">

                <div class="form">

                  <h3>Almost there</h3>

                    <form class="login-form" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}


                      <input id="email" type="email" placeholder="email" name="email" value="{{ old('email') }}" required autofocus>
                      <input id="password" type="password" placeholder="password" name="password" required>




                        @if ($errors->has('email') || $errors->has('password'))
                            <span class="help-block">
                                <strong>Try again my friend.</strong>
                            </span>
                        @endif

                                <div class="checkbox">
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                </div>

                                <button><span>login</span></button>

                                <p>
                                <a class="message" href="{{ route('password.request') }}">
                                Forgot Your Password? </a>
                              </p>


                    </form>
            </div>
        </div>
    </div>
@endsection
