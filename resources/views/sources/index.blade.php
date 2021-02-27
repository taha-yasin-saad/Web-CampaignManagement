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
                <ol class="breadcrumb">
                    <li><a href="{{url('/')}}">{{$workplace->title}}</a></li>
                    <li class="active">Leads Sources</li>
                </ol>
            </div>
        </div>
        <!-- .row -->
        <div class="row">
            @if(get_role($workplace->id) == 9)
            <h3 class="text-center">you Have not Permission to access that Workspace</h3>
            @else
            <div class="col-xs-12">
                @if (session('success'))
                <div class="alert alert-success" role="alert">
                    {{ session('success') }}
                </div>
                @endif
                @if(count($data) > 0)
                <div class="panel">
                    <div class="row panel-heading">
                        <div class="col-md-6 col-sm-6 col-xs-6">
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-6 text-right">
                            @if(get_role($workplace->id) == 0 || get_role($workplace->id) == 1 ||
                            get_role($workplace->id) == 2)
                            <a href="{{url('sources/create')}}" class="btn btn-primary m-t-20">Add Lead Source</a>
                            @endif
                        </div>
                    </div>
                    <div id="has_been_copied"></div>
                    <div class="table-responsive">
                        <table id="myTable" class="table table-hover manage-u-table">
                            <thead>
                                <tr>
                                    <th style="width: 70px;" class="text-center">widgetID</th>
                                    <th>SOURCE</th>
                                    <th>TOTAL LEADS</th>
                                    <th>CONTACTED LEADS</th>
                                    <th>QUALIFIED LEADS</th>
                                    <th>AVG. CONVERION RATE</th>
                                    @if(get_role($workplace->id) == 0 || get_role($workplace->id) == 1 ||
                                    get_role($workplace->id) == 2)
                                    <th>MANAGE</th>
                                    @endif
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $value)
                                <tr>
                                    <td class="text-center">{{$value->id}}</td>
                                    <td><span class="font-medium">{{$value->name}}</span>
                                        <br><span class="text-muted">{{$value->website}}</span>
                                    </td>
                                    <td>{{$value->lead->count()}}</td>
                                    <td>{{$value->lead->where('last_contact','!=',null)->count()}}</td>
                                    <td>{{$value->lead->where('status',0)->count()}}</td>
                                    <td>
                                        @if(@$value->lead->count() > 0)
                                        {{sprintf("%.1f%%", ($value->lead->where('last_contact','!=',null)->count() / count($value->lead)) * 100)}}
                                        @else
                                        0.0%
                                        @endif
                                    </td>
                                    @if(get_role($workplace->id) == 0 || get_role($workplace->id) == 1 ||
                                    get_role($workplace->id) == 2)
                                    <td>
                                    <input style="display: none" value="<script src='https://app.closor.com/widget/widget.js?id={{$value->id}}'></script>" id="copyToClipboard{{$value->id}}">
                                        <a href="{{url('widgetView/'.$value->id)}}" target="_blank"
                                            class="btn btn-info btn-outline btn-circle btn-lg m-r-5"><i class="ti-eye"></i></a>
                                                <button type="button"
                                                class="btn btn-info btn-outline btn-circle btn-lg m-r-5" onclick="copyToClipboard('copyToClipboard{{$value->id}}')"><i
                                                    class="fa fa-copy"></i></button>
                                        <a href="{{url('sources/'.$value->id.'/edit')}}" type="button"
                                            class="btn btn-info btn-outline btn-circle btn-lg m-r-5"><i
                                                class="ti-pencil-alt"></i></a>
                                    </td>
                                    @endif
                                </tr>
                                @endforeach
                                @else
                                <h3>You Have not any Source Yet ...</h3>

                                    @if(get_role($workplace->id) == 0 || get_role($workplace->id) == 1 ||
                                    get_role($workplace->id) == 2)
                                    <div class=>
                                    <a href="{{url('sources/create')}}" class="btn btn-primary m-t-20">Add Lead Source</a>
                                    </div>
                                    @endif
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>


            </div>
            @endif
        </div>

        <!-- /.row -->
    </div>
    <!-- /#page-wrapper -->
</div>
@endsection
