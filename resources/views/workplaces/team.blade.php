
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
                <div class="col-sm-12">
                    <div class="panel">
                        <div class="panel-heading">MANAGE USERS</div>
                        <div class="table-responsive">
                            <table class="table table-hover manage-u-table">
                                <thead>
                                    <tr>
                                        <th style="width: 70px;" class="text-center">#</th>
                                        <th>NAME</th>
                                        <th>OCCUPATION</th>
                                        <th>EMAIL</th>
                                        <th>CATEGORY</th>
                                        <th>MANAGE</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-center">1</td>
                                        <td><span class="font-medium">Daniel Kristeen</span>
                                            <br><span class="text-muted">Texas, Unitedd states</span></td>
                                        <td>Visual Designer
                                            <br><span class="text-muted">Past : teacher</span></td>
                                        <td>daniel@website.com
                                            <br><span class="text-muted">999 - 444 - 555</span></td>
                                        <td>
                                            <select class="form-control">
                                                <option>Modulator</option>
                                                <option>Admin</option>
                                                <option>User</option>
                                                <option>Subscriber</option>
                                            </select>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-info btn-outline btn-circle btn-lg m-r-5"><i class="icon-trash"></i></button>
                                            <button type="button" class="btn btn-info btn-outline btn-circle btn-lg m-r-5"><i class="ti-pencil-alt"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">2</td>
                                        <td><span class="font-medium">Daniel Kristeen</span>
                                            <br><span class="text-muted">Texas, Unitedd states</span></td>
                                        <td>Visual Designer
                                            <br><span class="text-muted">Past : teacher</span></td>
                                        <td>daniel@website.com
                                            <br><span class="text-muted">999 - 444 - 555</span></td>
                                        <td>
                                            <select class="form-control">
                                                <option>Modulator</option>
                                                <option>Admin</option>
                                                <option>User</option>
                                                <option>Subscriber</option>
                                            </select>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-info btn-outline btn-circle btn-lg m-r-5"><i class="icon-trash"></i></button>
                                            <button type="button" class="btn btn-info btn-outline btn-circle btn-lg m-r-5"><i class="ti-pencil-alt"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">3</td>
                                        <td><span class="font-medium">Daniel Kristeen</span>
                                            <br><span class="text-muted">Texas, Unitedd states</span></td>
                                        <td>Visual Designer
                                            <br><span class="text-muted">Past : teacher</span></td>
                                        <td>daniel@website.com
                                            <br><span class="text-muted">999 - 444 - 555</span></td>
                                        <td>
                                            <select class="form-control">
                                                <option>Modulator</option>
                                                <option>Admin</option>
                                                <option>User</option>
                                                <option>Subscriber</option>
                                            </select>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-info btn-outline btn-circle btn-lg m-r-5"><i class="icon-trash"></i></button>
                                            <button type="button" class="btn btn-info btn-outline btn-circle btn-lg m-r-5"><i class="ti-pencil-alt"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">4</td>
                                        <td><span class="font-medium">Daniel Kristeen</span>
                                            <br><span class="text-muted">Texas, Unitedd states</span></td>
                                        <td>Visual Designer
                                            <br><span class="text-muted">Past : teacher</span></td>
                                        <td>daniel@website.com
                                            <br><span class="text-muted">999 - 444 - 555</span></td>
                                        <td>
                                            <select class="form-control">
                                                <option>Modulator</option>
                                                <option>Admin</option>
                                                <option>User</option>
                                                <option>Subscriber</option>
                                            </select>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-info btn-outline btn-circle btn-lg m-r-5"><i class="icon-trash"></i></button>
                                            <button type="button" class="btn btn-info btn-outline btn-circle btn-lg m-r-5"><i class="ti-pencil-alt"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">5</td>
                                        <td><span class="font-medium">Daniel Kristeen</span>
                                            <br><span class="text-muted">Texas, Unitedd states</span></td>
                                        <td>Visual Designer
                                            <br><span class="text-muted">Past : teacher</span></td>
                                        <td>daniel@website.com
                                            <br><span class="text-muted">999 - 444 - 555</span></td>
                                        <td>
                                            <select class="form-control">
                                                <option>Modulator</option>
                                                <option>Admin</option>
                                                <option>User</option>
                                                <option>Subscriber</option>
                                            </select>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-info btn-outline btn-circle btn-lg m-r-5"><i class="icon-trash"></i></button>
                                            <button type="button" class="btn btn-info btn-outline btn-circle btn-lg m-r-5"><i class="ti-pencil-alt"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">6</td>
                                        <td><span class="font-medium">Daniel Kristeen</span>
                                            <br><span class="text-muted">Texas, Unitedd states</span></td>
                                        <td>Visual Designer
                                            <br><span class="text-muted">Past : teacher</span></td>
                                        <td>daniel@website.com
                                            <br><span class="text-muted">999 - 444 - 555</span></td>
                                        <td>
                                            <select class="form-control">
                                                <option>Modulator</option>
                                                <option>Admin</option>
                                                <option>User</option>
                                                <option>Subscriber</option>
                                            </select>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-info btn-outline btn-circle btn-lg m-r-5"><i class="icon-trash"></i></button>
                                            <button type="button" class="btn btn-info btn-outline btn-circle btn-lg m-r-5"><i class="ti-pencil-alt"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">7</td>
                                        <td><span class="font-medium">Daniel Kristeen</span>
                                            <br><span class="text-muted">Texas, Unitedd states</span></td>
                                        <td>Visual Designer
                                            <br><span class="text-muted">Past : teacher</span></td>
                                        <td>daniel@website.com
                                            <br><span class="text-muted">999 - 444 - 555</span></td>
                                        <td>
                                            <select class="form-control">
                                                <option>Modulator</option>
                                                <option>Admin</option>
                                                <option>User</option>
                                                <option>Subscriber</option>
                                            </select>
                                        </td>
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