@extends('layouts.admin')
@section('content')

<!-- ============================================================== -->
<!-- Page Content -->
<!-- ============================================================== -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row bg-title">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h4 class="page-title">product</h4>
            </div>
            <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                {{-- <a href="javascript: void(0);" target="_blank" class="btn btn-danger pull-right m-l-20 hidden-xs hidden-sm waves-effect waves-light">Admin Panel</a> --}}
                <ol class="breadcrumb">
                    <li><a href="#">Dashboard</a></li>
                    <li class="active">
                        @if(isset($data))
                        Edit product
                        @else
                        Create new product
                        @endif
                    </li>
                </ol>
            </div>
        </div>
        <!-- .row -->
        <div class="row">
            <div class="col-md-8 col-md-offset-2 col-xs-12">
                <div class="white-box">
                    <ul class="nav nav-tabs tabs customtab">
                        <li class="tab">
                            <a href="#settings" data-toggle="tab" aria-expanded="false"> <span class="visible-xs"><i class="fa fa-cog"></i></span> <span class="hidden-xs">insert your product title</span> </a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <form class="form-horizontal" method="POST" @if(isset($data)) action="{{url('product/'.$data->id)}}" @else action="{{url('product')}}" @endif>
                            {{csrf_field()}}
                            @if(isset($data))
                            @method('PATCH')
                            @endif
                            <input type="hidden" name="workplace_id" value="{{$workplace->id}}" />
                            <div class="row">
                                <div class="col-md-12">
                                    <div>
                                        <label class="control-label">product Title</label>
                                        <input required type="text" class="form-control" value="@if(isset($data)) {{$data->title}} @endif" name="title" />
                                    </div>

                                </div>
                            </div>
                            <div class="row">
                                <div class="form-actions m-t-40">
                                    <button type="submit" class="btn btn-danger"> <i class="fa fa-check"></i>
                                        Save</button>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /#page-wrapper -->
</div>
@endsection
