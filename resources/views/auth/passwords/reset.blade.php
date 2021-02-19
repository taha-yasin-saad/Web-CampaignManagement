{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Reset Password') }}</div>

<div class="card-body">
    <form method="POST" action="{{ route('password.update') }}">
        @csrf

        <input type="hidden" name="token" value="{{ $token }}">

        <div class="form-group row">
            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

            <div class="col-md-6">
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                    value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

            <div class="col-md-6">
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                    name="password" required autocomplete="new-password">

                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="password-confirm"
                class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

            <div class="col-md-6">
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required
                    autocomplete="new-password">
            </div>
        </div>

        <div class="form-group row mb-0">
            <div class="col-md-6 offset-md-4">
                <button type="submit" class="btn btn-primary">
                    {{ __('Reset Password') }}
                </button>
            </div>
        </div>
    </form>
</div>
</div>
</div>
</div>
</div>
@endsection --}}

@extends('layouts.app')

@section('content')



<!-- .row -->
<section id="wrapper" class="new-login-register">
    <div class="new-login-box" style="margin-top: 5%;">
        <div class="white-box">
            <img src="{{asset('Closor-Logo-Wide-whiteBG.svg')}}" alt="logo">
            @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
            @endif
            <form class="form-horizontal reset-password-form" method="POST" action="{{ route('password.update') }}">
                @csrf
                <input type="hidden" name="token" value="{{ $token }}">
                <div class="form-group ">
                    <div class="col-xs-12">
                        <h3>Create New Password</h3>
                    </div>
                </div>
                <div class="form-group ">
                    <div class="col-xs-12">
                        <label for="email"
                            class="col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                           value="{{ $email ?? old('email') }}" required disabled>
                        <input type="hidden" class="form-control "
                               name="email" value="{{ $email ?? old('email') }}" >
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group ">
                    <div class="col-xs-12">
                        <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
                        <input id="password" type="password"
                            class="form-control @error('password') is-invalid @enderror" name="password" required
                            autocomplete="new-password">

                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-xs-12">
                        <label for="password-confirm"
                            class="col-form-label text-md-right">{{ __('Confirm Password') }}</label>
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation"
                            required autocomplete="new-password">
                    </div>
                </div>
                <div class="form-group text-center m-t-20">
                    <div class="col-xs-12">
                        <button class="btn btn-primary btn-lg btn-block text-uppercase waves-effect waves-light"
                            type="submit">Create New Password</button>
                    </div>
                </div>
            <div><a href="{{url('/')}}"><- Go back</a></div>
            </form>
        </div>
    </div>
</section>
@endsection
