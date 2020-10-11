<?php

namespace App\Http\Controllers;

use App\Events\NotificationEvent;
use App\Lead;
use App\Source;
use App\Workplace;
use Illuminate\Http\Request;

class WidgetController extends Controller
{
    public function widget($id){
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
                        <div class="closor-callback-v1-overlay" data-action="open-callback-popup" >';
                        if($source->widget_type == 'text'){
                            $widget .= '<div class="closerDiv" onclick="callCloserModal()" style="background:'.$source->primary.'!important;
                            background: #3481a8!important;display: inline-block!important;padding: 20px!important;
                            width: 300px!important;text-align: center!important;vertical-align: middle!important;border-radius: 10px 10px 0px 0px!important;position: absolute!important;'.$source->alignment.': 0!important;">
                                    <p class="text-text" style="color:'.$source->secondary.'!important">'.$source->text_text.'</p>
                            </div>';
                        }else{
                            $widget .= '
                            <div class="closor-callback-v1-avatar closerDiv" id="closor-call-icon" onclick="callCloserModal()" style="background:'.$source->primary.'!important;">
                                <div class="closor-callback-v1-avatar-icon">
                                    <li class="mdi mdi-headset fa-fw" id="x-icon" style="color:'.$source->secondary.'!important;"></li>
                                </div>
                            </div>
                            <div class="closor-callback-v1-bubble" id="closor-callback-v1-bubble">
                                <div class="closor-callback-v1-bubble-close" data-action="close-component"
                                    data-component="popover"></div>
                                <div class="closor-callback-v1-bubble-text-1">'.$source->bubble_line_1.'<br>
                                </div>
                                <div class="closor-callback-v1-bubble-text-2">
                                '.$source->bubble_line_2.'
                                </div>
                            </div>
                            ';
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
                                        <input type="hidden" name="source_id" value="'.$id.'">
                                        <input type="hidden" id="csrftoken" name="csrftoken" value="'.csrf_token().'">
                                        <input type="hidden" id="baseUrl" name="baseUrl" value="'.url('/').'">
                                        ';

                                            // <div class="allow-dropdown separate-dial-code iti-sdc-3">
                                            //     <input type="name" class="closor-callback-v1-input" data-iti="true"
                                            //         data-role="callback-phone-number-input" autocomplete="off"
                                            //         placeholder="Name">
                                            // </div>
                                            // <div class="intl-tel-input allow-dropdown separate-dial-code iti-sdc-3">
                                            //     <div class="flag-container">
                                            //         <div class="selected-flag" tabindex="0" title="Egypt (‫مصر‬‎): +20">
                                            //             <div class="iti-flag eg"></div>
                                            //             <div class="selected-dial-code">+20</div>
                                            //             <div class="iti-arrow"></div>
                                            //         </div>
                                            //         <ul class="country-list hide">
                                            //             <li class="country preferred" data-dial-code="1" data-country-code="us">
                                            //                 <div class="flag-box">
                                            //                     <div class="iti-flag us"></div>
                                            //                 </div><span class="country-name">United States</span><span
                                            //                     class="dial-code">+1</span>
                                            //             </li>
                                            //             <li class="country preferred" data-dial-code="44"
                                            //                 data-country-code="gb">
                                            //                 <div class="flag-box">
                                            //                     <div class="iti-flag gb"></div>
                                            //                 </div><span class="country-name">United Kingdom</span><span
                                            //                     class="dial-code">+44</span>
                                            //             </li>
                                            //             <li class="divider"></li>
                                            //             <li class="country" data-dial-code="54" data-country-code="ar">
                                            //                 <div class="flag-box">
                                            //                     <div class="iti-flag ar"></div>
                                            //                 </div><span class="country-name">Argentina</span><span
                                            //                     class="dial-code">+54</span>
                                            //             </li>
                                            //             <li class="country" data-dial-code="61" data-country-code="au">
                                            //                 <div class="flag-box">
                                            //                     <div class="iti-flag au"></div>
                                            //                 </div><span class="country-name">Australia</span><span
                                            //                     class="dial-code">+61</span>
                                            //             </li>
                                            //             <li class="country" data-dial-code="43" data-country-code="at">
                                            //                 <div class="flag-box">
                                            //                     <div class="iti-flag at"></div>
                                            //                 </div><span class="country-name">Austria
                                            //                     (Österreich)</span><span class="dial-code">+43</span>
                                            //             </li>
                                            //             <li class="country" data-dial-code="32" data-country-code="be">
                                            //                 <div class="flag-box">
                                            //                     <div class="iti-flag be"></div>
                                            //                 </div><span class="country-name">Belgium (België)</span><span
                                            //                     class="dial-code">+32</span>
                                            //             </li>
                                            //             <li class="country" data-dial-code="55" data-country-code="br">
                                            //                 <div class="flag-box">
                                            //                     <div class="iti-flag br"></div>
                                            //                 </div><span class="country-name">Brazil (Brasil)</span><span
                                            //                     class="dial-code">+55</span>
                                            //             </li>
                                            //             <li class="country" data-dial-code="359" data-country-code="bg">
                                            //                 <div class="flag-box">
                                            //                     <div class="iti-flag bg"></div>
                                            //                 </div><span class="country-name">Bulgaria (България)</span><span
                                            //                     class="dial-code">+359</span>
                                            //             </li>
                                            //             <li class="country" data-dial-code="1" data-country-code="ca">
                                            //                 <div class="flag-box">
                                            //                     <div class="iti-flag ca"></div>
                                            //                 </div><span class="country-name">Canada</span><span
                                            //                     class="dial-code">+1</span>
                                            //             </li>
                                            //             <li class="country" data-dial-code="56" data-country-code="cl">
                                            //                 <div class="flag-box">
                                            //                     <div class="iti-flag cl"></div>
                                            //                 </div><span class="country-name">Chile</span><span
                                            //                     class="dial-code">+56</span>
                                            //             </li>
                                            //             <li class="country" data-dial-code="86" data-country-code="cn">
                                            //                 <div class="flag-box">
                                            //                     <div class="iti-flag cn"></div>
                                            //                 </div><span class="country-name">China (中国)</span><span
                                            //                     class="dial-code">+86</span>
                                            //             </li>
                                            //             <li class="country" data-dial-code="385" data-country-code="hr">
                                            //                 <div class="flag-box">
                                            //                     <div class="iti-flag hr"></div>
                                            //                 </div><span class="country-name">Croatia (Hrvatska)</span><span
                                            //                     class="dial-code">+385</span>
                                            //             </li>
                                            //             <li class="country" data-dial-code="357" data-country-code="cy">
                                            //                 <div class="flag-box">
                                            //                     <div class="iti-flag cy"></div>
                                            //                 </div><span class="country-name">Cyprus (Κύπρος)</span><span
                                            //                     class="dial-code">+357</span>
                                            //             </li>
                                            //             <li class="country" data-dial-code="420" data-country-code="cz">
                                            //                 <div class="flag-box">
                                            //                     <div class="iti-flag cz"></div>
                                            //                 </div><span class="country-name">Czech Republic (Česká
                                            //                     republika)</span><span class="dial-code">+420</span>
                                            //             </li>
                                            //             <li class="country" data-dial-code="45" data-country-code="dk">
                                            //                 <div class="flag-box">
                                            //                     <div class="iti-flag dk"></div>
                                            //                 </div><span class="country-name">Denmark (Danmark)</span><span
                                            //                     class="dial-code">+45</span>
                                            //             </li>
                                            //             <li class="country" data-dial-code="593" data-country-code="ec">
                                            //                 <div class="flag-box">
                                            //                     <div class="iti-flag ec"></div>
                                            //                 </div><span class="country-name">Ecuador</span><span
                                            //                     class="dial-code">+593</span>
                                            //             </li>
                                            //             <li class="country active" data-dial-code="20" data-country-code="eg">
                                            //                 <div class="flag-box">
                                            //                     <div class="iti-flag eg"></div>
                                            //                 </div><span class="country-name">Egypt (‫مصر‬‎)</span><span
                                            //                     class="dial-code">+20</span>
                                            //             </li>
                                            //             <li class="country" data-dial-code="372" data-country-code="ee">
                                            //                 <div class="flag-box">
                                            //                     <div class="iti-flag ee"></div>
                                            //                 </div><span class="country-name">Estonia (Eesti)</span><span
                                            //                     class="dial-code">+372</span>
                                            //             </li>
                                            //             <li class="country" data-dial-code="358" data-country-code="fi">
                                            //                 <div class="flag-box">
                                            //                     <div class="iti-flag fi"></div>
                                            //                 </div><span class="country-name">Finland (Suomi)</span><span
                                            //                     class="dial-code">+358</span>
                                            //             </li>
                                            //             <li class="country" data-dial-code="33" data-country-code="fr">
                                            //                 <div class="flag-box">
                                            //                     <div class="iti-flag fr"></div>
                                            //                 </div><span class="country-name">France</span><span
                                            //                     class="dial-code">+33</span>
                                            //             </li>
                                            //             <li class="country" data-dial-code="49" data-country-code="de">
                                            //                 <div class="flag-box">
                                            //                     <div class="iti-flag de"></div>
                                            //                 </div><span class="country-name">Germany
                                            //                     (Deutschland)</span><span class="dial-code">+49</span>
                                            //             </li>
                                            //             <li class="country" data-dial-code="30" data-country-code="gr">
                                            //                 <div class="flag-box">
                                            //                     <div class="iti-flag gr"></div>
                                            //                 </div><span class="country-name">Greece (Ελλάδα)</span><span
                                            //                     class="dial-code">+30</span>
                                            //             </li>
                                            //             <li class="country" data-dial-code="852" data-country-code="hk">
                                            //                 <div class="flag-box">
                                            //                     <div class="iti-flag hk"></div>
                                            //                 </div><span class="country-name">Hong Kong (香港)</span><span
                                            //                     class="dial-code">+852</span>
                                            //             </li>
                                            //             <li class="country" data-dial-code="36" data-country-code="hu">
                                            //                 <div class="flag-box">
                                            //                     <div class="iti-flag hu"></div>
                                            //                 </div><span class="country-name">Hungary
                                            //                     (Magyarország)</span><span class="dial-code">+36</span>
                                            //             </li>
                                            //             <li class="country" data-dial-code="354" data-country-code="is">
                                            //                 <div class="flag-box">
                                            //                     <div class="iti-flag is"></div>
                                            //                 </div><span class="country-name">Iceland (Ísland)</span><span
                                            //                     class="dial-code">+354</span>
                                            //             </li>
                                            //             <li class="country" data-dial-code="91" data-country-code="in">
                                            //                 <div class="flag-box">
                                            //                     <div class="iti-flag in"></div>
                                            //                 </div><span class="country-name">India (भारत)</span><span
                                            //                     class="dial-code">+91</span>
                                            //             </li>
                                            //             <li class="country" data-dial-code="62" data-country-code="id">
                                            //                 <div class="flag-box">
                                            //                     <div class="iti-flag id"></div>
                                            //                 </div><span class="country-name">Indonesia</span><span
                                            //                     class="dial-code">+62</span>
                                            //             </li>
                                            //             <li class="country" data-dial-code="353" data-country-code="ie">
                                            //                 <div class="flag-box">
                                            //                     <div class="iti-flag ie"></div>
                                            //                 </div><span class="country-name">Ireland</span><span
                                            //                     class="dial-code">+353</span>
                                            //             </li>
                                            //             <li class="country" data-dial-code="972" data-country-code="il">
                                            //                 <div class="flag-box">
                                            //                     <div class="iti-flag il"></div>
                                            //                 </div><span class="country-name">Israel (‫ישראל‬‎)</span><span
                                            //                     class="dial-code">+972</span>
                                            //             </li>
                                            //             <li class="country" data-dial-code="81" data-country-code="jp">
                                            //                 <div class="flag-box">
                                            //                     <div class="iti-flag jp"></div>
                                            //                 </div><span class="country-name">Japan (日本)</span><span
                                            //                     class="dial-code">+81</span>
                                            //             </li>
                                            //             <li class="country" data-dial-code="965" data-country-code="kw">
                                            //                 <div class="flag-box">
                                            //                     <div class="iti-flag kw"></div>
                                            //                 </div><span class="country-name">Kuwait (‫الكويت‬‎)</span><span
                                            //                     class="dial-code">+965</span>
                                            //             </li>
                                            //             <li class="country" data-dial-code="371" data-country-code="lv">
                                            //                 <div class="flag-box">
                                            //                     <div class="iti-flag lv"></div>
                                            //                 </div><span class="country-name">Latvia (Latvija)</span><span
                                            //                     class="dial-code">+371</span>
                                            //             </li>
                                            //             <li class="country" data-dial-code="423" data-country-code="li">
                                            //                 <div class="flag-box">
                                            //                     <div class="iti-flag li"></div>
                                            //                 </div><span class="country-name">Liechtenstein</span><span
                                            //                     class="dial-code">+423</span>
                                            //             </li>
                                            //             <li class="country" data-dial-code="370" data-country-code="lt">
                                            //                 <div class="flag-box">
                                            //                     <div class="iti-flag lt"></div>
                                            //                 </div><span class="country-name">Lithuania (Lietuva)</span><span
                                            //                     class="dial-code">+370</span>
                                            //             </li>
                                            //             <li class="country" data-dial-code="352" data-country-code="lu">
                                            //                 <div class="flag-box">
                                            //                     <div class="iti-flag lu"></div>
                                            //                 </div><span class="country-name">Luxembourg</span><span
                                            //                     class="dial-code">+352</span>
                                            //             </li>
                                            //             <li class="country" data-dial-code="60" data-country-code="my">
                                            //                 <div class="flag-box">
                                            //                     <div class="iti-flag my"></div>
                                            //                 </div><span class="country-name">Malaysia</span><span
                                            //                     class="dial-code">+60</span>
                                            //             </li>
                                            //             <li class="country" data-dial-code="356" data-country-code="mt">
                                            //                 <div class="flag-box">
                                            //                     <div class="iti-flag mt"></div>
                                            //                 </div><span class="country-name">Malta</span><span
                                            //                     class="dial-code">+356</span>
                                            //             </li>
                                            //             <li class="country" data-dial-code="52" data-country-code="mx">
                                            //                 <div class="flag-box">
                                            //                     <div class="iti-flag mx"></div>
                                            //                 </div><span class="country-name">Mexico (México)</span><span
                                            //                     class="dial-code">+52</span>
                                            //             </li>
                                            //             <li class="country" data-dial-code="377" data-country-code="mc">
                                            //                 <div class="flag-box">
                                            //                     <div class="iti-flag mc"></div>
                                            //                 </div><span class="country-name">Monaco</span><span
                                            //                     class="dial-code">+377</span>
                                            //             </li>
                                            //             <li class="country" data-dial-code="31" data-country-code="nl">
                                            //                 <div class="flag-box">
                                            //                     <div class="iti-flag nl"></div>
                                            //                 </div><span class="country-name">Netherlands
                                            //                     (Nederland)</span><span class="dial-code">+31</span>
                                            //             </li>
                                            //             <li class="country" data-dial-code="64" data-country-code="nz">
                                            //                 <div class="flag-box">
                                            //                     <div class="iti-flag nz"></div>
                                            //                 </div><span class="country-name">New Zealand</span><span
                                            //                     class="dial-code">+64</span>
                                            //             </li>
                                            //             <li class="country" data-dial-code="47" data-country-code="no">
                                            //                 <div class="flag-box">
                                            //                     <div class="iti-flag no"></div>
                                            //                 </div><span class="country-name">Norway (Norge)</span><span
                                            //                     class="dial-code">+47</span>
                                            //             </li>
                                            //             <li class="country" data-dial-code="51" data-country-code="pe">
                                            //                 <div class="flag-box">
                                            //                     <div class="iti-flag pe"></div>
                                            //                 </div><span class="country-name">Peru (Perú)</span><span
                                            //                     class="dial-code">+51</span>
                                            //             </li>
                                            //             <li class="country" data-dial-code="63" data-country-code="ph">
                                            //                 <div class="flag-box">
                                            //                     <div class="iti-flag ph"></div>
                                            //                 </div><span class="country-name">Philippines</span><span
                                            //                     class="dial-code">+63</span>
                                            //             </li>
                                            //             <li class="country" data-dial-code="48" data-country-code="pl">
                                            //                 <div class="flag-box">
                                            //                     <div class="iti-flag pl"></div>
                                            //                 </div><span class="country-name">Poland (Polska)</span><span
                                            //                     class="dial-code">+48</span>
                                            //             </li>
                                            //             <li class="country" data-dial-code="351" data-country-code="pt">
                                            //                 <div class="flag-box">
                                            //                     <div class="iti-flag pt"></div>
                                            //                 </div><span class="country-name">Portugal</span><span
                                            //                     class="dial-code">+351</span>
                                            //             </li>
                                            //             <li class="country" data-dial-code="974" data-country-code="qa">
                                            //                 <div class="flag-box">
                                            //                     <div class="iti-flag qa"></div>
                                            //                 </div><span class="country-name">Qatar (‫قطر‬‎)</span><span
                                            //                     class="dial-code">+974</span>
                                            //             </li>
                                            //             <li class="country" data-dial-code="40" data-country-code="ro">
                                            //                 <div class="flag-box">
                                            //                     <div class="iti-flag ro"></div>
                                            //                 </div><span class="country-name">Romania (România)</span><span
                                            //                     class="dial-code">+40</span>
                                            //             </li>
                                            //             <li class="country" data-dial-code="7" data-country-code="ru">
                                            //                 <div class="flag-box">
                                            //                     <div class="iti-flag ru"></div>
                                            //                 </div><span class="country-name">Russia (Россия)</span><span
                                            //                     class="dial-code">+7</span>
                                            //             </li>
                                            //             <li class="country" data-dial-code="966" data-country-code="sa">
                                            //                 <div class="flag-box">
                                            //                     <div class="iti-flag sa"></div>
                                            //                 </div><span class="country-name">Saudi Arabia (‫المملكة العربية
                                            //                     السعودية‬‎)</span><span class="dial-code">+966</span>
                                            //             </li>
                                            //             <li class="country" data-dial-code="65" data-country-code="sg">
                                            //                 <div class="flag-box">
                                            //                     <div class="iti-flag sg"></div>
                                            //                 </div><span class="country-name">Singapore</span><span
                                            //                     class="dial-code">+65</span>
                                            //             </li>
                                            //             <li class="country" data-dial-code="421" data-country-code="sk">
                                            //                 <div class="flag-box">
                                            //                     <div class="iti-flag sk"></div>
                                            //                 </div><span class="country-name">Slovakia
                                            //                     (Slovensko)</span><span class="dial-code">+421</span>
                                            //             </li>
                                            //             <li class="country" data-dial-code="386" data-country-code="si">
                                            //                 <div class="flag-box">
                                            //                     <div class="iti-flag si"></div>
                                            //                 </div><span class="country-name">Slovenia
                                            //                     (Slovenija)</span><span class="dial-code">+386</span>
                                            //             </li>
                                            //             <li class="country" data-dial-code="27" data-country-code="za">
                                            //                 <div class="flag-box">
                                            //                     <div class="iti-flag za"></div>
                                            //                 </div><span class="country-name">South Africa</span><span
                                            //                     class="dial-code">+27</span>
                                            //             </li>
                                            //             <li class="country" data-dial-code="82" data-country-code="kr">
                                            //                 <div class="flag-box">
                                            //                     <div class="iti-flag kr"></div>
                                            //                 </div><span class="country-name">South Korea (대한민국)</span><span
                                            //                     class="dial-code">+82</span>
                                            //             </li>
                                            //             <li class="country" data-dial-code="34" data-country-code="es">
                                            //                 <div class="flag-box">
                                            //                     <div class="iti-flag es"></div>
                                            //                 </div><span class="country-name">Spain (España)</span><span
                                            //                     class="dial-code">+34</span>
                                            //             </li>
                                            //             <li class="country" data-dial-code="46" data-country-code="se">
                                            //                 <div class="flag-box">
                                            //                     <div class="iti-flag se"></div>
                                            //                 </div><span class="country-name">Sweden (Sverige)</span><span
                                            //                     class="dial-code">+46</span>
                                            //             </li>
                                            //             <li class="country" data-dial-code="41" data-country-code="ch">
                                            //                 <div class="flag-box">
                                            //                     <div class="iti-flag ch"></div>
                                            //                 </div><span class="country-name">Switzerland
                                            //                     (Schweiz)</span><span class="dial-code">+41</span>
                                            //             </li>
                                            //             <li class="country" data-dial-code="66" data-country-code="th">
                                            //                 <div class="flag-box">
                                            //                     <div class="iti-flag th"></div>
                                            //                 </div><span class="country-name">Thailand (ไทย)</span><span
                                            //                     class="dial-code">+66</span>
                                            //             </li>
                                            //             <li class="country" data-dial-code="90" data-country-code="tr">
                                            //                 <div class="flag-box">
                                            //                     <div class="iti-flag tr"></div>
                                            //                 </div><span class="country-name">Turkey (Türkiye)</span><span
                                            //                     class="dial-code">+90</span>
                                            //             </li>
                                            //             <li class="country" data-dial-code="380" data-country-code="ua">
                                            //                 <div class="flag-box">
                                            //                     <div class="iti-flag ua"></div>
                                            //                 </div><span class="country-name">Ukraine (Україна)</span><span
                                            //                     class="dial-code">+380</span>
                                            //             </li>
                                            //             <li class="country" data-dial-code="971" data-country-code="ae">
                                            //                 <div class="flag-box">
                                            //                     <div class="iti-flag ae"></div>
                                            //                 </div><span class="country-name">United Arab Emirates (‫الإمارات
                                            //                     العربية المتحدة‬‎)</span><span class="dial-code">+971</span>
                                            //             </li>
                                            //             <li class="country" data-dial-code="44" data-country-code="gb">
                                            //                 <div class="flag-box">
                                            //                     <div class="iti-flag gb"></div>
                                            //                 </div><span class="country-name">United Kingdom</span><span
                                            //                     class="dial-code">+44</span>
                                            //             </li>
                                            //             <li class="country" data-dial-code="1" data-country-code="us">
                                            //                 <div class="flag-box">
                                            //                     <div class="iti-flag us"></div>
                                            //                 </div><span class="country-name">United States</span><span
                                            //                     class="dial-code">+1</span>
                                            //             </li>
                                            //             <li class="country" data-dial-code="598" data-country-code="uy">
                                            //                 <div class="flag-box">
                                            //                     <div class="iti-flag uy"></div>
                                            //                 </div><span class="country-name">Uruguay</span><span
                                            //                     class="dial-code">+598</span>
                                            //             </li>
                                            //         </ul>
                                            //     </div>
                                            //     <input type="tel" class="closor-callback-v1-input" data-iti="true"
                                            //         data-role="callback-phone-number-input" autocomplete="off"
                                            //         placeholder="Enter your phone number">
                                            // </div>
                                            // <div class="allow-dropdown separate-dial-code iti-sdc-3">
                                            //     <input type="Email" class="closor-callback-v1-input" data-iti="true"
                                            //         data-role="callback-phone-number-input" autocomplete="off"
                                            //         placeholder="Email">
                                            // </div>
                                            $widget .=' <div class="allow-dropdown separate-dial-code iti-sdc-3">
                                                        <div class="form-group">
                                                            <input id="phone" type="phone" class="form-control closor-callback-v1-input"
                                                            name="phone"
                                                            required
                                                            placeholder="phone"
                                                            required autocomplete="phone"
                                                            style="padding-left: 52px">
                                                        </div>
                                                    </div>';
                                        foreach($source->fields as $inputfield){
                                                if($inputfield == 'custom1'){
                                                    $widget .= '
                                                    <div class="allow-dropdown separate-dial-code iti-sdc-3">
                                                        <input type="text" class="closor-callback-v1-input" data-iti="true"
                                                            data-role="callback-phone-number-input" autocomplete="off" name="custom1"
                                                            placeholder="'.$source->custom_lable_1.'">
                                                    </div>
                                                    ';
                                                }elseif($inputfield == 'custom2'){
                                                    $widget .= '
                                                    <div class="allow-dropdown separate-dial-code iti-sdc-3">
                                                        <input type="text" class="closor-callback-v1-input" data-iti="true"
                                                            data-role="callback-phone-number-input" autocomplete="off" name="custom2"
                                                            placeholder="'.$source->custom_lable_2.'">
                                                    </div>
                                                    ';
                                                }else{
                                                $widget .= '
                                                <div class="allow-dropdown separate-dial-code iti-sdc-3">
                                                    <input type="text" class="closor-callback-v1-input" data-iti="true" name="'.$inputfield.'"
                                                        data-role="callback-phone-number-input" autocomplete="off"
                                                        placeholder="'.$inputfield.'">
                                                </div>
                                                ';
                                                }
                                            }

                                            $widget .=   '<button class="closor-callback-v1-button" style="background:'.$source->primary.'!important" id="button-id">
                                                <div class="closor-callback-v1-preloader">
                                                    <div class="closor-callback-v1-preloader-dot closor-dot-1">
                                                    </div>
                                                    <div class="closor-callback-v1-preloader-dot closor-dot-2">
                                                    </div>
                                                    <div class="closor-callback-v1-preloader-dot closor-dot-3"></div>
                                                </div>
                                                <span class="closor-callback-v1-button-text" style="color:'.$source->secondary.'!important" >Call me now</span>
                                            </button>



                                            <div class="closor-callback-v1-security-hint">
                                                <div class="closor-callback-v1-security-hint-icon"></div>

                                                Your data is secured.We respect your privacy

                                            </div>

                                        </form>
                                    </div>
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
        <script src="https://api.ipdata.co?api-key=test" type="text/javascript"></script>
        <script src="https://app.closor.com/css/intl-tel-input-17.0.0/build/js/intlTelInput.js"></script>
        ';
            return $widget;

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
    public function widget_ajax(Request $request){
        if(!$request->phone){
            return 0;
        }
        $data = $request->all();
        unset($data['csrftoken']);

        $user = Source::find($request->source_id)->workplace->users()->withCount('leads')->orderBy('leads_count', 'asc')->first();

        if(!@$request->product_id && !$request->product_id){
            $product_id = Source::find($request->source_id)->workplace->products()->first()->id;
        }else{
            $product_id = $request->product_id;
        }
        $save = new Lead;
        $save->source_id = $request->source_id;
        $save->user_id = $user->id;
        $save->product_id = $product_id;
        $save->name = $request->name;
        $save->email = $request->email;
        $save->phone = $request->country_code .' '.$request->phone;
        $save->lead = json_encode($data);
        $save->save();

        event(new NotificationEvent($save));

        return 1;
    }

}