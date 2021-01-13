<?php

namespace App\Http\Controllers;

use App\Events\NotificationEvent;
use App\Lead;
use App\Source;
use App\Workplace;
use Illuminate\Http\Request;

/**
 * @group 2.7 Users Product Widget management
 *
 * Page Group To manage Product data For The Manager Control Panel .
 *
 * - View the Leads Widget Form Ex. Name, Email, Phone, And another two customizable fields.
 *
 * <p><img src="images/users/leads/users-leads-view.png" width="100%"></p>
 *
 * @authenticated
 *
 */
class WidgetController extends Controller
{

    public function widget($id)
    {
        $source = Source::find($id);
        $widget = '
        <link href="https://app.closor.com/widget/widget.css" rel="stylesheet">
        <link href="https://app.closor.com/css/icons/material-design-iconic-font/css/materialdesignicons.min.css"
        rel="stylesheet">
        <link rel="stylesheet" href="https://app.closor.com/css/intl-tel-input-17.0.0/build/css/intlTelInput.css">
        <style>
        .mdi:before, .mdi-set {
            display: inline-block;
            font: normal normal normal 24px/1 "Material Design Icons";
            font-size: inherit;
            text-rendering: auto;
            line-height: inherit;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
            transform: translate(0, 0);
            width: 100%;
            text-align: center;
            font-size: 2em;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100%;
        }
        </style>
        <div class="closor-widget-container closor-device-desktop">
            <div
                class="closor-widget closor-widget-4827 closor-widget-call-kind-callback closor-widget-bubble-trigger-load closor-widget-popup-trigger-totalTimeSpent closor-widget-popover-trigger-totalTimeSpent closor-closing-mode-minimizes closor-is-available closor-callback-v1-widget closor-placement-bottom-right closor-callback-popup">
                <div class="closor-callback-v1-overlay-wrapper
                        closor-viewport-left  closor-viewport-bottom closor-viewport-width">
                    <div class="closor-callback-v1-overlay-container
                        closor-viewport-width closor-viewport-scale">
                        <div class="closor-callback-v1-overlay" id="data-action" data-action="open-callback-popup"';
        if ($source->alignment == 'left') {
            $widget .= 'style="left: 10px !important;right: unset !important;direction: ltr !important;width: 400px;"';
        };
        $widget .= '>';
        if ($source->widget_type == 'text') {
            $widget .= '<div class="closerDiv" onclick="callCloserModal()" style="background:' . $source->primary . '!important;display: inline-block!important;padding: 20px!important;
                            width: 300px!important;text-align: center!important;vertical-align: middle!important;border-radius: 10px 10px 0px 0px!important;' . $source->alignment . ': 0!important;position:absolute">
                                    <p class="text-text" style="text-align:center!important;color:' . $source->secondary . '!important;font-size: 18px !important;';
            if ($source->alignment == 'left') {
                $widget .= 'position:unset!important;';
            }
            $widget .= 'font-weight: 700 !important;">' . $source->text_text . '</p>
                            </div>';
        } else {
            $widget .= '
                            <div class="closor-callback-v1-avatar closerDiv" id="closor-call-icon" onclick="callCloserModal()" style="background:' . $source->primary . '!important;display: inline-block!important;';
            if ($source->alignment == 'left') {
                $widget .= 'position:unset!important;';
            }
            $widget .= ';">
                                <div class="closor-callback-v1-avatar-icon">
                                    <li class="' . $source->icon_type . '" id="x-icon" style="color:' . $source->secondary . '!important;width: 40px;height: 40px;font-size: 20px;"></li>
                                </div>
                            </div>';
            if ($source->bubble == 'on') {
                $widget .= '<div class="closerDiv closor-callback-v1-bubble';
                if ($source->alignment == 'left') {
                    $widget .= ' closor-callback-v1-bubble-left';
                } else {
                    $widget .= ' closor-callback-v1-bubble-right';
                }
                $widget .= '" id="closor-callback-v1-bubble"style="background:' . $source->bubble_bg_color . '!important;display: inline-block!important;';
                if ($source->alignment == 'left') {
                    $widget .= 'position:unset!important;';
                }
                $widget .= '">
                                <div class="closor-callback-v1-bubble-close" data-action="close-component"
                                    data-component="popover"></div>
                                <div class="closor-callback-v1-bubble-text-1" style="text-align:center!important;color:' . $source->bubble_text_color . '!important">' . $source->bubble_line_1 . '<br>
                                </div>
                                <div class="closor-callback-v1-bubble-text-2" style="text-align:center!important;color:' . $source->bubble_text_color . '!important">
                                ' . $source->bubble_line_2 . '
                                </div>
                            </div>
                            ';
            }
        }


        $widget .= '</div>
                    </div>
                </div>

                <div class="closor-callback-v1-popup-scroll-container" id="closor-callback-v1-popup-scroll-container">
                    <div class="closor-callback-v1-popup-container">
                        <div id="closor-call-modal" class="closor-callback-v1-popup
                            closor-viewport-left closor-viewport-top
                            closor-viewport-width closor-viewport-height closor-viewport-scale">
                            <div id="closor-modal-background" class="closor-callback-v1-popup-background" data-action="close-callback-popup" onclick="closeCloserModal()"></div>
                            <div class="closor-callback-v1-popup-wrapper">
                                <a href="#" id="closor-modal-close" class="closor-callback-v1-popup-close" data-action="close-callback-popup" onclick="closeCloserModal()"></a>

                                <section class="closor-callback-popup">
                                    <div class="closor-callback-v1-popup-header">
                                        Would you like to recieve a free callback in 30 seconds?
                                    </div>

                                    <div class="closor-callback-v1-interest-query" >
                                    <form class="closor-callback-v1-interest-query-form" onsubmit="event.preventDefault(); return dataget()" id="form-id" data-action="submit-callback">
                                        <input type="hidden" name="source_id" value="' . $id . '">
                                        <input type="hidden" id="country_code" name="country_code" >';
        foreach ($source->fields as $inputfield) {
            if ($inputfield == 'name') {
                $widget .= '<div class="allow-dropdown separate-dial-code iti-sdc-3">
                                                    <input type="text" class="closor-callback-v1-input" data-iti="true" name="' . $inputfield . '"
                                                        data-role="callback-phone-number-input" autocomplete="off"
                                                        placeholder="' . ucwords($inputfield) . '">
                                                </div>';
            }
        }
        $widget .= '<div class="form-group">
                                                            <input id="phone" type="phone"
                                                            name="phone"
                                                            required
                                                            placeholder="phone"
                                                            required autocomplete="phone" style="width: 100%;
                                            padding-top: 10px;
                                            padding-bottom: 15px;
                                            margin-bottom: 10px !important;
                                            border: 1px solid #aaa;">
                                                    </div>';
        foreach ($source->fields as $inputfield) {
            if ($inputfield != 'name') {
                if ($inputfield == 'custom1') {
                    $widget .= '
                                                    <div class="allow-dropdown separate-dial-code iti-sdc-3">
                                                        <input type="text" class="closor-callback-v1-input" data-iti="true"
                                                            data-role="callback-phone-number-input" autocomplete="off" name="' . ucwords($source->custom_lable_1) . '"
                                                            placeholder="' . ucwords($source->custom_lable_1) . '">
                                                    </div>
                                                    ';
                } elseif ($inputfield == 'custom2') {
                    $widget .= '
                                                    <div class="allow-dropdown separate-dial-code iti-sdc-3">
                                                        <input type="text" class="closor-callback-v1-input" data-iti="true"
                                                            data-role="callback-phone-number-input" autocomplete="off" name="' . ucwords($source->custom_lable_2) . '"
                                                            placeholder="' . ucwords($source->custom_lable_2) . '">
                                                    </div>
                                                    ';
                } else {
                    $widget .= '
                                                <div class="allow-dropdown separate-dial-code iti-sdc-3">
                                                    <input type="text" class="closor-callback-v1-input" data-iti="true" name="' . $inputfield . '"
                                                        data-role="callback-phone-number-input" autocomplete="off"
                                                        placeholder="' . ucwords($inputfield) . '">
                                                </div>
                                                ';
                }
            }
        }

        $widget .=   '<button class="closor-callback-v1-button" style="background:' . $source->primary . '!important" id="button-id">
                                                <div class="closor-callback-v1-preloader">
                                                    <div class="closor-callback-v1-preloader-dot closor-dot-1">
                                                    </div>
                                                    <div class="closor-callback-v1-preloader-dot closor-dot-2">
                                                    </div>
                                                    <div class="closor-callback-v1-preloader-dot closor-dot-3"></div>
                                                </div>
                                                <span class="closor-callback-v1-button-text" style="color:' . $source->secondary . '!important" >' . $source->submitt_text . '</span>
                                            </button>



                                            <div class="closor-callback-v1-security-hint">
                                                <div class="closor-callback-v1-security-hint-icon"></div>

                                                Your data is secured.We respect your privacy

                                            </div>

                                        </form></div>
                                </section>


                                <a class="closor-callback-v1-powered-by" href="https://closor.com" target="_blank">
                                    Powered by closor
                                </a>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <script src="https://api.ipdata.co?api-key=bbcc18dbda8db855a82aaecedab1b35c243700bd625b2ac94a9a8926" type="text/javascript"></script>
        <script src="https://app.closor.com/css/intl-tel-input-17.0.0/build/js/intlTelInput.js"></script>
        ';
        if (isset($submitted) && $submitted == 1) {
            '<div>
                <svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="check-circle" role="img"
                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                    class="svg-inline--fa fa-check-circle fa-w-16 fa-5x">
                    <path fill="currentColor"
                        d="M256 8C119.033 8 8 119.033 8 256s111.033 248 248 248 248-111.033 248-248S392.967 8 256 8zm0 48c110.532 0 200 89.451 200 200 0 110.532-89.451 200-200 200-110.532 0-200-89.451-200-200 0-110.532 89.451-200 200-200m140.204 130.267l-22.536-22.718c-4.667-4.705-12.265-4.736-16.97-.068L215.346 303.697l-59.792-60.277c-4.667-4.705-12.265-4.736-16.97-.069l-22.719 22.536c-4.705 4.667-4.736 12.265-.068 16.971l90.781 91.516c4.667 4.705 12.265 4.736 16.97.068l172.589-171.204c4.704-4.668 4.734-12.266.067-16.971z"
                        class=""></path>
                </svg>
            <h2>“You Have Submitted Succesfully,Thanks.”</h2>
        </div>';
        } else {
            return $widget;
        }

        // <script>
        //     document.getElementById("closor-call-icon").addEventListener("click", function(){
        //         document.getElementById("closor-call-modal").classList.add("closor-show-modal");
        //         document.getElementById("closor-callback-v1-popup-scroll-container").classList.add("closor-show-modal");
        //     });
        //     document.getElementById("closor-modal-background").addEventListener("click", function(){
        //         document.getElementById("closor-call-modal").classList.remove("closor-show-modal");
        //         document.getElementById("closor-callback-v1-popup-scroll-container").classList.remove("closor-show-modal");
        //     });
        //     document.getElementById("closor-modal-close").addEventListener("click", function(){
        //         document.getElementById("closor-call-modal").classList.remove("closor-show-modal");
        //         document.getElementById("closor-callback-v1-popup-scroll-container").classList.remove("closor-show-modal");
        //     });
        // </script>
    }

    public function widget_ajax(Request $request)
    {

        if (!$request["phone"]) {
            return ($request->all());
        }
        $data = $request->all();
        unset($data['csrftoken']);

        $user = Source::find($request->source_id)->workplace->users()->withCount('leads')->orderBy('leads_count', 'asc')->first();

        if (!@$request->product_id && !$request->product_id) {
            $product_id = Source::find($request->source_id)->workplace->products()->first()->id;
        } else {
            $product_id = $request->product_id;
        }
        $save = new Lead;
        $save->source_id = $request->source_id;
        $save->user_id = $user->id;
        $save->product_id = $product_id;
        $save->name = $request->name;
        $save->email = $request->email;
        $save->phone = $request->country_code . ' ' . $request->phone;
        $save->lead = json_encode($data);
        $save->save();

        event(new NotificationEvent($save));

        return $submitted = 1;
    }
}
