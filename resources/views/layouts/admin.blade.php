<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="description" content="">
      <meta name="author" content="">
      <link rel="icon" type="image/png" sizes="16x16" href="{{asset('logo.jpg')}}">
      <title>Closor</title>
      <!-- Bootstrap Core CSS -->
      <link href="{{asset('bootstrap/dist/css/bootstrap.min.css')}}"
          rel="stylesheet">
      <!-- Menu CSS -->
      <link href="{{asset('plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css')}}" rel="stylesheet">
      <!-- toast CSS -->
      <link href="{{asset('plugins/bower_components/toast-master/css/jquery.toast.css')}}" rel="stylesheet">
      <!-- morris CSS -->
      <link href="{{asset('plugins/bower_components/morrisjs/morris.css')}}" rel="stylesheet">
      <!-- chartist CSS -->
      <link href="{{asset('plugins/bower_components/chartist-js/dist/chartist.min.css')}}" rel="stylesheet">
      <link
          href="{{asset('plugins/bower_components/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css')}}"
          rel="stylesheet">
      <!-- Calendar CSS -->
      <link href="{{asset('plugins/bower_components/calendar/dist/fullcalendar.css')}}" rel="stylesheet" />
      <link rel="stylesheet" href="{{asset('plugins/bower_components/dropify/dist/css/dropify.min.css')}}">

      <!-- animation CSS -->
      <link href="{{asset('css/animate.css')}}" rel="stylesheet">
      <!-- Custom CSS -->
      <link href="{{asset('css/style.css')}}" rel="stylesheet">
      <!-- color CSS -->
      <link href="{{asset('css/colors/blue-dark.css')}}" id="theme" rel="stylesheet">
      <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
      <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
      <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
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
            <nav class="navbar navbar-default navbar-static-top m-b-0">
                <div class="navbar-header">
                    <!-- Search input and Toggle icon -->
                    <ul class="nav navbar-top-links navbar-right pull-right">

                        <li class="dropdown">
                            <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#"> <b
                                    class="hidden-xs">ADMIN</b>
                                <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu dropdown-user animated flipInY">
                                <li>
                                    <div class="dw-user-box">
                                        <div class="u-text">
                                            <h4>Control panel</h4>
                                        </div>
                                    </div>
                                </li>
                                <li role="separator" class="divider"></li>
                                <li><a href="#"
                                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i
                                            class="fa fa-power-off"></i> Logout</a>
                                    <form id="logout-form" action="{{url('logout')}}" method="POST"
                                        style="display: none;">
                                        {{csrf_field()}}
                                    </form>
                                </li>

                            </ul>
                            <!-- /.dropdown-user -->
                        </li>

                        <!-- /.dropdown -->
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
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav slimscrollsidebar">
                    <div class="sidebar-head">
                        <h3><span class="fa-fw open-close"><i class="ti-menu hidden-xs"></i>
                                <i class="ti-close visible-xs"></i></span> <span class="hide-menu">Closor</span>
                        </h3>
                    </div>
                    <ul class="nav" id="side-menu">
                        <li class="user-pro">
                            <a class="waves-effect">
                                <img src="{{asset('logo.jpg')}}" alt="user-img" class="img-circle">
                                <span class="hide-menu">Closor</span>
                            </a>
                        </li>
                        <li> <a href="index.html" class="waves-effect"><i class="mdi mdi-av-timer fa-fw"
                                    data-icon="v"></i>
                                <span class="hide-menu"> الأعدادات العامة <span class="fa arrow"></span> </span></a>
                            <ul class="nav nav-second-level">
                                <li> <a href="{{url('settings')}}"><i class=" fa-fw"></i>
                                        <span class="hide-menu">الاعدادات العامة </span></a>
                                </li>
                            </ul>
                        </li>

                        <li> <a href="index.html" class="waves-effect"><i class="mdi mdi-av-timer fa-fw"
                                    data-icon="v"></i>
                                <span class="hide-menu"> الماركات <span class="fa arrow"></span> </span></a>
                            <ul class="nav nav-second-level">
                                <li> <a href="{{url('mark')}}"><i class=" fa-fw"></i>
                                        <span class="hide-menu">عرض</span></a>
                                </li>
                                <li> <a href="{{url('mark/create ')}}"><i class=" fa-fw"></i>
                                        <span class="hide-menu">أضافة</span></a>
                                </li>
                            </ul>
                        </li>

                        <li> <a href="index.html" class="waves-effect"><i class="mdi mdi-av-timer fa-fw"
                                    data-icon="v"></i>
                                <span class="hide-menu"> المنتجات <span class="fa arrow"></span> </span></a>
                            <ul class="nav nav-second-level">
                                <li> <a href="{{url('product')}}"><i class=" fa-fw"></i>
                                        <span class="hide-menu">عرض</span></a>
                                </li>
                                <li> <a href="{{url('product/create ')}}"><i class=" fa-fw"></i>
                                        <span class="hide-menu">أضافة</span></a>
                                </li>
                            </ul>
                        </li>

                        <li> <a href="index.html" class="waves-effect"><i class="mdi mdi-av-timer fa-fw"
                                    data-icon="v"></i>
                                <span class="hide-menu"> الطلبات <span class="fa arrow"></span> </span></a>
                            <ul class="nav nav-second-level">
                                <li> <a href="{{url('order')}}"><i class=" fa-fw"></i>
                                        <span class="hide-menu">عرض</span></a>
                                </li>
                            </ul>
                        </li>

                        <li> <a href="index.html" class="waves-effect"><i class="mdi mdi-av-timer fa-fw"
                                    data-icon="v"></i>
                                <span class="hide-menu"> مناطق التغطية <span class="fa arrow"></span> </span></a>
                            <ul class="nav nav-second-level">
                                <li> <a href="{{url('area')}}"><i class=" fa-fw"></i>
                                        <span class="hide-menu">عرض</span></a>
                                </li>
                                <li> <a href="{{url('area/create ')}}"><i class=" fa-fw"></i>
                                        <span class="hide-menu">أضافة</span></a>
                                </li>
                            </ul>
                        </li>


                        <li> <a href="index.html" class="waves-effect"><i class="mdi mdi-av-timer fa-fw"
                                    data-icon="v"></i>
                                <span class="hide-menu"> السلايدر <span class="fa arrow"></span> </span></a>
                            <ul class="nav nav-second-level">
                                <li> <a href="{{url('slider')}}"><i class=" fa-fw"></i>
                                        <span class="hide-menu">عرض</span></a>
                                </li>
                                <li> <a href="{{url('slider/create ')}}"><i class=" fa-fw"></i>
                                        <span class="hide-menu">أضافة</span></a>
                                </li>
                            </ul>
                        </li>
                        <li> <a href="index.html" class="waves-effect"><i class="mdi mdi-av-timer fa-fw"
                                    data-icon="v"></i>
                                <span class="hide-menu">  بانر الرئيسية <span class="fa arrow"></span> </span></a>
                            <ul class="nav nav-second-level">
                                <li> <a href="{{url('banner')}}"><i class=" fa-fw"></i>
                                        <span class="hide-menu">عرض</span></a>
                                </li>
                            </ul>
                        </li>
                        <li> <a href="index.html" class="waves-effect"><i class="mdi mdi-av-timer fa-fw"
                                    data-icon="v"></i>
                                <span class="hide-menu">  ادارة الأستفسارات <span class="fa arrow"></span> </span></a>
                            <ul class="nav nav-second-level">
                                <li> <a href="{{url('contact')}}"><i class=" fa-fw"></i>
                                        <span class="hide-menu">عرض</span></a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Left Sidebar -->
            <!-- ============================================================== -->

            @yield('content')


        </div>
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
        <script src="{{asset('plugins/bower_components/dropify/dist/js/dropify.min.js')}}"></script>
        <script>
            $(document).ready(function () {
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
                drEvent.on('dropify.beforeClear', function (event, element) {
                    return confirm("Do you really want to delete \"" + element.file.name + "\" ?");
                });
                drEvent.on('dropify.afterClear', function (event, element) {
                    alert('File deleted');
                });
                drEvent.on('dropify.errors', function (event, element) {
                    console.log('Has Errors');
                });
                var drDestroy = $('#input-file-to-destroy').dropify();
                drDestroy = drDestroy.data('dropify')
                $('#toggleDropify').on('click', function (e) {
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
        {{-- <script src="{{asset('js/dashboard1.js')}}"></script> --}}
        <!-- Custom tab JavaScript -->
        <script src="{{asset('js/cbpFWTabs.js')}}"></script>
        <script type="text/javascript">
            (function () {
                [].slice.call(document.querySelectorAll('.sttabs')).forEach(function (el) {
                    new CBPFWTabs(el);
                });
            })();

        </script>
        <script src="{{asset('plugins/bower_components/toast-master/js/jquery.toast.js')}}"></script>
        <!--Style Switcher -->
        <script src="{{asset('plugins/bower_components/styleswitcher/jQuery.style.switcher.js')}}"></script>
        @yield('chart')
    </body>

</html>
