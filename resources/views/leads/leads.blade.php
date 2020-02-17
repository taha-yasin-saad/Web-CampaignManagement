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
                                        <td><span class="badge badge-primary">Facebook</span></td>
                                        <td>Tokyo</td>
                                        <td>33</td>
                                        <td>2008/11/28</td>
                                        <td>$162,700</td>
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
                                        <td><span class="badge badge-primary">Facebook</span></td>
                                        <td>London</td>
                                        <td>47</td>
                                        <td>2009/10/09</td>
                                        <td>$1,200,000</td>
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
                                        <td><span class="badge badge-primary">Facebook</span></td>
                                        <td>San Francisco</td>
                                        <td>66</td>
                                        <td>2009/01/12</td>
                                        <td>$86,000</td>
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
                                        <td><span class="badge badge-info">twitter</span></td>
                                        <td>London</td>
                                        <td>41</td>
                                        <td>2012/10/13</td>
                                        <td>$132,000</td>
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
                                        <td><span class="badge badge-danger">Instagram</span></td>
                                        <td>San Francisco</td>
                                        <td>28</td>
                                        <td>2011/06/07</td>
                                        <td>$206,850</td>
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
                                        <td><span class="badge badge-primary">Facebook</span></td>
                                        <td>New York</td>
                                        <td>61</td>
                                        <td>2012/12/02</td>
                                        <td>$372,000</td>
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
                                        <td><span class="badge badge-danger">Instagram</span></td>
                                        <td>London</td>
                                        <td>38</td>
                                        <td>2011/05/03</td>
                                        <td>$163,500</td>
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
                                        <td><span class="badge badge-info">Twitter</span></td>
                                        <td>New York</td>
                                        <td>21</td>
                                        <td>2011/12/12</td>
                                        <td>$106,450</td>
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
                                        <td><span class="badge badge-info">twitter</span></td>
                                        <td>New York</td>
                                        <td>46</td>
                                        <td>2011/12/06</td>
                                        <td>$145,600</td>
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
                                        <td><span class="badge badge-primary">Facebook</span></td>
                                        <td>Edinburgh</td>
                                        <td>22</td>
                                        <td>2012/03/29</td>
                                        <td>$433,060</td>
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
                                        <td><span class="badge badge-warning">Madrid</span></td>
                                        <td>San Francisco</td>
                                        <td>36</td>
                                        <td>2008/10/16</td>
                                        <td>$470,600</td>
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
                                        <td><span class="badge badge-primary">Facebook</span></td>
                                        <td>San Francisco</td>
                                        <td>39</td>
                                        <td>2009/09/15</td>
                                        <td>$205,500</td>
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
                                        <td><span class="badge badge-primary">Facebook</span></td>
                                        <td>Edinburgh</td>
                                        <td>35</td>
                                        <td>2012/09/26</td>
                                        <td>$217,500</td>
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
                                        <td><span class="badge badge-info">Twitter</span></td>
                                        <td>New York</td>
                                        <td>27</td>
                                        <td>2011/01/25</td>
                                        <td>$112,000</td>
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
                                        <td><span class="badge badge-danger">Instagram</span></td>
                                        <td>Sidney</td>
                                        <td>23</td>
                                        <td>2010/09/20</td>
                                        <td>$85,600</td>
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
                                        <td><span class="badge badge-primary">Facebook</span></td>
                                        <td>San Francisco</td>
                                        <td>47</td>
                                        <td>2009/07/07</td>
                                        <td>$87,500</td>
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
                                        <td><span class="badge badge-primary">Facebook</span></td>
                                        <td>San Francisco</td>
                                        <td>48</td>
                                        <td>2010/03/11</td>
                                        <td>$850,000</td>
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
                                        <td><span class="badge badge-success">Facebook</span></td>
                                        <td>Tokyo</td>
                                        <td>63</td>
                                        <td>2011/07/25</td>
                                        <td>$170,750</td>
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
                                        <td><span class="badge badge-primary">Facebook</span></td>
                                        <td>San Francisco</td>
                                        <td>22</td>
                                        <td>2008/10/26</td>
                                        <td>$235,500</td>
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
                                        <td><span class="badge badge-danger">instagram</span></td>
                                        <td>Edinburgh</td>
                                        <td>42</td>
                                        <td>2010/12/22</td>
                                        <td>$92,575</td>
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
                                        <td><span class="badge badge-danger">instagram</span></td>
                                        <td>New York</td>
                                        <td>59</td>
                                        <td>2009/04/10</td>
                                        <td>$237,500</td>
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
