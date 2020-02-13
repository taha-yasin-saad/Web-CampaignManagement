@extends('layouts.admin')
@section('content')

<!-- ============================================================== -->
<!-- Page Content -->
<!-- ============================================================== -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row bg-title">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h4 class="page-title">Workplace</h4>
            </div>
            <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                <button class="right-side-toggle waves-effect waves-light btn-info btn-circle pull-right m-l-20"><i class="ti-settings text-white"></i></button>
                <!-- <a href="javascript: void(0);" target="_blank" class="btn btn-danger pull-right m-l-20 hidden-xs hidden-sm waves-effect waves-light">Admin Panel</a> -->
                <ol class="breadcrumb">
                    <li><a href="#">Dashboard</a></li>
                    <li class="active">Workplaces</li>
                </ol>
            </div>
        </div>
        <!-- .row -->
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-info">
                    <div class="panel-wrapper collapse in" aria-expanded="true">
                        <div class="panel-body">
                            <div class="alert alert-info" role="alert">
                                <h3 style="color: #31708f;"><strong><i class="fa fa-info-circle fa-lg"></i> Welcome Onboard!</strong></h3>

                                <p>
                                    your account is not associated with any work workspaces yet, you can create a new workspace now.
                                </p>
                                <p>if your business is already has a workspace, please ask your workmate to invite you by email.</p>
                            </div>
                            <form action="#">
                                <div class="form-body">
                                    <h3 class="box-title m-t-40">Create new workspace</h3>
                                    <hr>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Workspace Name</label>
                                                <input required type="text" class="form-control" placeholder="XYZ Workspace"> </div>
                                        </div>
                                        <!--/span-->
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>TimeZone</label>
                                                <select class="form-control">
                                                    <option>--Select your Country--</option>
                                                    <option>India</option>
                                                    <option>Sri Lanka</option>
                                                    <option>USA</option>
                                                </select>
                                            </div>
                                        </div>
                                        <!--/span-->
                                    </div>
                                    <!--/row-->
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Website</label>
                                                <input type="text" class="form-control"> </div>
                                        </div>
                                        <!--/span-->
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Week Starts On</label>
                                                <select class="form-control">
                                                    <option>--Select your Country--</option>
                                                    <option>India</option>
                                                    <option>Sri Lanka</option>
                                                    <option>USA</option>
                                                </select>
                                            </div>
                                        </div>
                                        <!--/span-->
                                    </div>
                                </div>
                                <div class="form-actions text-right">
                                    <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i> Save</button>
                                    <button type="button" class="btn btn-dark">Cancel</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /#page-wrapper -->
</div>
@endsection