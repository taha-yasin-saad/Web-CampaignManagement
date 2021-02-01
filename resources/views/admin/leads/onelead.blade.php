@extends('layouts.admin')
@section('content')

    <!-- ============================================================== -->
    <!-- Page Content -->
    <!-- ============================================================== -->
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row bg-title">
                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                    <h4 class="page-title">Lead Page</h4>
                </div>
                <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                    {{-- <a href="javascript: void(0);" target="_blank"
                       class="btn btn-danger pull-right m-l-20 hidden-xs hidden-sm waves-effect waves-light">Admin
                        Panel</a> --}}
                    <ol class="breadcrumb">
                        <li><a href="#">Dashboard</a></li>
                        <li class="active">Lead Page</li>
                    </ol>
                </div>
            </div>
            <!-- .row -->
            <div class="row">
                <div class="col-md-8 col-md-offset-2 col-xs-12 white-box">
                    <div>
                        {{--  <ul class="nav nav-tabs tabs customtab">
                          <li class="tab">
                            <a href="#settings" data-toggle="tab" aria-expanded="false"> <span class="visible-xs"><i class="fa fa-cog"></i></span> <span class="hidden-xs">Settings</span> </a>
                          </li>
                        </ul>  --}}
                        <div class="tab-content">
                            <div class="form-group">
                                <label class="col-md-6">Full Name</label>
                                <div class="col-md-6">
                                    <p>{{$lead->name}}</p>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-6">Email</label>
                                <div class="col-md-6">
                                    <p>{{$lead->email}}</p>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-6">Phone No</label>
                                <div class="col-md-6">
                                    <p>{{$lead->phone}}</p>

                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-6">Product</label>
                                <div class="col-md-6">
                                    <p>@if($lead->product){{$lead->product->title}}@else - @endif</p>

                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-6">Source</label>
                                <div class="col-md-6">
                                    <p>@if($lead->source){{$lead->source->name}}@else - @endif</p>

                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-6">Assigned to</label>
                                <div class="col-md-6">
                                    <p>@if($lead->user){{$lead->user->name}}@else - @endif</p>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-6">Submitted On</label>
                                <div class="col-md-6">
                                    <p>{{$lead->created_at}}</p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8 col-md-offset-2 col-xs-12 white-box">
                    <div>
                        {{--  <ul class="nav nav-tabs tabs customtab">
                          <li class="tab">
                            <a href="#settings" data-toggle="tab" aria-expanded="false"> <span class="visible-xs"><i class="fa fa-cog"></i></span> <span class="hidden-xs">Settings</span> </a>
                          </li>
                        </ul>  --}}
                        <div class="tab-content">
                            <div class="form-group">
                                @foreach ($ldata as $key=>$value)
                                    @if (strpos($value->key, '_id') !== false)
                                       @continue
                                    @endif
                                    <label class="col-md-6">{{$value->key}}</label>
                                    <div class="col-md-6">
                                        <p>{{$value->value}}</p>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>

                <!-- /.row -->
            </div>
            <!-- /#page-wrapper -->
        </div>
@endsection
