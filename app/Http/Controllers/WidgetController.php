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
        <link href="https://malexs.net/closor/public/widget/widget.css" rel="stylesheet">
        <link href="https://malexs.net/closor/public/css/icons/material-design-iconic-font/css/materialdesignicons.min.css"
        rel="stylesheet">
        <link rel="stylesheet" href="https://malexs.net/closor/public/css/intl-tel-input-17.0.0/build/css/intlTelInput.css">
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
        <style>
            .iti {
    position: relative;
    display: block;
   }
    .iti * {
      box-sizing: border-box;
      -moz-box-sizing: border-box; }
    .iti__hide {
      display: none; }
    .iti__v-hide {
      visibility: hidden; }
    .iti input, .iti input[type=text], .iti input[type=tel] {
      position: relative;
      z-index: 0;
      margin-top: 0 !important;
      margin-bottom: 0 !important;
      padding-right: 36px;
      margin-right: 0; }
    .iti__flag-container {
      position: absolute;
      top: 0;
      bottom: 0;
      right: 0;
      padding: 1px; }
    .iti__selected-flag {
      z-index: 1;
      position: relative;
      display: flex;
      align-items: center;
      height: 100%;
      padding: 0 6px 0 8px; }
    .iti__arrow {
      margin-left: 6px;
      width: 0;
      height: 0;
      border-left: 3px solid transparent;
      border-right: 3px solid transparent;
      border-top: 4px solid #555; }
      .iti__arrow--up {
        border-top: none;
        border-bottom: 4px solid #555; }
    .iti__country-list {
      position: absolute;
      z-index: 2;
      list-style: none;
      text-align: left;
      padding: 0;
      margin: 0 0 0 -1px;
      box-shadow: 1px 1px 4px rgba(0, 0, 0, 0.2);
      background-color: white;
      border: 1px solid #CCC;
      white-space: nowrap;
      max-height: 200px;
      overflow-y: scroll;
      -webkit-overflow-scrolling: touch; }
      .iti__country-list--dropup {
        bottom: 100%;
        margin-bottom: -1px; }
      @media (max-width: 500px) {
        .iti__country-list {
          white-space: normal; } }
    .iti__flag-box {
      display: inline-block;
      width: 20px; }
    .iti__divider {
      padding-bottom: 5px;
      margin-bottom: 5px;
      border-bottom: 1px solid #CCC; }
    .iti__country {
      padding: 5px 10px;
      outline: none; }
    .iti__dial-code {
      color: #999; }
    .iti__country.iti__highlight {
      background-color: rgba(0, 0, 0, 0.05); }
    .iti__flag-box, .iti__country-name, .iti__dial-code {
      vertical-align: middle; }
    .iti__flag-box, .iti__country-name {
      margin-right: 6px; }
    .iti--allow-dropdown input, .iti--allow-dropdown input[type=text], .iti--allow-dropdown input[type=tel], .iti--separate-dial-code input, .iti--separate-dial-code input[type=text], .iti--separate-dial-code input[type=tel] {
      padding-right: 6px;
      padding-left: 52px;
      margin-left: 0; }
    .iti--allow-dropdown .iti__flag-container, .iti--separate-dial-code .iti__flag-container {
      right: auto;
      left: 0; }
    .iti--allow-dropdown .iti__flag-container:hover {
      cursor: pointer; }
      .iti--allow-dropdown .iti__flag-container:hover .iti__selected-flag {
        background-color: rgba(0, 0, 0, 0.05); }
    .iti--allow-dropdown input[disabled] + .iti__flag-container:hover,
    .iti--allow-dropdown input[readonly] + .iti__flag-container:hover {
      cursor: default; }
      .iti--allow-dropdown input[disabled] + .iti__flag-container:hover .iti__selected-flag,
      .iti--allow-dropdown input[readonly] + .iti__flag-container:hover .iti__selected-flag {
        background-color: transparent; }
    .iti--separate-dial-code .iti__selected-flag {
      background-color: rgba(0, 0, 0, 0.05); }
    .iti--separate-dial-code .iti__selected-dial-code {
      margin-left: 6px; }
    .iti--container {
      position: absolute;
      top: -1000px;
      left: -1000px;
      z-index: 1060;
      padding: 1px; }
      .iti--container:hover {
        cursor: pointer; }

  .iti-mobile .iti--container {
    top: 30px;
    bottom: 30px;
    left: 30px;
    right: 30px;
    position: fixed; }

  .iti-mobile .iti__country-list {
    max-height: 100%;
    width: 100%; }

  .iti-mobile .iti__country {
    padding: 10px 10px;
    line-height: 1.5em; }

  .iti__flag {
    width: 20px; }
    .iti__flag.iti__be {
      width: 18px; }
    .iti__flag.iti__ch {
      width: 15px; }
    .iti__flag.iti__mc {
      width: 19px; }
    .iti__flag.iti__ne {
      width: 18px; }
    .iti__flag.iti__np {
      width: 13px; }
    .iti__flag.iti__va {
      width: 15px; }
    @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
      .iti__flag {
        background-size: 5652px 15px; } }
    .iti__flag.iti__ac {
      height: 10px;
      background-position: 0px 0px; }
    .iti__flag.iti__ad {
      height: 14px;
      background-position: -22px 0px; }
    .iti__flag.iti__ae {
      height: 10px;
      background-position: -44px 0px; }
    .iti__flag.iti__af {
      height: 14px;
      background-position: -66px 0px; }
    .iti__flag.iti__ag {
      height: 14px;
      background-position: -88px 0px; }
    .iti__flag.iti__ai {
      height: 10px;
      background-position: -110px 0px; }
    .iti__flag.iti__al {
      height: 15px;
      background-position: -132px 0px; }
    .iti__flag.iti__am {
      height: 10px;
      background-position: -154px 0px; }
    .iti__flag.iti__ao {
      height: 14px;
      background-position: -176px 0px; }
    .iti__flag.iti__aq {
      height: 14px;
      background-position: -198px 0px; }
    .iti__flag.iti__ar {
      height: 13px;
      background-position: -220px 0px; }
    .iti__flag.iti__as {
      height: 10px;
      background-position: -242px 0px; }
    .iti__flag.iti__at {
      height: 14px;
      background-position: -264px 0px; }
    .iti__flag.iti__au {
      height: 10px;
      background-position: -286px 0px; }
    .iti__flag.iti__aw {
      height: 14px;
      background-position: -308px 0px; }
    .iti__flag.iti__ax {
      height: 13px;
      background-position: -330px 0px; }
    .iti__flag.iti__az {
      height: 10px;
      background-position: -352px 0px; }
    .iti__flag.iti__ba {
      height: 10px;
      background-position: -374px 0px; }
    .iti__flag.iti__bb {
      height: 14px;
      background-position: -396px 0px; }
    .iti__flag.iti__bd {
      height: 12px;
      background-position: -418px 0px; }
    .iti__flag.iti__be {
      height: 15px;
      background-position: -440px 0px; }
    .iti__flag.iti__bf {
      height: 14px;
      background-position: -460px 0px; }
    .iti__flag.iti__bg {
      height: 12px;
      background-position: -482px 0px; }
    .iti__flag.iti__bh {
      height: 12px;
      background-position: -504px 0px; }
    .iti__flag.iti__bi {
      height: 12px;
      background-position: -526px 0px; }
    .iti__flag.iti__bj {
      height: 14px;
      background-position: -548px 0px; }
    .iti__flag.iti__bl {
      height: 14px;
      background-position: -570px 0px; }
    .iti__flag.iti__bm {
      height: 10px;
      background-position: -592px 0px; }
    .iti__flag.iti__bn {
      height: 10px;
      background-position: -614px 0px; }
    .iti__flag.iti__bo {
      height: 14px;
      background-position: -636px 0px; }
    .iti__flag.iti__bq {
      height: 14px;
      background-position: -658px 0px; }
    .iti__flag.iti__br {
      height: 14px;
      background-position: -680px 0px; }
    .iti__flag.iti__bs {
      height: 10px;
      background-position: -702px 0px; }
    .iti__flag.iti__bt {
      height: 14px;
      background-position: -724px 0px; }
    .iti__flag.iti__bv {
      height: 15px;
      background-position: -746px 0px; }
    .iti__flag.iti__bw {
      height: 14px;
      background-position: -768px 0px; }
    .iti__flag.iti__by {
      height: 10px;
      background-position: -790px 0px; }
    .iti__flag.iti__bz {
      height: 14px;
      background-position: -812px 0px; }
    .iti__flag.iti__ca {
      height: 10px;
      background-position: -834px 0px; }
    .iti__flag.iti__cc {
      height: 10px;
      background-position: -856px 0px; }
    .iti__flag.iti__cd {
      height: 15px;
      background-position: -878px 0px; }
    .iti__flag.iti__cf {
      height: 14px;
      background-position: -900px 0px; }
    .iti__flag.iti__cg {
      height: 14px;
      background-position: -922px 0px; }
    .iti__flag.iti__ch {
      height: 15px;
      background-position: -944px 0px; }
    .iti__flag.iti__ci {
      height: 14px;
      background-position: -961px 0px; }
    .iti__flag.iti__ck {
      height: 10px;
      background-position: -983px 0px; }
    .iti__flag.iti__cl {
      height: 14px;
      background-position: -1005px 0px; }
    .iti__flag.iti__cm {
      height: 14px;
      background-position: -1027px 0px; }
    .iti__flag.iti__cn {
      height: 14px;
      background-position: -1049px 0px; }
    .iti__flag.iti__co {
      height: 14px;
      background-position: -1071px 0px; }
    .iti__flag.iti__cp {
      height: 14px;
      background-position: -1093px 0px; }
    .iti__flag.iti__cr {
      height: 12px;
      background-position: -1115px 0px; }
    .iti__flag.iti__cu {
      height: 10px;
      background-position: -1137px 0px; }
    .iti__flag.iti__cv {
      height: 12px;
      background-position: -1159px 0px; }
    .iti__flag.iti__cw {
      height: 14px;
      background-position: -1181px 0px; }
    .iti__flag.iti__cx {
      height: 10px;
      background-position: -1203px 0px; }
    .iti__flag.iti__cy {
      height: 14px;
      background-position: -1225px 0px; }
    .iti__flag.iti__cz {
      height: 14px;
      background-position: -1247px 0px; }
    .iti__flag.iti__de {
      height: 12px;
      background-position: -1269px 0px; }
    .iti__flag.iti__dg {
      height: 10px;
      background-position: -1291px 0px; }
    .iti__flag.iti__dj {
      height: 14px;
      background-position: -1313px 0px; }
    .iti__flag.iti__dk {
      height: 15px;
      background-position: -1335px 0px; }
    .iti__flag.iti__dm {
      height: 10px;
      background-position: -1357px 0px; }
    .iti__flag.iti__do {
      height: 14px;
      background-position: -1379px 0px; }
    .iti__flag.iti__dz {
      height: 14px;
      background-position: -1401px 0px; }
    .iti__flag.iti__ea {
      height: 14px;
      background-position: -1423px 0px; }
    .iti__flag.iti__ec {
      height: 14px;
      background-position: -1445px 0px; }
    .iti__flag.iti__ee {
      height: 13px;
      background-position: -1467px 0px; }
    .iti__flag.iti__eg {
      height: 14px;
      background-position: -1489px 0px; }
    .iti__flag.iti__eh {
      height: 10px;
      background-position: -1511px 0px; }
    .iti__flag.iti__er {
      height: 10px;
      background-position: -1533px 0px; }
    .iti__flag.iti__es {
      height: 14px;
      background-position: -1555px 0px; }
    .iti__flag.iti__et {
      height: 10px;
      background-position: -1577px 0px; }
    .iti__flag.iti__eu {
      height: 14px;
      background-position: -1599px 0px; }
    .iti__flag.iti__fi {
      height: 12px;
      background-position: -1621px 0px; }
    .iti__flag.iti__fj {
      height: 10px;
      background-position: -1643px 0px; }
    .iti__flag.iti__fk {
      height: 10px;
      background-position: -1665px 0px; }
    .iti__flag.iti__fm {
      height: 11px;
      background-position: -1687px 0px; }
    .iti__flag.iti__fo {
      height: 15px;
      background-position: -1709px 0px; }
    .iti__flag.iti__fr {
      height: 14px;
      background-position: -1731px 0px; }
    .iti__flag.iti__ga {
      height: 15px;
      background-position: -1753px 0px; }
    .iti__flag.iti__gb {
      height: 10px;
      background-position: -1775px 0px; }
    .iti__flag.iti__gd {
      height: 12px;
      background-position: -1797px 0px; }
    .iti__flag.iti__ge {
      height: 14px;
      background-position: -1819px 0px; }
    .iti__flag.iti__gf {
      height: 14px;
      background-position: -1841px 0px; }
    .iti__flag.iti__gg {
      height: 14px;
      background-position: -1863px 0px; }
    .iti__flag.iti__gh {
      height: 14px;
      background-position: -1885px 0px; }
    .iti__flag.iti__gi {
      height: 10px;
      background-position: -1907px 0px; }
    .iti__flag.iti__gl {
      height: 14px;
      background-position: -1929px 0px; }
    .iti__flag.iti__gm {
      height: 14px;
      background-position: -1951px 0px; }
    .iti__flag.iti__gn {
      height: 14px;
      background-position: -1973px 0px; }
    .iti__flag.iti__gp {
      height: 14px;
      background-position: -1995px 0px; }
    .iti__flag.iti__gq {
      height: 14px;
      background-position: -2017px 0px; }
    .iti__flag.iti__gr {
      height: 14px;
      background-position: -2039px 0px; }
    .iti__flag.iti__gs {
      height: 10px;
      background-position: -2061px 0px; }
    .iti__flag.iti__gt {
      height: 13px;
      background-position: -2083px 0px; }
    .iti__flag.iti__gu {
      height: 11px;
      background-position: -2105px 0px; }
    .iti__flag.iti__gw {
      height: 10px;
      background-position: -2127px 0px; }
    .iti__flag.iti__gy {
      height: 12px;
      background-position: -2149px 0px; }
    .iti__flag.iti__hk {
      height: 14px;
      background-position: -2171px 0px; }
    .iti__flag.iti__hm {
      height: 10px;
      background-position: -2193px 0px; }
    .iti__flag.iti__hn {
      height: 10px;
      background-position: -2215px 0px; }
    .iti__flag.iti__hr {
      height: 10px;
      background-position: -2237px 0px; }
    .iti__flag.iti__ht {
      height: 12px;
      background-position: -2259px 0px; }
    .iti__flag.iti__hu {
      height: 10px;
      background-position: -2281px 0px; }
    .iti__flag.iti__ic {
      height: 14px;
      background-position: -2303px 0px; }
    .iti__flag.iti__id {
      height: 14px;
      background-position: -2325px 0px; }
    .iti__flag.iti__ie {
      height: 10px;
      background-position: -2347px 0px; }
    .iti__flag.iti__il {
      height: 15px;
      background-position: -2369px 0px; }
    .iti__flag.iti__im {
      height: 10px;
      background-position: -2391px 0px; }
    .iti__flag.iti__in {
      height: 14px;
      background-position: -2413px 0px; }
    .iti__flag.iti__io {
      height: 10px;
      background-position: -2435px 0px; }
    .iti__flag.iti__iq {
      height: 14px;
      background-position: -2457px 0px; }
    .iti__flag.iti__ir {
      height: 12px;
      background-position: -2479px 0px; }
    .iti__flag.iti__is {
      height: 15px;
      background-position: -2501px 0px; }
    .iti__flag.iti__it {
      height: 14px;
      background-position: -2523px 0px; }
    .iti__flag.iti__je {
      height: 12px;
      background-position: -2545px 0px; }
    .iti__flag.iti__jm {
      height: 10px;
      background-position: -2567px 0px; }
    .iti__flag.iti__jo {
      height: 10px;
      background-position: -2589px 0px; }
    .iti__flag.iti__jp {
      height: 14px;
      background-position: -2611px 0px; }
    .iti__flag.iti__ke {
      height: 14px;
      background-position: -2633px 0px; }
    .iti__flag.iti__kg {
      height: 12px;
      background-position: -2655px 0px; }
    .iti__flag.iti__kh {
      height: 13px;
      background-position: -2677px 0px; }
    .iti__flag.iti__ki {
      height: 10px;
      background-position: -2699px 0px; }
    .iti__flag.iti__km {
      height: 12px;
      background-position: -2721px 0px; }
    .iti__flag.iti__kn {
      height: 14px;
      background-position: -2743px 0px; }
    .iti__flag.iti__kp {
      height: 10px;
      background-position: -2765px 0px; }
    .iti__flag.iti__kr {
      height: 14px;
      background-position: -2787px 0px; }
    .iti__flag.iti__kw {
      height: 10px;
      background-position: -2809px 0px; }
    .iti__flag.iti__ky {
      height: 10px;
      background-position: -2831px 0px; }
    .iti__flag.iti__kz {
      height: 10px;
      background-position: -2853px 0px; }
    .iti__flag.iti__la {
      height: 14px;
      background-position: -2875px 0px; }
    .iti__flag.iti__lb {
      height: 14px;
      background-position: -2897px 0px; }
    .iti__flag.iti__lc {
      height: 10px;
      background-position: -2919px 0px; }
    .iti__flag.iti__li {
      height: 12px;
      background-position: -2941px 0px; }
    .iti__flag.iti__lk {
      height: 10px;
      background-position: -2963px 0px; }
    .iti__flag.iti__lr {
      height: 11px;
      background-position: -2985px 0px; }
    .iti__flag.iti__ls {
      height: 14px;
      background-position: -3007px 0px; }
    .iti__flag.iti__lt {
      height: 12px;
      background-position: -3029px 0px; }
    .iti__flag.iti__lu {
      height: 12px;
      background-position: -3051px 0px; }
    .iti__flag.iti__lv {
      height: 10px;
      background-position: -3073px 0px; }
    .iti__flag.iti__ly {
      height: 10px;
      background-position: -3095px 0px; }
    .iti__flag.iti__ma {
      height: 14px;
      background-position: -3117px 0px; }
    .iti__flag.iti__mc {
      height: 15px;
      background-position: -3139px 0px; }
    .iti__flag.iti__md {
      height: 10px;
      background-position: -3160px 0px; }
    .iti__flag.iti__me {
      height: 10px;
      background-position: -3182px 0px; }
    .iti__flag.iti__mf {
      height: 14px;
      background-position: -3204px 0px; }
    .iti__flag.iti__mg {
      height: 14px;
      background-position: -3226px 0px; }
    .iti__flag.iti__mh {
      height: 11px;
      background-position: -3248px 0px; }
    .iti__flag.iti__mk {
      height: 10px;
      background-position: -3270px 0px; }
    .iti__flag.iti__ml {
      height: 14px;
      background-position: -3292px 0px; }
    .iti__flag.iti__mm {
      height: 14px;
      background-position: -3314px 0px; }
    .iti__flag.iti__mn {
      height: 10px;
      background-position: -3336px 0px; }
    .iti__flag.iti__mo {
      height: 14px;
      background-position: -3358px 0px; }
    .iti__flag.iti__mp {
      height: 10px;
      background-position: -3380px 0px; }
    .iti__flag.iti__mq {
      height: 14px;
      background-position: -3402px 0px; }
    .iti__flag.iti__mr {
      height: 14px;
      background-position: -3424px 0px; }
    .iti__flag.iti__ms {
      height: 10px;
      background-position: -3446px 0px; }
    .iti__flag.iti__mt {
      height: 14px;
      background-position: -3468px 0px; }
    .iti__flag.iti__mu {
      height: 14px;
      background-position: -3490px 0px; }
    .iti__flag.iti__mv {
      height: 14px;
      background-position: -3512px 0px; }
    .iti__flag.iti__mw {
      height: 14px;
      background-position: -3534px 0px; }
    .iti__flag.iti__mx {
      height: 12px;
      background-position: -3556px 0px; }
    .iti__flag.iti__my {
      height: 10px;
      background-position: -3578px 0px; }
    .iti__flag.iti__mz {
      height: 14px;
      background-position: -3600px 0px; }
    .iti__flag.iti__na {
      height: 14px;
      background-position: -3622px 0px; }
    .iti__flag.iti__nc {
      height: 10px;
      background-position: -3644px 0px; }
    .iti__flag.iti__ne {
      height: 15px;
      background-position: -3666px 0px; }
    .iti__flag.iti__nf {
      height: 10px;
      background-position: -3686px 0px; }
    .iti__flag.iti__ng {
      height: 10px;
      background-position: -3708px 0px; }
    .iti__flag.iti__ni {
      height: 12px;
      background-position: -3730px 0px; }
    .iti__flag.iti__nl {
      height: 14px;
      background-position: -3752px 0px; }
    .iti__flag.iti__no {
      height: 15px;
      background-position: -3774px 0px; }
    .iti__flag.iti__np {
      height: 15px;
      background-position: -3796px 0px; }
    .iti__flag.iti__nr {
      height: 10px;
      background-position: -3811px 0px; }
    .iti__flag.iti__nu {
      height: 10px;
      background-position: -3833px 0px; }
    .iti__flag.iti__nz {
      height: 10px;
      background-position: -3855px 0px; }
    .iti__flag.iti__om {
      height: 10px;
      background-position: -3877px 0px; }
    .iti__flag.iti__pa {
      height: 14px;
      background-position: -3899px 0px; }
    .iti__flag.iti__pe {
      height: 14px;
      background-position: -3921px 0px; }
    .iti__flag.iti__pf {
      height: 14px;
      background-position: -3943px 0px; }
    .iti__flag.iti__pg {
      height: 15px;
      background-position: -3965px 0px; }
    .iti__flag.iti__ph {
      height: 10px;
      background-position: -3987px 0px; }
    .iti__flag.iti__pk {
      height: 14px;
      background-position: -4009px 0px; }
    .iti__flag.iti__pl {
      height: 13px;
      background-position: -4031px 0px; }
    .iti__flag.iti__pm {
      height: 14px;
      background-position: -4053px 0px; }
    .iti__flag.iti__pn {
      height: 10px;
      background-position: -4075px 0px; }
    .iti__flag.iti__pr {
      height: 14px;
      background-position: -4097px 0px; }
    .iti__flag.iti__ps {
      height: 10px;
      background-position: -4119px 0px; }
    .iti__flag.iti__pt {
      height: 14px;
      background-position: -4141px 0px; }
    .iti__flag.iti__pw {
      height: 13px;
      background-position: -4163px 0px; }
    .iti__flag.iti__py {
      height: 11px;
      background-position: -4185px 0px; }
    .iti__flag.iti__qa {
      height: 8px;
      background-position: -4207px 0px; }
    .iti__flag.iti__re {
      height: 14px;
      background-position: -4229px 0px; }
    .iti__flag.iti__ro {
      height: 14px;
      background-position: -4251px 0px; }
    .iti__flag.iti__rs {
      height: 14px;
      background-position: -4273px 0px; }
    .iti__flag.iti__ru {
      height: 14px;
      background-position: -4295px 0px; }
    .iti__flag.iti__rw {
      height: 14px;
      background-position: -4317px 0px; }
    .iti__flag.iti__sa {
      height: 14px;
      background-position: -4339px 0px; }
    .iti__flag.iti__sb {
      height: 10px;
      background-position: -4361px 0px; }
    .iti__flag.iti__sc {
      height: 10px;
      background-position: -4383px 0px; }
    .iti__flag.iti__sd {
      height: 10px;
      background-position: -4405px 0px; }
    .iti__flag.iti__se {
      height: 13px;
      background-position: -4427px 0px; }
    .iti__flag.iti__sg {
      height: 14px;
      background-position: -4449px 0px; }
    .iti__flag.iti__sh {
      height: 10px;
      background-position: -4471px 0px; }
    .iti__flag.iti__si {
      height: 10px;
      background-position: -4493px 0px; }
    .iti__flag.iti__sj {
      height: 15px;
      background-position: -4515px 0px; }
    .iti__flag.iti__sk {
      height: 14px;
      background-position: -4537px 0px; }
    .iti__flag.iti__sl {
      height: 14px;
      background-position: -4559px 0px; }
    .iti__flag.iti__sm {
      height: 15px;
      background-position: -4581px 0px; }
    .iti__flag.iti__sn {
      height: 14px;
      background-position: -4603px 0px; }
    .iti__flag.iti__so {
      height: 14px;
      background-position: -4625px 0px; }
    .iti__flag.iti__sr {
      height: 14px;
      background-position: -4647px 0px; }
    .iti__flag.iti__ss {
      height: 10px;
      background-position: -4669px 0px; }
    .iti__flag.iti__st {
      height: 10px;
      background-position: -4691px 0px; }
    .iti__flag.iti__sv {
      height: 12px;
      background-position: -4713px 0px; }
    .iti__flag.iti__sx {
      height: 14px;
      background-position: -4735px 0px; }
    .iti__flag.iti__sy {
      height: 14px;
      background-position: -4757px 0px; }
    .iti__flag.iti__sz {
      height: 14px;
      background-position: -4779px 0px; }
    .iti__flag.iti__ta {
      height: 10px;
      background-position: -4801px 0px; }
    .iti__flag.iti__tc {
      height: 10px;
      background-position: -4823px 0px; }
    .iti__flag.iti__td {
      height: 14px;
      background-position: -4845px 0px; }
    .iti__flag.iti__tf {
      height: 14px;
      background-position: -4867px 0px; }
    .iti__flag.iti__tg {
      height: 13px;
      background-position: -4889px 0px; }
    .iti__flag.iti__th {
      height: 14px;
      background-position: -4911px 0px; }
    .iti__flag.iti__tj {
      height: 10px;
      background-position: -4933px 0px; }
    .iti__flag.iti__tk {
      height: 10px;
      background-position: -4955px 0px; }
    .iti__flag.iti__tl {
      height: 10px;
      background-position: -4977px 0px; }
    .iti__flag.iti__tm {
      height: 14px;
      background-position: -4999px 0px; }
    .iti__flag.iti__tn {
      height: 14px;
      background-position: -5021px 0px; }
    .iti__flag.iti__to {
      height: 10px;
      background-position: -5043px 0px; }
    .iti__flag.iti__tr {
      height: 14px;
      background-position: -5065px 0px; }
    .iti__flag.iti__tt {
      height: 12px;
      background-position: -5087px 0px; }
    .iti__flag.iti__tv {
      height: 10px;
      background-position: -5109px 0px; }
    .iti__flag.iti__tw {
      height: 14px;
      background-position: -5131px 0px; }
    .iti__flag.iti__tz {
      height: 14px;
      background-position: -5153px 0px; }
    .iti__flag.iti__ua {
      height: 14px;
      background-position: -5175px 0px; }
    .iti__flag.iti__ug {
      height: 14px;
      background-position: -5197px 0px; }
    .iti__flag.iti__um {
      height: 11px;
      background-position: -5219px 0px; }
    .iti__flag.iti__un {
      height: 14px;
      background-position: -5241px 0px; }
    .iti__flag.iti__us {
      height: 11px;
      background-position: -5263px 0px; }
    .iti__flag.iti__uy {
      height: 14px;
      background-position: -5285px 0px; }
    .iti__flag.iti__uz {
      height: 10px;
      background-position: -5307px 0px; }
    .iti__flag.iti__va {
      height: 15px;
      background-position: -5329px 0px; }
    .iti__flag.iti__vc {
      height: 14px;
      background-position: -5346px 0px; }
    .iti__flag.iti__ve {
      height: 14px;
      background-position: -5368px 0px; }
    .iti__flag.iti__vg {
      height: 10px;
      background-position: -5390px 0px; }
    .iti__flag.iti__vi {
      height: 14px;
      background-position: -5412px 0px; }
    .iti__flag.iti__vn {
      height: 14px;
      background-position: -5434px 0px; }
    .iti__flag.iti__vu {
      height: 12px;
      background-position: -5456px 0px; }
    .iti__flag.iti__wf {
      height: 14px;
      background-position: -5478px 0px; }
    .iti__flag.iti__ws {
      height: 10px;
      background-position: -5500px 0px; }
    .iti__flag.iti__xk {
      height: 15px;
      background-position: -5522px 0px; }
    .iti__flag.iti__ye {
      height: 14px;
      background-position: -5544px 0px; }
    .iti__flag.iti__yt {
      height: 14px;
      background-position: -5566px 0px; }
    .iti__flag.iti__za {
      height: 14px;
      background-position: -5588px 0px; }
    .iti__flag.iti__zm {
      height: 14px;
      background-position: -5610px 0px; }
    .iti__flag.iti__zw {
      height: 10px;
      background-position: -5632px 0px; }

  .iti__flag {
    height: 15px;
    box-shadow: 0px 0px 1px 0px #888;
    background-image: url("../img/flags.png");
    background-repeat: no-repeat;
    background-color: #DBDBDB;
    background-position: 20px 0; }
    @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
      .iti__flag {
        background-image: url("../img/flags@2x.png"); } }

  .iti__flag.iti__np {
    background-color: transparent; }

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
                            $widget .= '<div class="closerDiv" id="closor-callback-v1-bubble" onclick="callCloserModal()" style="background:'.$source->primary.'!important;
                            background: #3481a8!important;display: inline-block;padding: 20px!important;
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

                                                            <input id="phone" type="phone" class="form-control"
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
        <script src="https://malexs.net/closor/public/css/intl-tel-input-17.0.0/build/js/intlTelInput.js"></script>
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

