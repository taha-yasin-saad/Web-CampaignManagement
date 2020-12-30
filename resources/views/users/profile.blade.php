@extends('layouts.admin')
@section('content')

        <!-- ============================================================== -->
        <!-- Page Content -->
        <!-- ============================================================== -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Profile page</h4> </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        {{-- <a href="javascript: void(0);" target="_blank" class="btn btn-danger pull-right m-l-20 hidden-xs hidden-sm waves-effect waves-light">Admin Panel</a> --}}
                        <ol class="breadcrumb">
                            <li><a href="#">Dashboard</a></li>
                            <li class="active">Profile page</li>
                        </ol>
                    </div>
                </div>
                <!-- .row -->
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 col-xs-12">
                        <div class="white-box">
                            <ul class="nav nav-tabs tabs customtab">
                                <li class="tab">
                                    <a href="#settings" data-toggle="tab" aria-expanded="false"> <span class="visible-xs"><i class="fa fa-cog"></i></span> <span class="hidden-xs">Settings</span> </a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active" id="settings" id="home">
                                    <form class="form-horizontal form-material" method="POST"
                                     action="{{url('profile'). '/' .auth()->user()->id}}">
                                     @csrf
                                     @method('Patch')
                                        <div class="form-group">
                                            <label class="col-md-12">Full Name</label>
                                            <div class="col-md-12">
                                                <input id="name" type="text" class="form-control form-control-line @error('name') is-invalid @enderror" name="name" required autocomplete="name" autofocus value="{{auth()->user()->name}}">

                                                @error('name')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="example-email" class="col-md-12">Email</label>
                                            <div class="col-md-12">
                                              <input id="email" type="email" class="form-control
                                              form-control-line @error('email') is-invalid @enderror" name="email" value="{{auth()->user()->email}}" required autocomplete="email" autofocus placeholder="email" required>
                                              @error('email')
                                                  <span class="invalid-feedback" role="alert">
                                                      <strong>{{ $message }}</strong>
                                                  </span>
                                              @enderror
                                            </div>
                                        </div>
                                        {{-- <div class="form-group">
                                            <label class="col-md-12">Phone No</label>
                                            <div class="col-md-12">
                                                <input id="phone3" type="phone" class="form-control
                                                 form-control-line @error('phone') is-invalid @enderror" name="phone" value="{{auth()->user()->phone}}" required autocomplete="phone" placeholder="Phone Number">
                                                @error('phone')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div> --}}
                                        <div class="form-group  m-t-20" style="overflow: unset">
                                            <div class="col-xs-12">
                                              <label>Phone Number</label>
                                              <input  name="country_code" type="hidden" @if(isset(auth()->user()->country_code)) value="{{auth()->user()->country_code}}" @else id="phone2" @endif class="phone22">

                                              <input id="phone" type="phone" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone', auth()->user()->phone) }}"  placeholder="{{ old('phone', auth()->user()->phone) }}" required autocomplete="phone" style="padding-left: 52px">
                                              @error('phone')
                                              <span class="invalid-feedback" role="alert">
                                                <strong class="text-danger">{{ $message }}</strong>
                                              </span>
                                              @enderror
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-12">Password</label>
                                            <div class="col-md-12">
                                                <input id="password" type="password" class="form-control
                                                form-control-line @error('password') is-invalid @enderror" name="password" autocomplete="current-password" placeholder="Password">
                                                @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-12">
                                                <button class="btn btn-success">Update Profile</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->
    </div>
@endsection
