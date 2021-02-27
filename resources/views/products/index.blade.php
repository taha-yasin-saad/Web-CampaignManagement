@extends('layouts.admin')
@section('content')

<!-- ============================================================== -->
<!-- Page Content -->
<!-- ============================================================== -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row bg-title">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <!-- <h4 class="page-title">{{$workplace->title}} - Role : @if(get_role($workplace->id) == 0) Owner
                    @elseif(get_role($workplace->id) == 1) Admin @elseif(get_role($workplace->id) == 2) Leader
                    @elseif(get_role($workplace->id) == 3) SalesAgent @elseif(get_role($workplace->id) == 9) you Have
                    not Permission to access that Workspace @endif</h4> -->
                <h4 class="page-title">PRODUCTS</h4>
            </div>
            <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                <ol class="breadcrumb">
                    <li><a href="{{url('dashboard')}}">Dashboard</a></li>
                    <li class="active">Products</li>
                </ol>
            </div>
        </div>
        <!-- .row -->
        <div class="row">
            @if(get_role($workplace->id) == 9)
            <h3 class="text-center">you Have not Permission to access that Workspace</h3>
            @else
            <div class="col-xs-12">
                <div class="panel">
                    <div class="row panel-heading">
                        <div class="col-md-6 col-sm-6 col-xs-6">
                            <p>{{count($data)}}</p>
                            <span class="text-muted m-r-10">Products</span>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-6 text-right">
                            <a class="dropdown">
                                @if(get_role($workplace->id) == 0 || get_role($workplace->id) == 1)
                                <a class="dropdown-toggle btn btn-danger m-t-20" id="addProductDropDown"
                                    data-toggle="dropdown" href="#" aria-expanded="false" type="button">Add New
                                    Product</a>
                                @endif
                                <div class="dropdown-menu bullet dropdown-menu-right"
                                    aria-labelledby="addProductDropDown p-20" role="menu" style="width: 100%;">
                                    <div class="white-box">
                                        <ul class="nav nav-tabs tabs customtab">
                                            <li class="tab">
                                                <a href="#settings" data-toggle="tab" aria-expanded="false"> <span
                                                        class="visible-xs"><i class="fa fa-cog"></i></span> <span
                                                        class="hidden-xs">insert your product title</span> </a>
                                            </li>
                                        </ul>
                                        <div class="tab-content">
                                            <form class="form-horizontal" method="POST" action="{{url('product')}}">
                                                {{csrf_field()}}
                                                <input type="hidden" name="workplace_id" value="{{$workplace->id}}" />
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div>
                                                            <input required type="text" class="form-control" value=""
                                                                name="title" placeholder="product Title" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div>
                                                            <select name="users[]"
                                                                class="select2 m-b-10 select2-multiple"
                                                                multiple="multiple"
                                                                data-placeholder="Choose Members (Optional)">
                                                                @foreach($workplace->users as $user)
                                                                <option value="{{$user->id}}">
                                                                    @if($user->name)
                                                                    {{$user->name}}
                                                                    @else
                                                                    {{$user->email}}
                                                                    @endif
                                                                </option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="form-actions m-t-40 text-right">
                                                        <button type="submit" class="btn btn-danger"> <i
                                                                class="fa fa-check"></i>
                                                            Save</button>
                                                    </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="">
                @if (session('success'))
                <div class="alert alert-success" role="alert">
                    {{ session('success') }}
                </div>
                @endif
                @if(count($data) > 0)
                @foreach ($data as $value)
                @if (get_role($workplace->id) <= 1 || (get_role($workplace->id) > 1 &&
                    in_array($user->id,$value->selected_ids)))
                    <div class="panel">
                        <div class="row panel-heading">
                            <div class="col-md-6 col-sm-6 col-xs-6">
                                <p>{{$value->title}}</p>
                                @foreach($value->users as $val)
                                <span class="label bg-inverse m-r-10">@if($val->name){{$val->name}}@else{{$val->email}}
                                    @endif</span>
                                @endforeach
                                <a href="{{url(session('workplace')->id.'/team/'.$value->id)}}"
                                    class=" m-r-10">More...</a>
                                @if(get_role($workplace->id) == 0 || get_role($workplace->id) == 1 ||
                                get_role($workplace->id) == 2)
                                <a class="dropdown">
                                    <a class="dropdown-toggle text-info m-r-10" id="addRemoveLeadDropDown"
                                        data-toggle="dropdown" href="#" aria-expanded="false" role="button"><i
                                            class="ti-pencil-alt"></i></a>
                                    <div class="dropdown-menu bullet dropdown-menu-right"
                                        aria-labelledby="addRemoveLeadDropDown" role="menu" style="width: 100%;">
                                        <div class="white-box">
                                            <h3 class="box-title m-b-0">Add Or Remove Sales Agent</h3>
                                            <p class="text-muted m-b-30"> Only these sales agents will receive leads
                                                related
                                                to this product</p>
                                            <form action="{{url('choose_members')}}" method="post">
                                                @csrf
                                                <input type="hidden" name="workplace_id" value="{{$workplace->id}}" />
                                                <input type="hidden" name="product_id" value="{{$value->id}}">
                                                <select name="users[]" class="select2 m-b-10 select2-multiple"
                                                    multiple="multiple" data-placeholder="Choose">
                                                    @foreach($workplace->users as $user)
                                                    <option value="{{$user->id}}" @if (in_array($user->id,
                                                        $value->selected_ids)) selected @endif>
                                                        @if($user->name)
                                                        {{$user->name}}
                                                        @else
                                                        {{$user->email}}
                                                        @endif
                                                    </option>
                                                    @endforeach
                                                </select>
                                                <div class="form-actions text-right">
                                                    <button type="submit" class="btn btn-success">
                                                        <i class="fa fa-check"></i> Save</button>
                                                    <button type="button" class="btn btn-dark">Cancel</button>
                                                </div>
                                            </form>

                                        </div>
                                    </div>
                                </a>
                                @endif

                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-6 text-right">
                                @if(get_role($workplace->id) == 0 || get_role($workplace->id) == 1 ||
                                get_role($workplace->id) == 2)

                                <a href="{{url('sources/create')}}" class="btn btn-primary m-t-20">Add Lead Source</a>
                                @endif
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-hover manage-u-table myTables">
                                <thead>
                                    <tr>
                                        <th style="width: 70px;" class="text-center">#</th>
                                        <th>SOURCE</th>
                                        <th>TOTAL LEADS</th>
                                        <th>CONTACTED LEADS</th>
                                        <th>QUALIFIED LEADS</th>
                                        <th>AVG. CONVERION RATE</th>
                                        @if(get_role($workplace->id) == 0 || get_role($workplace->id) == 1 ||
                                        get_role($workplace->id) == 2)
                                        <th>MANAGE</th>
                                        @endif
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($value->source as $source)
                                    <tr>
                                        <td class="text-center">1</td>
                                        <td><span class="font-medium">{{$source->name}}</span>
                                            <br>@if(isset($source->website))<span
                                                class="text-muted">{{$source->website}}</span>@endif
                                        </td>
                                        <td>{{count($source->lead)}}</td>
                                        <td>{{$source->lead->where('last_contact','!=',null)->count()}}</td>
                                        <td>{{$source->lead->where('status',0)->count()}}</td>
                                        <td>
                                            @if(@$source->lead->count() > 0)
                                            {{sprintf("%.1f%%", ($source->lead->where('status',0)->count() / count($source->lead)) * 100)}}
                                            @else
                                            0.0%
                                            @endif
                                        </td>
                                        @if(get_role($workplace->id) == 0 || get_role($workplace->id) == 1 ||
                                        get_role($workplace->id) == 2)
                                        <td>
                                            {{-- <button type="button"
                                                class="btn btn-info btn-outline btn-circle btn-lg m-r-5"><i
                                                    class="ti-pencil-alt"></i></button> --}}
                                            <a href="{{url('product/'.$source->id.'/edit')}}" type="button"
                                                class="btn btn-success btn-outline btn-circle btn-lg m-r-5"><i
                                                    class="ti-pencil-alt"></i></a>
                                        </td>
                                        @endif
                                    </tr>
                                    @endforeach
                                    {{-- <tr>
                                    <td class="text-center">2</td>
                                    <td><span class="font-medium">Twitter</span>
                                        <br><span class="text-muted">Excutive compaign</span></td>
                                    <td>442</td>
                                    <td>211</td>
                                    <td>120</td>
                                    <td>48%</td>
                                    @if(get_role($workplace->id) == 0 || get_role($workplace->id) == 1 ||
                                    get_role($workplace->id) == 2)
                                    <td>
                                        <button type="button"
                                            class="btn btn-info btn-outline btn-circle btn-lg m-r-5"><i
                                                class="ti-pencil-alt"></i></button>
                                    </td>
                                    @endif
                                </tr> --}}
                                </tbody>
                            </table>
                        </div>
                    </div>
                    @endif
                    @endforeach
                    @else
                    <h3>You Have not any product Yet ...</h3>
                    @endif
            </div>
            @endif
        </div>

        <!-- /.row -->
    </div>
    <!-- /#page-wrapper -->
</div>
@endsection
