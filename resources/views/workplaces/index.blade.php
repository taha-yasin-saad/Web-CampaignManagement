
@extends('layouts.admin')
@section('content')

        <!-- ============================================================== -->
        <!-- Page Content -->
        <!-- ============================================================== -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Workplace</h4> </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <button class="right-side-toggle waves-effect waves-light btn-info btn-circle pull-right m-l-20"><i class="ti-settings text-white"></i></button>
                        <a href="javascript: void(0);" target="_blank" class="btn btn-danger pull-right m-l-20 hidden-xs hidden-sm waves-effect waves-light">Admin Panel</a>
                        <ol class="breadcrumb">
                            <li><a href="#">Dashboard</a></li>
                            <li class="active">Create new Workplace</li>
                        </ol>
                    </div>
                </div>
                <!-- .row -->
                <div class="row">
                    <div class="col-xs-12">
                        @foreach ($workplaces as $workplace)
                        <div class="col-md-6 col-xs-12">
                            <div class="panel panel-default block3" style="position: static; zoom: 1;">
                                <div class="panel-heading">
                                    <div class="panel-action">
                                        <div class="dropdown"> <a class="dropdown-toggle" id="examplePanelDropdown" data-toggle="dropdown" href="#" aria-expanded="false" role="button">Action <span class="caret"></span></a>
                                            <ul class="dropdown-menu bullet dropdown-menu-right" aria-labelledby="examplePanelDropdown" role="menu">
                                                <li role="presentation">
                                                    <a onclick=" event.preventDefault(); var r = confirm('are you sure you want to delete this workplace?'); if (r==true){document.getElementById('delete-row{{$workplace->id}}').submit();}" role="menuitem">
                                                        <i class='fa fa-trash-o'></i> Delete</a>
                                                    <form method="post" id="delete-row{{$workplace->id}}"
                                                        action="{{ url('workplace/'.$workplace->id) }}"
                                                        style="display: none;">
                                                        @method('DELETE')
                                                        @csrf
                                                    </form>
                                                </li>
                                                <li class="divider" role="presentation"></li>
                                                <li role="presentation"><a href="javascript:void(0)" role="menuitem"><i class="icon wb-settings" aria-hidden="true"></i> Edit Workplace</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel-wrapper collapse in">
                                    <div class="panel-body">
                                        <h1>{{$workplace->title}}</h1>
                                    </div>
                                    <div class="panel-footer"> 
                                        <a class="btn btn-info m-t-10">Show details</a>  
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->
    </div>
@endsection
