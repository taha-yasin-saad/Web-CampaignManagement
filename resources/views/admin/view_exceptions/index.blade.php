@extends('layouts.admin')
@section('content')

<!-- ============================================================== -->
<!-- Page Content -->
<!-- ============================================================== -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row bg-title">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h4 class="page-title">View Exceptions</h4>
            </div>
            <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                <ol class="breadcrumb">
                    <li><a href="{{url('admin/dashboard')}}">Dashboard</a></li>
                    <li class="active">View Exceptions</li>
                </ol>
            </div>
        </div>
        <!-- .row -->
        @include('admin.view_exceptions.exception_modal')

        <div class="row">
            <div class="col-xs-12">
                @if (session('success'))
                <div class="alert alert-success" role="alert">
                    {{ session('success') }}
                </div>
                @endif
                @if(count($data) > 0)
                <div class="panel">

                    <div id="has_been_copied"></div>
                    <div class="table-responsive">
                        <table id="myTable" class="table table-hover manage-u-table">
                            <thead>
                                <tr>
                                    <th style="width: 70px;" class="text-center">#</th>
                                    {{-- <th>Class</th> --}}
                                    <th>User Name</th>
                                    <th>Email</th>
                                    <th>Exception Info</th>
                                    {{-- <th>File</th> --}}
                                    {{-- <th>Code</th> --}}
                                    {{-- <th>Line</th> --}}
                                    {{-- <th>Trace</th> --}}
                                    {{-- <th>Message</th> --}}
                                    <th>Created At</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $key=>$value)
                                <tr>
                                    <td class="text-center">{{$value->id}}</td>
                                    {{-- <td><span class="font-medium">{{$value->class}}</span></td> --}}
                                    <td><span class="font-medium">@if(@$value->user){{$value->user->name}}@endif</span>
                                    </td>
                                    <td><span class="font-medium">@if(@$value->user){{$value->user->email}}@endif</span>
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-danger open-exception_modal"
                                            data-toggle="modal" data-target="#exception_modal"
                                            data-url="{{$value->url}}" data-file="{{$value->file}}"
                                            data-message="{{$value->message}}" data-username="@if(@$value->user){{$value->user->name}}@endif"> <span
                                                class="font-medium">Exception Info</span> </button>
                                    </td>
                                    {{-- <td>{{$value->file}}</td> --}}
                                    {{-- <td>{{$value->code}}</td> --}}
                                    {{-- <td>{{$value->line}}</td> --}}
                                    {{-- <td>{{$value->trace}}</td> --}}
                                    {{-- <td>{{$value->message}}</td> --}}
                                    <td>{{$value->created_at->diffForHumans()}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                @else
                <h3>You Have not any View Exceptions Yet ...</h3>
                @endif
            </div>
            {{--            @endif--}}
        </div>

        <!-- /.row -->
    </div>
    <!-- /#page-wrapper -->
</div>
<script>
    $(document).on("click", ".open-exception_modal", function () {
        var url = $(this).data('url');
        var file = $(this).data('file');
        var message = $(this).data('message');
        var username = $(this).data('username');
        $(".modal-body #url").text('Url : ' + url);
        $(".modal-body #file").text('File : ' + file);
        $(".modal-body #message").text('Message : ' + message);
        $(".modal-body #username").text('Username : ' + username);
    });
</script>
@endsection
