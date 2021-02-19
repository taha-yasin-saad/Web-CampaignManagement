@extends('layouts.app')

@section('content')

<section id="wrapper" class="new-login-register">
    <div class="new-login-box">
        <div class="white-box">
            <img src="{{asset('Closor-Logo-Wide-whiteBG.svg')}}" alt="logo">
            <form class="form-horizontal new-lg-form" id="loginform" method="POST" action="{{ route('login') }}">
                @csrf
                <div class="form-group  m-t-20">
                    <div class="col-xs-12">
                        <label>Email Address</label>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                            name="email"
                            value="@if(session('email')){{ session('email') }}@else{{ old('email') }}@endif" required
                            autocomplete="email" autofocus placeholder="email" required>
                        @error('email')
                        <span class="invalid-feedback text-danger" role="alert">
                            <strong class="text-danger">{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-xs-12">
                        <label>Password</label>
                        <input id="password" type="password"
                            class="form-control @error('password') is-invalid @enderror" name="password" required
                            autocomplete="current-password" placeholder="Password">
                        @error('password')
                        <span class="invalid-feedback text-danger" role="alert">
                            <strong class="text-danger">{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-12">
                        <div class="checkbox checkbox-info pull-left p-t-0">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember_login"
                                {{ old('remember') ? 'checked' : '' }}>
                            <label for="remember_login"> Remember me </label>
                        </div>
                        <a href="{{ route('password.request') }}" class="text-dark pull-right"><i
                                class="fa fa-lock m-r-5"></i> Forgot pwd?</a>
                    </div>
                </div>
                <div class="form-group text-center m-t-20">
                    <div class="col-xs-12">
                        <button
                            class="btn btn-info btn-lg btn-block btn-rounded text-uppercase waves-effect waves-light"
                            type="submit">Log In</button>
                    </div>
                </div>
            </form>
        </div>
    </div>


</section>

@endsection
