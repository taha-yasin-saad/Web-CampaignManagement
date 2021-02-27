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
                    <li><a href="{{url('admin/dashboard')}}">Dashboard</a></li>
                    <li class="active">Users</li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="white-box">
                    <div class="row row-in">
                        <div class="col-lg-3 col-sm-6 row-in-br">
                            <ul class="col-in">
                                <li>
                                    <span class="circle circle-md bg-success"><i class=" ti-user"></i></span>
                                </li>
                                <li class="col-last">
                                    <h3 class="counter text-right m-t-15 users_count">{{$users->count()}}
                                    </h3>
                                </li>
                                <li class="col-middle">
                                    <h4>Total Members</h4>
                                    @if($users_without_filter->count() != 0)
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-success" role="progressbar"
                                            aria-valuenow="{{$users->count()/$users_without_filter->count()*100}}"
                                            aria-valuemin="0" aria-valuemax="100"
                                            style="width: {{sprintf("%.1f%%", $users->count()/$users_without_filter->count()* 100)}}">
                                            <span class="sr-only">
                                                {{sprintf("%.1f%%",$users->count()/$users_without_filter->count()* 100)}}
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
                                    <span class="circle circle-md bg-danger"><i class="ti-home"></i></span>
                                </li>
                                <li class="col-last">
                                    <h3 class="counter text-right m-t-15 workplaces_count">
                                        {{$users->sum('workplaces_count')}}</h3>
                                </li>
                                <li class="col-middle">
                                    <h4>Total Workplaces</h4>
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
                                        {{$users->sum('products_count')}}</h3>
                                </li>
                                <li class="col-middle">
                                    <h4>Total Products</h4>
                                    @if($users_without_filter->sum('products_count') != 0)
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-info" role="progressbar"
                                            aria-valuenow="{{$users->sum('products_count')/$users_without_filter->sum('products_count')*100}}"
                                            aria-valuemin="0" aria-valuemax="100"
                                            style="width: {{sprintf("%.1f%%",$users->sum('products_count')/$users_without_filter->sum('products_count') * 100)}}">
                                            <span
                                                class="sr-only">{{sprintf("%.1f%%",$users->sum('products_count')/$users_without_filter->sum('products_count') * 100)}}
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
                                    <h3 class="counter text-right m-t-15 leads_count">{{$users->sum('leads_count')}}
                                    </h3>
                                </li>
                                <li class="col-middle">
                                    <h4>Total Leads</h4>
                                    @if($users_without_filter->sum('leads_count') != 0)
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-warning" role="progressbar"
                                            aria-valuenow="{{$users->sum('leads_count')/$users_without_filter->sum('leads_count')*100}}"
                                            aria-valuemin="0" aria-valuemax="100"
                                            style="width: {{sprintf("%.1f%%",$users->sum('leads_count')/$users_without_filter->sum('leads_count') * 100)}}">
                                            <span
                                                class="sr-only">{{sprintf("%.1f%%",$users->sum('leads_count')/$users_without_filter->sum('leads_count')* 100)}}
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
                            <form class="user_filter" method="post">
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
                                                <label class="control-label">Count of Workplaces</label>
                                                <select class="form-control" name="select_workplaces">
                                                    <option value=">" @if(@$select_workplaces && $select_workplaces=='>'
                                                        ) selected @endif>More Than</option>
                                                    <option value="<" @if(@$select_workplaces && $select_workplaces=='<'
                                                        ) selected @endif>Less Than</option>
                                                </select> <span class="help-block"> Select your Filter </span></div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label class="control-label"></label>
                                                <input type="number" class="form-control" min="1" placeholder="Count"
                                                    name="count_workplaces"
                                                    value="@if(@$count_workplaces){{$count_workplaces}}@endif">
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
            <div class="col-xs-12">
                @if (session('success'))
                <div class="alert alert-success" role="alert">
                    {{ session('success') }}
                </div>
                @endif
                {{-- @if(@$users->count > 0) --}}
                <div class="panel">
                    <div class="row panel-heading">
                        <div class="col-md-6 col-sm-6 col-xs-6">
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-6 text-right">
                        </div>
                    </div>
                    <div id="has_been_copied"></div>
                    <div class="table-responsive">
                        {{-- <h1>Laravel 5.8 Datatables Tutorial <br /> HDTuto.com</h1> --}}
                        <table class="table table-bordered user-data-table">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Count of Products</th>
                                    <th>Count of Workplaces</th>
                                    <th>Count of Leads</th>
                                    <th>Registered At</th>
                                    <th width="100px">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                </div>
                {{-- @else --}}
                {{-- <h3>You Have not any Users Yet ...</h3> --}}

                {{-- @endif --}}
            </div>
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

<script type="text/javascript">
    var oTable = $('.user-data-table').DataTable({
        dom: "Bf" + "<'row'<'col-xs-12'<'col-xs-6'l><'col-xs-6'p>>r>"+
            "<'row'<'col-xs-12't>>"+
            "<'row'<'col-xs-12'<'col-xs-6'i><'col-xs-6'p>>>",
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ],
        processing: true,
        serverSide: true,
        // filter: true,
        ajax: {
            url: "{{ route('user.index') }}",
            data: function (d) {
                d.from_date = $('input[name=from_date]').val();
                d.to_date = $('input[name=to_date]').val();
                d.select_leads = $('select[name=select_leads]').val();
                d.count_leads = $('input[name=count_leads]').val();
                d.select_workplaces = $('select[name=select_workplaces]').val();
                d.count_workplaces = $('input[name=count_workplaces]').val();
                d.select_products = $('select[name=select_products]').val();
                d.count_products = $('input[name=count_products]').val();
            }
        },
        columns: [
              {data: 'DT_RowIndex', name: 'DT_RowIndex'},
              {data: 'name', name: 'name'},
              {data: 'email', name: 'email'},
              {data: 'phone', name: 'phone'},
              {data: 'products_count', name: 'products_count'},
              {data: 'workplaces_count', name: 'workplaces_count'},
              {data: 'leads_count', name: 'leads_count'},
              {data: 'created_at', name: 'created_at'},
                {data: "action", "render": function (data, type, full, meta) {
                        var status = full.status;
                        var user_id = full.id;
                        var Url = "{{url('/')}}";
                        if(status == 1) {
                            return '<a class="edit btn btn-success successbtn-sm" href="' + Url + '/admin/user_status/' + user_id + '/0" >Enabled</a>';
                        } else {
                            return '<a class="edit btn btn-danger btn-sm" href="' + Url + '/admin/user_status/' + user_id + '/1" >Disabled</a>';
                        }
                    },
                    "orderable": false,
                    "targets": 0
                }
            ],
          columnDefs: [{
                orderable: false,
                targets: [3, 8]

            }]
    });

    $('.user_filter').on('submit', function(e) {
        e.preventDefault();
        oTable.draw();
        setTimeout(function(){

        var total_user_count = (oTable.page.info().recordsTotal) ? oTable.page.info().recordsTotal : 0 ;
        var total_products_count = (oTable.column(4).data().sum()) ? oTable.column(4).data().sum() : 0 ;
        var total_workplaces_count = (oTable.column(5).data().sum()) ? oTable.column(5).data().sum() : 0 ;
        var total_leads_count = (oTable.column(6).data().sum()) ? oTable.column(6).data().sum() : 0 ;
        $(".users_count").text(total_user_count);
        $(".workplaces_count").text(total_workplaces_count);
        $(".products_count").text(total_products_count);
        $(".leads_count").text(total_leads_count);
        }, 500);

    });
</script>
{{-- <script>
    var baseUrl = "{{url('/')}}";

function user_available(user_id,available) {
console.log('65161');
console.log(user_id);
console.log(available);
$.ajaxSetup({
headers: {
'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
}
});
$.ajax({
type: 'GET',
url: baseUrl + '/admin/user_available/' + user_id + '/' + available,
success: function(data) {
console.log(data)
}
});
}
</script> --}}


@endsection
