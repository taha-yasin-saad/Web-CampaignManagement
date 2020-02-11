@extends('layouts.admin')
@section('content')

        <!-- ============================================================== -->
        <!-- Page Content -->
        <!-- ============================================================== -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Workplace</h4> </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <button class="right-side-toggle waves-effect waves-light btn-info btn-circle pull-right m-l-20"><i class="ti-settings text-white"></i></button>
                        <!-- <a href="javascript: void(0);" target="_blank" class="btn btn-danger pull-right m-l-20 hidden-xs hidden-sm waves-effect waves-light">Admin Panel</a> -->
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
                            <div class="">
                                <div id="myTable_wrapper" class="dataTables_wrapper no-footer table-responsive">
                                    
                                    <table id="myTable" class="table table-bordered table-striped dataTable no-footer" role="grid" aria-describedby="myTable_info">
                                    <thead>
                                        <tr role="row">
                                            <th class="sorting_asc" tabindex="0" aria-controls="myTable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 262px;">Lead</th>
                                            <th class="sorting" tabindex="0" aria-controls="myTable" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 389px;">Product</th>
                                            <th class="sorting" tabindex="0" aria-controls="myTable" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 197px;">Source</th>
                                            <th class="sorting" tabindex="0" aria-controls="myTable" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 110px;">Submitted on</th>
                                            <th class="sorting" tabindex="0" aria-controls="myTable" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 202px;">Assigned to</th>
                                            <th class="sorting" tabindex="0" aria-controls="myTable" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 162px;">Scheduled on</th>
                                            <th class="sorting" tabindex="0" aria-controls="myTable" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 202px;">Last Contact</th>
                                            <th class="sorting" tabindex="0" aria-controls="myTable" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 162px;">Lead Quality</th>
                                        </tr>
                                    </thead>
                                    <tbody>         
                                    <tr role="row" class="odd">
                                            <td class="sorting_1">
                                                <a>Airi Satou</a>
                                                <button type="button" class="btn btn-primary lead-btn"><i class="fa  fa-envelope"></i></button>
                                                <button type="button" class="btn btn-success lead-btn"><i class="fa  fa-phone"></i></button>
                                            </td>
                                            <td>Accountant</td>
                                            <td>Tokyo</td>
                                            <td>33</td>
                                            <td>2008/11/28</td>
                                            <td>$162,700</td>
                                            <td>2008/11/28</td>
                                            <td><button class="btn btn-primary">Qualified</button></td>
                                        </tr>
                                        <tr role="row" class="even">
                                            <td class="sorting_1">
                                                <a>Angelica Ramos</a>
                                                <button type="button" class="btn btn-primary lead-btn"><i class="fa  fa-envelope"></i></button>
                                                <button type="button" class="btn btn-success lead-btn"><i class="fa  fa-phone"></i></button>
                                            </td>
                                            <td>Chief Executive Officer (CEO)</td>
                                            <td>London</td>
                                            <td>47</td>
                                            <td>2009/10/09</td>
                                            <td>$1,200,000</td>
                                            <td>2008/11/28</td>
                                            <td><button class="btn btn-danger">Un Qualified</button></td>
                                        </tr>
                                        <tr role="row" class="odd">
                                            <td class="sorting_1">
                                                <a>Ashton Cox</a>
                                                <button type="button" class="btn btn-primary lead-btn"><i class="fa  fa-envelope"></i></button>
                                                <button type="button" class="btn btn-success lead-btn"><i class="fa  fa-phone"></i></button>
                                            </td>
                                            <td>Junior Technical Author</td>
                                            <td>San Francisco</td>
                                            <td>66</td>
                                            <td>2009/01/12</td>
                                            <td>$86,000</td>
                                            <td>2008/11/28</td>
                                            <td><button class="btn btn-primary">Qualified</button></td>
                                        </tr>
                                        <tr role="row" class="even">
                                            <td class="sorting_1">
                                                <a>Bradley Greer</a>
                                                <button type="button" class="btn btn-primary lead-btn"><i class="fa  fa-envelope"></i></button>
                                                <button type="button" class="btn btn-success lead-btn"><i class="fa  fa-phone"></i></button>
                                            </td>
                                            <td>Software Engineer</td>
                                            <td>London</td>
                                            <td>41</td>
                                            <td>2012/10/13</td>
                                            <td>$132,000</td>
                                            <td>2008/11/28</td>
                                            <td><button class="btn btn-primary">Qualified</button></td>
                                        </tr><tr role="row" class="odd">
                                            <td class="sorting_1">
                                                <a>Brenden Wagner</a>
                                                <button type="button" class="btn btn-primary lead-btn"><i class="fa  fa-envelope"></i></button>
                                                <button type="button" class="btn btn-success lead-btn"><i class="fa  fa-phone"></i></button>
                                            </td>
                                            <td>Software Engineer</td>
                                            <td>San Francisco</td>
                                            <td>28</td>
                                            <td>2011/06/07</td>
                                            <td>$206,850</td>
                                            <td>2008/11/28</td>
                                            <td><button class="btn btn-danger">Qualified</button></td>
                                        </tr>
                                        <tr role="row" class="even">
                                            <td class="sorting_1">
                                                <a>Brielle Williamson</a>
                                                <button type="button" class="btn btn-primary lead-btn"><i class="fa  fa-envelope"></i></button>
                                                <button type="button" class="btn btn-success lead-btn"><i class="fa  fa-phone"></i></button>
                                            </td>
                                            <td>Integration Specialist</td>
                                            <td>New York</td>
                                            <td>61</td>
                                            <td>2012/12/02</td>
                                            <td>$372,000</td>
                                            <td>2008/11/28</td>
                                            <td><button class="btn btn-primary">Qualified</button></td>
                                        </tr>
                                        <tr role="row" class="odd">
                                            <td class="sorting_1">
                                                <a>Bruno Nash</a>
                                                <button type="button" class="btn btn-primary lead-btn"><i class="fa  fa-envelope"></i></button>
                                                <button type="button" class="btn btn-success lead-btn"><i class="fa  fa-phone"></i></button>
                                            </td>
                                            <td>Software Engineer</td>
                                            <td>London</td>
                                            <td>38</td>
                                            <td>2011/05/03</td>
                                            <td>$163,500</td>
                                            <td>2008/11/28</td>
                                            <td><button class="btn btn-danger">unQualified</button></td>
                                        </tr>
                                        <tr role="row" class="even">
                                            <td class="sorting_1">
                                                <a>Caesar Vance</a>
                                                <button type="button" class="btn btn-primary lead-btn"><i class="fa  fa-envelope"></i></button>
                                                <button type="button" class="btn btn-success lead-btn"><i class="fa  fa-phone"></i></button>
                                            </td>
                                            <td>Pre-Sales Support</td>
                                            <td>New York</td>
                                            <td>21</td>
                                            <td>2011/12/12</td>
                                            <td>$106,450</td>
                                            <td>2008/11/28</td>
                                            <td><button class="btn btn-primary">Qualified</button></td>
                                        </tr>
                                        <tr role="row" class="odd">
                                            <td class="sorting_1">
                                                <a>Cara Stevens</a>
                                                <button type="button" class="btn btn-primary lead-btn"><i class="fa  fa-envelope"></i></button>
                                                <button type="button" class="btn btn-success lead-btn"><i class="fa  fa-phone"></i></button>
                                            </td>
                                            <td>Sales Assistant</td>
                                            <td>New York</td>
                                            <td>46</td>
                                            <td>2011/12/06</td>
                                            <td>$145,600</td>
                                            <td>2008/11/28</td>
                                            <td><button class="btn btn-danger">un Qualified</button></td>
                                        </tr>
                                        <tr role="row" class="even">
                                            <td class="sorting_1">
                                                <a>Cedric Kelly</a>
                                                <button type="button" class="btn btn-primary lead-btn"><i class="fa  fa-envelope"></i></button>
                                                <button type="button" class="btn btn-success lead-btn"><i class="fa  fa-phone"></i></button>
                                            </td>
                                            <td>Senior Javascript Developer</td>
                                            <td>Edinburgh</td>
                                            <td>22</td>
                                            <td>2012/03/29</td>
                                            <td>$433,060</td>
                                            <td>2008/11/28</td>
                                            <td><button class="btn btn-primary">Qualified</button></td>
                                        </tr>
                                        <tr role="row" class="odd">
                                            <td class="sorting_1">
                                                <a>Charde Marshall</a>
                                                <button type="button" class="btn btn-primary lead-btn"><i class="fa  fa-envelope"></i></button>
                                                <button type="button" class="btn btn-success lead-btn"><i class="fa  fa-phone"></i></button>
                                            </td>
                                            <td>Regional Director</td>
                                            <td>San Francisco</td>
                                            <td>36</td>
                                            <td>2008/10/16</td>
                                            <td>$470,600</td>
                                            <td>2008/11/28</td>
                                            <td><button class="btn btn-primary">Qualified</button></td>
                                        </tr>
                                        <tr role="row" class="even">
                                            <td class="sorting_1">
                                                <a>Colleen Hurst</a>
                                                <button type="button" class="btn btn-primary lead-btn"><i class="fa  fa-envelope"></i></button>
                                                <button type="button" class="btn btn-success lead-btn"><i class="fa  fa-phone"></i></button>
                                            </td>
                                            <td>Javascript Developer</td>
                                            <td>San Francisco</td>
                                            <td>39</td>
                                            <td>2009/09/15</td>
                                            <td>$205,500</td>
                                            <td>2008/11/28</td>
                                            <td><button class="btn btn-primary">Qualified</button></td>
                                        </tr>
                                        <tr role="row" class="odd">
                                            <td class="sorting_1">
                                                <a>Dai Rios</a>
                                                <button type="button" class="btn btn-primary lead-btn"><i class="fa  fa-envelope"></i></button>
                                                <button type="button" class="btn btn-success lead-btn"><i class="fa  fa-phone"></i></button>
                                            </td>
                                            <td>Personnel Lead</td>
                                            <td>Edinburgh</td>
                                            <td>35</td>
                                            <td>2012/09/26</td>
                                            <td>$217,500</td>
                                            <td>2008/11/28</td>
                                            <td><button class="btn btn-danger">unQualified</button></td>
                                        </tr>
                                        <tr role="row" class="even">
                                            <td class="sorting_1">
                                                <a>Donna Snider</a>
                                                <button type="button" class="btn btn-primary lead-btn"><i class="fa  fa-envelope"></i></button>
                                                <button type="button" class="btn btn-success lead-btn"><i class="fa  fa-phone"></i></button>
                                            </td>
                                            <td>Customer Support</td>
                                            <td>New York</td>
                                            <td>27</td>
                                            <td>2011/01/25</td>
                                            <td>$112,000</td>
                                            <td>2008/11/28</td>
                                            <td><button class="btn btn-primary">Qualified</button></td>
                                        </tr>
                                        <tr role="row" class="odd">
                                            <td class="sorting_1">
                                                <a>Doris Wilder</a>
                                                <button type="button" class="btn btn-primary lead-btn"><i class="fa  fa-envelope"></i></button>
                                                <button type="button" class="btn btn-success lead-btn"><i class="fa  fa-phone"></i></button>
                                            </td>
                                            <td>Sales Assistant</td>
                                            <td>Sidney</td>
                                            <td>23</td>
                                            <td>2010/09/20</td>
                                            <td>$85,600</td>
                                            <td>2008/11/28</td>
                                            <td><button class="btn btn-primary">Qualified</button></td>
                                        </tr>
                                        <tr role="row" class="even">
                                            <td class="sorting_1">
                                                <a>Finn Camacho</a>
                                                <button type="button" class="btn btn-primary lead-btn"><i class="fa  fa-envelope"></i></button>
                                                <button type="button" class="btn btn-success lead-btn"><i class="fa  fa-phone"></i></button>
                                            </td>
                                            <td>Support Engineer</td>
                                            <td>San Francisco</td>
                                            <td>47</td>
                                            <td>2009/07/07</td>
                                            <td>$87,500</td>
                                            <td>2008/11/28</td>
                                            <td><button class="btn btn-danger">un Qualified</button></td>
                                        </tr>
                                        <tr role="row" class="odd">
                                            <td class="sorting_1">
                                                <a>Fiona Green</a>
                                                <button type="button" class="btn btn-primary lead-btn"><i class="fa  fa-envelope"></i></button>
                                                <button type="button" class="btn btn-success lead-btn"><i class="fa  fa-phone"></i></button>
                                            </td>
                                            <td>Chief Operating Officer (COO)</td>
                                            <td>San Francisco</td>
                                            <td>48</td>
                                            <td>2010/03/11</td>
                                            <td>$850,000</td>
                                            <td>2008/11/28</td>
                                            <td><button class="btn btn-danger">un Qualified</button></td>
                                        </tr>
                                        <tr role="row" class="even">
                                            <td class="sorting_1">
                                                <a>Garrett Winters</a>
                                                <button type="button" class="btn btn-primary lead-btn"><i class="fa  fa-envelope"></i></button>
                                                <button type="button" class="btn btn-success lead-btn"><i class="fa  fa-phone"></i></button>
                                            </td>
                                            <td>Accountant</td>
                                            <td>Tokyo</td>
                                            <td>63</td>
                                            <td>2011/07/25</td>
                                            <td>$170,750</td>
                                            <td>2008/11/28</td>
                                            <td><button class="btn btn-primary">Qualified</button></td>
                                        </tr>
                                        <tr role="row" class="odd">
                                            <td class="sorting_1">
                                                <a>Gavin Cortez</a>
                                                <button type="button" class="btn btn-primary lead-btn"><i class="fa  fa-envelope"></i></button>
                                                <button type="button" class="btn btn-success lead-btn"><i class="fa  fa-phone"></i></button>
                                            </td>
                                            <td>Team Leader</td>
                                            <td>San Francisco</td>
                                            <td>22</td>
                                            <td>2008/10/26</td>
                                            <td>$235,500</td>
                                            <td>2008/11/28</td>
                                            <td><button class="btn btn-primary">Qualified</button></td>
                                        </tr>
                                        <tr role="row" class="even">
                                            <td class="sorting_1">
                                                <a>Gavin Joyce</a>
                                                <button type="button" class="btn btn-primary lead-btn"><i class="fa  fa-envelope"></i></button>
                                                <button type="button" class="btn btn-success lead-btn"><i class="fa  fa-phone"></i></button>
                                            </td>
                                            <td>Developer</td>
                                            <td>Edinburgh</td>
                                            <td>42</td>
                                            <td>2010/12/22</td>
                                            <td>$92,575</td>
                                            <td>2008/11/28</td>
                                            <td><button class="btn btn-primary">Qualified</button></td>
                                        </tr>
                                        <tr role="row" class="odd">
                                            <td class="sorting_1">
                                                <a>Gloria Little</a>
                                                <button type="button" class="btn btn-primary lead-btn"><i class="fa  fa-envelope"></i></button>
                                                <button type="button" class="btn btn-success lead-btn"><i class="fa  fa-phone"></i></button>
                                            </td>
                                            <td>Systems Administrator</td>
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
        </div>
        <!-- /#page-wrapper -->
    </div>
@endsection
