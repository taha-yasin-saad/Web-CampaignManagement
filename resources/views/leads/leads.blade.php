@extends('layouts.admin')
@section('content')

<!-- ============================================================== -->
<!-- Page Content -->
<!-- ============================================================== -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row bg-title">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h4 class="page-title">Workplace</h4>
            </div>
            <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                <ol class="breadcrumb">
                    <li><a href="#">Dashboard</a></li>
                    <li class="active">Workplaces</li>
                </ol>
            </div>
        </div>
        <!-- .row -->
        <div class="row leads">
            <div class="col-lg-3 col-sm-6 col-xs-12">
                <div class="white-box">
                    <h3 class="box-title">Leads Captured</h3>
                    <p class="text-muted text-right">This month</p>
                    <ul class="list-inline">
                        <li class="text-right"><span class="counter">198 21</span></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-xs-12">
                <div class="white-box">
                    <h3 class="box-title">Contacted Leads</h3>
                    <p class="text-muted text-right">This month</p>
                    <ul class="list-inline">
                        <li class="text-right"><span class="counter">169</span></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-xs-12">
                <div class="white-box">
                    <h3 class="box-title">Qualified Leads</h3>
                    <p class="text-muted text-right">This month</p>
                    <ul class="list-inline">
                        <li class="text-right"><span class="counter">200</span></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-xs-12">
                <div class="white-box">
                    <h3 class="box-title">AVG. Conversation rate</h3>
                    <p class="text-muted text-right">This month</p>
                    <ul class="list-inline">
                        <li class="text-right"><span class="counter">52.2 %</span></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="white-box">
                <form class="white-box">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Submission date range</label>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <input type="date" name="min_date" id="" class="form-control"
                                                placeholder="mm/dd/yyyy" value="@if(isset($_GET['min_date'])){{$_GET['min_date']}}@endif">
                                        </div>
                                        <div class="col-md-6">
                                            <input type="date" name="max_date" id="" class="form-control"
                                                placeholder="mm/dd/yyyy" value="@if(isset($_GET['max_date'])){{$_GET['max_date']}}@endif">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="assigned">assigned to</label>
                                            <select class="form-control" id="assigned">
                                                <option selected disabled>Select User</option>
                                                @foreach ($users as $user)
                                                    @if(get_role(session('workplace')->id) <= 2 || Auth::user()->id == $user->user->id)
                                                    <option value="{{$user->user->id}}" >@if($user->user->name){{$user->user->name}} @else 
                                                        {{$user->user->email}}@endif</option>
                                                    @endif
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="assigned">Product</label>
                                            <select class="form-control" name="product_id" id="assigned">
                                                <option selected disabled>Select Product</option>
                                                @foreach ($products as $value)
                                                    @if (get_role(session('workplace')->id) <= 1 || (get_role(session('workplace')->id) > 1 && in_array(Auth::user()->id,$value->selected_ids)))
                                                    <option value="{{$value->id}}" @if(isset($_GET['product_id']) && $_GET['product_id'] == $value->id) selected @endif>{{$value->title}}</option>
                                                    @endif
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="assigned">Contact status</label>
                                            <select class="form-control" id="assigned">
                                                <option>status one</option>
                                                <option>status two</option>
                                                <option>status three</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="lead-quality">Lead quality</label>
                                            <select class="form-control" name="status" id="lead-quality">
                                                <option selected disabled>Select quality</option>
                                                <option value="0" @if(isset($_GET['status']) && $_GET['status'] == 0) selected @endif>Qualified</option>
                                                <option value="1" @if(isset($_GET['status']) && $_GET['status'] == 1) selected @endif>Un Qualified</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <button type="submit" class="btn btn-primary m-t-20">
                                    <i class="mdi mdi-filter fa-fw" data-icon="v"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                    <div class="table-responsive">
                        <div id="myTable_wrapper" class="dataTables_wrapper no-footer">
                            <table id="myTable"
                                class="table table-bordered table-stribed table-hover manage-u-table dataTable no-footer"
                                role="grid" aria-describedby="myTable_info">
                                <thead>
                                    <tr role="row">
                                        <th class="sorting_asc" tabindex="0" aria-controls="myTable" rowspan="1"
                                            colspan="1" aria-sort="ascending"
                                            aria-label="Name: activate to sort column descending" style="width: 262px;">
                                            Lead</th>
                                        <th class="sorting" tabindex="0" aria-controls="myTable" rowspan="1" colspan="1"
                                            aria-label="Position: activate to sort column ascending"
                                            style="width: 389px;">Product</th>
                                        <th class="sorting" tabindex="0" aria-controls="myTable" rowspan="1" colspan="1"
                                            aria-label="Office: activate to sort column ascending"
                                            style="width: 197px;">Source</th>
                                        <th class="sorting" tabindex="0" aria-controls="myTable" rowspan="1" colspan="1"
                                            aria-label="Age: activate to sort column ascending" style="width: 110px;">
                                            Submitted on</th>
                                        <th class="sorting" tabindex="0" aria-controls="myTable" rowspan="1" colspan="1"
                                            aria-label="Start date: activate to sort column ascending"
                                            style="width: 202px;">Assigned to</th>
                                        <th class="sorting" tabindex="0" aria-controls="myTable" rowspan="1" colspan="1"
                                            aria-label="Salary: activate to sort column ascending"
                                            style="width: 162px;">Scheduled on</th>
                                        <th class="sorting" tabindex="0" aria-controls="myTable" rowspan="1" colspan="1"
                                            aria-label="Start date: activate to sort column ascending"
                                            style="width: 202px;">Last Contact</th>
                                        <th class="sorting" tabindex="0" aria-controls="myTable" rowspan="1" colspan="1"
                                            aria-label="Salary: activate to sort column ascending"
                                            style="width: 162px;">Lead Quality</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($leads as $lead)
                                        <tr role="row" class="odd">
                                            <td class="sorting_1">
                                                <div class="flex-column">
                                                    <a href="{{url('leads/'.$lead->id)}}">{{$lead->name}}</a>
                                                    <span class="text-right">
                                                        <button type="button" class="btn btn-primary lead-btn"><i
                                                                class="fa  fa-envelope"></i></button>
                                                        <a href="tel:{{$lead->phone}}" class="btn btn-success lead-btn" title="{{$lead->phone}}"><i
                                                                class="fa  fa-phone"></i></a>
                                                    </span>
                                                </div>
                                            </td>
                                            <td>{{$lead->title}}</td>
                                            <td><span class="badge badge-primary">Facebook</span></td>
                                            <td>{{$lead->created_at}}</td>
                                            <td>Ahmed</td>
                                            <td>2008/11/28</td>
                                            <td>2008/11/28</td>
                                            <td>
                                                @if ($lead->status == 0)
                                                <button class="btn btn-primary">Qualified</button>
                                                @else
                                                <button class="btn btn-danger">Un Qualified</button>
                                                @endif
                                            </td>
                                        </tr>
                                    @endforeach
                                    <tr role="row" class="even">
                                        <td class="sorting_1">
                                            <div class="flex-column">
                                                <a>Ali Coco</a>
                                                <span class="text-right">
                                                    <button type="button" class="btn btn-primary lead-btn"><i
                                                            class="fa  fa-envelope"></i></button>
                                                    <button type="button" class="btn btn-success lead-btn"><i
                                                            class="fa  fa-phone"></i></button>
                                                </span>
                                            </div>
                                        </td>
                                        <td>Product Two</td>
                                        <td><span class="badge badge-primary">Facebook</span></td>
                                        <td>2009/10/09</td>
                                        <td>Hussin</td>
                                        <td>2009/10/09</td>
                                        <td>2008/11/28</td>
                                        <td><button class="btn btn-danger">Un Qualified</button></td>
                                    </tr>
                                    <tr role="row" class="odd">
                                        <td class="sorting_1">
                                            <div class="flex-column">
                                                <a>ramy mohamed</a>
                                                <span class="text-right">
                                                    <button type="button" class="btn btn-primary lead-btn"><i
                                                            class="fa  fa-envelope"></i></button>
                                                    <button type="button" class="btn btn-success lead-btn"><i
                                                            class="fa  fa-phone"></i></button>
                                                </span>
                                            </div>
                                        </td>
                                        <td>Product Three</td>
                                        <td><span class="badge badge-primary">Facebook</span></td>
                                        <td>2009/10/09</td>
                                        <td>Hussin</td>
                                        <td>2009/10/09</td>
                                        <td>2008/11/28</td>
                                        <td><button class="btn btn-primary">Qualified</button></td>
                                    </tr>
                                    <tr role="row" class="even">
                                        <td class="sorting_1">
                                            <div class="flex-column">
                                                <a>Bradly greer</a>
                                                <span class="text-right">
                                                    <button type="button" class="btn btn-primary lead-btn"><i
                                                            class="fa  fa-envelope"></i></button>
                                                    <button type="button" class="btn btn-success lead-btn"><i
                                                            class="fa  fa-phone"></i></button>
                                                </span>
                                            </div>
                                        </td>
                                        <td>Product Name 1</td>
                                        <td><span class="badge badge-info">twitter</span></td>
                                        <td>2009/10/09</td>
                                        <td>Hosam</td>
                                        <td>2009/10/09</td>
                                        <td>2008/11/28</td>
                                        <td><button class="btn btn-primary">Qualified</button></td>
                                    </tr>
                                    <tr role="row" class="odd">
                                        <td class="sorting_1">
                                            <div class="flex-column">
                                                <a>NIKI Satou</a>
                                                <span class="text-right">
                                                    <button type="button" class="btn btn-primary lead-btn"><i
                                                            class="fa  fa-envelope"></i></button>
                                                    <button type="button" class="btn btn-success lead-btn"><i
                                                            class="fa  fa-phone"></i></button>
                                                </span>
                                            </div>
                                        </td>
                                        <td>Product San</td>
                                        <td><span class="badge badge-danger">Instagram</span></td>
                                        <td>2009/10/09</td>
                                        <td>Ali</td>
                                        <td>2009/10/09</td>
                                        <td>2008/11/28</td>
                                        <td><button class="btn btn-danger">Qualified</button></td>
                                    </tr>
                                    <tr role="row" class="even">
                                        <td class="sorting_1">
                                            <div class="flex-column">
                                                <a>William morgan</a>
                                                <span class="text-right">
                                                    <button type="button" class="btn btn-primary lead-btn"><i
                                                            class="fa  fa-envelope"></i></button>
                                                    <button type="button" class="btn btn-success lead-btn"><i
                                                            class="fa  fa-phone"></i></button>
                                                </span>
                                            </div>
                                        </td>
                                        <td>Product Name 4</td>
                                        <td><span class="badge badge-primary">Facebook</span></td>
                                        <td>2009/10/09</td>
                                        <td>Hussin</td>
                                        <td>2009/10/09</td>
                                        <td>2008/11/28</td>
                                        <td><button class="btn btn-primary">Qualified</button></td>
                                    </tr>
                                    <tr role="row" class="odd">
                                        <td class="sorting_1">
                                            <div class="flex-column">
                                                <a>Patrik moboma</a>
                                                <span class="text-right">
                                                    <button type="button" class="btn btn-primary lead-btn"><i
                                                            class="fa  fa-envelope"></i></button>
                                                    <button type="button" class="btn btn-success lead-btn"><i
                                                            class="fa  fa-phone"></i></button>
                                                </span>
                                            </div>
                                        </td>
                                        <td>Product Name 5</td>
                                        <td><span class="badge badge-danger">Instagram</span></td>
                                        <td>2009/10/09</td>
                                        <td>Hussin</td>
                                        <td>2009/10/09</td>
                                        <td>2008/11/28</td>
                                        <td><button class="btn btn-danger">unQualified</button></td>
                                    </tr>
                                    <tr role="row" class="even">
                                        <td class="sorting_1">
                                            <div class="flex-column">
                                                <a>Soliman Mohssen</a>
                                                <span class="text-right">
                                                    <button type="button" class="btn btn-primary lead-btn"><i
                                                            class="fa  fa-envelope"></i></button>
                                                    <button type="button" class="btn btn-success lead-btn"><i
                                                            class="fa  fa-phone"></i></button>
                                                </span>
                                            </div>
                                        </td>
                                        <td>Product Name 6</td>
                                        <td><span class="badge badge-info">Twitter</span></td>
                                        <td>2009/10/09</td>
                                        <td>Hussin</td>
                                        <td>2009/10/09</td>
                                        <td>2008/11/28</td>
                                        <td><button class="btn btn-primary">Qualified</button></td>
                                    </tr>
                                    <tr role="row" class="odd">
                                        <td class="sorting_1">
                                            <div class="flex-column">
                                                <a>Gara Stevens</a>
                                                <span class="text-right">
                                                    <button type="button" class="btn btn-primary lead-btn"><i
                                                            class="fa  fa-envelope"></i></button>
                                                    <button type="button" class="btn btn-success lead-btn"><i
                                                            class="fa  fa-phone"></i></button>
                                                </span>
                                            </div>
                                        </td>
                                        <td>Product Name 7</td>
                                        <td><span class="badge badge-info">twitter</span></td>
                                        <td>2009/10/09</td>
                                        <td>Hussin</td>
                                        <td>2009/10/09</td>
                                        <td>2008/11/28</td>
                                        <td><button class="btn btn-danger">un Qualified</button></td>
                                    </tr>
                                    <tr role="row" class="even">
                                        <td class="sorting_1">
                                            <div class="flex-column">
                                                <a>marie atsu</a>
                                                <span class="text-right">
                                                    <button type="button" class="btn btn-primary lead-btn"><i
                                                            class="fa  fa-envelope"></i></button>
                                                    <button type="button" class="btn btn-success lead-btn"><i
                                                            class="fa  fa-phone"></i></button>
                                                </span>
                                            </div>
                                        </td>
                                        <td>Product Name 8</td>
                                        <td><span class="badge badge-primary">Facebook</span></td>
                                        <td>2009/10/09</td>
                                        <td>Hussin</td>
                                        <td>2009/10/09</td>
                                        <td>2008/11/28</td>
                                        <td><button class="btn btn-primary">Qualified</button></td>
                                    </tr>
                                    <tr role="row" class="odd">
                                        <td class="sorting_1">
                                            <div class="flex-column">
                                                <a>Cristiano Ronaldo</a>
                                                <span class="text-right">
                                                    <button type="button" class="btn btn-primary lead-btn"><i
                                                            class="fa  fa-envelope"></i></button>
                                                    <button type="button" class="btn btn-success lead-btn"><i
                                                            class="fa  fa-phone"></i></button>
                                                </span>
                                            </div>
                                        </td>
                                        <td>Product Name 3</td>
                                        <td><span class="badge badge-warning">Madrid</span></td>
                                        <td>2009/10/16</td>
                                        <td>Sami</td>
                                        <td>2009/11/11</td>
                                        <td>2008/11/28</td>
                                        <td><button class="btn btn-primary">Qualified</button></td>
                                    </tr>
                                    <tr role="row" class="even">
                                        <td class="sorting_1">
                                            <div class="flex-column">
                                                <a>Alo diara</a>
                                                <span class="text-right">
                                                    <button type="button" class="btn btn-primary lead-btn"><i
                                                            class="fa  fa-envelope"></i></button>
                                                    <button type="button" class="btn btn-success lead-btn"><i
                                                            class="fa  fa-phone"></i></button>
                                                </span>
                                            </div>
                                        </td>
                                        <td>Product Name 2</td>
                                        <td><span class="badge badge-primary">Facebook</span></td>
                                        <td>2009/10/16</td>
                                        <td>Sami</td>
                                        <td>2009/11/11</td>
                                        <td>2008/11/28</td>
                                        <td><button class="btn btn-primary">Qualified</button></td>
                                    </tr>
                                    <tr role="row" class="odd">
                                        <td class="sorting_1">
                                            <div class="flex-column">
                                                <a>Dai rios</a>
                                                <span class="text-right">
                                                    <button type="button" class="btn btn-primary lead-btn"><i
                                                            class="fa  fa-envelope"></i></button>
                                                    <button type="button" class="btn btn-success lead-btn"><i
                                                            class="fa  fa-phone"></i></button>
                                                </span>
                                            </div>
                                        </td>
                                        <td>Product Name 8</td>
                                        <td><span class="badge badge-primary">Facebook</span></td>
                                        <td>2009/10/16</td>
                                        <td>Sami</td>
                                        <td>2009/11/11</td>
                                        <td>2008/11/28</td>
                                        <td><button class="btn btn-danger">unQualified</button></td>
                                    </tr>
                                    <tr role="row" class="even">
                                        <td class="sorting_1">
                                            <div class="flex-column">
                                                <a>Sadio mani</a>
                                                <span class="text-right">
                                                    <button type="button" class="btn btn-primary lead-btn"><i
                                                            class="fa  fa-envelope"></i></button>
                                                    <button type="button" class="btn btn-success lead-btn"><i
                                                            class="fa  fa-phone"></i></button>
                                                </span>
                                            </div>
                                        </td>
                                        <td>Product Name 9</td>
                                        <td><span class="badge badge-info">Twitter</span></td>
                                        <td>2009/10/16</td>
                                        <td>Sami</td>
                                        <td>2009/11/11</td>
                                        <td>2008/11/28</td>
                                        <td><button class="btn btn-primary">Qualified</button></td>
                                    </tr>
                                    <tr role="row" class="odd">
                                        <td class="sorting_1">
                                            <div class="flex-column">
                                                <a>Mohamed Salah</a>
                                                <span class="text-right">
                                                    <button type="button" class="btn btn-primary lead-btn"><i
                                                            class="fa  fa-envelope"></i></button>
                                                    <button type="button" class="btn btn-success lead-btn"><i
                                                            class="fa  fa-phone"></i></button>
                                                </span>
                                            </div>
                                        </td>
                                        <td>Product Name 10</td>
                                        <td><span class="badge badge-danger">Instagram</span></td>
                                        <td>2009/10/16</td>
                                        <td>Sami</td>
                                        <td>2009/11/11</td>
                                        <td>2008/11/28</td>
                                        <td><button class="btn btn-primary">Qualified</button></td>
                                    </tr>
                                    <tr role="row" class="even">
                                        <td class="sorting_1">
                                            <div class="flex-column">
                                                <a>camp man</a>
                                                <span class="text-right">
                                                    <button type="button" class="btn btn-primary lead-btn"><i
                                                            class="fa  fa-envelope"></i></button>
                                                    <button type="button" class="btn btn-success lead-btn"><i
                                                            class="fa  fa-phone"></i></button>
                                                </span>
                                            </div>
                                        </td>
                                        <td>Product Name 7</td>
                                        <td><span class="badge badge-primary">Facebook</span></td>
                                        <td>2009/10/16</td>
                                        <td>Sami</td>
                                        <td>2009/11/11</td>
                                        <td>2008/11/28</td>
                                        <td><button class="btn btn-danger">un Qualified</button></td>
                                    </tr>
                                    <tr role="row" class="odd">
                                        <td class="sorting_1">
                                            <div class="flex-column">
                                                <a>Good Person</a>
                                                <span class="text-right">
                                                    <button type="button" class="btn btn-primary lead-btn"><i
                                                            class="fa  fa-envelope"></i></button>
                                                    <button type="button" class="btn btn-success lead-btn"><i
                                                            class="fa  fa-phone"></i></button>
                                                </span>
                                            </div>
                                        </td>
                                        <td>Product Name 2</td>
                                        <td><span class="badge badge-primary">Facebook</span></td>
                                        <td>2009/10/16</td>
                                        <td>Sami</td>
                                        <td>2009/11/11</td>
                                        <td>2008/11/28</td>
                                        <td><button class="btn btn-danger">un Qualified</button></td>
                                    </tr>
                                    <tr role="row" class="even">
                                        <td class="sorting_1">
                                            <div class="flex-column">
                                                <a>maher zain</a>
                                                <span class="text-right">
                                                    <button type="button" class="btn btn-primary lead-btn"><i
                                                            class="fa  fa-envelope"></i></button>
                                                    <button type="button" class="btn btn-success lead-btn"><i
                                                            class="fa  fa-phone"></i></button>
                                                </span>
                                            </div>
                                        </td>
                                        <td>Product Name 4</td>
                                        <td><span class="badge badge-success">Facebook</span></td>
                                        <td>2009/10/16</td>
                                        <td>Sami</td>
                                        <td>2009/11/11</td>
                                        <td>2008/11/28</td>
                                        <td><button class="btn btn-primary">Qualified</button></td>
                                    </tr>
                                    <tr role="row" class="odd">
                                        <td class="sorting_1">
                                            <div class="flex-column">
                                                <a>Said bek</a>
                                                <span class="text-right">
                                                    <button type="button" class="btn btn-primary lead-btn"><i
                                                            class="fa  fa-envelope"></i></button>
                                                    <button type="button" class="btn btn-success lead-btn"><i
                                                            class="fa  fa-phone"></i></button>
                                                </span>
                                            </div>
                                        </td>
                                        <td>Product Name 3</td>
                                        <td><span class="badge badge-primary">Facebook</span></td>
                                        <td>2009/10/16</td>
                                        <td>Sami</td>
                                        <td>2009/11/11</td>
                                        <td>2008/11/28</td>
                                        <td><button class="btn btn-primary">Qualified</button></td>
                                    </tr>
                                    <tr role="row" class="even">
                                        <td class="sorting_1">
                                            <div class="flex-column">
                                                <a>Tarek soidan</a>
                                                <span class="text-right">
                                                    <button type="button" class="btn btn-primary lead-btn"><i
                                                            class="fa  fa-envelope"></i></button>
                                                    <button type="button" class="btn btn-success lead-btn"><i
                                                            class="fa  fa-phone"></i></button>
                                                </span>
                                            </div>
                                        </td>
                                        <td>Product Name 5</td>
                                        <td><span class="badge badge-danger">instagram</span></td>
                                        <td>2009/10/16</td>
                                        <td>Sami</td>
                                        <td>2009/11/11</td>
                                        <td>2008/11/28</td>
                                        <td><button class="btn btn-primary">Qualified</button></td>
                                    </tr>
                                    <tr role="row" class="odd">
                                        <td class="sorting_1">
                                            <div class="flex-column">
                                                <a>Last samorai</a>
                                                <span class="text-right">
                                                    <button type="button" class="btn btn-primary lead-btn"><i
                                                            class="fa  fa-envelope"></i></button>
                                                    <button type="button" class="btn btn-success lead-btn"><i
                                                            class="fa  fa-phone"></i></button>
                                                </span>
                                            </div>
                                        </td>
                                        <td>Product Name 1</td>
                                        <td><span class="badge badge-danger">instagram</span></td>
                                        <td>2009/10/16</td>
                                        <td>Sami</td>
                                        <td>2009/11/11</td>
                                        <td>2008/11/28</td>
                                        <td><button class="btn btn-danger">un Qualified</button></td>
                                    </tr>
                                </tbody>
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
<script src="{{asset('js/filter-table.js')}}"></script>
@endsection
