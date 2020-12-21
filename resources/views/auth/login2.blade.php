@extends('layouts.app')

@section('content')

<section id="wrapper" class="new-login-register">
  <div class="lg-info-panel">
    <div class="inner-panel">
      <a href="javascript:void(0)" class="p-20 di"><img src="{{asset('logo.jpg')}}"></a>
      <div class="lg-content">
        <h2><img src="{{asset('logo2.jpg')}}"></h2>
        <p class="text-muted">Sync & call leads instantly. </p>
        <a href="{{ route('register') }}" class="btn btn-rounded btn-danger p-l-20 p-r-20"> Register for free</a>
      </div>
    </div>
  </div>
  <div class="new-login-box">
    <div class="white-box">
      <h3 class="box-title m-b-0">Sign In to Admin</h3>
      <small>Enter your details below</small>
      <form class="form-horizontal new-lg-form" id="loginform" method="POST" action="{{ url('login2') }}">
        @csrf
        <div class="form-group  m-t-20">
          <div class="col-xs-12">
            <label>Email Address</label>
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="@if(session('email')){{ session('email') }}@else{{ old('email') }}@endif" required autocomplete="email" autofocus placeholder="email" required>
            @error('email')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
            @enderror
          </div>
        </div>
        <div class="form-group  m-t-20">
          <div class="col-xs-12">
            <label>Phone Number</label>
            <input id="phone" type="phone" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone" placeholder="Phone Number">
            @error('phone')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
            @enderror
          </div>
        </div>
        <div class="form-group">
          <div class="col-xs-12">
            <label>Password</label>
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">
            @error('password')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
            @enderror
          </div>
        </div>
        <div class="form-group">
          <div class="col-xs-12">
            <label>{{ __('Confirm Password') }}</label>
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password">
          </div>
        </div>
        <div class="form-group">
          <div class="col-md-12">
            <div class="checkbox checkbox-info pull-left p-t-0">
              <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
              <label for="remember"> Remember me </label>
            </div>
          </div>
        </div>
        <div class="form-group text-center m-t-20">
          <div class="col-xs-12">
            <button class="btn btn-info btn-lg btn-block btn-rounded text-uppercase waves-effect waves-light" type="submit">Log In</button>
          </div>
        </div>
        <div class="form-group m-b-0">
          <div class="col-sm-12 text-center">
            <p>Don't have an account? <a href="{{ route('register') }}" class="text-primary m-l-5"><b>Sign Up</b></a></p>
          </div>
        </div>
      </form>
    </div>
  </div>


</section>

@endsection