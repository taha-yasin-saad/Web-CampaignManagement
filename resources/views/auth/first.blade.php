@extends('layouts.app')

@section('content')

<section id="wrapper" class="new-login-register">

    <div class="new-login-box">
        <div class="white-box">
            <img src="{{asset('Closor-Logo-Wide-whiteBG.svg')}}" alt="logo">
            <form class="form-horizontal new-lg-form" id="loginform" method="POST" action="{{ url('first') }}">
                @csrf
                <div class="form-group  m-t-20">
                    <div class="col-xs-12">
                        <label>Email Address</label>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                            name="email" value="@if(isset($email)){{$email}}@else{{ old('email') }}@endif" required
                            autocomplete="email" autofocus placeholder="email" required>
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        @if (session('status'))
                        <div class="invalid-feedback" role="alert">
                            {{ session('status') }}
                        </div>
                        @endif
                    </div>
                </div>
                <div class="form-group text-center m-t-20">
                    <div class="col-xs-12">
                        <button
                            class="btn btn-info btn-lg btn-block btn-rounded text-uppercase waves-effect waves-light"
                            type="submit">Continue </button>
                    </div>
                </div>
            </form>
            <form class="form-horizontal" id="recoverform" action="index.html">
                <div class="form-group ">
                    <div class="col-xs-12">
                        <h3>Recover Password</h3>
                        <p class="text-muted">Enter your Email and instructions will be sent to you! </p>
                    </div>
                </div>
                <div class="form-group ">
                    <div class="col-xs-12">
                        <input class="form-control" type="text" required="" placeholder="Email">
                    </div>
                </div>
                <div class="form-group text-center m-t-20">
                    <div class="col-xs-12">
                        <button class="btn btn-primary btn-lg btn-block text-uppercase waves-effect waves-light"
                            type="submit">Reset</button>
                    </div>
                </div>
            </form>
        </div>
    </div>


</section>

@endsection
