@extends('layouts.admin')
@section('content')
    <div id="page-wrapper">

        <div class="container-fluid">
            <div class="row bg-title">
                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                    <h4 class="page-title">
                        @if(isset($single))
                            Edit Moderator
                        @else
                            Add Moderator
                        @endif
                    </h4>

                </div>
                <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                    <ol class="breadcrumb">
                        <li><a href="{{url('admin/dashboard')}}">Dashboard</a></li>
                        <li><a href="{{url('admin/moderator')}}">Moderators</a></li>
                        <li class="active">
                            @if(isset($single))
                                Edit Moderator
                            @else
                                Add Moderator
                            @endif
                        </li>
                    </ol>
                </div>
            </div>
            <!-- /row -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="white-box">
                        <div class="add-product">
                            <h3>
                                @if(isset($single))
                                    Edit Moderator
                                @else
                                    Add Moderator
                                @endif
                            </h3>

                            @if (count($errors) > 0)
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            @if (session('success'))
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                            @endif
                            <form class="form-horizontal" method="post" enctype="multipart/form-data"  autocomplete="new-password"
                                  @if(isset($single))
                                  action="{{url('admin/moderator/'.$single->id)}}"
                                  @else
                                  action="{{url('admin/moderator')}}"
                                @endif
                            >
                                {{csrf_field()}}

                                @if(isset($single))
                                    <input type="hidden" name="_method" value="patch">
                                @endif

                                <div class="row">
                                    <div class="col-md-12">
                                        <div>
                                            <label class="control-label">Name </label>
                                            <input class="form-control" name="name"
                                                   value="@if(isset($single)){{$single->name}}@else{{old('name')}}@endif"
                                                   required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div>
                                            <label class="control-label">Email </label>
                                            <input class="form-control" name="email" type="email"
                                                   value="@if(isset($single)){{$single->email}}@else{{old('email')}}@endif"
                                                   required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div>
                                            <label class="control-label">Phone </label>
                                            <input class="form-control" name="phone"
                                                   value="@if(isset($single)){{$single->phone}}@else{{old('phone')}}@endif"
                                                   required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div>
                                            <label class="control-label">Password </label>
                                            <input class="form-control" name="password" type="password" autocomplete="new-password"
                                                   @if(!isset($single)) required @endif >
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div>
                                            <label class="control-label">Zones </label>
                                            <select class=" select2" multiple="" name="zone_id[]">
                                                <option disabled="" selected="">Select Zones</option>
                                                @foreach($zones as $zone)
                                                    <option value="{{$zone->id}}"
                                                        @if(isset($single))
                                                        @foreach($single->zones as $z)
                                                        @if( $z->id == $zone->id)
                                                        selected
                                                        @endif
                                                        @endforeach
                                                        @endif >{{$zone->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-actions m-t-40">
                                    <button type="submit" class="btn btn-danger"><i class="fa fa-check"></i> Save
                                    </button>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div>
@endsection
