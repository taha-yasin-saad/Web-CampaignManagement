
@extends('layouts.admin')
@section('content')

    <!-- ============================================================== -->
    <!-- Page Content -->
    <!-- ============================================================== -->
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row bg-title">
                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                    <h4 class="page-title">Team</h4> </div>
                <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                    <ol class="breadcrumb">
                        <li><a href="#">{{$workplace->title}}</a></li>
                        <li class="active">Team</li>
                    </ol>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <div class="panel m-b-20">
                        <div class="row panel-heading">
                            <div class="col-md-6 col-sm-6 col-xs-6">
                                <p>{{count($workplace->users)}}</p>
                                <span class="text-muted m-r-10">Users</span>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-6 text-right">
                                <a>
                                <a class=" btn btn-danger m-t-20" href="{{url('invite').'/'.$workplace->id}}"type="button">Invite New User</a>
                                </a>
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
                            <table class="table table-hover table-bordered manage-u-table">
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
                                        <th>MANAGE</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($workplace->users as $key=>$value)
                                    <tr>
                                        <td class="text-center">{{$key+1}}</td>
                                        <td>
                                            <span class="font-medium">{{$value->name}}</span><span class="badge-success badge">Online</span>
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
                                        <td>514</td>
                                        <td>214</td>
                                        <td>78</td>
                                        <td>20%</td>
                                        <td>
                                            <button type="button" class="btn btn-info btn-outline btn-circle btn-lg m-r-5">
                                                <i class="mdi mdi-check-circle-outline"></i>
                                            </button>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-info btn-outline btn-circle btn-lg m-r-5 remove_user_from_workspace_alert" id="sa-warning"
                                            onclick=" delete_user();">
                                                <i class="icon-trash"></i>
                                            </button>
                                            <script>
                                            function delete_user(){
                                                swal({   
                                                    title: "Are you sure?",   
                                                    text: "The user will be removed from entire workspace !",   
                                                    type: "warning",   
                                                    showCancelButton: true,   
                                                    confirmButtonColor: "#DD6B55",   
                                                    confirmButtonText: "Yes, delete it!",
                                                    closeOnConfirm: true 
                                                }, function(){   
                                                    document.getElementById('remove_user_from_workspace'+{{$value->id}}).submit();
                                                });
                                            }
                                            </script>
                                            <form method="GET" id="remove_user_from_workspace{{$value->id}}"
                                                    action="{{ url('remove_user_from_workspace').'/'.$value->id.'/'.$workplace->id }}"
                                                    style="display: none;">
                                                {{ csrf_field() }}
                                            </form>
                                            {{-- <button type="button" class="btn btn-info btn-outline btn-circle btn-lg m-r-5">
                                                <i class="ti-pencil-alt"></i>
                                            </button> --}}
                                            <a class="dropdown">
                                                <a class="btn btn-info btn-outline btn-circle btn-lg m-r-5" id="addRemoveLeadDropDown" data-toggle="dropdown" href="#" aria-expanded="false" role="button"><i class="ti-pencil-alt"></i></a>
                                                <div class="dropdown-menu bullet dropdown-menu-right" aria-labelledby="addRemoveLeadDropDown" role="menu" style="top: unset!important;">
                                                    <div class="white-box">
                                                        <h3 class="box-title m-b-0">Add Or Remove Product</h3>
                                                        <p class="text-muted m-b-30"> Only these sales agents will receive leads related to this product</p>
                                                        <form action="{{url('add_product_to_user')}}" method="post">
                                                            @csrf
                                                            <input type="hidden" name="user_id" value="{{$value->id}}">
                                                            <input type="hidden" name="workplace_id" value="{{$workplace->id}}">
                                                            <select name="products[]" class="select2 m-b-10 select2-multiple" multiple="multiple" data-placeholder="Choose">
                                                                @foreach($workplace->products as $val)
                                                                <option value="{{$val->id}}" 
                                                                    @if (in_array($val->id, $value->selected_ids)) selected @endif
                                                                    >{{$val->title}}</option>
                                                                @endforeach
                                                            </select>
                                                            <div class="form-actions text-right">
                                                                <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i> Save</button>
                                                                <button type="button" class="btn btn-dark">Cancel</button>
                                                            </div>
                                                        </form>
                
                                                    </div>
                                                </div>
                                            </a>
                                        </td>
                                    </tr>
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