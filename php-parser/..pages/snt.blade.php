@extends('layouts.main')
@section('content')
    <link rel="stylesheet" type="text/css" href="/css/automation-page2.css?v=2.313225">
    <link rel="stylesheet" type="text/css" href="/landing-resources/lib/lightgallery/css/lightgallery.css" />
    <script src="/landing-resources/lib/lightgallery/js/lightgallery.min.js" type="text/javascript"></script>
    <script src="/landing-resources/lib/lightgallery/modules/lg-video.min.js" type="text/javascript"></script>
    <div class="top-header-container">
        <div class="top-wrap" style="padding-bottom: 0">
            <div class="top-left">
                <h3 class="informer-title"><span style="color: red">@lang('product_snt.novelty')</span> <br/>@lang('product_snt.func_automatic')</h3>
                <h1 class="full-text">@lang('product_snt.description')</h1>
                <a href="/request-form" class="green-request">@lang('product_automation.try_free')</a>
            </div>
            <div class="top-right snt-h-img">
                <img src="/img/snt.png" alt="график прогаммы umag">
                <style>
                    @media(min-width: 767px){.top-right img {width: auto; height: 31rem; margin-top: 40px; margin-bottom: 35px }.top-right {justify-content: center}}
                    @media(max-width: 767px){.top-right img {height: 31rem!important; margin-top: 25px; margin-bottom:0px; position: relative}}
                </style>
            </div>
        </div>
        <div class="m-5rem snt-first">
            <h3 class="fs-2_5rem circe_lig">@lang('product_snt.obligatory_registration')</h3>
            <p class="fs-2_5rem circe_lig">@lang('product_snt.obligatory_registration_desc')</p>
        </div>
        <div class="m-5rem snt-first">
            <h3 class="fs-2_5rem circe_lig">@lang('product_snt.what_snt')</h3>
            <p class="fs-2_5rem circe_lig">@lang('product_snt.what_snt_desc')</p>
        </div>
        <div class="m-5rem snt-first">
            <h3 class="fs-2_5rem circe_lig">@lang('product_snt.who_snt')</h3>
            @lang('product_snt.who_snt_desc')
            <p class="fs-2_5rem circe_lig">@lang('product_snt.labeled_product')</p>
        </div>
    </div>
    <hr class="snt-hr m-5rem"/>
    <div class="m-5rem snt-second">
        <h1 class="center full-text">@lang('product_snt.process_snt')</h1>
        <div class="flex">
            <div class="img-text">
                <span class="center road-green">@lang('product_snt.process_snt_1')</span>
                <img src="/img/factory.png" alt="umag factory illustrate">
            </div>
            <div class="array-text">
                <div><img src="/img/up-arrow.svg" alt="umag up array svg"></div>
                <span class="center">СНТ <br/>@lang('product_snt.shipment_snt')</span>
            </div>
            <div class="img-text">
                <span class="center road-purple">@lang('product_snt.process_snt_2')</span>
                <img src="/img/truck.png" alt="umag factory illustrate">
            </div>
            <div class="array-text">
                <div><img src="/img/up-arrow.svg" alt="umag up array svg"></div>
                <span class="center">СНТ <br/>@lang('product_snt.acceptance_snt')</span>
            </div>
            <div class="img-text">
                <span class="center road-blue">@lang('product_snt.process_snt_3')</span>
                <img src="/img/store.png" alt="umag factory illustrate">
            </div>
            <div class="array-text" style="margin: 0 10px">
                <div><img src="/img/up-arrow.svg" alt="umag up array svg"></div>
                <span class="center last-width">СНТ <br/>@lang('product_snt.implementation_snt')</span>
            </div>
            <div class="img-text">
                <span class="center road-orange">@lang('product_snt.process_snt_4')</span>
                <img src="/img/human.png" alt="umag factory illustrate">
            </div>
        </div>
    </div>
    <hr class="snt-hr m-5rem"/>
    <div class="snt-tmp m-5rem" style="color: #000">
        <h1 class="center full-text">@lang('product_snt.what_penalties')</h1>
        @lang('product_snt.what_penalties_desc')
    </div>
    <hr class="snt-hr m-5rem"/>
    <div class="m-5rem snt-thirt">
        <h1 class="center full-text">@lang('product_snt.umag_help')</h1>
        <div class="umag-gray">
            <div class="chat-text">
                <img src="/img/chat.png" alt="">
                <p class="message-p">@lang('product_snt.umag_help_1')</p>
            </div>
            <div class="chat-text">
                <img src="/img/chat.png" alt="">
                <p class="message-p">@lang('product_snt.umag_help_2')</p>
            </div>
            <div class="chat-text">
                <img src="/img/chat.png" alt="">
                <p class="message-p">@lang('product_snt.umag_help_3')</p>
            </div>
        </div>
        <div class="ps-info">
            <p class="circe_lig">@lang('product_snt.umag_connect')</p>
        </div>
    </div>
    <div class="m-5rem snt-fourth" id="faq">
        <h1 class="center full-text">@lang('product_snt.faq')</h1>
        <div id="collapse-2" class="issue">
            <h2 data-collapse="#collapse-2">
                @lang('product_snt.faq_1')
            </h2>
            @lang('product_snt.faq_1_answer')
        </div>
        <div id="collapse-3" class="issue">
            <h2 data-collapse="#collapse-3">
                @lang('product_snt.faq_2')
            </h2>
            <p class="answer" style="display: none;">
                @lang('product_snt.faq_2_answer')
            </p>
        </div>
        <div id="collapse-4" class="issue">
            <h2 data-collapse="#collapse-4">
                @lang('product_snt.faq_3')
            </h2>
            @lang('product_snt.faq_3_answer')
        </div>
        <div id="collapse-5" class="issue">
            <h2 data-collapse="#collapse-5">
                @lang('product_snt.faq_4')
            </h2>
            @lang('product_snt.faq_4_answer')
        </div>
        <div id="collapse-7" class="issue">
            <h2 data-collapse="#collapse-7">
                @lang('product_snt.faq_5')
            </h2>
            <p class="answer" style="display: none;">
                @lang('product_snt.faq_5_answer')
            </p>
        </div>
    </div>
    <script>
        $("#faq [data-collapse]").click(function() {
            var id = $(this).data("collapse");
            var collapse = $(id);
            collapse.toggleClass("active");
            collapse.find(".answer").slideToggle();
            collapse.siblings().removeClass("active");
            collapse.siblings().find(".answer").slideUp();
        });
    </script>
@stop