@extends('layouts.admin')
@section('content')

<!-- ============================================================== -->
<!-- Page Content -->
<!-- ============================================================== -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row bg-title">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h4 class="page-title">Email Logs</h4>
            </div>
            <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                <ol class="breadcrumb">
                    <li><a href="{{url('admin/dashboard')}}">Dashboard</a></li>
                    <li class="active">Email Logs</li>
                </ol>
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
                        <table class="table table-bordered user1-data-table">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Subject</th>
                                    <th>Email</th>
                                    <th>Created At</th>
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

<script type="text/javascript">
    var oTable = $('.user1-data-table').DataTable({
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
            url: "{{ url('admin/email_log') }}",
            data: function (d) {

            }
        },
        columns: [
              {data: 'DT_RowIndex', name: 'DT_RowIndex'},
              {data: 'subject', name: 'subject'},
              {data: 'email', name: 'email'},
              {data: 'created_at', name: 'created_at'}
            ]
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
