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
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-info">
                    <div class="panel-wrapper collapse in" aria-expanded="true">
                        <div class="panel-body">
                            <div class="alert alert-info" role="alert">
                                <h3 style="color: #31708f;"><strong><i class="mdi mdi-alert-circle-outline fa-fw"></i> Welcome Onboard!</strong></h3>

                                <p>
                                    your account is not associated with any work workspaces yet, you can create a new workspace now.
                                </p>
                                <p>if your business is already has a workspace, please ask your workmate to invite you by email.</p>
                            </div>
                            
                            <form method="POST" @if(isset($data)) action="{{url('workplace/'.$data->id)}}" @else action="{{url('workplace')}}" @endif>
                                {{csrf_field()}}
                                @if(isset($data))
                                @method('PATCH')
                                @endif
                                <input type="hidden" name="admin_id" value="{{Auth::user()->id}}">
                                <div class="form-body">
                                    <h3 class="box-title m-t-40">Create new workspace</h3>
                                    <hr>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Workspace Name</label>
                                                <input required type="text" class="form-control" placeholder="XYZ Workspace" value="@if(isset($data)){{$data->title}}@endif" name="title"> </div>
                                        </div>
                                        <!--/span-->
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>TimeZone</label>
                                                <select id="time-zone" class="form-control" name="timezone" required>
                                                    <option></option>
                                                    <option value="Etc/GMT+12">(GMT-12:00) International Date Line West</option>
                                                    <option value="Pacific/Midway">(GMT-11:00) Midway Island, Samoa</option>
                                                    <option value="Pacific/Honolulu">(GMT-10:00) Hawaii</option>
                                                    <option value="US/Alaska">(GMT-09:00) Alaska</option>
                                                    <option value="America/Los_Angeles">(GMT-08:00) Pacific Time (US & Canada)</option>
                                                    <option value="America/Tijuana">(GMT-08:00) Tijuana, Baja California</option>
                                                    <option value="US/Arizona">(GMT-07:00) Arizona</option>
                                                    <option value="America/Chihuahua">(GMT-07:00) Chihuahua, La Paz, Mazatlan</option>
                                                    <option value="US/Mountain">(GMT-07:00) Mountain Time (US & Canada)</option>
                                                    <option value="America/Managua">(GMT-06:00) Central America</option>
                                                    <option value="US/Central">(GMT-06:00) Central Time (US & Canada)</option>
                                                    <option value="America/Mexico_City">(GMT-06:00) Guadalajara, Mexico City, Monterrey</option>
                                                    <option value="Canada/Saskatchewan">(GMT-06:00) Saskatchewan</option>
                                                    <option value="America/Bogota">(GMT-05:00) Bogota, Lima, Quito, Rio Branco</option>
                                                    <option value="US/Eastern">(GMT-05:00) Eastern Time (US & Canada)</option>
                                                    <option value="US/East-Indiana">(GMT-05:00) Indiana (East)</option>
                                                    <option value="Canada/Atlantic">(GMT-04:00) Atlantic Time (Canada)</option>
                                                    <option value="America/Caracas">(GMT-04:00) Caracas, La Paz</option>
                                                    <option value="America/Manaus">(GMT-04:00) Manaus</option>
                                                    <option value="America/Santiago">(GMT-04:00) Santiago</option>
                                                    <option value="Canada/Newfoundland">(GMT-03:30) Newfoundland</option>
                                                    <option value="America/Sao_Paulo">(GMT-03:00) Brasilia</option>
                                                    <option value="America/Argentina/Buenos_Aires">(GMT-03:00) Buenos Aires, Georgetown</option>
                                                    <option value="America/Godthab">(GMT-03:00) Greenland</option>
                                                    <option value="America/Montevideo">(GMT-03:00) Montevideo</option>
                                                    <option value="America/Noronha">(GMT-02:00) Mid-Atlantic</option>
                                                    <option value="Atlantic/Cape_Verde">(GMT-01:00) Cape Verde Is.</option>
                                                    <option value="Atlantic/Azores">(GMT-01:00) Azores</option>
                                                    <option value="Africa/Casablanca">(GMT+00:00) Casablanca, Monrovia, Reykjavik</option>
                                                    <option value="Etc/Greenwich">(GMT+00:00) Greenwich Mean Time : Dublin, Edinburgh, Lisbon, London</option>
                                                    <option value="Europe/Amsterdam">(GMT+01:00) Amsterdam, Berlin, Bern, Rome, Stockholm, Vienna</option>
                                                    <option value="Europe/Belgrade">(GMT+01:00) Belgrade, Bratislava, Budapest, Ljubljana, Prague</option>
                                                    <option value="Europe/Brussels">(GMT+01:00) Brussels, Copenhagen, Madrid, Paris</option>
                                                    <option value="Europe/Sarajevo">(GMT+01:00) Sarajevo, Skopje, Warsaw, Zagreb</option>
                                                    <option value="Africa/Lagos">(GMT+01:00) West Central Africa</option>
                                                    <option value="Asia/Amman">(GMT+02:00) Amman</option>
                                                    <option value="Europe/Athens">(GMT+02:00) Athens, Bucharest, Istanbul</option>
                                                    <option value="Asia/Beirut">(GMT+02:00) Beirut</option>
                                                    <option value="Africa/Cairo">(GMT+02:00) Cairo</option>
                                                    <option value="Africa/Harare">(GMT+02:00) Harare, Pretoria</option>
                                                    <option value="Europe/Helsinki">(GMT+02:00) Helsinki, Kyiv, Riga, Sofia, Tallinn, Vilnius</option>
                                                    <option value="Asia/Jerusalem">(GMT+02:00) Jerusalem</option>
                                                    <option value="Europe/Minsk">(GMT+02:00) Minsk</option>
                                                    <option value="Africa/Windhoek">(GMT+02:00) Windhoek</option>
                                                    <option value="Asia/Kuwait">(GMT+03:00) Kuwait, Riyadh, Baghdad</option>
                                                    <option value="Europe/Moscow">(GMT+03:00) Moscow, St. Petersburg, Volgograd</option>
                                                    <option value="Africa/Nairobi">(GMT+03:00) Nairobi</option>
                                                    <option value="Asia/Tbilisi">(GMT+03:00) Tbilisi</option>
                                                    <option value="Asia/Tehran">(GMT+03:30) Tehran</option>
                                                    <option value="Asia/Muscat">(GMT+04:00) Abu Dhabi, Muscat</option>
                                                    <option value="Asia/Baku">(GMT+04:00) Baku</option>
                                                    <option value="Asia/Yerevan">(GMT+04:00) Yerevan</option>
                                                    <option value="Asia/Kabul">(GMT+04:30) Kabul</option>
                                                    <option value="Asia/Yekaterinburg">(GMT+05:00) Yekaterinburg</option>
                                                    <option value="Asia/Karachi">(GMT+05:00) Islamabad, Karachi, Tashkent</option>
                                                    <option value="Asia/Calcutta">(GMT+05:30) Chennai, Kolkata, Mumbai, New Delhi</option>
                                                    <option value="Asia/Calcutta">(GMT+05:30) Sri Jayawardenapura</option>
                                                    <option value="Asia/Katmandu">(GMT+05:45) Kathmandu</option>
                                                    <option value="Asia/Almaty">(GMT+06:00) Almaty, Novosibirsk</option>
                                                    <option value="Asia/Dhaka">(GMT+06:00) Astana, Dhaka</option>
                                                    <option value="Asia/Rangoon">(GMT+06:30) Yangon (Rangoon)</option>
                                                    <option value="Asia/Bangkok">(GMT+07:00) Bangkok, Hanoi, Jakarta</option>
                                                    <option value="Asia/Krasnoyarsk">(GMT+07:00) Krasnoyarsk</option>
                                                    <option value="Asia/Hong_Kong">(GMT+08:00) Beijing, Chongqing, Hong Kong, Urumqi</option>
                                                    <option value="Asia/Kuala_Lumpur">(GMT+08:00) Kuala Lumpur, Singapore</option>
                                                    <option value="Asia/Irkutsk">(GMT+08:00) Irkutsk, Ulaan Bataar</option>
                                                    <option value="Australia/Perth">(GMT+08:00) Perth</option>
                                                    <option value="Asia/Taipei">(GMT+08:00) Taipei</option>
                                                    <option value="Asia/Tokyo">(GMT+09:00) Osaka, Sapporo, Tokyo</option>
                                                    <option value="Asia/Seoul">(GMT+09:00) Seoul</option>
                                                    <option value="Asia/Yakutsk">(GMT+09:00) Yakutsk</option>
                                                    <option value="Australia/Adelaide">(GMT+09:30) Adelaide</option>
                                                    <option value="Australia/Darwin">(GMT+09:30) Darwin</option>
                                                    <option value="Australia/Brisbane">(GMT+10:00) Brisbane</option>
                                                    <option value="Australia/Canberra">(GMT+10:00) Canberra, Melbourne, Sydney</option>
                                                    <option value="Australia/Hobart">(GMT+10:00) Hobart</option>
                                                    <option value="Pacific/Guam">(GMT+10:00) Guam, Port Moresby</option>
                                                    <option value="Asia/Vladivostok">(GMT+10:00) Vladivostok</option>
                                                    <option value="Asia/Magadan">(GMT+11:00) Magadan, Solomon Is., New Caledonia</option>
                                                    <option value="Pacific/Auckland">(GMT+12:00) Auckland, Wellington</option>
                                                    <option value="Pacific/Fiji">(GMT+12:00) Fiji, Kamchatka, Marshall Is.</option>
                                                    <option value="Pacific/Tongatapu">(GMT+13:00) Nuku'alofa</option>
                                                </select>
                                            </div>
                                        </div>
                                        <!--/span-->
                                    </div>
                                    <!--/row-->
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Website</label>
                                                <input type="url" class="form-control" name="website" placeholder="https://example.com" value="@if(isset($data)){{$data->website}}@endif">
                                            </div>
                                        </div>
                                        <!--/span-->
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Week Starts On</label>
                                                <select class="form-control" name="startday" required>
                                                    <option value="Monday">Monday</option>
                                                    <option value="Tuesday">Tuesday</option>
                                                    <option value="Wednesday">Wednesday</option>
                                                    <option value="Thursday">Thursday</option>
                                                    <option value="Friday">Friday</option>
                                                    <option value="Saturday">Saturday</option>
                                                    <option value="Sunday">Sunday</option>
                                                </select>
                                            </div>
                                        </div>
                                        <!--/span-->
                                    </div>
                                    
                                        <label>working days & times</label>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="row form-group">
                                                <div class="col-xs-4">
                                                    <input onchange='change_status(this,"sunStart", "sunEnd")' type="checkbox" 
                                                    class="js-switch" data-color="#2cabe3" name="status"/> Sunday </div>
                                                <div class="col-xs-4"> <input type="time"  id="sunStart" class="form-control" disabled></div>
                                                <div class="col-xs-4"> <input type="time" id="sunEnd" class="form-control" disabled> </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="row form-group">
                                                <div class="col-xs-4">
                                                    <input onchange='change_status(this,"monStart", "monEnd")' type="checkbox" 
                                                    class="js-switch" data-color="#2cabe3" name="status" /> Monday </div>
                                                <div class="col-xs-4"> <input type="time" name="" id="monStart" class="form-control" disabled> </div>
                                                <div class="col-xs-4"> <input type="time" name="" id="monEnd" class="form-control" disabled> </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="row form-group">
                                                <div class="col-xs-4">
                                                    <input onchange='change_status(this,"tueStart", "tueEnd")' type="checkbox" 
                                                    class="js-switch" data-color="#2cabe3" name="status" /> Tuesday </div>
                                                <div class="col-xs-4"> <input type="time" name="" id="tueStart" class="form-control" disabled> </div>
                                                <div class="col-xs-4"> <input type="time" name="" id="tueEnd" class="form-control" disabled> </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="row form-group">
                                                <div class="col-xs-4">
                                                    <input onchange='change_status(this,"wedStart", "wedEnd")' type="checkbox" 
                                                    class="js-switch" data-color="#2cabe3" name="status" /> Wednesday </div>
                                                <div class="col-xs-4"> <input type="time" name="" id="wedStart" class="form-control" disabled> </div>
                                                <div class="col-xs-4"> <input type="time" name="" id="wedEnd" class="form-control" disabled> </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="row form-group">
                                                <div class="col-xs-4">
                                                    <input onchange='change_status(this,"thuStart", "thuEnd")' type="checkbox" 
                                                    class="js-switch" data-color="#2cabe3" name="status" /> Thursday </div>
                                                <div class="col-xs-4"> <input type="time" name="" id="thuStart" class="form-control" disabled> </div>
                                                <div class="col-xs-4"> <input type="time" name="" id="thuEnd" class="form-control" disabled> </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="row form-group">
                                                <div class="col-xs-4">
                                                    <input onchange='change_status(this,"friStart", "friEnd")' type="checkbox" 
                                                    class="js-switch" data-color="#2cabe3" name="status" /> Friday </div>
                                                <div class="col-xs-4"> <input type="time" name="" id="friStart" class="form-control" disabled> </div>
                                                <div class="col-xs-4"> <input type="time" name="" id="friEnd" class="form-control" disabled> </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="row form-group">
                                                <div class="col-xs-4">
                                                    <input onchange='change_status(this,"sutStart", "sutEnd")' type="checkbox" 
                                                    class="js-switch" data-color="#2cabe3" name="status" /> Suterday </div>
                                                <div class="col-xs-4"> <input type="time" name="" id="sutStart" class="form-control" disabled> </div>
                                                <div class="col-xs-4"> <input type="time" name="" id="sutEnd" class="form-control" disabled> </div>
                                            </div>
                                        </div>
                                    </div>
                                    <script>
                                        function change_status(value,start,end){
                                            console.log(value.checked)
                                            document.getElementById(start).disabled = !value.checked;
                                            document.getElementById(end).disabled = !value.checked;
                                        }
                                    </script>
                                </div>
                                <div class="form-actions text-right">
                                    <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i> Save</button>
                                    <button type="reset" class="btn btn-dark">Cancel</button>
                                </div>
                            </form>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /#page-wrapper -->
</div>
@endsection