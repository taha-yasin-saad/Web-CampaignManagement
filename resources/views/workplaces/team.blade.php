
@extends('layouts.admin')
@section('content')

    <!-- ============================================================== -->
    <!-- Page Content -->
    <!-- ============================================================== -->
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row bg-title">
                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                    <h4 class="page-title">Team</h4> </div>
                <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                    <button class="right-side-toggle waves-effect waves-light btn-info btn-circle pull-right m-l-20"><i class="ti-settings text-white"></i></button>
                    <!-- <a href="javascript: void(0);" target="_blank" class="btn btn-danger pull-right m-l-20 hidden-xs hidden-sm waves-effect waves-light">Admin Panel</a> -->
                    <ol class="breadcrumb">
                        <li><a href="#">Workplace</a></li>
                        <li class="active">Team</li>
                    </ol>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <div class="panel m-b-20">
                        <div class="row panel-heading">
                            <div class="col-md-6 col-sm-6 col-xs-6">
                                <p>11</p>
                                <span class="text-muted m-r-10">Users</span>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-6 text-right">
                                <a class="dropdown">
                                    <a class="dropdown-toggle btn btn-danger m-t-20" id="addProductDropDown" data-toggle="dropdown" href="#"
                                        aria-expanded="false" type="button">Invite New User</a>
                                    <div class="dropdown-menu bullet dropdown-menu-right p-20"
                                        aria-labelledby="addProductDropDown" role="menu" style="width: 100%;">
                                            <ul class="nav nav-tabs tabs customtab">
                                                <li class="tab">
                                                    <a href="#settings" data-toggle="tab" aria-expanded="false"> 
                                                        <span class="visible-xs"><i class="fa fa-cog"></i></span> <span class="hidden-xs">insert User Email</span> 
                                                    </a>
                                                </li>
                                            </ul>
                                            <div class="tab-content">
                                                <form class="form-horizontal" method="POST" action="{{url('invite_member')}}">
                                                    {{csrf_field()}}
                                                    <input type="hidden" name="product_id" value="{{''}}" />
                                                    <input type="hidden" name="workplace_id" value="{{''}}" />
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div>
                                                                <input required type="email" class="form-control" value=""
                                                                    name="email" required placeholder="Email .. ex@example.com"/>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12 text-right m-t-20">
                                                            <button type="submit" class="btn btn-danger"> <i
                                                                    class="fa fa-check"></i>
                                                                Save</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="panel">
                        <div class="panel-heading">MANAGE USERS</div>
                        <div class="table-responsive">
                            <table class="table table-hover manage-u-table">
                                <thead>
                                    <tr>
                                        <th style="width: 70px;" class="text-center">#</th>
                                        <th>USER</th>
                                        <th>PRODUCTS</th>
                                        <th>USER ROLE</th>
                                        <th>TOTAL LEADS</th>
                                        <th>CONTACTED LEADS</th>
                                        <th>QUALIFIED LEADS</th>
                                        <th>CONVERSION RATE</th>
                                        <th>MANAGE</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-center">1</td>
                                        <td>
                                            <span class="font-medium">Mazen Ahmed</span><span class="badge-success badge">Online</span>
                                            <br><span class="text-muted">Joined at 5/12/2015</span>
                                        </td>
                                        <td>
                                            <span class="bg-inverse badge">English Course</span>
                                            <br><span class="bg-inverse badge">English Course</span>
                                        </td>
                                        <td>Sales Agent</td>
                                        <td>514</td>
                                        <td>214</td>
                                        <td>78</td>
                                        <td>20%</td>
                                        <td>
                                            <button type="button" class="btn btn-info btn-outline btn-circle btn-lg m-r-5"><i class="icon-trash"></i></button>
                                            <button type="button" class="btn btn-info btn-outline btn-circle btn-lg m-r-5"><i class="ti-pencil-alt"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">2</td>
                                        <td>
                                            <span class="font-medium">Mazen Ahmed</span><span class="badge-danger badge">Ofline</span>
                                            <br><span class="text-muted">Joined at 5/12/2015</span>
                                        </td>
                                        <td>
                                            <span class="bg-inverse badge">English Course</span>
                                            <br><span class="bg-inverse badge">English Course</span>
                                        </td>
                                        <td>Sales Agent</td>
                                        <td>514</td>
                                        <td>214</td>
                                        <td>78</td>
                                        <td>20%</td>
                                        <td>
                                            <button type="button" class="btn btn-info btn-outline btn-circle btn-lg m-r-5"><i class="icon-trash"></i></button>
                                            <button type="button" class="btn btn-info btn-outline btn-circle btn-lg m-r-5"><i class="ti-pencil-alt"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">3</td>
                                        <td>
                                            <span class="font-medium">Mazen Ahmed</span><span class="badge-success badge">Online</span>
                                            <br><span class="text-muted">Joined at 5/12/2015</span>
                                        </td>
                                        <td>
                                            <span class="bg-inverse badge">English Course</span>
                                            <br><span class="bg-inverse badge">English Course</span>
                                        </td>
                                        <td>Sales Agent</td>
                                        <td>514</td>
                                        <td>214</td>
                                        <td>78</td>
                                        <td>20%</td>
                                        <td>
                                            <button type="button" class="btn btn-info btn-outline btn-circle btn-lg m-r-5"><i class="icon-trash"></i></button>
                                            <button type="button" class="btn btn-info btn-outline btn-circle btn-lg m-r-5"><i class="ti-pencil-alt"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">4</td>
                                        <td>
                                            <span class="font-medium">Mazen Ahmed</span><span class="badge-danger badge">Ofline</span>
                                            <br><span class="text-muted">Joined at 5/12/2015</span>
                                        </td>
                                        <td>
                                            <span class="bg-inverse badge">English Course</span>
                                            <br><span class="bg-inverse badge">English Course</span>
                                        </td>
                                        <td>Sales Agent</td>
                                        <td>514</td>
                                        <td>214</td>
                                        <td>78</td>
                                        <td>20%</td>
                                        <td>
                                            <button type="button" class="btn btn-info btn-outline btn-circle btn-lg m-r-5"><i class="icon-trash"></i></button>
                                            <button type="button" class="btn btn-info btn-outline btn-circle btn-lg m-r-5"><i class="ti-pencil-alt"></i></button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection