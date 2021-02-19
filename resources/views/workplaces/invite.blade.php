@extends('layouts.admin')
@section('content')

<!-- ============================================================== -->
<!-- Page Content -->
<!-- ============================================================== -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row bg-title">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h4 class="page-title">Invite Team Member</h4>
            </div>
            <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                <ol class="breadcrumb">
                    <li><a href="{{url('dashboard')}}">Dashboard</a></li>
                    <li class="active">Invite Team Members</li>
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
                                <h3 style="color: #31708f;"><strong><i class="mdi mdi-alert-circle-outline fa-fw"></i>
                                        Welcome Onboard!</strong></h3>

                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum, doloremque.
                                </p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum, doloremque.</p>
                            </div>

                                <form class="form-horizontal" method="POST"
                                    action="{{url('invite_member_workplace')}}">
                                    {{csrf_field()}}
                                    <input type="hidden" name="workplace_id" value="{{session('workplace')->id}}" />
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div>
                                                <label for="email" class="m-t-20">Email</label>
                                                <input required id="email" type="email" class="form-control m-b-10" value=""
                                                    name="email" required placeholder="Email .. ex@example.com" />
                                            </div>
                                        </div>
                                        <div class="col-xs-8 ">
                                            <label for="products" class="m-t-20">Assign Products</label>
                                            <select id="products" name="products[]" class="select2 m-b-10 select2-multiple"
                                                multiple="multiple" data-placeholder="Choose Product">
                                                @foreach($workplace->products as $val)
                                                <option value="{{$val->id}}">{{$val->title}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-xs-4 ">
                                            <label for="role" class="m-t-20">User Permission</label>
                                            <select id="role" name="role" class="m-b-10 form-control">
                                                <option value="3">Sales Agent</option>
                                                <option value="2">Leader</option>
                                                <option value="1">Admin</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 text-right m-t-20">
                                            <button type="submit" class="btn btn-danger"> <i
                                                    class="fa fa-check"></i>
                                                    Send Invitation</button>
                                        </div>
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
