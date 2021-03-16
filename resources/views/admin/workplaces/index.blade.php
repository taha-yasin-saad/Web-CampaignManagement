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
                    <li><a href="{{url('admin/dashboard')}}">Dashboard</a></li>
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
                                    <h3 class="counter text-right m-t-15 workplaces_count">{{$workplaces->count()}}</h3>
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
                                    <h3 class="counter text-right m-t-15 products_count">
                                        {{$workplaces->sum('products_count')}}</h3>
                                </li>
                                <li class="col-middle">
                                    <h4>Total Products</h4>
                                    @if($workplaces_without_filter->sum('products_count') != 0)
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-info" role="progressbar"
                                            aria-valuenow="{{$workplaces->sum('products_count')/$workplaces_without_filter->sum('products_count')*100}}"
                                            aria-valuemin="0" aria-valuemax="100"
                                            style="width: {{$workplaces->sum('products_count')/$workplaces_without_filter->sum('products_count')*100}}">
                                            <span
                                                class="sr-only">{{$workplaces->sum('products_count')/$workplaces_without_filter->sum('products_count')*100}}
                                                Complete (success)</span>
                                        </div>
                                    </div>
                                    @endif
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-3 col-sm-6 row-in-br">
                            <ul class="col-in">
                                <li>
                                    <span class="circle circle-md bg-success"><i class=" ti-user"></i></span>
                                </li>
                                <li class="col-last">
                                    <h3 class="counter text-right m-t-15 users_count">
                                        {{$workplaces->sum('users_count')}}</h3>
                                </li>
                                <li class="col-middle">
                                    <h4>Total Members</h4>
                                    @if($workplaces_without_filter->sum('users_count') != 0)
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-success" role="progressbar"
                                            aria-valuenow="{{$workplaces->sum('users_count')/$workplaces_without_filter->sum('users_count')*100}}"
                                            aria-valuemin="0" aria-valuemax="100"
                                            style="width: {{$workplaces->sum('users_count')/$workplaces_without_filter->sum('users_count')*100}}">
                                            <span class="sr-only">
                                                {{$workplaces->sum('users_count')/$workplaces_without_filter->sum('users_count')*100}}
                                                Complete (success)</span>
                                        </div>
                                    </div>
                                    @endif
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-3 col-sm-6  b-0">
                            <ul class="col-in">
                                <li>
                                    <span class="circle circle-md bg-warning"><i class="ti-sharethis"></i></span>
                                </li>
                                <li class="col-last">
                                    <h3 class="counter text-right m-t-15 leads_count">
                                        {{$workplaces->sum('leads_count')}}</h3>
                                </li>
                                <li class="col-middle">
                                    <h4>Total Leads</h4>
                                    @if($workplaces_without_filter->sum('leads_count') != 0)
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-warning" role="progressbar"
                                            aria-valuenow="{{$workplaces->sum('leads_count')/$workplaces_without_filter->sum('leads_count')*100}}"
                                            aria-valuemin="0" aria-valuemax="100"
                                            style="width: {{$workplaces->sum('leads_count')/$workplaces_without_filter->sum('leads_count')*100}}">
                                            <span
                                                class="sr-only">{{$workplaces->sum('leads_count')/$workplaces_without_filter->sum('leads_count')*100}}
                                                Complete (success)</span>
                                        </div>
                                    </div>
                                    @endif
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
                            <form class="workplace_filter" method="post">
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
                {{-- @if(count($workplaces) > 0) --}}
                <div class="panel">
                    <div class="row panel-heading">
                        <div class="col-md-6 col-sm-6 col-xs-6">
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-6 text-right">
                        </div>
                    </div>
                    <div id="has_been_copied"></div>
                    <div class="table-responsive">
                        <table class="table table-hover manage-u-table workplace-data-table">
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
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
                {{-- @else
                <h3> You Have not any Workplaces Yet ...</h3>
                @endif --}}
            </div>
            {{--@endif--}}
        </div>

        <!-- /.row -->
    </div>
    <!-- /#page-wrapper -->
</div>
@endsection
@section('js')
<script type="text/javascript">
    var oTable = $('.workplace-data-table').DataTable({
        dom: "Bf"+ "<'row'<'col-xs-12'<'col-xs-6'l><'col-xs-6'p>>r>"+
            "<'row'<'col-xs-12't>>"+
            "<'row'<'col-xs-12'<'col-xs-6'i><'col-xs-6'p>>>",
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ],
        processing: true,
        serverSide: true,
        ajax: {
            url: "{{ route('workplace.index') }}",
            data: function (d) {
                d.from_date = $('input[name=from_date]').val();
                d.to_date = $('input[name=to_date]').val();
                d.select_leads = $('select[name=select_leads]').val();
                d.count_leads = $('input[name=count_leads]').val();
                d.select_user = $('select[name=select_user]').val();
                d.count_user = $('input[name=count_user]').val();
                d.select_products = $('select[name=select_products]').val();
                d.count_products = $('input[name=count_products]').val();
            }
        },
        columns: [
              {data: 'DT_RowIndex', name: 'DT_RowIndex'},
              {
                data: "title",
                "render": function (data, type, full, meta) {
                    // console.log(full);
                    var workplace_title = full.title;
                    var workplace_id = full.id;
                    var workplace_info_url = "{{url('admin/workplace-info/')}}";
                return '<a href="'+ workplace_info_url +'/'+ workplace_id +'"><span class="font-medium">'+ workplace_title + '</span></a>'
            },
                "orderable": false,
                "targets": 0
                },
              {data: 'products_count', name: 'products_count'},
              {data: 'users_count', name: 'users_count'},
              {data: 'leads_count', name: 'leads_count'},
              {data: 'startday', name: 'startday'},
              {data: 'timezone', name: 'timezone'},
              {
                data: "admin_id",
                "render": function (data, type, full, meta) {
                    // console.log(full.admin);
                    var admin_name = full.admin.name;
                    var admin_phone = full.admin.phone;
                    var admin_email = full.admin.email;
                return '<button type="button" class="btn btn-primary open-UserModal" data-toggle="modal" data-target="#UserModal" data-name="'+admin_name+'" data-phone="'+admin_phone+'" data-email="'+admin_email+'"> <span class="font-medium">'+admin_name+'</span> </button>'
            },
                "orderable": false,
                "targets": 0
                },
              {data: 'leads_count', name: 'leads_count'},
              {data: 'created_at', name: 'created_at'},

            ],
          columnDefs: [{
                orderable: false,
                targets: [3, 8]

            }]
    });


    $('.workplace_filter').on('submit', function(e) {
        e.preventDefault();
        oTable.draw();
        setTimeout(function(){
            var total_workplaces_count = oTable.page.info().recordsTotal;
            var total_products_count = oTable.column(2).data().sum();
            var total_users_count = oTable.column(3).data().sum();
            var total_leads_count = oTable.column(4).data().sum();
            $(".workplaces_count").text(total_workplaces_count);
            $(".products_count").text(total_products_count);
            $(".users_count").text(total_users_count);
            $(".leads_count").text(total_leads_count);
        }, 500);


    // console.log(oTable.page.info().recordsTotal);

    });
</script>
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
