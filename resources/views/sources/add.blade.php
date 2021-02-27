@extends('layouts.admin')
@section('content')

<!-- ============================================================== -->
<!-- Page Content -->
<!-- ============================================================== -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row bg-title">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h4 class="page-title">Lead Source</h4>
            </div>
            <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                <ol class="breadcrumb">
                    <li><a href="{{url('/')}}">{{$workplace->title}}</a></li>
                    <li class="active">Lead Source</li>
                </ol>
            </div>
        </div>
        <!-- .row -->
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-info">
                    <div class="panel-wrapper collapse in" aria-expanded="true">
                        <div class="panel-body">
                            <form method="POST" @if(isset($data)) action="{{url('sources/'.$data->id)}}" @else
                                action="{{url('sources')}}" @endif>
                                {{csrf_field()}}
                                @if(isset($data))
                                @method('PATCH')
                                @endif
                                <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                                <input type="hidden" name="workplace_id" value="{{session('workplace')->id}}">
                                <div class="form-body">
                                    <h3 class="box-title m-t-40">Widget Details</h3>
                                    <hr>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Widget Name</label>
                                                <input required type="text" class="form-control"
                                                    placeholder="Widget Name"
                                                    value="@if(isset($data)){{$data->name}}@endif" name="name">
                                            </div>
                                        </div>
                                        <!--/span-->
                                        {{-- <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Default Country</label>
                                                <select class="form-control" name="country_id" required>
                                                    <option value="1">Egypt</option>
                                                    <option value="2">Saudi arabia</option>
                                                    <option value="3">United Kingdom</option>
                                                </select>
                                            </div>
                                        </div> --}}
                                        <!--/span-->

                                    </div>
                                    <!--/row-->
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Widget Website</label>
                                                <input type="url" class="form-control" name="website"
                                                    placeholder="https://example.com"
                                                    value="@if(isset($data)){{$data->website}}@endif">
                                            </div>
                                        </div>
                                        <!--/span-->
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Product</label>
                                                <select class="form-control" name="product_id" required>
                                                    @foreach($products as $value)
                                                    <option value="{{$value->id}}">{{$value->title}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <!--/span-->
                                    </div>
                                </div>
                                <div class="form-body">
                                    <h3 class="box-title m-t-40">Widget Display</h3>
                                    <hr>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Type</label>
                                                <select class="form-control" name="widget_type" id="widget_type"
                                                    required>
                                                    <option value="icon" selected>Icon Button</option>
                                                    <option value="text">Text Button</option>
                                                </select>
                                            </div>
                                        </div>
                                        <!--/span-->
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Alignment</label>
                                                <select class="form-control" name="alignment" required>
                                                    <option value="right">Right</option>
                                                    <option value="left">Left</option>
                                                </select>
                                            </div>
                                        </div>
                                        <!--/span-->
                                        <!--/span-->
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Primary Color <li class="mdi mdi-filter fa-fw"></li></label><br>
                                                <input class="form-control " name="primary" type="color" value="#34a853"
                                                    id="primary-color">
                                            </div>
                                            <div class="form-group">
                                                <label>Secondary Color<li class="mdi mdi-filter fa-fw"></li></label><br>
                                                <input class="form-control" name="secondary" type="color"
                                                    value="#ffffff" id="secondary-color">
                                            </div>
                                        </div>
                                        <!--/span-->
                                    </div>
                                </div>
                                <div class="form-body" id="icon-settings">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <h3 class="box-title m-t-40">Icon Button Settings</h3>
                                            <hr>
                                            <div class="row">
                                                <div class="col-md-8">
                                                    <label>Icon Shape</label><br>
                                                    <div class="col-md-4">
                                                        <input type="radio" name="icon_type" value="mdi mdi-phone fa-fw"
                                                            checked>
                                                        <li class="mdi mdi-phone fa-fw" style="font-size:30px"></li>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <input type="radio" name="icon_type"
                                                            value="mdi mdi-cellphone-android fa-fw">
                                                        <li class="mdi mdi-cellphone-android fa-fw"
                                                            style="font-size:30px"></li>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <input type="radio" name="icon_type"
                                                            value="mdi mdi-headset fa-fw">
                                                        <li class="mdi mdi-headset fa-fw" style="font-size:30px"></li>
                                                    </div>
                                                    <label style="margin-top:20px">Bubble Switch</label><br>
                                                    <div class="col-md-4">
                                                        <input type="radio" name="bubble" value="on" class="text-large"
                                                            checked>
                                                        On
                                                    </div>
                                                    <div class="col-md-4">
                                                        <input type="radio" name="bubble" value="off"
                                                            class="text-large"> Off
                                                    </div>
                                                    <div class="form-group shoutout-bubble">
                                                        <label style="margin-top:20px">Shoutout Bubble Line 1
                                                        </label><span class="text-small text-muted"> (40 Characters
                                                            Max)</span><br>
                                                        <input class="form-control" name="bubble_line_1"
                                                            id="bubble-line-1" type="text"
                                                            value="Want to talk to an expert?"
                                                            placeholder="Want to talk to an expert?">
                                                    </div>
                                                    <div class="form-group shoutout-bubble">
                                                        <label style="margin-top:20px">Shoutout Bubble Line 2
                                                        </label><span class="text-small text-muted"> (40 Characters
                                                            Max)</span><br>
                                                        <input class="form-control" name="bubble_line_2"
                                                            id="bubble-line-2" type="text"
                                                            value="Our Team is 60 Second Away From You!"
                                                            placeholder="Our Team is 60 Second Away From You!">
                                                    </div>
                                                </div>

                                                <!--/span-->
                                            </div>
                                            <div class="row shoutout-bubble">
                                                <div class="col-md-4">
                                                    <label>Bubble BG Color <li class="mdi mdi-filter fa-fw"></li>
                                                    </label><br>
                                                    <input class="form-control" name="bubble_bg_color"
                                                        id="bubble-bg-color" type="color" value="#959a9e">
                                                </div>
                                                <div class="col-md-4">
                                                    <label>Text Color<li class="mdi mdi-filter fa-fw"></li></label><br>
                                                    <input class="form-control" name="bubble_text_color"
                                                        id="bubble-text-color" type="color" value="#ffffff">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="button-review">
                                                <div class="button-circle">
                                                    <div class="buttonround" title="Chat now">
                                                        <li class="mdi mdi-phone fa-fw" id="x-icon" style=""></li>
                                                        <div class="buttonround_tooltip">
                                                            <p id="b-l-1">Want to talk to an expert?</p>
                                                            <p id="b-l-2">Our Team is 60 Second Away From You!</p>
                                                            <div class="buttonround_tooltip_arrow">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-body" id="text-settings" style="display:none">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <h3 class="box-title m-t-40">Text Button Settings</h3>
                                            <hr>
                                            <div class="row">
                                                <!--/span-->
                                                <div class="col-md-8">
                                                    <div class="form-group">
                                                        <label style="margin-top:20px">Call to action text </label><span
                                                            class="text-small text-muted"> (25 Characters
                                                            Max)</span><br>
                                                        <input class="form-control" name="text_text" id="text_text"
                                                            value="Talk to an expert!" type="text"
                                                            placeholder="Talk to an expert!">
                                                    </div>
                                                    <div class="form-group">
                                                        <label style="margin-top:20px">Corner Roundness </label><span
                                                            class="text-small text-muted"> (in px "50 px
                                                            Max")</span><br>
                                                        <input class="form-control" name="text_round" type="number"
                                                            id="text_round" value="10" placeholder="10">
                                                    </div>
                                                </div>
                                                <!--/span-->
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="text-review" style="postion:relative">
                                                <div class="chat-text">
                                                    <p class="text-text">TALK TO EXPERT NOW!</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-body">
                                    <h3 class="box-title m-t-40">Form Settings</h3>
                                    <hr>
                                    <div class="row">
                                        <!--/span-->
                                        <div class="col-md-8">
                                            <h4 class="font-bold">Fields</h4>

                                            <div class="col-md-3">
                                                <input class="d-inline" name="fields[]" type="checkbox"
                                                    id="checkbox_name" value="name"><span> Name</span><br>
                                            </div>
                                            <div class="col-md-3">
                                                <input class="d-inline" name="fields[]" type="checkbox"
                                                    id="checkbox_email" value="email"><span> Email</span><br>
                                            </div>
                                            <!-- End of one custom -->
                                            <div class="col-md-3 custom-1">
                                                <input class="d-inline" name="fields[]" type="checkbox"
                                                    id="checkbox_custom1" value="custom1">
                                                <span id="checkbox_custom_value_1"> Custom Field 01</span>
                                                <a class="plus-icon" onclick="showNewcustomsField(2)"><i
                                                        class="fa fa-plus-circle" aria-hidden="true"></i></a><br>
                                            </div>
                                            <div class="col-md-3 custom-2" style="display: none;">
                                                <input class="d-inline" name="fields[]" type="checkbox"
                                                    id="checkbox_custom2" value="custom2">
                                                <span id="checkbox_custom_value_2"> Custom Field 02</span>
                                                <a class="plus-icon" onclick="showNewcustomsField(3)"><i
                                                        class="fa fa-plus-circle" aria-hidden="true"></i></a><br>
                                            </div>
                                            <div class="col-md-3 custom-3" style="display: none;">
                                                <input class="d-inline" name="fields[]" type="checkbox"
                                                    id="checkbox_custom3" value="custom3">
                                                <span id="checkbox_custom_value_3"> Custom Field 03</span>
                                                <a class="plus-icon" onclick="showNewcustomsField(4)"><i
                                                        class="fa fa-plus-circle" aria-hidden="true"></i></a><br>
                                            </div>
                                            <div class="col-md-3 custom-4" style="display: none;">
                                                <input class="d-inline" name="fields[]" type="checkbox"
                                                    id="checkbox_custom4" value="custom4">
                                                <span id="checkbox_custom_value_4"> Custom Field 04</span>
                                                <a class="plus-icon" onclick="showNewcustomsField(5)"><i
                                                        class="fa fa-plus-circle" aria-hidden="true"></i></a><br>
                                            </div>
                                            <div class="col-md-3 custom-5" style="display: none;">
                                                <input class="d-inline" name="fields[]" type="checkbox"
                                                    id="checkbox_custom5" value="custom5">
                                                <span id="checkbox_custom_value_5"> Custom Field 05</span>
                                                <a class="plus-icon" onclick="showNewcustomsField(6)"><i
                                                        class="fa fa-plus-circle" aria-hidden="true"></i></a><br>
                                            </div>
                                            <div class="col-md-3 custom-6" style="display: none;">
                                                <input class="d-inline" name="fields[]" type="checkbox"
                                                    id="checkbox_custom6" value="custom6">
                                                <span id="checkbox_custom_value_6"> Custom Field 06</span><br>
                                                {{-- <a class="plus-icon" onclick="showNewcustomsField(7)"><i class="fa fa-plus-circle" aria-hidden="true"></i></a> --}}
                                            </div>
                                            {{-- <div class="col-md-3">
                                                <input class="d-inline" name="fields[]" type="checkbox"
                                                    id="checkbox_custom1" value="custom1"><span
                                                    id="checkbox_custom_value_1"> Custom Field
                                                    01</span><br>
                                            </div>
                                            <div class="col-md-3">
                                                <input class="d-inline" name="fields[]" type="checkbox"
                                                    id="checkbox_custom2" value="custom2"><span
                                                    id="checkbox_custom_value_2"> Custom Field
                                                    02</span><br>
                                            </div> --}}
                                            <br>
                                            <br>
                                            <hr>
                                            <div class="form-group">
                                                <label style="margin-top:20px" id="head_message_lable">Head Message
                                                    Text</label><span class="text-small text-muted"> (20 Characters
                                                    Max)</span><br>
                                                <input class="form-control" id="head_message_text" name="head_message"
                                                    type="text" placeholder="Would you like to recieve a free callback in 30 seconds?" value="Would you like to recieve a free callback in 30 seconds?">
                                            </div>
                                            <div class="form-group" id="custom_input_field_1" style="display: none;">
                                                <label style="margin-top:20px" id="custom_lable_title_1">Custom Field 01
                                                    Title </label><span class="text-small text-muted"> (20 Characters
                                                    Max)</span><br>
                                                <input class="form-control" id="custom_lable_1" name="custom_lable_1"
                                                    type="text" placeholder="Field Label">
                                            </div>
                                            <div class="form-group" id="custom_input_field_2" style="display: none;">
                                                <label style="margin-top:20px" id="custom_lable_title_2">Custom Field 02
                                                    Title </label><span class="text-small text-muted"> (20 Characters
                                                    Max)</span><br>
                                                <input class="form-control" id="custom_lable_2" name="custom_lable_2"
                                                    type="text" placeholder="Field Label">
                                            </div>
                                            <div class="form-group" id="custom_input_field_3" style="display: none;">
                                                <label style="margin-top:20px" id="custom_lable_title_3">Custom Field 03
                                                    Title </label><span class="text-small text-muted"> (20 Characters
                                                    Max)</span><br>
                                                <input class="form-control" id="custom_lable_3" name="custom_lable_3"
                                                    type="text" placeholder="Field Label">
                                            </div>
                                            <div class="form-group" id="custom_input_field_4" style="display: none;">
                                                <label style="margin-top:20px" id="custom_lable_title_4">Custom Field 04
                                                    Title </label><span class="text-small text-muted"> (20 Characters
                                                    Max)</span><br>
                                                <input class="form-control" id="custom_lable_4" name="custom_lable_4"
                                                    type="text" placeholder="Field Label">
                                            </div>
                                            <div class="form-group" id="custom_input_field_5" style="display: none;">
                                                <label style="margin-top:20px" id="custom_lable_title_5">Custom Field 05
                                                    Title </label><span class="text-small text-muted"> (20 Characters
                                                    Max)</span><br>
                                                <input class="form-control" id="custom_lable_5" name="custom_lable_5"
                                                    type="text" placeholder="Field Label">
                                            </div>
                                            <div class="form-group" id="custom_input_field_6" style="display: none;">
                                                <label style="margin-top:20px" id="custom_lable_title_6">Custom Field 06
                                                    Title </label><span class="text-small text-muted"> (20 Characters
                                                    Max)</span><br>
                                                <input class="form-control" id="custom_lable_6" name="custom_lable_6"
                                                    type="text" placeholder="Field Label">
                                            </div>
                                            <hr>
                                            <div class="form-group">
                                                <label style="margin-top:20px" id="submitt_label">Submit Button
                                                    Text</label><span class="text-small text-muted"> (20 Characters
                                                    Max)</span><br>
                                                <input class="form-control" id="submitt_text" name="submitt_text"
                                                    type="text" placeholder="Call Me Now" value="Call Me Now">
                                            </div>
                                        </div>
                                        <div class="col-md-4"
                                            style="background: #ececec;padding-top: 15px;padding-bottom: 15px;">
                                            <div class="modal-dialog" role="document"
                                                style="width:auto; max-width: 300px !important;">
                                                <div class="modal-content">
                                                    <div class="modal-body">
                                                        <button type="button" class="close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                        <label for="exampleInputEmail1"
                                                            style="display: block !important;font-family: inherit !important;text-align: center;">Would
                                                            you like to recieve a free callback in 30 seconds?</label>

                                                        <div class="live_form">
                                                            <div class="form-group">
                                                                <input name="country_code" type="hidden"
                                                                    @if(isset(auth()->user()->country_code))
                                                                value="{{ auth()->user()->country_code }}" @else
                                                                id="phone2" @endif class="phone22" >

                                                                <input id="phone" type="phone" class="form-control"
                                                                    name="phone"
                                                                    value="{{ old('phone', auth()->user()->phone) }}"
                                                                    placeholder="{{ old('phone', auth()->user()->phone) }}"
                                                                    required autocomplete="phone"
                                                                    style="padding-left: 52px">
                                                            </div>
                                                            <div class="form-group">
                                                                <input type="text" class="form-control" id="form1_name"
                                                                    placeholder="name" style="display: none;">
                                                            </div>
                                                            <div class="form-group">
                                                                <input type="email" class="form-control"
                                                                    id="form1_email" placeholder="email"
                                                                    style="display: none;">
                                                            </div>

                                                            <div class="form-group">
                                                                <input type="text" class="form-control"
                                                                    id="form1_custom_lable_1" style="display: none;">
                                                            </div>
                                                            <div class="form-group">
                                                                <input type="text" class="form-control"
                                                                    id="form1_custom_lable_2" style="display: none;">
                                                            </div>
                                                            <div class="form-group">
                                                                <input type="text" class="form-control"
                                                                    id="form1_custom_lable_3" style="display: none;">
                                                            </div>
                                                            <div class="form-group">
                                                                <input type="text" class="form-control"
                                                                    id="form1_custom_lable_4" style="display: none;">
                                                            </div>
                                                            <div class="form-group">
                                                                <input type="text" class="form-control"
                                                                    id="form1_custom_lable_5" style="display: none;">
                                                            </div>
                                                            <div class="form-group">
                                                                <input type="text" class="form-control"
                                                                    id="form1_custom_lable_6" style="display: none;">
                                                            </div>
                                                        </div>
                                                        <div class="text-center">
                                                            <button type="button"
                                                                class="btn btn-primary btn-block call_me"
                                                                id="submitt_btn"
                                                                style="background-color:#34a853;color:#ffffff;">Call
                                                                Me Now
                                                            </button>
                                                            <p for="exampleInputEmail1"
                                                                style="text-align: center;font-size: smaller;">
                                                                Your data is secured.We respect your privacy.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--/span-->
                                    </div>
                                </div>
                                <div class="form-body" style="margin-top:20px">
                                    <div class="form-actions text-right">
                                        <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i> Save
                                        </button>
                                        <button type="reset" class="btn btn-dark">Cancel</button>
                                    </div>
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
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
<script type="text/javascript">
    // $('.color').colorpicker({});
    // console.log('mmmmmmmmmmmmmmm');

    $("#widget_type").change(function () {
        console.log('hhh');
        if (this.value == "text") {
            $("#text-settings").show("swing");
            $("#icon-settings").hide("swing");
        } else {
            $("#icon-settings").show("swing");
            $("#text-settings").hide("swing");
        }
    });

    $('#primary-color').on('input', function (e) {
        $(".buttonround").css("background-color", this.value);
        $(".call_me").css("background-color", this.value);
        $(".chat-text").css("background-color", this.value);
    });
    $('#secondary-color').on('input', function (e) {
        $("#x-icon").css("color", this.value);
        $(".call_me").css("color", this.value);
        $(".text-text").css("color", this.value);
    });

    $('input[type=radio][name=icon_type]').change(function () {
        // alert(this.value);
        $("#x-icon").removeClass().addClass(this.value);
    });

    $('input[type=radio][name=bubble]').change(function () {
        // alert(this.value);
        if (this.value == "on") {
            $(".buttonround_tooltip").show("swing");
            $(".shoutout-bubble").show("swing");
        } else {
            $(".buttonround_tooltip").hide("swing");
            $(".shoutout-bubble").hide("swing");
        }
    });

    $('#bubble-line-1').on('input', function (e) {
        $("#b-l-1").html(this.value);
    });
    $('#bubble-line-2').on('input', function (e) {
        $("#b-l-2").html(this.value);
    });
    $('#bubble-bg-color').on('input', function (e) {
        $(".buttonround_tooltip").css("background-color", this.value);
        $(".buttonround_tooltip_arrow").css("border-color", "transparent " + this.value);
    });
    $('#bubble-text-color').on('input', function (e) {
        $(".buttonround_tooltip").css("color", this.value);
    });

    $('#text_text').on('input', function (e) {
        $(".text-text").html(this.value);
    });
    $('#text_round').on('input', function (e) {
        $(".chat-text").css("border-radius", this.value + "px " + this.value + "px " + "0px 0px");
    });
    $('#submitt_text').on('input', function (e) {
        $("#submitt_btn").html(this.value);
    });
</script>
<script type="text/javascript">
    $('#checkbox_name').change(function () {
        if (this.checked)
            $('#form1_name').show('swing');
        else
            $('#form1_name').hide('swing');

    });

    $('#checkbox_email').change(function () {
        if (this.checked)
            $('#form1_email').show('swing');
        else
            $('#form1_email').hide('swing');

    });


    function showNewcustomsField(id) {
        $(".custom-" + id).show("swing");
        $(".custom-" + (id - 1) + " .plus-icon").hide("swing");
        $('#checkbox_custom'+id).change(function () {
            if (this.checked) {
                $('#form1_custom_lable_'+id).show('swing');
                $('#custom_input_field_'+id).show('swing');
            }  else {
                $('#form1_custom_lable_'+id).hide('swing');
                $('#custom_input_field_'+id).hide('swing');
            }
        });

        $('#custom_lable_'+id).on('input', function(e) {
            $('#form1_custom_lable_'+id).attr("placeholder", this.value);
            $('#checkbox_custom'+id).val(this.value);
            $('#custom_lable_title_'+id).html(this.value);
            $('#checkbox_custom_value_'+id).html(this.value);

            // document.getElementById("form1_custom_lable_"+id).placeholder = this.value;
            // document.getElementById("custom_lable_title_"+id).innerHTML = this.value;
            // document.getElementById("checkbox_custom_value_"+id).innerHTML = this.value;
        });
    }

    $('#custom_lable_1').on('input', function(e) {
        $('#form1_custom_lable_1').attr("placeholder", this.value);
        $('#checkbox_custom1').val(this.value);
        $('#custom_lable_title_1').html(this.value);
        $('#checkbox_custom_value_1').html(this.value);
    });

    $('#checkbox_custom1').change(function () {
        if (this.checked) {
            $('#form1_custom_lable_1').show('swing');
            $('#custom_input_field_1').show('swing');
        } else {
            $('#form1_custom_lable_1').hide('swing');
            $('#custom_input_field_1').hide('swing');
        }

    });

    // $('#checkbox_custom2').change(function () {
    //     if (this.checked)
    //         $('#form1_custom_lable_2').show('swing');
    //     else
    //         $('#form1_custom_lable_2').hide('swing');

    // });



    // $('#custom_lable_2').on('input', function(e) {
    //     document.getElementById("form1_custom_lable_2").placeholder = this.value;
    //     document.getElementById("custom_lable_title_2").innerHTML = this.value;
    //     document.getElementById("checkbox_custom_value_2").innerHTML = this.value;

    // });
</script>
@endsection
@section('js')

@endsection