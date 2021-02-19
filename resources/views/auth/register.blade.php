@extends('layouts.app')

@section('content')

<section id="wrapper" class="new-login-register">
    <div class="new-login-box" style="margin-top: 5%;">
        <div class="white-box">
            <img src="{{asset('Closor-Logo-Wide-whiteBG.svg')}}" alt="logo">
            <form class="form-horizontal new-lg-form" id="loginform" method="POST" @if(session('invited'))
                action="{{ url('login2') }}" @else action="{{ route('register') }}" @endif>
                @csrf
                <div class="form-group  m-t-20">
                    <div class="col-xs-12">
                        <label>Name</label>
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                            name="name" placeholder="Name" value="{{ old('name') }}" required autocomplete="name" autofocus>

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
                <div class="form-group text-center m-t-20">
                    <div class="col-xs-12">
                        <button
                            class="btn btn-info btn-lg btn-block btn-rounded text-uppercase waves-effect waves-light"
                            type="submit">{{ __('Register') }}</button>
                    </div>
                </div>
                <div>
                <p class="small-font">By clicking on register, you agree to the <a href="https://closor.com/terms/" target="_blank">terms of service</a></p>
                <br>
                <a href="{{url()->previous()}}"><- Back to login</a>
                </div>
            </form>
        </div>
    </div>


</section>

@endsection
