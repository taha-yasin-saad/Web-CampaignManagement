@extends('layouts.admin')
@section('content')

<!-- ============================================================== -->
<!-- Page Content -->
<!-- ============================================================== -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row bg-title">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h4 class="page-title">Team</h4>
            </div>
            <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                <ol class="breadcrumb">
                    <li><a href="#">{{$workplace->title}}</a></li>
                    <li class="active">Team</li>
                </ol>
            </div>
        </div>
        @include('admin.workplaces.user_modal')
        <div class="row">
            <div class="col-xs-12">
                <div class="panel m-b-20">
                    <div class="row panel-heading">
                        <div class="col-md-6 col-sm-6 col-xs-6">
                            <p>{{count($workplace->users)}}</p>
                            <span class="text-muted m-r-10">Users</span>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-6 text-right">
                            @if(get_role($workplace->id) == 0 || get_role($workplace->id) == 1)
                            <a>
                                <a class=" btn btn-danger m-t-20" href="{{url('invite').'/'.$workplace->id}}"
                                    type="button">Invite New User</a>
                            </a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="panel">
                    @if (session('success'))
                    <div class="alert alert-success" role="alert">
                        {{ session('success') }}
                    </div>
                    @endif
                    <div class="panel-heading">MANAGE USERS</div>
                    <div class="table-responsive">
                        <table id="myTable" class="table table-hover table-bordered manage-u-table">
                            <thead>
                                <tr>
                                    <th style="width: 70px;" class="text-center">#</th>
                                    <th>USER</th>
                                    <th>PRODUCTS</th>
                                    <th>USER ROLE</th>
                                    <th>TOTAL LEADS</th>
                                    <th>CONTACTED LEADS</th>
                                    <th>QUALIFIED LEADS</th>
                                    <th>CONVERSION RATE</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($workplace->users as $key=>$value)
                                @if (!isset($product_id)||in_array($product_id,$value->selected_ids))
                                <tr>
                                    <td class="text-center">{{$key+1}}</td>
                                    <td>
                                        <span class="font-medium">
                                            <a href="#" class="open-UserModal" data-toggle="modal"
                                                data-target="#UserModal" data-name="{{$value->name}}"
                                                data-phone="{{$value->phone}}" data-email="{{$value->email}}">
                                                @if($value->name)
                                                {{$value->name}}
                                                @else
                                                {{$value->email}}
                                                @endif
                                            </a>
                                        </span>
                                        @if($value->is_available == 1)
                                        <span class="badge-success badge">Online</span>
                                        @else
                                        <span class="badge-danger badge">Offline</span>
                                        @endif
                                        <br><span class="text-muted">Joined at 15/2/2020</span>
                                    </td>
                                    <td>
                                        @foreach($value->products as $val)
                                        @if($val->workplace_id == $workplace->id)
                                        <span class="bg-inverse badge">{{$val->title}}</span><br>
                                        @endif
                                        @endforeach
                                    </td>
                                    <td>
                                        @if($value->pivot->role == 0)
                                        Owner
                                        @elseif($value->pivot->role == 1)
                                        Admin
                                        @elseif($value->pivot->role == 2)
                                        Leader
                                        @elseif($value->pivot->role == 3)
                                        Sales Agent
                                        @endif
                                    </td>
                                    <td>{{$value->leads->count()}}</td>
                                    <td>{{$value->leads->where('last_contact','!=',null)->count()}}</td>
                                    <td>{{$value->leads->where('status',0)->count()}}</td>
                                    <td>
                                        @if(@$value->leads->count() > 0)
                                        {{sprintf("%.1f%%", ($value->leads->where('last_contact','!=',null)->count() / count($value->leads)) * 100)}}
                                        @else
                                        0.0%
                                        @endif
                                    </td>
                                </tr>
                                @endif
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('js')
<script>
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
