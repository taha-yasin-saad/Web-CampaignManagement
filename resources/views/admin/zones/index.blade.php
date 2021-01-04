@extends('layouts.admin')
@section('content')

    <!-- ============================================================== -->
    <!-- Page Content -->
    <!-- ============================================================== -->
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row bg-title">
                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                    <h4 class="page-title">Zones</h4>
                </div>
                <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                    <ol class="breadcrumb">
                        <li><a href="{{url('admin/dashboard')}}">Dashboard</a></li>
                        <li class="active">Zones</li>
                    </ol>
                </div>
            </div>
            <!-- .row -->
            <div class="row">
                {{--            @if(get_role($workplace->id) == 9)--}}
                {{--            <h3 class="text-center">you Have not Permission to access that Workspace</h3>--}}
                {{--            @else--}}
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
                                    {{--                                    @if(get_role($workplace->id) == 0 || get_role($workplace->id) == 1 || get_role($workplace->id) == 2)--}}
                                    <a href="{{url('admin/zone/create')}}" class="btn btn-primary m-t-20">Add Zone</a>
                                    {{--                                    @endif--}}
                                </div>
                            </div>
                            <div id="has_been_copied"></div>
                            <div class="table-responsive">
                                <table id="myTable" class="table table-hover manage-u-table">
                                    <thead>
                                    <tr>
                                        <th style="width: 70px;" class="text-center">#</th>
                                        <th>Zone name</th>
                                        <th>Countries</th>
                                        {{-- <th>Countries</th> --}}
                                        {{--@if(get_role($workplace->id) == 0 || get_role($workplace->id) == 1 || get_role($workplace->id) == 2)--}}
                                        <th>MANAGE</th>
                                        {{--@endif--}}
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($data as $key=>$value)
                                        <tr>
                                            <td class="text-center">{{$key+1}}</td>
                                            <td><span class="font-medium">{{$value->name}}</span>
                                            </td>
                                            <td>
                                                @foreach($value->countries as $country)
                                                    {{$country->name}}<br>
                                                @endforeach
                                            </td>
                                            {{-- @if(get_role($workplace->id) == 0 || get_role($workplace->id) == 1 || get_role($workplace->id) == 2)--}}
                                            <td>
                                                <a href="{{url('admin/zone/'.$value->id.'/edit')}}" type="button"
                                                   class="btn btn-success btn-outline btn-circle btn-lg m-r-5"><i
                                                        class="ti-pencil-alt"></i></a>
                                                <a  class="btn btn-danger btn-outline btn-circle btn-lg m-r-5" onclick=" event.preventDefault(); var r = confirm('are you sure?'); if (r==true){document.getElementById('delete-row{{$value->id}}').submit();}"><i
                                                        class='fa fa-trash-o'></i></a>
                                                <form method="post" id="delete-row{{$value->id}}"
                                                      action="{{ url('admin/zone/'.$value->id) }}"
                                                      style="display: none;">
                                                    <input name="_method" type="hidden" value="DELETE">
                                                    {{ csrf_field() }}
                                                </form>
                                            </td>
                                            {{-- @endif--}}
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    @else
                        <h3>You Have not any Zones Yet ...</h3>

                        {{--@if(get_role($workplace->id) == 0 || get_role($workplace->id) == 1 || get_role($workplace->id) == 2)--}}
                        <div class=>
                            <a href="{{url('admin/zone/create')}}" class="btn btn-primary m-t-20">Add Zone</a>
                        </div>
                        {{--@endif--}}
                    @endif
                </div>
                {{--            @endif--}}
            </div>

            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->
    </div>
@endsection
