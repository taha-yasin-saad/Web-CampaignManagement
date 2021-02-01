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
                    <li><a href="{{url('dashboard')}}">Dashboard</a></li>
                    <li class="active">Workplaces</li>
                </ol>
            </div>
        </div>
        {{-- @include('admin.workplaces.user_modal') --}}
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
                                        <a href="{{url($value->id.'/products')}}">
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
