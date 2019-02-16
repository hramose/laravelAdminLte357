@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="login-logo">
          Laravel AdminLte3
        </div>
        <div class="card">
          <div class="card-body login-card-body">
            <p class="login-box-msg">{{ __('Login') }}</p>

            <form method="POST" action="{{ route('login') }}">
              @csrf

              <div class="form-group row">
                <div class="col-md-8 offset-2">
                  <div class="input-group-append">
                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}">
                    <span class="fa fa-envelope input-group-text"></span>
                  </div>
                  {!! $errors->first('email', '<div class="text-danger text-center">:message</div>') !!}
                </div>
              </div>
              <div class="form-group row">
                <div class="col-md-8 offset-2">
                  <div class="input-group-append">
                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" value="{{ old('password') }}">
                    <span class="fa fa-lock input-group-text"></span>
                  </div>
                  {!! $errors->first('password', '<div class="text-danger text-center">:message</div>') !!}
                </div>
              </div>

              <div class="row">
                <div class="col-md-6 offset-md-4">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old( 'remember') ? 'checked' : '' }}>

                      <label class="form-check-label" for="remember">
                        {{ __('Remember me') }}
                      </label>
                    </div>
                  </div>
              </div>
              <br>

              <div class="row">
                <div class="col-md-8 offset-md-2">
                  <button type="submit" class="btn btn-primary">
                    {{ __('Login') }}
                  </button>
                  @if (Route::has('password.request'))
                    <a class="btn btn-link" href="{{ route('password.request') }}">
                      {{ __('Forgot your password?') }}
                    </a>
                  @endif
                </div>
              </div>
            </form>

            <div class="social-auth-links text-center mb-3">
              <p>- O -</p>
              <a href="#" class="btn btn-block btn-primary">
                <i class="fab fa-facebook-f mr-2"></i> Iniciar sesión con Facebook
              </a>
              <a href="#" class="btn btn-block btn-danger">
                <i class="fab fa-google-plus-g mr-2"></i> Iniciar sesión con Google+
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection