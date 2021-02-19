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
            <form class="form-horizontal reset-password-form" method="POST" action="{{ route('password.email') }}">
                @csrf
                <div class="form-group ">
                    <div class="col-xs-12">
                        <h3>Reset Password</h3>
                        <p class="text-muted">Enter your Email and reset link will be sent to you! </p>
                    </div>
                </div>
                <div class="form-group ">
                    <div class="col-xs-12">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                            name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group text-center m-t-20">
                    <div class="col-xs-12">
                        <button class="btn btn-primary btn-lg btn-block text-uppercase waves-effect waves-light"
                            type="submit">Reset</button>
                    </div>
                </div>
                <div>
                    <a href="{{url()->previous()}}"><- Back to login</a>
                </div>
            </form>
        </div>
    </div>
</section>
<!-- /.row -->
@endsection
