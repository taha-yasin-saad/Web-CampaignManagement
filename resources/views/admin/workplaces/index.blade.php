@extends('layouts.admin')
@section('content')

<!-- ============================================================== -->
<!-- Page Content -->
<!-- ============================================================== -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row bg-title">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h4 class="page-title">Workplaces</h4>
            </div>
            <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                <ol class="breadcrumb">
                    <li>Dashboard</li>
                    <li class="active">Workplaces</li>
                </ol>
            </div>
        </div>
        @include('admin.workplaces.user_modal')
        <div class="row">
            <div class="col-sm-12">
                <div class="white-box">
                    <div class="row row-in">
                        <div class="col-lg-3 col-sm-6 row-in-br">
                            <ul class="col-in">
                                <li>
                                    <span class="circle circle-md bg-danger"><i class="ti-home"></i></span>
                                </li>
                                <li class="col-last">
                                    <h3 class="counter text-right m-t-15">{{$data->count()}}</h3>
                                </li>
                                <li class="col-middle">
                                    <h4>Total Workplace</h4>
                                    {{-- <div class="progress">
                                        <div class="progress-bar progress-bar-danger" role="progressbar"
                                            aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                            <span class="sr-only">40% Complete (success)</span>
                                        </div>
                                    </div> --}}
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-3 col-sm-6 row-in-br  b-r-none">
                            <ul class="col-in">
                                <li>
                                    <span class="circle circle-md bg-info"><i class="ti-bag"></i></span>
                                </li>
                                <li class="col-last">
                                    <h3 class="counter text-right m-t-15">{{$data->sum('products_count')}}</h3>
                                </li>
                                <li class="col-middle">
                                    <h4>Total Products</h4>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-info" role="progressbar"
                                            aria-valuenow="{{$data->sum('products_count')/$data_without_filter->sum('products_count')*100}}"
                                            aria-valuemin="0" aria-valuemax="100"
                                            style="width: {{$data->sum('products_count')/$data_without_filter->sum('products_count')*100}}%">
                                            <span
                                                class="sr-only">{{$data->sum('products_count')/$data_without_filter->sum('products_count')*100}}%
                                                Complete (success)</span>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-3 col-sm-6 row-in-br">
                            <ul class="col-in">
                                <li>
                                    <span class="circle circle-md bg-success"><i class=" ti-user"></i></span>
                                </li>
                                <li class="col-last">
                                    <h3 class="counter text-right m-t-15">{{$data->sum('users_count')}}</h3>
                                </li>
                                <li class="col-middle">
                                    <h4>Total Members</h4>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-success" role="progressbar"
                                            aria-valuenow="{{$data->sum('users_count')/$data_without_filter->sum('users_count')*100}}"
                                            aria-valuemin="0" aria-valuemax="100"
                                            style="width: {{$data->sum('users_count')/$data_without_filter->sum('users_count')*100}}%">
                                            <span
                                                class="sr-only">{{$data->sum('users_count')/$data_without_filter->sum('users_count')*100}}%
                                                Complete (success)</span>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-3 col-sm-6  b-0">
                            <ul class="col-in">
                                <li>
                                    <span class="circle circle-md bg-warning"><i class="ti-sharethis"></i></span>
                                </li>
                                <li class="col-last">
                                    <h3 class="counter text-right m-t-15">{{$data->sum('leads_count')}}</h3>
                                </li>
                                <li class="col-middle">
                                    <h4>Total Leads</h4>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-warning" role="progressbar"
                                            aria-valuenow="{{$data->sum('leads_count')/$data_without_filter->sum('leads_count')*100}}"
                                            aria-valuemin="0" aria-valuemax="100"
                                            style="width: {{$data->sum('leads_count')/$data_without_filter->sum('leads_count')*100}}%">
                                            <span
                                                class="sr-only">{{$data->sum('leads_count')/$data_without_filter->sum('leads_count')*100}}%
                                                Complete (success)</span>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
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
                                                <input type="text" class="form-control mydatepicker" name="from_date"
                                                    value="@if(@$from_date){{$from_date}}@endif"
                                                    placeholder="dd/mm/yyyy">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label">To Date</label>
                                                <input type="text" class="form-control mydatepicker" name="to_date"
                                                    value="@if(@$to_date){{$to_date}}@endif" placeholder="dd/mm/yyyy">
                                            </div>
                                        </div>
                                    </div>
                                    <!--/row-->
                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label class="control-label">Count of Leads</label>
                                                <select class="form-control" name="select_leads">
                                                    <option value=">" @if(@$select_leads && $select_leads=='>' )
                                                        selected @endif>More Than</option>
                                                    <option value="<" @if(@$select_leads && $select_leads=='<' )
                                                        selected @endif>Less Than</option>
                                                </select> <span class="help-block"> Select your Filter </span></div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label class="control-label"></label>
                                                <input type="number" class="form-control" min="1" placeholder="Count"
                                                    name="count_leads" value="@if(@$count_leads){{$count_leads}}@endif">
                                            </div>
                                        </div>
                                        <!--/span-->
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label class="control-label">Count of Members</label>
                                                <select class="form-control" name="select_users">
                                                    <option value=">" @if(@$select_users && $select_users=='>' )
                                                        selected @endif>More Than</option>
                                                    <option value="<" @if(@$select_users && $select_users=='<' )
                                                        selected @endif>Less Than</option>
                                                </select> <span class="help-block"> Select your Filter </span></div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label class="control-label"></label>
                                                <input type="number" class="form-control" min="1" placeholder="Count"
                                                    name="count_users" value="@if(@$count_users){{$count_users}}@endif">
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label class="control-label">Count of Products</label>
                                                <select class="form-control" name="select_products">
                                                    <option value=">" @if(@$select_products && $select_products=='>' )
                                                        selected @endif>More Than</option>
                                                    <option value="<" @if(@$select_products && $select_products=='<' )
                                                        selected @endif>Less Than</option>
                                                </select> <span class="help-block"> Select your Filter </span></div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label class="control-label"></label>
                                                <input type="number" class="form-control" min="1" placeholder="Count"
                                                    name="count_products"
                                                    value="@if(@$count_products){{$count_products}}@endif">
                                            </div>
                                        </div>
                                        <!--/span-->
                                    </div>
                                </div>
                                <div class="form-actions">
                                    <button type="submit" class="btn btn-success"><i class="fa fa-filter"></i> Filter
                                    </button>
                                    <a href="{{url('admin/workplace')}}" class="btn btn-default">Cancel</a>
                                    <!-- Button trigger modal -->

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
                            {{--                                    <a href="{{url('admin/Workplaces/create')}}"
                            class="btn btn-primary m-t-20">Add User</a>--}}
                            {{--@endif--}}
                        </div>
                    </div>
                    <div id="has_been_copied"></div>
                    <div class="table-responsive">
                        <table class="table table-hover manage-u-table">
                            <thead>
                                <tr>
                                    <th style="width: 70px;" class="text-center">#</th>
                                    <th>Title</th>
                                    <th>Count of Products</th>
                                    <th>Count of Members</th>
                                    <th>Count of Leads</th>
                                    <th>Startday</th>
                                    <th>Timezone</th>
                                    <th>Created By</th>
                                    <th>Website</th>
                                    <th>Registered At</th>
                                    {{--@if(get_role($workplace->id) == 0 || get_role($workplace->id) == 1 || get_role($workplace->id) == 2)--}}
                                    {{-- <th>MANAGE</th> --}}
                                    {{--@endif--}}
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $key=>$value)
                                <tr>
                                    <td class="text-center">{{$key+1}}</td>
                                    <td>
                                        <a href="{{url('admin/workplace-info/'.$value->id)}}">
                                            <span class="font-medium">{{$value->title}}</span>
                                        </a>
                                    </td>
                                    <td><span class="font-medium">{{$value->products_count}}</span></td>
                                    <td><span class="font-medium">{{$value->users_count}}</span></td>
                                    <td><span class="font-medium">{{$value->leads_count}}</span></td>
                                    <td><span class="font-medium">{{$value->startday}}</span></td>
                                    <td><span class="font-medium">{{$value->timezone}}</span></td>
                                    <td>
                                        <button type="button" class="btn btn-primary open-UserModal" data-toggle="modal"
                                            data-target="#UserModal" data-name="{{$value->admin->name}}"
                                            data-phone="{{$value->admin->phone}}" data-email="{{$value->admin->email}}">
                                            <span class="font-medium">{{$value->admin->name}}</span>
                                        </button>
                                    </td>
                                    <td><span class="font-medium">{{$value->website}}</span></td>
                                    <td><span class="font-medium">{{date("Y-m-d",strtotime($value->created_at))}}</span>
                                    </td>

                                    {{-- @endif--}}
                                </tr> @endforeach </tbody>
                        </table>
                    </div>
                </div>
                @else
                <h3> You Have not any Workplaces Yet ...</h3>
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
            $(document).on("click", ".open-UserModal", function () {
                var Username = $(this).data('name');
                var Useremail = $(this).data('email');
                var Userphone = $(this).data('phone');
                $(".modal-body #Username").text(Username);
                $(".modal-body #Useremail").text(Useremail);
                $(".modal-body #Userphone").text(Userphone);
                console.log($(".modal-body #Username").text());
                console.log(Username);
                console.log(Useremail);
                console.log(Userphone);
            });
</script>
@endsection
