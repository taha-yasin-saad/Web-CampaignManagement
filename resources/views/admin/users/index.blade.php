@extends('layouts.admin')
@section('content')

    <!-- ============================================================== -->
    <!-- Page Content -->
    <!-- ============================================================== -->
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row bg-title">
                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                    <h4 class="page-title">Users</h4>
                </div>
                <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                    <ol class="breadcrumb">
                        <li>Dashboard</li>
                        <li class="active">Users</li>
                    </ol>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-info">
                        <div class="panel-wrapper collapse in" aria-expanded="true">
                            <div class="panel-body">
                                <form action="#" method="post">
                                    @csrf
                                    <div class="form-body">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">From Date</label>
                                                    <input type="text" class="form-control mydatepicker"
                                                           name="from_date" value="@if(@$from_date){{$from_date}}@endif"
                                                           placeholder="dd/mm/yyyy">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">To Date</label>
                                                    <input type="text" class="form-control mydatepicker" name="to_date"
                                                           value="@if(@$to_date){{$to_date}}@endif"
                                                           placeholder="dd/mm/yyyy">
                                                </div>
                                            </div>
                                        </div>
                                        <!--/row-->
                                        <div class="row">
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label class="control-label">Count of Leads</label>
                                                    <select class="form-control" name="select_leads">
                                                        <option value=">" @if(@$select_leads && $select_leads == '>') selected @endif>More Than</option>
                                                        <option value="<" @if(@$select_leads && $select_leads == '<') selected @endif>Less Than</option>
                                                    </select> <span class="help-block"> Select your Filter </span></div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label class="control-label"></label>
                                                    <input type="number" class="form-control" min="1" placeholder="Count" name="count_leads" value="@if(@$count_leads){{$count_leads}}@endif">
                                                </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label class="control-label">Count of Workplaces</label>
                                                    <select class="form-control" name="select_workplaces">
                                                        <option value=">" @if(@$select_workplaces && $select_workplaces == '>') selected @endif>More Than</option>
                                                        <option value="<" @if(@$select_workplaces && $select_workplaces == '<') selected @endif>Less Than</option>
                                                    </select> <span class="help-block"> Select your Filter </span></div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label class="control-label"></label>
                                                    <input type="number" class="form-control" min="1" placeholder="Count" name="count_workplaces" value="@if(@$count_workplaces){{$count_workplaces}}@endif">
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label class="control-label">Count of Products</label>
                                                    <select class="form-control" name="select_products">
                                                        <option value=">" @if(@$select_products && $select_products == '>') selected @endif>More Than</option>
                                                        <option value="<" @if(@$select_products && $select_products == '<') selected @endif>Less Than</option>
                                                    </select> <span class="help-block"> Select your Filter </span></div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label class="control-label"></label>
                                                    <input type="number" class="form-control" min="1" placeholder="Count" name="count_products" value="@if(@$count_products){{$count_products}}@endif">
                                                </div>
                                            </div>
                                            <!--/span-->
                                        </div>
                                    </div>
                                    <div class="form-actions">
                                        <button type="submit" class="btn btn-success"><i class="fa fa-check"></i> Save
                                        </button>
                                        <a href="{{url('admin/user')}}" class="btn btn-default">Cancel</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
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
                                    {{--@if(get_role($workplace->id) == 0 || get_role($workplace->id) == 1 || get_role($workplace->id) == 2)--}}
                                    {{--                                    <a href="{{url('admin/users/create')}}" class="btn btn-primary m-t-20">Add User</a>--}}
                                    {{--@endif--}}
                                </div>
                            </div>
                            <div id="has_been_copied"></div>
                            <div class="table-responsive">
                                <table class="table table-hover manage-u-table">
                                    <thead>
                                    <tr>
                                        <th style="width: 70px;" class="text-center">#</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Count of Products</th>
                                        <th>Count of Workplaces</th>
                                        <th>Count of Leads</th>
                                        <th>Registered At</th>
                                        {{--@if(get_role($workplace->id) == 0 || get_role($workplace->id) == 1 || get_role($workplace->id) == 2)--}}
                                        <th>MANAGE</th>
                                        {{--@endif--}}
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($data as $key=>$value)
                                        <tr>
                                            <td class="text-center">{{$key+1}}</td>
                                            <td><span class="font-medium">{{$value->name}}</span></td>
                                            <td><span class="font-medium">{{$value->email}}</span></td>
                                            <td><span
                                                    class="font-medium">{{$value->country_code}} {{$value->phone}}</span>
                                            </td>
                                            <td><span class="font-medium">{{$value->products_count}}</span></td>
                                            <td><span class="font-medium">{{$value->workplaces_count}}</span></td>
                                            <td><span class="font-medium">{{$value->leads_count}}</span></td>
                                            <td><span
                                                    class="font-medium">{{date("Y-m-d",strtotime($value->created_at))}}</span>
                                            </td>

                                            {{-- @if(get_role($workplace->id) == 0 || get_role($workplace->id) == 1 || get_role($workplace->id) == 2)--}}
                                            <td>
                                                @if($value->is_available == 1)
                                                    <a href="{{url('admin/user_available/'.$value->id.'/0')}}"
                                                       class="btn btn-danger btn-outline btn-circle btn-lg m-r-5"><i
                                                            class="ti-close"></i></a>
                                                @else
                                                    <a href="{{url('admin/user_available/'.$value->id.'/1')}}"
                                                       class="btn btn-info btn-outline btn-circle btn-lg m-r-5"><i
                                                            class="ti-check"></i></a>
                                                @endif

                                                {{--                                                <a href="{{url('admin/moderator/'.$value->id.'/edit')}}" type="button"--}}
                                                {{--                                                   class="btn btn-success btn-outline btn-circle btn-lg m-r-5"><i--}}
                                                {{--                                                        class="ti-pencil-alt"></i></a>--}}
                                                {{--                                                <a  class="btn btn-danger btn-outline btn-circle btn-lg m-r-5" onclick=" event.preventDefault(); var r = confirm('are you sure?'); if (r==true){document.getElementById('delete-row{{$value->id}}').submit();}"><i--}}
                                                {{--                                                        class='fa fa-trash-o'></i></a>--}}
                                                {{--                                                <form method="post" id="delete-row{{$value->id}}"--}}
                                                {{--                                                      action="{{ url('admin/moderator/'.$value->id) }}"--}}
                                                {{--                                                      style="display: none;">--}}
                                                {{--                                                    <input name="_method" type="hidden" value="DELETE">--}}
                                                {{--                                                    {{ csrf_field() }}--}}
                                                {{--                                                </form>--}}
                                            </td>
                                            {{-- @endif--}}
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    @else
                        <h3>You Have not any Users Yet ...</h3>

                        {{--@if(get_role($workplace->id) == 0 || get_role($workplace->id) == 1 || get_role($workplace->id) == 2)--}}
                        <div class=>
                            {{--                            <a href="{{url('admin/moderator/create')}}" class="btn btn-primary m-t-20">Add Moderator</a>--}}
                        </div>
                        {{--@endif--}}
                    @endif
                </div>
                {{--@endif--}}
            </div>

            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->
    </div>
@endsection
@section('js')
    <script>
        $('.mydatepicker').datepicker();

    </script>
@endsection
