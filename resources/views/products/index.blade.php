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
        @if ($workplace->admin_id == auth()->user()->id)
            <div class="row">
                <div class="col-xs-12">
                    @if (session('success'))
                    <div class="alert alert-success" role="alert">
                        {{ session('success') }}
                    </div>
                    @endif
                    @if(count($data) > 0)
                    @foreach ($data as $value)
                    <div class="panel">
                        <div class="row panel-heading">
                            <div class="col-md-6 col-sm-6 col-xs-6">
                                <p>{{$value->title}}</p>
                                <span class="label bg-inverse m-r-10">Mahmoud ali</span>
                                <span class="label bg-inverse m-r-10">Mairy Yassin</span>
                                <a class="text-info m-r-10">More...</a>
                                <a class=" m-r-10"><i class="ti-pencil-alt"></i></a>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-6 text-right">
                                <button type="button" class="btn btn-primary m-t-20">Add Lead Source</button>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-hover manage-u-table">
                                <thead>
                                    <tr>
                                        <th style="width: 70px;" class="text-center">#</th>
                                        <th>SOURCE</th>
                                        <th>TOTAL LEADS</th>
                                        <th>CONTACTED LEADS</th>
                                        <th>QUALIFIED LEADS</th>
                                        <th>AVG. CONVERION RATE</th>
                                        <th>MANAGE</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-center">1</td>
                                        <td><span class="font-medium">Facebook</span>
                                            <br><span class="text-muted">black friday camp</span>
                                        </td>
                                        <td>555</td>
                                        <td>323</td>
                                        <td>200</td>
                                        <td>50%</td>
                                        <td>
                                            <button type="button" class="btn btn-info btn-outline btn-circle btn-lg m-r-5"><i class="ti-pencil-alt"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">2</td>
                                        <td><span class="font-medium">Twitter</span>
                                            <br><span class="text-muted">Excutive compaign</span></td>
                                            <td>442</td>
                                            <td>211</td>
                                            <td>120</td>
                                            <td>48%</td>
                                        <td>
                                            <button type="button" class="btn btn-info btn-outline btn-circle btn-lg m-r-5"><i class="ti-pencil-alt"></i></button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
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
                                    <a href="{{url('product/'.$value->id)}}" class="btn btn-info m-t-10">Show details</a>
                                    <div class="dropdown pull-right"> <a class="dropdown-toggle" id="examplePanelDropdown" data-toggle="dropdown" href="#" aria-expanded="false" role="button">Invite Member <span class="caret"></span></a>
                                        <ul class="dropdown-menu  dropdown-menu-right" aria-labelledby="examplePanelDropdown" role="menu" style="width:300px;padding:5px">

                                            <form class="form-horizontal" method="POST" action="{{url('invite_member')}}">
                                                {{csrf_field()}}
                                                <input type="hidden" name="product_id" value="{{$value->id}}" />
                                                <input type="hidden" name="workplace_id" value="{{$value->workplace_id}}" />
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div>
                                                            <label class="control-label">Email</label>
                                                            <input required type="email" class="form-control" value="" name="email" required />
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
        @else
        <div class="row">
            <div class="col-xs-12">
                @if (session('success'))
                <div class="alert alert-success" role="alert">
                    {{ session('success') }}
                </div>
                @endif
                @if(count($invitations) > 0)
                @foreach ($invitations as $value)
                <div class="col-md-6 col-xs-12">
                    <div class="panel panel-default block3" style="position: static; zoom: 1;">
                        <div class="panel-wrapper collapse in">
                            <div class="panel-body">
                                <h1>{{$value->products->title}}</h1>
                            </div>
                            <div class="panel-footer">
                                <a href="{{url('product/'.$value->products->id)}}" class="btn btn-info m-t-10">Show details</a>
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
        @endif
        <!-- /.row -->
    </div>
    <!-- /#page-wrapper -->
</div>
@endsection