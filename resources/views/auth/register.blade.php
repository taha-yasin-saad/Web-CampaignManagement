@extends('layouts.app')

@section('content')

<section id="wrapper" class="new-login-register">
    <div class="new-login-box" style="margin-top: 5%;">
        <div class="white-box">
            <img src="{{asset('bright-logo.png')}}" alt="logo">
            <form class="form-horizontal new-lg-form" id="loginform" method="POST" @if(session('invited'))
                action="{{ url('login2') }}" @else action="{{ route('register') }}" @endif>
                @csrf
                <div class="form-group  m-t-20">
                    <div class="col-xs-12">
                        <label>Name</label>
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                            name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong class="text-danger">{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group  m-t-20">
                    <div class="col-xs-12">
                        <label>Email Address</label>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                            name="email"
                            value="@if(session('email')){{ session('email') }}@else{{ old('email') }}@endif" required
                            autocomplete="email" autofocus placeholder="email" required @if(session('invited')) readonly
                            @endif>
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong class="text-danger">{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group  m-t-20">
                    <div class="col-xs-12">
                        <label>Phone Number</label>
                        <input id="phone2" name="country_code" type="hidden">
                        <input id="phone" type="phone" class="form-control @error('phone') is-invalid @enderror"
                            name="phone" value="{{ old('phone') }}" required autocomplete="phone"
                            placeholder="Phone Number">
                        @error('phone')
                        <span class="invalid-feedback" role="alert">
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
                        <span class="invalid-feedback" role="alert">
                            <strong class="text-danger">{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-xs-12">
                        <label>{{ __('Confirm Password') }}</label>
                        <input id="password_confirmation" type="password"
                            class="form-control @error('password') is-invalid @enderror" name="password_confirmation"
                            required autocomplete="new-password" placeholder="Confirm Password">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-12">
                        <div class="checkbox checkbox-info pull-left p-t-0">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                {{ old('remember') ? 'checked' : '' }}>
                            <label for="remember"> Remember me </label>
                        </div>
                    </div>
                </div>
                <div class="form-group text-center m-t-20">
                    <div class="col-xs-12">
                        <button
                            class="btn btn-info btn-lg btn-block btn-rounded text-uppercase waves-effect waves-light"
                            type="submit">{{ __('Register') }}</button>
                    </div>
                </div>
            </form>
        </div>
    </div>


</section>

@endsection
