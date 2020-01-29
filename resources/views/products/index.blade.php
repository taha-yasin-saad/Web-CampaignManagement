@extends('layouts.admin')
@section('content')

<!-- ============================================================== -->
<!-- Page Content -->
<!-- ============================================================== -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row bg-title">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h4 class="page-title">{{$workplace->title}}</h4>
            </div>
            <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                <button class="right-side-toggle waves-effect waves-light btn-info btn-circle pull-right m-l-20"><i class="ti-settings text-white"></i></button>
                <a href="{{url('product/create/'.$workplace->id)}}" class="btn btn-danger pull-right m-l-20 hidden-xs hidden-sm waves-effect waves-light">Add New Product</a>
                <ol class="breadcrumb">
                    <li><a href="#">Dashboard</a></li>
                    <li class="active">Workplace Products</li>
                </ol>
            </div>
        </div>
        <!-- .row -->
        <div class="row">
            <div class="col-xs-12">
                @if(count($data) > 0)
                @foreach ($data as $value)
                <div class="col-md-6 col-xs-12">
                    <div class="panel panel-default block3" style="position: static; zoom: 1;">
                        <div class="panel-heading">
                            <div class="panel-action">
                                <div class="dropdown"> <a class="dropdown-toggle" id="examplePanelDropdown" data-toggle="dropdown" href="#" aria-expanded="false" role="button">Action <span class="caret"></span></a>
                                    <ul class="dropdown-menu bullet dropdown-menu-right" aria-labelledby="examplePanelDropdown" role="menu">
                                        <li role="presentation">
                                            <a onclick=" event.preventDefault(); var r = confirm('are you sure you want to delete this product?'); if (r==true){document.getElementById('delete-row{{$value->id}}').submit();}" role="menuitem">
                                                <i class='fa fa-trash-o'></i> Delete</a>
                                            <form method="post" id="delete-row{{$value->id}}" action="{{ url('product/'.$value->id) }}" style="display: none;">
                                                @method('DELETE')
                                                @csrf
                                            </form>
                                        </li>
                                        <li class="divider" role="presentation"></li>
                                        <li role="presentation"><a href="{{url('product/'.$value->id . '/edit')}}" role="menuitem"><i class="icon wb-settings" aria-hidden="true"></i> Edit product</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="panel-wrapper collapse in">
                            <div class="panel-body">
                                <h1>{{$value->title}}</h1>
                            </div>
                            <div class="panel-footer">
                                <a class="btn btn-info m-t-10">Show details</a>
                                <div class="dropdown pull-right"> <a class="dropdown-toggle" id="examplePanelDropdown" data-toggle="dropdown" href="#" aria-expanded="false" role="button">Invite Member <span class="caret"></span></a>
                                    <ul class="dropdown-menu  dropdown-menu-right" aria-labelledby="examplePanelDropdown" role="menu" style="width:300px;padding:5px">
                                        
                                        <form class="form-horizontal" method="POST" action="{{url('invite_member')}}">
                                            {{csrf_field()}}
                                            <input type="hidden" name="product_id" value="{{$value->id}}" />
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div>
                                                        <label class="control-label">Email</label>
                                                        <input required type="email" class="form-control" value="" name="email" required/>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <button type="submit" class="btn btn-danger"> <i class="fa fa-check"></i>
                                                        Save</button>
                                                </div>
                                            </div>
                                        </form>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                @else
                <h3>You Have not any product Yet ...</h3>
                @endif
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /#page-wrapper -->
</div>
@endsection