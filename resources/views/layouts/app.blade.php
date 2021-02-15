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

    <!--country flag -->
    <link rel="stylesheet" href="{{asset('css/intl-tel-input-17.0.0/build/css/intlTelInput.css')}}">
    <style>
        label {
            text-transform: capitalize !important;
        }
        ::-webkit-input-placeholder { /* Edge */
            text-transform: capitalize !important;
        }
        :-ms-input-placeholder { /* Internet Explorer */
            text-transform: capitalize !important;
        }
        ::placeholder {
            text-transform: capitalize !important;
        }
        .invalid-feedback .text-danger {
            font-weight: 100;
            color: red;
        }
        .invalid-feedback strong {
            font-weight: 100;
            color: red;
        }
    </style>
</head>

<body>
    <!-- Preloader -->
    <div class="preloader">
        <div class="cssload-speeding-wheel"></div>
    </div>


    @yield('content')

    <!-- jQuery -->
    <script src="{{asset('plugins/bower_components/jquery/dist/jquery.min.js')}}"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="{{asset('bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <!-- Menu Plugin JavaScript -->
    <script src="{{asset('plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js')}}"></script>

    <!--slimscroll JavaScript -->
    <script src="{{asset('js/jquery.slimscroll.js')}}"></script>
    <!--Wave Effects -->
    <script src="{{asset('js/waves.js')}}"></script>
    <!-- Custom Theme JavaScript -->
    <script src="{{asset('js/custom.min.js')}}"></script>
    <!--Style Switcher -->
    <script src="{{asset('plugins/bower_components/styleswitcher/jQuery.style.switcher.js')}}"></script>

    {{-- country flag js --}}
    <script src="{{asset('css/intl-tel-input-17.0.0/build/js/intlTelInput.js')}}"></script>
    <script>
    var input = document.querySelector("#phone");
    window.intlTelInput(input);

    </script>
      <script>
        var input = document.querySelector("#phone");
        window.intlTelInput(input, {
        //   allowDropdown: false,
        //   autoHideDialCode: false,
          autoPlaceholder: "aggressive",
        //   dropdownContainer: document.body,
        //   excludeCountries: ["us"],
        //   formatOnDisplay: false,
        //   geoIpLookup: function(callback) {
        //     $.get("http://ipinfo.io", function() {}, "jsonp").always(function(resp) {
        //       var countryCode = (resp && resp.country) ? resp.country : "";
        //       callback(countryCode);
        //     });
        //   },
        //   hiddenInput: "full_number",
        //   initialCountry: "auto",
        //   localizedCountries: { 'de': 'Deutschland' },
        //   nationalMode: false,
        //   onlyCountries: ['us', 'gb', 'ch', 'ca', 'do'],
          placeholderNumberType: "MOBILE",
        //   preferredCountries: ['cn', 'jp'],
        //   separateDialCode: true,
          utilsScript: "build/js/utils.js",
        });
        var iti = window.intlTelInputGlobals.getInstance(input);
        input.addEventListener("countrychange", function() {
            console.log(iti.getSelectedCountryData().dialCode);
            $('#phone2').val(iti.getSelectedCountryData().dialCode);
        });
      </script>

<!-- <script src="http://www.geoplugin.net/javascript.gp" type="text/javascript"></script> -->

<script type="text/javascript">

    var baseUrl = "{{url('/')}}";
    // function getLocation() {
    //     if (navigator.geolocation) {
    //         return navigator.geolocation.getCurrentPosition(showPosition);
    //     } else {
    //        return "Geolocation is not supported by this browser.";
    //     }
    // }
    // function showPosition(position) {
    //     var loc =  "lat=" + position.coords.latitude +
    //     "&lng=" + position.coords.longitude;

    //     console.log(loc);

    // }

    jQuery(document).ready(function($) {
        // getLocation();

        // jQuery.getScript('https://www.geoplugin.net/javascript.gp', function()
        // {
        //     var code= geoplugin_countryCode();
        //     console.log('old Api: '+code);

        // });

        $.get("https://api.ipdata.co?api-key=bbcc18dbda8db855a82aaecedab1b35c243700bd625b2ac94a9a8926", function(response) {
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
</body>

</html>
