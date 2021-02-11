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
                    <li><a href="{{url('dashboard')}}">Dashboard</a></li>
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
                                <h3 style="color: #31708f;"><strong><i class="mdi mdi-alert-circle-outline fa-fw"></i>
                                        Welcome Onboard!</strong></h3>

                                <p>
                                    your account is not associated with any work workspaces yet, you can create a new
                                    workspace now.
                                </p>
                                <p>if your business is already has a workspace, please ask your workmate to invite you
                                    by email.</p>
                            </div>

                            <form method="POST" @if(isset($data)) action="{{url('workplace/'.$data->id)}}" @else
                                action="{{url('workplace')}}" @endif>
                                {{csrf_field()}}
                                @if(isset($data))
                                @method('PATCH')
                                @endif
                                <input type="hidden" name="admin_id" value="{{Auth::user()->id}}">
                                <div class="form-body">
                                    @if(isset($data))
                                    <h3 class="box-title m-t-40">Edit workspace</h3>
                                    @else
                                    <h3 class="box-title m-t-40">Create new workspace</h3>
                                    @endif
                                    <hr>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Workspace Name</label>
                                                <input required type="text" class="form-control"
                                                    placeholder="Business Name"
                                                    value="@if(isset($data)){{$data->title}}@endif" name="title"> </div>
                                        </div>
                                        <!--/span-->
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>TimeZone</label>
                                                <select @if(isset($data->timezone)) value="{{$data->timezone}}" @else
                                                    id="time-zone" @endif class="form-control" name="timezone" required>
                                                    <option></option>
                                                    <option value="Etc/GMT+12" @if(isset($data->timezone) &&
                                                        $data->timezone == "Etc/GMT+12")
                                                        selected @endif>(GMT-12:00) International Date Line West
                                                    </option>
                                                    <option value="Pacific/Midway" @if(isset($data->timezone) &&
                                                        $data->timezone == "Pacific/Midway") selected @endif>(GMT-11:00)
                                                        Midway Island, Samoa</option>
                                                    <option value="Pacific/Honolulu" @if(isset($data->timezone) &&
                                                        $data->timezone == "Pacific/Honolulu") selected
                                                        @endif>(GMT-10:00) Hawaii</option>
                                                    <option value="US/Alaska" @if(isset($data->timezone) &&
                                                        $data->timezone == "US/Alaska") selected @endif>(GMT-09:00)
                                                        Alaska</option>
                                                    <option value="America/Los_Angeles" @if(isset($data->timezone) &&
                                                        $data->timezone == "America/Los_Angeles") selected
                                                        @endif>(GMT-08:00) Pacific Time (US & Canada)</option>
                                                    <option value="America/Tijuana" @if(isset($data->timezone) &&
                                                        $data->timezone == "America/Tijuana") selected
                                                        @endif>(GMT-08:00) Tijuana, Baja California</option>
                                                    <option value="US/Arizona" @if(isset($data->timezone) &&
                                                        $data->timezone == "US/Arizona") selected @endif>(GMT-07:00)
                                                        Arizona</option>
                                                    <option value="America/Chihuahua" @if(isset($data->timezone) &&
                                                        $data->timezone == "America/Chihuahua") selected
                                                        @endif>(GMT-07:00) Chihuahua, La Paz, Mazatlan</option>
                                                    <option value="US/Mountain" @if(isset($data->timezone) &&
                                                        $data->timezone == "US/Mountain") selected @endif>(GMT-07:00)
                                                        Mountain Time (US & Canada)</option>
                                                    <option value="America/Managua" @if(isset($data->timezone) &&
                                                        $data->timezone == "America/Managua") selected
                                                        @endif>(GMT-06:00) Central America</option>
                                                    <option value="US/Central" @if(isset($data->timezone) &&
                                                        $data->timezone == "US/Central") selected @endif>(GMT-06:00)
                                                        Central Time (US & Canada)</option>
                                                    <option value="America/Mexico_City" @if(isset($data->timezone) &&
                                                        $data->timezone == "America/Mexico_City") selected
                                                        @endif>(GMT-06:00) Guadalajara, Mexico City, Monterrey</option>
                                                    <option value="Canada/Saskatchewan" @if(isset($data->timezone) &&
                                                        $data->timezone == "Canada/Saskatchewan") selected
                                                        @endif>(GMT-06:00) Saskatchewan</option>
                                                    <option value="America/Bogota" @if(isset($data->timezone) &&
                                                        $data->timezone == "America/Bogota") selected @endif>(GMT-05:00)
                                                        Bogota, Lima, Quito, Rio Branco</option>
                                                    <option value="US/Eastern" @if(isset($data->timezone) &&
                                                        $data->timezone == "US/Eastern") selected @endif>(GMT-05:00)
                                                        Eastern Time (US & Canada)</option>
                                                    <option value="US/East-Indiana" @if(isset($data->timezone) &&
                                                        $data->timezone == "US/East-Indiana") selected
                                                        @endif>(GMT-05:00) Indiana (East)</option>
                                                    <option value="Canada/Atlantic" @if(isset($data->timezone) &&
                                                        $data->timezone == "Canada/Atlantic") selected
                                                        @endif>(GMT-04:00) Atlantic Time (Canada)</option>
                                                    <option value="America/Caracas" @if(isset($data->timezone) &&
                                                        $data->timezone == "America/Caracas") selected
                                                        @endif>(GMT-04:00) Caracas, La Paz</option>
                                                    <option value="America/Manaus" @if(isset($data->timezone) &&
                                                        $data->timezone == "America/Manaus") selected @endif>(GMT-04:00)
                                                        Manaus</option>
                                                    <option value="America/Santiago" @if(isset($data->timezone) &&
                                                        $data->timezone == "America/Santiago") selected
                                                        @endif>(GMT-04:00) Santiago</option>
                                                    <option value="Canada/Newfoundland" @if(isset($data->timezone) &&
                                                        $data->timezone == "Canada/Newfoundland") selected
                                                        @endif>(GMT-03:30) Newfoundland</option>
                                                    <option value="America/Sao_Paulo" @if(isset($data->timezone) &&
                                                        $data->timezone == "America/Sao_Paulo") selected
                                                        @endif>(GMT-03:00) Brasilia</option>
                                                    <option value="America/Argentina/Buenos_Aires" @if(isset($data->
                                                        timezone) && $data->timezone ==
                                                        "America/Argentina/Buenos_Aires") selected @endif>(GMT-03:00)
                                                        Buenos Aires, Georgetown</option>
                                                    <option value="America/Godthab" @if(isset($data->timezone) &&
                                                        $data->timezone == "America/Godthab") selected
                                                        @endif>(GMT-03:00) Greenland</option>
                                                    <option value="America/Montevideo" @if(isset($data->timezone) &&
                                                        $data->timezone == "America/Montevideo") selected
                                                        @endif>(GMT-03:00) Montevideo</option>
                                                    <option value="America/Noronha" @if(isset($data->timezone) &&
                                                        $data->timezone == "America/Noronha") selected
                                                        @endif>(GMT-02:00) Mid-Atlantic</option>
                                                    <option value="Atlantic/Cape_Verde" @if(isset($data->timezone) &&
                                                        $data->timezone == "Atlantic/Cape_Verde") selected
                                                        @endif>(GMT-01:00) Cape Verde Is.</option>
                                                    <option value="Atlantic/Azores" @if(isset($data->timezone) &&
                                                        $data->timezone == "Atlantic/Azores") selected
                                                        @endif>(GMT-01:00) Azores</option>
                                                    <option value="Africa/Casablanca" @if(isset($data->timezone) &&
                                                        $data->timezone == "Africa/Casablanca") selected
                                                        @endif>(GMT+00:00) Casablanca, Monrovia, Reykjavik</option>
                                                    <option value="Etc/Greenwich" @if(isset($data->timezone) &&
                                                        $data->timezone == "Etc/Greenwich") selected @endif>(GMT+00:00)
                                                        Greenwich Mean Time : Dublin, Edinburgh, Lisbon, London</option>
                                                    <option value="Europe/Amsterdam" @if(isset($data->timezone) &&
                                                        $data->timezone == "Europe/Amsterdam") selected
                                                        @endif>(GMT+01:00) Amsterdam, Berlin, Bern, Rome, Stockholm,
                                                        Vienna</option>
                                                    <option value="Europe/Belgrade" @if(isset($data->timezone) &&
                                                        $data->timezone == "Europe/Belgrade") selected
                                                        @endif>(GMT+01:00) Belgrade, Bratislava, Budapest, Ljubljana,
                                                        Prague</option>
                                                    <option value="Europe/Brussels" @if(isset($data->timezone) &&
                                                        $data->timezone == "Europe/Brussels") selected
                                                        @endif>(GMT+01:00) Brussels, Copenhagen, Madrid, Paris</option>
                                                    <option value="Europe/Sarajevo" @if(isset($data->timezone) &&
                                                        $data->timezone == "Europe/Sarajevo") selected
                                                        @endif>(GMT+01:00) Sarajevo, Skopje, Warsaw, Zagreb</option>
                                                    <option value="Africa/Lagos" @if(isset($data->timezone) &&
                                                        $data->timezone == "Africa/Lagos") selected @endif>(GMT+01:00)
                                                        West Central Africa</option>
                                                    <option value="Asia/Amman" @if(isset($data->timezone) &&
                                                        $data->timezone == "Asia/Amman") selected @endif>(GMT+02:00)
                                                        Amman</option>
                                                    <option value="Europe/Athens" @if(isset($data->timezone) &&
                                                        $data->timezone == "Europe/Athens") selected @endif>(GMT+02:00)
                                                        Athens, Bucharest, Istanbul</option>
                                                    <option value="Asia/Beirut" @if(isset($data->timezone) &&
                                                        $data->timezone == "Asia/Beirut") selected @endif>(GMT+02:00)
                                                        Beirut</option>
                                                    <option value="Africa/Cairo" @if(isset($data->timezone) &&
                                                        $data->timezone == "Africa/Cairo") selected @endif>(GMT+02:00)
                                                        Cairo</option>
                                                    <option value="Africa/Harare" @if(isset($data->timezone) &&
                                                        $data->timezone == "Africa/Harare") selected @endif>(GMT+02:00)
                                                        Harare, Pretoria</option>
                                                    <option value="Europe/Helsinki" @if(isset($data->timezone) &&
                                                        $data->timezone == "Europe/Helsinki") selected
                                                        @endif>(GMT+02:00) Helsinki, Kyiv, Riga, Sofia, Tallinn, Vilnius
                                                    </option>
                                                    <option value="Asia/Jerusalem" @if(isset($data->timezone) &&
                                                        $data->timezone == "Asia/Jerusalem") selected @endif>(GMT+02:00)
                                                        Jerusalem</option>
                                                    <option value="Europe/Minsk" @if(isset($data->timezone) &&
                                                        $data->timezone == "Europe/Minsk") selected @endif>(GMT+02:00)
                                                        Minsk</option>
                                                    <option value="Africa/Windhoek" @if(isset($data->timezone) &&
                                                        $data->timezone == "Africa/Windhoek") selected
                                                        @endif>(GMT+02:00) Windhoek</option>
                                                    <option value="Asia/Kuwait" @if(isset($data->timezone) &&
                                                        $data->timezone == "Asia/Kuwait") selected @endif>(GMT+03:00)
                                                        Kuwait, Riyadh, Baghdad</option>
                                                    <option value="Europe/Moscow" @if(isset($data->timezone) &&
                                                        $data->timezone == "Europe/Moscow") selected @endif>(GMT+03:00)
                                                        Moscow, St. Petersburg, Volgograd</option>
                                                    <option value="Africa/Nairobi" @if(isset($data->timezone) &&
                                                        $data->timezone == "Africa/Nairobi") selected @endif>(GMT+03:00)
                                                        Nairobi</option>
                                                    <option value="Asia/Tbilisi" @if(isset($data->timezone) &&
                                                        $data->timezone == "Asia/Tbilisi") selected @endif>(GMT+03:00)
                                                        Tbilisi</option>
                                                    <option value="Asia/Tehran" @if(isset($data->timezone) &&
                                                        $data->timezone == "Asia/Tehran") selected @endif>(GMT+03:30)
                                                        Tehran</option>
                                                    <option value="Asia/Muscat" @if(isset($data->timezone) &&
                                                        $data->timezone == "Asia/Muscat") selected @endif>(GMT+04:00)
                                                        Abu Dhabi, Muscat</option>
                                                    <option value="Asia/Baku" @if(isset($data->timezone) &&
                                                        $data->timezone == "Asia/Baku") selected @endif>(GMT+04:00) Baku
                                                    </option>
                                                    <option value="Asia/Yerevan" @if(isset($data->timezone) &&
                                                        $data->timezone == "Asia/Yerevan") selected @endif>(GMT+04:00)
                                                        Yerevan</option>
                                                    <option value="Asia/Kabul" @if(isset($data->timezone) &&
                                                        $data->timezone == "Asia/Kabul") selected @endif>(GMT+04:30)
                                                        Kabul</option>
                                                    <option value="Asia/Yekaterinburg" @if(isset($data->timezone) &&
                                                        $data->timezone == "Asia/Yekaterinburg") selected
                                                        @endif>(GMT+05:00) Yekaterinburg</option>
                                                    <option value="Asia/Karachi" @if(isset($data->timezone) &&
                                                        $data->timezone == "Asia/Karachi") selected @endif>(GMT+05:00)
                                                        Islamabad, Karachi, Tashkent</option>
                                                    <option value="Asia/Calcutta" @if(isset($data->timezone) &&
                                                        $data->timezone == "Asia/Calcutta") selected @endif>(GMT+05:30)
                                                        Chennai, Kolkata, Mumbai, New Delhi</option>
                                                    <option value="Asia/Calcutta" @if(isset($data->timezone) &&
                                                        $data->timezone == "Asia/Calcutta") selected @endif>(GMT+05:30)
                                                        Sri Jayawardenapura</option>
                                                    <option value="Asia/Katmandu" @if(isset($data->timezone) &&
                                                        $data->timezone == "Asia/Katmandu") selected @endif>(GMT+05:45)
                                                        Kathmandu</option>
                                                    <option value="Asia/Almaty" @if(isset($data->timezone) &&
                                                        $data->timezone == "Asia/Almaty") selected @endif>(GMT+06:00)
                                                        Almaty, Novosibirsk</option>
                                                    <option value="Asia/Dhaka" @if(isset($data->timezone) &&
                                                        $data->timezone == "Asia/Dhaka") selected @endif>(GMT+06:00)
                                                        Astana, Dhaka</option>
                                                    <option value="Asia/Rangoon" @if(isset($data->timezone) &&
                                                        $data->timezone == "Asia/Rangoon") selected @endif>(GMT+06:30)
                                                        Yangon (Rangoon)</option>
                                                    <option value="Asia/Bangkok" @if(isset($data->timezone) &&
                                                        $data->timezone == "Asia/Bangkok") selected @endif>(GMT+07:00)
                                                        Bangkok, Hanoi, Jakarta</option>
                                                    <option value="Asia/Krasnoyarsk" @if(isset($data->timezone) &&
                                                        $data->timezone == "Asia/Krasnoyarsk") selected
                                                        @endif>(GMT+07:00) Krasnoyarsk</option>
                                                    <option value="Asia/Hong_Kong" @if(isset($data->timezone) &&
                                                        $data->timezone == "Asia/Hong_Kong") selected @endif>(GMT+08:00)
                                                        Beijing, Chongqing, Hong Kong, Urumqi</option>
                                                    <option value="Asia/Kuala_Lumpur" @if(isset($data->timezone) &&
                                                        $data->timezone == "Asia/Kuala_Lumpur") selected
                                                        @endif>(GMT+08:00) Kuala Lumpur, Singapore</option>
                                                    <option value="Asia/Irkutsk" @if(isset($data->timezone) &&
                                                        $data->timezone == "Asia/Irkutsk") selected @endif>(GMT+08:00)
                                                        Irkutsk, Ulaan Bataar</option>
                                                    <option value="Australia/Perth" @if(isset($data->timezone) &&
                                                        $data->timezone == "Australia/Perth") selected
                                                        @endif>(GMT+08:00) Perth</option>
                                                    <option value="Asia/Taipei" @if(isset($data->timezone) &&
                                                        $data->timezone == "Asia/Taipei") selected @endif>(GMT+08:00)
                                                        Taipei</option>
                                                    <option value="Asia/Tokyo" @if(isset($data->timezone) &&
                                                        $data->timezone == "Asia/Tokyo") selected @endif>(GMT+09:00)
                                                        Osaka, Sapporo, Tokyo</option>
                                                    <option value="Asia/Seoul" @if(isset($data->timezone) &&
                                                        $data->timezone == "Asia/Seoul") selected @endif>(GMT+09:00)
                                                        Seoul</option>
                                                    <option value="Asia/Yakutsk" @if(isset($data->timezone) &&
                                                        $data->timezone == "Asia/Yakutsk") selected @endif>(GMT+09:00)
                                                        Yakutsk</option>
                                                    <option value="Australia/Adelaide" @if(isset($data->timezone) &&
                                                        $data->timezone == "Australia/Adelaide") selected
                                                        @endif>(GMT+09:30) Adelaide</option>
                                                    <option value="Australia/Darwin" @if(isset($data->timezone) &&
                                                        $data->timezone == "Australia/Darwin") selected
                                                        @endif>(GMT+09:30) Darwin</option>
                                                    <option value="Australia/Brisbane" @if(isset($data->timezone) &&
                                                        $data->timezone == "Australia/Brisbane") selected
                                                        @endif>(GMT+10:00) Brisbane</option>
                                                    <option value="Australia/Canberra" @if(isset($data->timezone) &&
                                                        $data->timezone == "Australia/Canberra") selected
                                                        @endif>(GMT+10:00) Canberra, Melbourne, Sydney</option>
                                                    <option value="Australia/Hobart" @if(isset($data->timezone) &&
                                                        $data->timezone == "Australia/Hobart") selected
                                                        @endif>(GMT+10:00) Hobart</option>
                                                    <option value="Pacific/Guam" @if(isset($data->timezone) &&
                                                        $data->timezone == "Pacific/Guam") selected @endif>(GMT+10:00)
                                                        Guam, Port Moresby</option>
                                                    <option value="Asia/Vladivostok" @if(isset($data->timezone) &&
                                                        $data->timezone == "Asia/Vladivostok") selected
                                                        @endif>(GMT+10:00) Vladivostok</option>
                                                    <option value="Asia/Magadan" @if(isset($data->timezone) &&
                                                        $data->timezone == "Asia/Magadan") selected @endif>(GMT+11:00)
                                                        Magadan, Solomon Is., New Caledonia</option>
                                                    <option value="Pacific/Auckland" @if(isset($data->timezone) &&
                                                        $data->timezone == "Pacific/Auckland") selected
                                                        @endif>(GMT+12:00) Auckland, Wellington</option>
                                                    <option value="Pacific/Fiji" @if(isset($data->timezone) &&
                                                        $data->timezone == "Pacific/Fiji") selected @endif>(GMT+12:00)
                                                        Fiji, Kamchatka, Marshall Is.</option>
                                                    <option value="Pacific/Tongatapu" @if(isset($data->timezone) &&
                                                        $data->timezone == "Pacific/Tongatapu") selected
                                                        @endif>(GMT+13:00) Nuku'alofa</option>
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
                                                <input type="url" class="form-control" name="website"
                                                    placeholder="https://example.com"
                                                    value="@if(isset($data)){{$data->website}}@endif"
                                                    oninvalid="setCustomValidity(validity.typeMismatch
                                      ? 'Please enter a URL starting with https:// '
                                      : '(custom)Field cannot be blank ')"
    onchange="try { setCustomValidity('') } catch (e) {}"
                                                    >
                                            </div>
                                        </div>
                                        <!--/span-->
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Week Starts On</label>
                                                <select class="form-control" name="startday" required>
                                                    <option value="Monday" @if(isset($data) && $data->startday ==
                                                        'Monday') selected @endif>Monday</option>
                                                    <option value="Tuesday" @if(isset($data) && $data->startday ==
                                                        'Tuesday') selected @endif>Tuesday</option>
                                                    <option value="Wednesday" @if(isset($data) && $data->startday ==
                                                        'Wednesday') selected @endif>Wednesday</option>
                                                    <option value="Thursday" @if(isset($data) && $data->startday ==
                                                        'Thursday') selected @endif>Thursday</option>
                                                    <option value="Friday" @if(isset($data) && $data->startday ==
                                                        'Friday') selected @endif>Friday</option>
                                                    <option value="Saturday" @if(isset($data) && $data->startday ==
                                                        'Saturday') selected @endif>Saturday</option>
                                                    <option value="Sunday" @if(isset($data) && $data->startday ==
                                                        'Sunday') selected @endif>Sunday</option>
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
                                                    <input onchange='change_status(this,"sunStart", "sunEnd")'
                                                        type="checkbox" class="js-switch" data-color="#2cabe3"
                                                        name="status" @if(isset($data) && isset($data->times) &&
                                                    $data->times->sun_start) checked @endif /> Sunday </div>
                                                <div class="col-xs-4"> <input type="time" name="sun_start"
                                                        value="@if(isset($data) && isset($data->times)){{$data->times->sun_start}}@endif"
                                                        id="sunStart" class="form-control" @if(isset($data) &&
                                                        isset($data->times) && $data->times->sun_start) @else disabled
                                                    @endif></div>
                                                <div class="col-xs-4"> <input type="time" name="sun_end"
                                                        value="@if(isset($data) && isset($data->times)){{$data->times->sun_end}}@endif"
                                                        id="sunEnd" class="form-control" @if(isset($data) &&
                                                        isset($data->times) && $data->times->sun_start) @else disabled
                                                    @endif> </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="row form-group">
                                                <div class="col-xs-4">
                                                    <input onchange='change_status(this,"monStart", "monEnd")'
                                                        type="checkbox" class="js-switch" data-color="#2cabe3"
                                                        name="status" @if(isset($data) && isset($data->times) &&
                                                    $data->times->mon_start) checked @endif /> Monday </div>
                                                <div class="col-xs-4"> <input type="time" name="mon_start"
                                                        value="@if(isset($data) && isset($data->times)){{$data->times->mon_start}}@endif"
                                                        id="monStart" class="form-control" @if(isset($data) &&
                                                        isset($data->times) && $data->times->mon_start) @else disabled
                                                    @endif> </div>
                                                <div class="col-xs-4"> <input type="time" name="mon_end"
                                                        value="@if(isset($data) && isset($data->times)){{$data->times->mon_end}}@endif"
                                                        id="monEnd" class="form-control" @if(isset($data) &&
                                                        isset($data->times) && $data->times->mon_start) @else disabled
                                                    @endif> </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="row form-group">
                                                <div class="col-xs-4">
                                                    <input onchange='change_status(this,"tueStart", "tueEnd")'
                                                        type="checkbox" class="js-switch" data-color="#2cabe3"
                                                        name="status" @if(isset($data) && isset($data->times) &&
                                                    $data->times->tue_start) checked @endif /> Tuesday </div>
                                                <div class="col-xs-4"> <input type="time" name="tue_start"
                                                        value="@if(isset($data) && isset($data->times)){{$data->times->tue_start}}@endif"
                                                        id="tueStart" class="form-control" @if(isset($data) &&
                                                        isset($data->times) && $data->times->tue_start) @else disabled
                                                    @endif> </div>
                                                <div class="col-xs-4"> <input type="time" name="tue_end"
                                                        value="@if(isset($data) && isset($data->times)){{$data->times->tue_end}}@endif"
                                                        id="tueEnd" class="form-control" @if(isset($data) &&
                                                        isset($data->times) && $data->times->tue_start) @else disabled
                                                    @endif> </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="row form-group">
                                                <div class="col-xs-4">
                                                    <input onchange='change_status(this,"wedStart", "wedEnd")'
                                                        type="checkbox" class="js-switch" data-color="#2cabe3"
                                                        name="status" @if(isset($data) && isset($data->times) &&
                                                    $data->times->wed_start) checked @endif /> Wednesday </div>
                                                <div class="col-xs-4"> <input type="time" name="wed_start"
                                                        value="@if(isset($data) && isset($data->times)){{$data->times->wed_start}}@endif"
                                                        id="wedStart" class="form-control" @if(isset($data) &&
                                                        isset($data->times) && $data->times->wed_start) @else disabled
                                                    @endif> </div>
                                                <div class="col-xs-4"> <input type="time" name="wed_end"
                                                        value="@if(isset($data) && isset($data->times)){{$data->times->wed_end}}@endif"
                                                        id="wedEnd" class="form-control" @if(isset($data) &&
                                                        isset($data->times) && $data->times->wed_start) @else disabled
                                                    @endif> </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="row form-group">
                                                <div class="col-xs-4">
                                                    <input onchange='change_status(this,"thuStart", "thuEnd")'
                                                        type="checkbox" class="js-switch" data-color="#2cabe3"
                                                        name="status" @if(isset($data) && isset($data->times) &&
                                                    $data->times->thu_start) checked @endif /> Thursday </div>
                                                <div class="col-xs-4"> <input type="time" name="thu_start"
                                                        value="@if(isset($data) && isset($data->times)){{$data->times->thu_start}}@endif"
                                                        id="thuStart" class="form-control" @if(isset($data) &&
                                                        isset($data->times) && $data->times->thu_start) @else disabled
                                                    @endif> </div>
                                                <div class="col-xs-4"> <input type="time" name="thu_end"
                                                        value="@if(isset($data) && isset($data->times)){{$data->times->thu_end}}@endif"
                                                        id="thuEnd" class="form-control" @if(isset($data) &&
                                                        isset($data->times) && $data->times->thu_start) @else disabled
                                                    @endif> </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="row form-group">
                                                <div class="col-xs-4">
                                                    <input onchange='change_status(this,"friStart", "friEnd")'
                                                        type="checkbox" class="js-switch" data-color="#2cabe3"
                                                        name="status" @if(isset($data) && isset($data->times) &&
                                                    $data->times->fri_start) checked @endif /> Friday </div>
                                                <div class="col-xs-4"> <input type="time" name="fri_start"
                                                        value="@if(isset($data) && isset($data->times)){{$data->times->fri_start}}@endif"
                                                        id="friStart" class="form-control" @if(isset($data) &&
                                                        isset($data->times) && $data->times->fri_start) @else disabled
                                                    @endif> </div>
                                                <div class="col-xs-4"> <input type="time" name="fri_end"
                                                        value="@if(isset($data) && isset($data->times)){{$data->times->fri_end}}@endif"
                                                        id="friEnd" class="form-control" @if(isset($data) &&
                                                        isset($data->times) && $data->times->fri_start) @else disabled
                                                    @endif> </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="row form-group">
                                                <div class="col-xs-4">
                                                    <input onchange='change_status(this,"sutStart", "sutEnd")'
                                                        type="checkbox" class="js-switch" data-color="#2cabe3"
                                                        name="status" @if(isset($data) && isset($data->times) &&
                                                    $data->times->sat_start) checked @endif /> Saturday </div>
                                                <div class="col-xs-4"> <input type="time" name="sat_start"
                                                        value="@if(isset($data) && isset($data->times)){{$data->times->sat_start}}@endif"
                                                        id="sutStart" class="form-control" @if(isset($data) &&
                                                        isset($data->times) && $data->times->sat_start) @else disabled
                                                    @endif> </div>
                                                <div class="col-xs-4"> <input type="time" name="sat_end"
                                                        value="@if(isset($data) && isset($data->times)){{$data->times->sat_end}}@endif"
                                                        id="sutEnd" class="form-control" @if(isset($data) &&
                                                        isset($data->times) && $data->times->sat_start) @else disabled
                                                    @endif> </div>
                                            </div>
                                        </div>
                                    </div>
                                    <script>
                                        function change_status(value, start, end) {
                                            console.log(value.checked);
                                            document.getElementById(start).disabled = !value.checked;
                                            document.getElementById(end).disabled = !value.checked;
                                        }

                                    </script>
                                </div>
                                <div class="form-actions text-right">
                                    <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i>
                                        Save</button>
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
