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
                                            <input type="date" name="" id="" class="form-control"
                                                placeholder="mm/dd/yyyy">
                                        </div>
                                        <div class="col-md-6">
                                            <input type="date" name="" id="" class="form-control"
                                                placeholder="mm/dd/yyyy">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="assigned">assigned to</label>
                                            <select class="form-control" name="" id="assigned">
                                                <option>name one</option>
                                                <option>name two</option>
                                                <option>name three</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="assigned">Product</label>
                                            <select class="form-control" name="" id="assigned">
                                                <option>product one</option>
                                                <option>product two</option>
                                                <option>product three</option>
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
                                            <select class="form-control" name="" id="assigned">
                                                <option>status one</option>
                                                <option>status two</option>
                                                <option>status three</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="assigned">Lead quality</label>
                                            <select class="form-control" name="" id="assigned">
                                                <option>quality one</option>
                                                <option>quality two</option>
                                                <option>quality three</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <button type="button" class="btn btn-primary m-t-20">
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
                                    <tr role="row" class="odd">
                                        <td class="sorting_1">
                                            <div class="flex-column">
                                                <a>Airi Satou</a>
                                                <span class="text-right">
                                                    <button type="button" class="btn btn-primary lead-btn"><i
                                                            class="fa  fa-envelope"></i></button>
                                                    <button type="button" class="btn btn-success lead-btn"><i
                                                            class="fa  fa-phone"></i></button>
                                                </span>
                                            </div>
                                        </td>
                                        <td>product One</td>
                                        <td><span class="badge badge-primary">Facebook</span></td>
                                        <td>2008/11/28</td>
                                        <td>Ahmed</td>
                                        <td>2008/11/28</td>
                                        <td>2008/11/28</td>
                                        <td><button class="btn btn-primary">Qualified</button></td>
                                    </tr>
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

        {{-- <div class="row">
                    <div class="panel panel-primary filterable">
                        <div class="panel-heading">
                            <h3 class="panel-title">Users</h3>
                            <div class="pull-right">
                                <button class="btn btn-default btn-xs btn-filter"><span class="glyphicon glyphicon-filter"></span> Filter</button>
                            </div>
                        </div>
                        <table class="table">
                            <thead>
                                <tr class="filters">
                                    <th><input type="text" class="form-control" placeholder="#" disabled></th>
                                    <th><input type="text" class="form-control" placeholder="First Name" disabled></th>
                                    <th><input type="text" class="form-control" placeholder="Last Name" disabled></th>
                                    <th><input type="text" class="form-control" placeholder="Username" disabled></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Jacob</td>
                                    <td>Thornton</td>
                                    <td>@fat</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Larry</td>
                                    <td>the Bird</td>
                                    <td>@twitter</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div> --}}
    </div>
    <!-- /#page-wrapper -->
</div>
@endsection
@section('filter_table')
<script src="{{asset('js/filter-table.js')}}"></script>
@endsection
