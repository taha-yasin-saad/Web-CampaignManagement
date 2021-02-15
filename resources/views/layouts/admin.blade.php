<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/svg+xml" href="{{asset('fav-512.svg')}}">
    <title>Closor</title>
    <!-- Bootstrap Core CSS -->
    <link href="{{asset('bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('')}}/plugins/bower_components/datatables/jquery.dataTables.min.css" rel="stylesheet"
        type="text/css" />
    <link href="https://cdn.datatables.net/buttons/1.2.2/css/buttons.dataTables.min.css" rel="stylesheet"
        type="text/css" />
    <!-- Menu CSS -->
    <link href="{{asset('plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css')}}" rel="stylesheet">
    <!-- toast CSS -->
    <link href="{{asset('plugins/bower_components/toast-master/css/jquery.toast.css')}}" rel="stylesheet">
    <!-- morris CSS -->
    <link href="{{asset('plugins/bower_components/morrisjs/morris.css')}}" rel="stylesheet">
    <!-- chartist CSS -->
    <link href="{{asset('plugins/bower_components/chartist-js/dist/chartist.min.css')}}" rel="stylesheet">
    <link href="{{asset('plugins/bower_components/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css')}}"
        rel="stylesheet">
    <!-- Calendar CSS -->
    <link href="{{asset('plugins/bower_components/calendar/dist/fullcalendar.css')}}" rel="stylesheet" />
    <link rel="stylesheet" href="{{asset('plugins/bower_components/dropify/dist/css/dropify.min.css')}}">
    <link href="{{asset('plugins/bower_components/bootstrap-datepicker/bootstrap-datepicker.min.css')}}"
        rel="stylesheet" type="text/css" />

    <link href="{{asset('plugins/bower_components/switchery/dist/switchery.min.css')}}" rel="stylesheet" />
    <link href="{{asset('plugins/bower_components/bootstrap-select/bootstrap-select.min.css')}}" rel="stylesheet" />
    <link href="{{asset('plugins/bower_components/bootstrap-tagsinput/dist/bootstrap-tagsinput.css')}}"
        rel="stylesheet" />
    <link href="{{asset('plugins/bower_components/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.css')}}"
        rel="stylesheet" />

    <!-- animation CSS -->
    <link href="{{asset('css/animate.css')}}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <link href="{{asset('css/new.css')}}" rel="stylesheet">

    <!-- color CSS -->
    <link href="{{asset('css/colors/blue-dark.css')}}" id="theme" rel="stylesheet">
    <link href="{{asset('plugins/bower_components/multiselect/css/multi-select.css')}}" rel="stylesheet"
        type="text/css" />
    <link href="{{asset('plugins/bower_components/custom-select/custom-select.css')}}" rel="stylesheet"
        type="text/css" />
    <!--alerts CSS -->
    <link href="{{asset('plugins/bower_components/sweetalert/sweetalert.css')}}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{asset('css/intl-tel-input-17.0.0/build/css/intlTelInput.css')}}">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-colorpicker/2.3.3/css/bootstrap-colorpicker.min.css"
        rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-colorpicker/2.3.3/js/bootstrap-colorpicker.min.js">
    </script>

</head>

<body class="fix-header">
    <!-- ============================================================== -->
    <!-- Preloader -->
    <!-- ============================================================== -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" />
        </svg>
    </div>
    <!-- ============================================================== -->
    <!-- Wrapper -->
    <!-- ============================================================== -->
    <div id="wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <nav class="navbar navbar-default m-b-0">
            <div class="navbar-header">
                <!-- Search input and Toggle icon -->
                <ul class="nav navbar-top-links navbar-right pull-right">
                    <li class="dropdown">
                        <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#">
                            <b class="hidden-xs">{{Auth::user()->name}}</b>
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu dropdown-user animated">
                            <li class="{{ (request()->is('profile*')) ? 'active' : '' }}">
                                <a href="{{url('profile')}}">
                                    <i class="ti-settings"></i>
                                    Profile Setting
                                </a>
                            </li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#"
                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i
                                        class="fa fa-power-off"></i> Logout</a>
                                <form id="logout-form" action="{{url('logout')}}" method="POST" style="display: none;">
                                    {{csrf_field()}}
                                </form>
                            </li>

                        </ul>
                        <!-- /.dropdown-user -->
                    </li>

                    <!-- /.dropdown -->
                </ul>
                <ul class="nav navbar-top-links navbar-right pull-right">
                    <li class="hidden-md hidden-lg"><a href="javascript:void(0)"
                            class="open-close waves-effect waves-light"><i class="ti-menu"></i></a></li>
                </ul>
            </div>
            <!-- /.navbar-header -->
            <!-- /.navbar-top-links -->
            <!-- /.navbar-static-side -->
        </nav>
        <!-- End Top Navigation -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        @if(isset(auth()->user()->role) && (auth()->user()->role == 0 || auth()->user()->role == 1))

        @include('layouts.side-menu-admin')

        @else

        @include('layouts.side-menu-general')

        @endif
        <!-- ============================================================== -->
        <!-- End Left Sidebar -->
        <!-- ============================================================== -->

        @yield('content')


    </div>
    <style>
        .switchery {
            height: 20px;
            width: 40px;
            margin-right: 18px;
        }
        .switchery>small {
            height: 20px;
            width: 20px;
        }
    </style>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="{{asset('plugins/bower_components/jquery/dist/jquery.min.js')}}"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="{{asset('plugins/bower_components/bootstrap-rtl-master/dist/js/bootstrap-rtl.min.js')}}">
    </script>
    <!-- Menu Plugin JavaScript -->
    <script src="{{asset('plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js')}}"></script>
    <!--slimscroll JavaScript -->
    <script src="{{asset('js/jquery.slimscroll.js')}}"></script>
    <!--Wave Effects -->
    <script src="{{asset('js/waves.js')}}"></script>
    <!--Counter js -->
    <script src="{{asset('plugins/bower_components/dropify/dist/js/dropify.min.js')}}"></script>
    <script>
        $(document).ready(function() {
        // Basic
        $('.dropify').dropify();
        // Translated
        $('.dropify-fr').dropify({
            messages: {
                default: 'Glissez-déposez un fichier ici ou cliquez',
                replace: 'Glissez-déposez un fichier ou cliquez pour remplacer',
                remove: 'Supprimer',
                error: 'Désolé, le fichier trop volumineux'
            }
        });
        // Used events
        var drEvent = $('#input-file-events').dropify();
        drEvent.on('dropify.beforeClear', function(event, element) {
            return confirm("Do you really want to delete \"" + element.file.name + "\" ?");
        });
        drEvent.on('dropify.afterClear', function(event, element) {
            alert('File deleted');
        });
        drEvent.on('dropify.errors', function(event, element) {
            console.log('Has Errors');
        });
        var drDestroy = $('#input-file-to-destroy').dropify();
        drDestroy = drDestroy.data('dropify')
        $('#toggleDropify').on('click', function(e) {
            e.preventDefault();
            if (drDestroy.isDropified()) {
                drDestroy.destroy();
            } else {
                drDestroy.init();
            }
        })
    });
    </script>
    <!--Counter js -->
    <script src="{{asset('plugins/bower_components/waypoints/lib/jquery.waypoints.js')}}"></script>
    <script src="{{asset('plugins/bower_components/counterup/jquery.counterup.min.js')}}"></script>
    <!--Morris JavaScript -->
    <script src="{{asset('plugins/bower_components/raphael/raphael-min.js')}}"></script>
    <script src="{{asset('plugins/bower_components/morrisjs/morris.js')}}"></script>
    <!-- <script src="{{asset('js/morris-data.js')}}"></script> -->
    <!--Style Switcher -->
    <!-- chartist chart -->
    <script src="{{asset('plugins/bower_components/chartist-js/dist/chartist.min.js')}}"></script>
    <script
        src="{{asset('plugins/bower_components/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.min.js')}}">
    </script>
    <!-- Calendar JavaScript -->
    <script src="{{asset('plugins/bower_components/moment/moment.js')}}"></script>
    <script src='{{asset('plugins/bower_components/calendar/dist/fullcalendar.min.js')}}'></script>
    <script src="{{asset('plugins/bower_components/calendar/dist/cal-init.js')}}"></script>
    <!-- Custom Theme JavaScript -->
    <script src="{{asset('js/custom.min.js')}}"></script>
    <script src="{{asset('')}}/plugins/bower_components/datatables/jquery.dataTables.min.js"></script>
    <script src="{{asset('')}}/plugins/bower_components/datatables-plugins/api/sum().js"></script>
    <!-- start - This is for export functionality only -->
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
    <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
    <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js"></script>
    {{-- <script src="{{asset('js/dashboard1.js')}}"></script> --}}
    <!-- Custom tab JavaScript -->
    <script src="{{asset('js/cbpFWTabs.js')}}"></script>
    @yield('status')
    {{-- <script type="text/javascript">
        (function() {
        [].slice.call(document.querySelectorAll('.sttabs')).forEach(function(el) {
            new CBPFWTabs(el);
        });
    })();

    $(document).ready(function() {
        $('#myTable').DataTable;
        $(document).ready(function() {
            var table = $('#example').DataTable({
                "columnDefs": [{
                    "visible": false,
                    "targets": 2
                }],
                "order": [
                    [2, 'asc']
                ],
                "displayLength": 25,
                "drawCallback": function(settings) {
                    var api = this.api();
                    var rows = api.rows({
                        page: 'current'
                    }).nodes();
                    var last = null;
                    api.column(2, {
                        page: 'current'
                    }).data().each(function(group, i) {
                        if (last !== group) {
                            $(rows).eq(i).before(
                                '<tr class="group"><td colspan="5">' +
                                group + '</td></tr>');
                            last = group;
                        }
                    });
                }
            });
            // Order by the grouping
            $('#example tbody').on('click', 'tr.group', function() {
                var currentOrder = table.order()[0];
                if (currentOrder[0] === 2 && currentOrder[1] === 'asc') {
                    table.order([2, 'desc']).draw();
                } else {
                    table.order([2, 'asc']).draw();
                }
            });
        });
    });
    </script> --}}
    <script>
        $(document).ready(function() {
            $('#myTable').DataTable();
            $('.myTables').DataTable();
            $(document).ready(function() {
                var table = $('#example').DataTable({
                    "columnDefs": [{
                        "visible": false,
                        "targets": 2
                    }],
                    "order": [
                        [2, 'asc']
                    ],
                    "displayLength": 25,
                    "drawCallback": function(settings) {
                        var api = this.api();
                        var rows = api.rows({
                            page: 'current'
                        }).nodes();
                        var last = null;
                        api.column(2, {
                            page: 'current'
                        }).data().each(function(group, i) {
                            if (last !== group) {
                                $(rows).eq(i).before('<tr class="group"><td colspan="5">' + group + '</td></tr>');
                                last = group;
                            }
                        });
                    }
                });
                // Order by the grouping
                $('#example tbody').on('click', 'tr.group', function() {
                    var currentOrder = table.order()[0];
                    if (currentOrder[0] === 2 && currentOrder[1] === 'asc') {
                        table.order([2, 'desc']).draw();
                    } else {
                        table.order([2, 'asc']).draw();
                    }
                });
            });
        });
            $('#example23').DataTable({
                dom: 'Bfrtip',
                buttons: [
                    'copy', 'csv', 'excel', 'pdf', 'print'
                ]
            });
    </script>
    <script src="{{asset('plugins/bower_components/switchery/dist/switchery.min.js')}}"></script>
    <script src="{{asset('plugins/bower_components/custom-select/custom-select.min.js')}}" type="text/javascript">
    </script>
    <script src="{{asset('plugins/bower_components/bootstrap-select/bootstrap-select.min.js')}}" type="text/javascript">
    </script>
    <script src="{{asset('plugins/bower_components/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js')}}"></script>
    <script src="{{asset('plugins/bower_components/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.js')}}"
        type="text/javascript"></script>
    <script type="text/javascript" src="{{asset('plugins/bower_components/multiselect/js/jquery.multi-select.js')}}">
    </script>
    <script>
        jQuery(document).ready(function() {
        // Switchery
        var elems = Array.prototype.slice.call(document.querySelectorAll('.js-switch'));
        $('.js-switch').each(function() {
            new Switchery($(this)[0], $(this).data());
        });
        // For select 2
        $(".select2").select2();
        $('.selectpicker').selectpicker();
        //Bootstrap-TouchSpin
        $(".vertical-spin").TouchSpin({
            verticalbuttons: true,
            verticalupclass: 'ti-plus',
            verticaldownclass: 'ti-minus'
        });
        var vspinTrue = $(".vertical-spin").TouchSpin({
            verticalbuttons: true
        });
        if (vspinTrue) {
            $('.vertical-spin').prev('.bootstrap-touchspin-prefix').remove();
        }
        $("input[name='tch1']").TouchSpin({
            min: 0,
            max: 100,
            step: 0.1,
            decimals: 2,
            boostat: 5,
            maxboostedstep: 10,
            postfix: '%'
        });
        $("input[name='tch2']").TouchSpin({
            min: -1000000000,
            max: 1000000000,
            stepinterval: 50,
            maxboostedstep: 10000000,
            prefix: '$'
        });
        $("input[name='tch3']").TouchSpin();
        $("input[name='tch3_22']").TouchSpin({
            initval: 40
        });
        $("input[name='tch5']").TouchSpin({
            prefix: "pre",
            postfix: "post"
        });
        // For multiselect
        $('#pre-selected-options').multiSelect();
        $('#optgroup').multiSelect({
            selectableOptgroup: true
        });
        $('#public-methods').multiSelect();
        $('#select-all').click(function() {
            $('#public-methods').multiSelect('select_all');
            return false;
        });
        $('#deselect-all').click(function() {
            $('#public-methods').multiSelect('deselect_all');
            return false;
        });
        $('#refresh').on('click', function() {
            $('#public-methods').multiSelect('refresh');
            return false;
        });
        $('#add-option').on('click', function() {
            $('#public-methods').multiSelect('addOption', {
                value: 42,
                text: 'test 42',
                index: 0
            });
            return false;
        });
    });
    </script>
    <!-- <script src="http://www.geoplugin.net/javascript.gp" type="text/javascript"></script> -->
    <!-- get time zone -->
    <script type="text/javascript">
    jQuery(document).ready(function($) {

        // jQuery.getScript('http://www.geoplugin.net/javascript.gp', function() {
        //     var zone = geoplugin_timezone();
        //     $("#time-zone").val(zone);
        //     console.log('time-zone is');
        //     console.log(zone);
        // });

        $.get("https://api.ipdata.co?api-key=bbcc18dbda8db855a82aaecedab1b35c243700bd625b2ac94a9a8926", function(response) {
            console.log(response);
            var code = response.country_code;
            var zone = response.time_zone.name;
            $("#time-zone").val(zone);
            console.log(zone);
        }, "jsonp");
    });
    </script>
    {{-- country flag js --}}
    <script src="{{asset('css/intl-tel-input-17.0.0/build/js/intlTelInput.js')}}"></script>
    <script>
        var input = document.querySelector("#phone");
    window.intlTelInput(input);
    </script>
    <script>
        var input = document.querySelector("#phone");
    window.intlTelInput(input, {
        autoPlaceholder: "aggressive",
        placeholderNumberType: "MOBILE",
        utilsScript: "build/js/utils.js",
    });
    var iti = window.intlTelInputGlobals.getInstance(input);
    input.addEventListener("countrychange", function() {
        console.log(iti.getSelectedCountryData().dialCode);
        $('.phone22').val(iti.getSelectedCountryData().dialCode);
    });
    </script>
    @if(isset(auth()->user()->country_code))
    <script>
        // iti.setCountry({{auth()->user()->country_code}});
    var baseUrl = "{{url('/')}}";
    jQuery(document).ready(function($) {

        $.get("https://api.ipdata.co?api-key=bbcc18dbda8db855a82aaecedab1b35c243700bd625b2ac94a9a8926", function(response) {
            console.log(response.country_code);
            var code = response.country_code;

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                type: 'GET',
                url: baseUrl + '/isoCode/' + {{auth()->user()->country_code}},
                success: function(data) {
                    // let phone_code = data;
                    // $('#phone2').val(data);
                    var iso = data.toLowerCase();
                    iti.setCountry(iso);

                }
            });
        });
    });
    </script>
    @else
    <script type="text/javascript">
        var baseUrl = "{{url('/')}}";
    jQuery(document).ready(function($) {
        // getLocation();

        // jQuery.getScript('https://www.geoplugin.net/javascript.gp', function()
        // {
        //     var code= geoplugin_countryCode();
        //     console.log('old Api: '+code);

        // });

        $.get("https://api.ipdata.co?api-key=test", function(response) {
            console.log(response.country_code);
            var code = response.country_code;
            $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
            });
            $.ajax({
                type:'GET',
                url:baseUrl+'/phoneCode/'+code,
                success:function(data){
                    let phone_code = data;
                    $('#phone2').val(data);
                    var res = code.toLowerCase();
                    iti.setCountry(res);

                }
            });
        }, "jsonp");
    });
    </script>
    @endif
    <!-- end get time zone -->
    <script src="{{asset('plugins/bower_components/toast-master/js/jquery.toast.js')}}"></script>
    <!--Style Switcher -->
    <script src="{{asset('plugins/bower_components/styleswitcher/jQuery.style.switcher.js')}}"></script>
    <!-- Sweet-Alert  -->
    <script src="{{asset('plugins/bower_components/sweetalert/sweetalert.min.js')}}"></script>
    <script src="{{asset('plugins/bower_components/sweetalert/jquery.sweet-alert.custom.js')}}"></script>
    <script src="{{asset('plugins\bower_components\colorpicker\bootstrap-colorpicker.js')}}"></script>
    <script src="{{asset('/')}}/plugins/bower_components/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>


    @yield('chart')
    @yield('filter_table')
    @yield('js')
    {{-- <script src="http://localhost/closor/public/widget/widget.js?id=1"></script> --}}
    {{-- @include('widget') --}}
</body>

</html>
