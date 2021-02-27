@extends('layouts.admin')
@section('content')

<!-- ============================================================== -->
<!-- Page Content -->
<!-- ============================================================== -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row bg-title">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h4 class="page-title">Lead</h4>
            </div>
            <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                <ol class="breadcrumb">
                    <li><a href="{{url('/')}}">Dashboard</a></li>
                    <li class="active">Leads</li>
                </ol>
            </div>
        </div>
        <!-- .row -->
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
                                    <h3 class="counter text-right m-t-15 leads_count">{{$leads->count()}}</h3>
                                </li>
                                <li class="col-middle">
                                    <h4>LEADS CAPTURED</h4>
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
                                    <h3 class="counter text-right m-t-15 contacted_leads_count">
                                        {{$last_contact_leads->count()}}</h3>
                                </li>
                                <li class="col-middle">
                                    <h4>CONTACTED LEADS</h4>
                                    {{-- @if($leads_without_filter->count('last_contact') != 0)
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-info" role="progressbar"
                                            aria-valuenow="{{$leads->count('last_contact')/$leads_without_filter->count('last_contact')*100}}"
                                    aria-valuemin="0" aria-valuemax="100"
                                    style="width:
                                    {{$leads->count('last_contact')/$leads_without_filter->count('last_contact')*100}}%">
                                    <span
                                        class="sr-only">{{$leads->count('last_contact')/$leads_without_filter->count('last_contact')*100}}%
                                        Complete (success)</span>
                        </div>
                    </div>
                    @endif --}}
                    </li>
                    </ul>
                </div>
                <div class="col-lg-3 col-sm-6 row-in-br">
                    <ul class="col-in">
                        <li>
                            <span class="circle circle-md bg-success"><i class=" ti-user"></i></span>
                        </li>
                        <li class="col-last">
                            <h3 class="counter text-right m-t-15 qualified_leads_count">{{$qualified_leads->count()}}
                            </h3>
                        </li>
                        <li class="col-middle">
                            <h4>QUALIFIED LEADS</h4>
                            {{-- @if($leads_without_filter->where('status', 0 )->count() != 0)
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-success" role="progressbar"
                                            aria-valuenow="{{$qualified_leads->count()/$leads_without_filter->where('status', 0 )->count()*100}}"
                            aria-valuemin="0" aria-valuemax="100"
                            style="width:
                            {{$qualified_leads->count()/$leads_without_filter->where('status', 0 )->count()*100}}%">
                            <span class="sr-only">
                                {{$qualified_leads->count()/$leads_without_filter->where('status', 0 )->count()*100}}%
                                Complete (success)</span>
                </div>
            </div>
            @endif --}}
            </li>
            </ul>
        </div>
        <div class="col-lg-3 col-sm-6  b-0">
            <ul class="col-in">
                <li>
                    <span class="circle circle-md bg-warning"><i class="ti-sharethis"></i></span>
                </li>
                <li class="col-last">
                    <h3 class="counter text-right m-t-15" style="font-size: 25px;">
                        @if ($leads->count() != 0)
                        {{sprintf("%.0f%%", $last_contact_leads->count()/$leads->count()* 100)}}
                        @else
                        0.0%
                        @endif
                    </h3>
                </li>
                <li class="col-middle">
                    <h4>AVG. CONVERSATION RATE</h4>
                    @if($leads_without_filter->sum('leads_count') != 0)
                    <div class="progress">
                        <div class="progress-bar progress-bar-warning" role="progressbar"
                            aria-valuenow="{{($leads->sum('leads_count')/$leads_without_filter->sum('leads_count'))*100}}"
                            aria-valuemin="0" aria-valuemax="100"
                            style="width: {{sprintf("%.1f%%", ($leads->sum('leads_count')/$leads_without_filter->sum('leads_count'))*100)}}">
                            <span
                                class="sr-only">{{sprintf("%.1f%%", ($leads->sum('leads_count')/$leads_without_filter->sum('leads_count'))*100)}}
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
        <div class="white-box">
            <form class="white-box lead_filter" method="post">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="">Submission date range</label>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">From Date</label>
                                        <input type="text" class="form-control mydatepicker" name="min_date"
                                            value="@if(@$min_date){{$min_date}}@endif" placeholder="dd/mm/yyyy">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">To Date</label>
                                        <input type="text" class="form-control mydatepicker" name="max_date"
                                            value="@if(@$max_date){{$max_date}}@endif" placeholder="dd/mm/yyyy">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="assigned">assigned to</label>
                                <select class="form-control" id="assigned" name="user_id">
                                    <option value="0">All Users</option>
                                    @foreach ($workplace_users as $workplace_user)
                                    @if(@$workplace_user)
                                    <option value="{{$workplace_user->user->id}}" @if(@$user_id &&
                                        $user_id==$workplace_user->user->id) selected
                                        @endif>@if($workplace_user->user->name){{$workplace_user->user->name}} @else
                                        {{$workplace_user->user->email}}@endif</option>
                                    @endif
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="assigned">Product</label>
                                <select class="form-control" name="product_id" id="assigned">
                                    <option value="0">All Products</option>
                                    @foreach ($products as $value)
                                    @if (@$value)
                                    <option value="{{$value->id}}" @if(@$product_id && $product_id==$value->id)
                                        selected
                                        @endif>{{$value->title}}</option>
                                    @endif
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="lead-quality">Lead quality</label>
                                <select class="form-control" name="status" id="lead-quality">
                                    <option selected disabled>Select quality</option>
                                    <option value="0" @if(@$status && $status==0) selected @endif>Qualified</option>
                                    <option value="1" @if(@$status && $status==1) selected @endif>Un Qualified</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-actions">
                    <button type="submit" class="btn btn-success"><i class="fa fa-filter"></i> Filter
                    </button>
                    <a href="{{url('admin/lead')}}" class="btn btn-default">Cancel</a>
                    <!-- Button trigger modal -->

                </div>
            </form>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="white-box">
            <div class="table-responsive">
                <div id="myTable_wrapper" class="dataTables_wrapper no-footer">
                    <table id="myTable"
                        class="table table-bordered table-stribed table-hover manage-u-table dataTable no-footer lead-data-table"
                        role="grid" aria-describedby="myTable_info">
                        <thead>
                            <tr>
                                {{-- <th style="width: 70px;" class="text-center">#</th> --}}
                                <th>Lead</th>
                                <th>Workplace</th>
                                <th>Product</th>
                                <th>Source</th>
                                <th>Submitted on</th>
                                <th>Assigned to</th>
                                <th>Scheduled on</th>
                                <th>Last Contact</th>
                                <th>Lead Quality</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- /#page-wrapper -->
</div>
@endsection
@section('filter_table')
<script type="text/javascript">
    var oTable = $('.lead-data-table').DataTable({
        dom: "Bf" + "<'row'<'col-xs-12'<'col-xs-6'l><'col-xs-6'p>>r>"+
            "<'row'<'col-xs-12't>>"+
            "<'row'<'col-xs-12'<'col-xs-6'i><'col-xs-6'p>>>",
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ],
        processing: true,
        serverSide: true,
        ajax: {
            url: "{{ route('lead.index') }}",
            data: function (d) {
                d.min_date = $('input[name=min_date]').val();
                d.max_date = $('input[name=max_date]').val();
                d.user_id = $('select[name=user_id]').val();
                d.product_id = $('select[name=product_id]').val();
                d.status = $('select[name=status]').val();
            }
        },
        columns: [
              {
                data: "name",
                "render": function (data, type, full, meta) {
                    var lead_name = (full.name != null) ? full.name : '-';
                    var lead_phone = (full.phone != null) ? full.phone : '-';
                    var lead_id = (full.id != null) ? full.id : '-';
                    var lead_url = "{{url('admin/lead/')}}";
                    // console.log(full);
                    return '<div class="flex-column"><a href="' + lead_url +'/'+ lead_id +'">' + lead_name + '</a><span class="text-right"><button type="button" class="btn btn-primary lead-btn"><i class="fa  fa-envelope"></i></button><a href="tel:' + lead_phone + '" class="btn btn-success lead-btn" title="' + lead_phone + '"><i class="fa fa-phone"></i></a></span></div>'
                },
                // "orderable": true,
                // "targets": 0
                },
                {data: 'workplaces.title', name: 'title' , orderable: false, searchable: false},
                {data: 'product.title', name: 'title' , orderable: false, searchable: false},
                {data: 'source.name', name: 'name'},
                {data: 'created_at', name: 'created_at'},
                // {data: 'user.name', name: 'name'},
                {
                data: "user",
                "render": function (data, type, full, meta) {
                    var user = (full.user != null) ? full.user.name : '-';


                    // console.log(full.user);
                    return user
                },
                // "orderable": true,
                // "targets": 0
                },
                {data: 'scheduled_on', name: 'scheduled_on'},
                {data: 'last_contact', name: 'last_contact'},
                // {
                // data: "workplace",
                // "render": function (data, type, full, meta) {
                //     var workplace_title = (full.workplaces != null) ? full.workplaces.title : '-';
                //     console.log(full);
                //     return '<div class="flex-column">' + workplace_title + '</div>'
                // },
                // "orderable": true,
                // "targets": 0
                // },
                // {
                // data: "product",
                // "render": function (data, type, full, meta) {
                //     var product_title = (full.product != null) ? full.product.title : '-';
                //     // console.log(product_title);

                //     return product_title
                // },
                // // "orderable": true,
                // // "targets": 0
                // },
                // {
                // data: "source",
                // "render": function (data, type, full, meta) {
                //     var source_name = (full.source != null) ? full.source.name : '-';

                //     return '<span class="badge badge-primary">' + source_name + '</span>'
                // },
                // // "orderable": true,
                // // "targets": 0
                // },
                // {
                // data: "created_at",
                // "render": function (data, type, full, meta) {
                //     var created_at = (full.created_at != null) ? full.created_at : '-';

                //     return created_at
                // },
                // // "orderable": true,
                // // "targets": 0
                // },

                // {
                // data: "scheduled_on",
                // "render": function (data, type, full, meta) {
                //     var scheduled_on = (full.scheduled_on != null) ? full.scheduled_on : '-';

                //     return scheduled_on
                // },
                // // "orderable": true,
                // // "targets": 0
                // },
                // {
                // data: "last_contact",
                // "render": function (data, type, full, meta) {
                //     var last_contact = (full.last_contact != null) ? full.last_contact : '-';

                //     return last_contact
                // },
                // // "orderable": true,
                // // "targets": 0
                // },
                {
                data: "status",
                "render": function (data, type, full, meta) {
                    var status = (full.status == 0) ? 'Qualified' : 'Un Qualified';
                    var status_style = (full.status == 0) ? 'primary' : 'danger';

                    return '<button class="btn btn-'+status_style+'">'+status+'</button>'
                },
                // "orderable": true,
                // "targets": 0
                },
            ],
          columnDefs: [{
                orderable: false,
                // targets: [1, 2, 3]

            }]
    });


    $('.lead_filter').on('submit', function(e) {
        e.preventDefault();
        oTable.draw();
        setTimeout(function(){
        var total_leads_count = oTable.page.info().recordsTotal;
        var total_contacted_leads_count = oTable.column(7).data().filter( function ( value, index ) {
            return value != null ? true : false;
        }).count();
        var total_qualified_leads_count = oTable.column(8).data().filter( function ( value, index ) {
            return value == 0 ? true : false;
        }).count();
        console.log(total_qualified_leads_count);
        $(".leads_count").text(total_leads_count);
        $(".contacted_leads_count").text(total_contacted_leads_count);
        $(".qualified_leads_count").text(total_qualified_leads_count);
        }, 500);
    });
</script>
<script src="{{asset('js/filter-table.js')}}"></script>
<script>
    $('.mydatepicker').datepicker();
</script>
@endsection
