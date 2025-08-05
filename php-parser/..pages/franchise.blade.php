<?php
    htmlspecialchars($utm_source = isset($_GET["utm_source"]) ? $_GET["utm_source"] : NULL);
?>
@extends('layouts.main')
@section('content')
<link rel="stylesheet" type="text/css" href="/old-landing-resources/css/start.css?v2.1" />
<link rel="stylesheet" type="text/css" href="/css/style.css?v2.04155" />
<link rel="stylesheet" type="text/css" href="/css/layout.css?v2.0" />
<link rel="stylesheet" type="text/css" href="/css/normalize.css?v2.0" />
<link rel="stylesheet" type="text/css" href="/old-landing-resources/lib/font-awesome-4.7.0/css/font-awesome.min.css" />
<div class="start-page">
    <section id="top">
        <div class="text-box">
            <p class="margin-0">
                @lang('franchise.title')
            </p>
            <h1>
                @lang('franchise.description')
            </h1>
            <p class="margin-0">
                @lang('franchise.earnings_from')
            </p>
            <div class="btn-wrap">
            </div>
        </div>
    </section>
    <section id="second">
        <div class="container row row-align-center">
            <div class="col-33 col-mob-100 sides-padding-20">
                <h1>
                    @lang('franchise.umag_start')
                </h1>
            </div>
            <div class="col-66 col-mob-100 sides-padding-20">
                <div class="row features-row">
                    <div class="col-33 col-mob-100 feature coin">
                        <img src="/old-landing-resources/img/start-page/coin.png" alt="" />
                        <p class="margin-0">
                            @lang('franchise.umag_start_desc_1')
                        </p>
                    </div>
                    <div class="col-33 col-mob-100 feature paper">
                        <img src="/old-landing-resources/img/start-page/paper.png" alt="" />
                        <p class="margin-0">
                            @lang('franchise.umag_start_desc_2')
                        </p>
                    </div>
                    <div class="col-33 col-mob-100 feature clip">
                        <img src="/old-landing-resources/img/start-page/clip.png" alt="" />
                        <p class="margin-0">
                            @lang('franchise.umag_start_desc_3')
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="third">
        <div class="featured-img">
            <div class="orbit-1">
                <div class="circle-1"></div>
                <div class="circle-2"></div>
            </div>
            <div class="orbit-2">
                <div class="circle-1"></div>
                <div class="circle-2"></div>
                <div class="circle-3"></div>
            </div>
            <img class="bg" src="/old-landing-resources/img/start-page/interface.png" />
            <div class="u">
                <div class="pulse"></div>
                <div class="pulse pulse-2"></div>
            </div>
        </div>
        <div class="container sides-padding-30">
            <h1>@lang('franchise.easy_start')</h1>
            <div class="row">
                <div class="col-auto col-mob-100">
                    <div class="card">
                        <strong>@lang('franchise.easy_start_1')</strong>
                        <p class="margin-0">@lang('franchise.easy_start_1_desc')</p>
                        <img src="/old-landing-resources/img/start-page/ico_1.png" alt="" />
                        <span class="count">01</span>
                    </div>
                </div>
                <div class="col-grow no-mobile"></div>
                <div class="col-auto col-mob-100">
                    <div class="card">
                        <strong>@lang('franchise.easy_start_2')</strong>
                        <p class="margin-0">@lang('franchise.easy_start_2_desc')</p>
                        <img src="/old-landing-resources/img/start-page/ico_3.png" alt="" />
                        <span class="count">02</span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-auto col-mob-100">
                    <div class="card margin-left">
                        <strong>@lang('franchise.easy_start_3')</strong>
                        <p class="margin-0">@lang('franchise.easy_start_3_desc')</p>
                        <img src="/old-landing-resources/img/start-page/ico_2.png" alt="" />
                        <span class="count">03</span>
                    </div>
                </div>
                <div class="col-grow no-mobile"></div>
                <div class="col-auto col-mob-100">
                    <div class="card margin-right">
                        <strong>@lang('franchise.easy_start_4')</strong>
                        <p class="margin-0">@lang('franchise.easy_start_4_desc')</p>
                        <img src="/old-landing-resources/img/start-page/ico_4.png" alt="" />
                        <span class="count">04</span>
                    </div>
                </div>
            </div>

            <div class="btn-wrap">
                <button type="button" class="btn">
                    @lang('franchise.become_partner')
                </button>
            </div>
        </div>
    </section>
    <section id="fourth">
        <div class="container sides-padding-40">
            <h1>
                <b>@lang('franchise.offer_partners')</b>
            </h1>

            <div class="row sides-margin-minus-10">
                <div class="col-auto col-mob-100 sides-padding-10">
                    <div class="card margin-20">
                        <strong>@lang('franchise.offer_partners_1')</strong>
                        <p class="margin-0">
                            @lang('franchise.offer_partners_1_desc')
                        </p>
                        <span class="count">01</span>
                    </div>
                </div>
                <div class="col-auto col-mob-100 sides-padding-10">
                    <div class="card margin-20">
                        <strong>@lang('franchise.offer_partners_2')</strong>
                        <p class="margin-0">
                            @lang('franchise.offer_partners_2_desc')
                        </p>
                        <span class="count">02</span>
                    </div>
                </div>
            </div>
            <div class="row margin-50 sides-margin-minus-10">
                <div class="col-auto col-mob-100 sides-padding-10">
                    <div class="card margin-20">
                        <strong>@lang('franchise.offer_partners_3')</strong>
                        <p class="margin-0">
                            @lang('franchise.offer_partners_3_desc')
                        </p>
                        <span class="count">03</span>
                    </div>
                </div>
                <div class="col-auto col-mob-100 sides-padding-10">
                    <div class="card margin-20">
                        <strong>@lang('franchise.offer_partners_4')</strong>
                        <p class="margin-0">
                            @lang('franchise.offer_partners_4_desc')
                        </p>
                        <span class="count">04</span>
                    </div>
                </div>
            </div>

            <div class="btn-wrap">
                <button type="button" class="btn">
                    @lang('franchise.become_partner')
                </button>
            </div>
        </div>
    </section>
    <div id="fifth">
        <section class="gray-block">
            <div class="tree">
                <div class="coin coin-1"></div>
                <div class="coin coin-2"></div>
                <div class="coin coin-3"></div>
                <div class="coin coin-4"></div>
            </div>
            <div class="container sides-padding-40">
                <div class="text">
                    <h1>
                        @lang('franchise.make_money')
                    </h1>
                    <ul>
                        <li>@lang('franchise.make_money_1')</li>
                        <li>@lang('franchise.make_money_2')</li>
                        <li>@lang('franchise.make_money_3')</li>
                    </ul>

                    <div class="btn-wrap">
                        <button type="button" class="btn">
                            @lang('franchise.become_partner')
                        </button>
                    </div>
                </div>
            </div>
        </section>
        <section class="green-block">
            <div class="container sides-padding-40">
                <h1>@lang('franchise.why_need')</h1>
                <p>
                    @lang('franchise.why_need_desc')
                </p>
                <button type="button" class="btn">
                    @lang('franchise.become_partner')
                </button>
            </div>
        </section>
    </div>

    <section id="faq">
        <div class="container sides-padding-40">
            <h1>
                @lang('franchise.faq')
            </h1>

            <div id="collapse-1" class="issue active">
                <h2 data-collapse="#collapse-1">
                    @lang('franchise.faq_1')
                </h2>
                <p class="answer">
                    @lang('franchise.faq_1_answer')
                </p>
            </div>
            <div id="collapse-2" class="issue">
                <h2 data-collapse="#collapse-2">
                    @lang('franchise.faq_2')
                </h2>
                <p class="answer" style="display: none;">
                    @lang('franchise.faq_2_answer')
                </p>
            </div>
            <div id="collapse-3" class="issue">
                <h2 data-collapse="#collapse-3">
                    @lang('franchise.faq_3')
                </h2>
                <p class="answer" style="display: none;">
                    @lang('franchise.faq_3_answer')
                </p>
            </div>
            <div id="collapse-4" class="issue">
                <h2 data-collapse="#collapse-4">
                    @lang('franchise.faq_4')
                </h2>
                <p class="answer" style="display: none;">
                    @lang('franchise.faq_4_answer')
                </p>
            </div>
            <div id="collapse-5" class="issue">
                <h2 data-collapse="#collapse-5">
                    @lang('franchise.faq_5')
                </h2>
                <p class="answer" style="display: none;">
                    @lang('franchise.faq_5_answer')
                </p>
            </div>
            <div id="collapse-6" class="issue">
                <h2 data-collapse="#collapse-6">
                    @lang('franchise.faq_6')
                </h2>
                <p class="answer" style="display: none;">
                    @lang('franchise.faq_6_answer')
                </p>
            </div>
            <div id="collapse-7" class="issue">
                <h2 data-collapse="#collapse-7">
                    @lang('franchise.faq_7')
                </h2>
                <p class="answer" style="display: none;">
                    @lang('franchise.faq_7_answer')
                </p>
            </div>
            <div id="collapse-8" class="issue">
                <h2 data-collapse="#collapse-8">
                    @lang('franchise.faq_8')
                </h2>
                <p class="answer" style="display: none;">
                    @lang('franchise.faq_8_answer')
                </p>
            </div>
            <div id="collapse-9" class="issue">
                <h2 data-collapse="#collapse-9">
                    @lang('franchise.faq_9')
                </h2>
                <p class="answer" style="display: none;">
                    @lang('franchise.faq_9_answer')
                </p>
            </div>
        </div>
    </section>
</div>

<div id="request-modal" class="start-page-modal" style="display: none" data-close-modal="request-modal">
    <div class="modal-box request-form">
        <span title="Закрыть" class="close" data-close-modal="request-modal"></span>

        <div class="caption">
            <img src="/img/umag-logo-circle-slide.svg" alt="UMAG Умный магазин">
        </div>

        <form id="modal-form-fran">
            <input id="modal-form__utm" name="utm_source" type="hidden" value="<?php echo htmlspecialchars($utm_source) ?>">
            <input id="modal-form__token" type="hidden" name="_token" value="<?php echo csrf_token(); ?>" />
            <input id="modal-form__select" class="modal-form__select_option" type="hidden" name="region" value="" />
            <input id="modal-form__wor" class="modal-form__select_option" type="hidden" name="wor_name" value="" />
            <span id="modal-form-message-success" class="message-info" style="margin-bottom: 20px; display: none">Ваша заявка отправлена! Мы перезвоним Вам в ближайшее время!</span>
            <span class="message-error" style="margin-bottom: 20px; display: none">Ошибка! Заполните все поля формы.</span>

            <div class="margin-20">
                <label>@lang('franchise.fio')<span class="important">*</span></label>
                <input id="modal-name" type="text" name="name" class="input" placeholder="Ваше имя" />
            </div>

            <div class="margin-20">
                <label>Email<span class="important">*</span></label>
                <input id="modal-mail" type="text" name="mail" class="input" placeholder="example@mail.ru">
            </div>

            <div class="city-select-wrapper margin-20">
                <label>@lang('franchise.city')<span class="important">*</span></label>
                <select id="modal-city" name="city" class="input" size="1">
                    <optgroup label="Казахстан">
                        <option value="" disabled selected>@lang('franchise.city_office')</option>
                        <option value="AKU">Актау</option>
                        <option value="AKT">Актобе</option>
                        <option value="ALA">Алматы</option>
                        <option value="ATR">Атырау</option>
                        <option value="ZHE">Жезказган</option>
                        <option value="KAR">Караганда</option>
                        <option value="KOK">Кокшетау</option>
                        <option value="KOS">Костанай</option>
                        <option value="KYZ">Кызылорда</option>
                        <option value="AST">Астана</option>
                        <option value="PAV">Павлодар</option>
                        <option value="PET">Петропавловск</option>
                        <option value="PLX">Семей</option>
                        <option value="TAL">Талдыкорган</option>
                        <option value="TAR">Тараз</option>
                        <option value="HSA">Туркестан</option>
                        <option value="URA">Уральск</option>
                        <option value="UKK">Усть-Каменогорск</option>
                        <option value="CIT">Шымкент</option>
                    </optgroup>
                    <option value="KGZ" style="font-weight: 600;">Кыргызстан</option>
                    <option value="UZB" style="font-weight: 600;">Узбекистан</option>
                </select>
            </div>
            <div class="margin-20">
                <label>@lang('franchise.tel')<span class="important">*</span></label>
                <input id="modal-phone" type="text" name="phone" class="input" disabled>
            </div>
            <div class="city-select-wrapper margin-20">
                <label>@lang('franchise.activity')<span class="important">*</span></label>
                <select id="modal-work" name="work" class="input" size="1">
                    <option value="" disabled selected>@lang('franchise.activity_choose')</option>
                    <option value="var_1">@lang('franchise.business_owner')</option>
                    <option value="var_2">@lang('franchise.individual_entrepreneur')</option>
                    <option value="var_3">Топ менеджер</option>
                    <option value="var_4">@lang('franchise.your_variant')</option>
                    <input id="modal-custom" type="text" name="custom" class="input" placeholder="Введите ваш вариант" style="display: none">
                </select>
            </div>
            <div class="margin-20">
                <label>@lang('franchise.comments')</label>
                <textarea id="modal-comment" name="comment" class="input" rows="2"></textarea>
            </div>
            <div class="btn-wrap">
                <input type="submit" value="@lang('franchise.become_partner')" class="btn">
            </div>

            <script type="text/javascript">

                $('.btn').click(function(){
                    $('#request-modal').fadeIn(400).addClass('show');
                });

                $('.close, #request-modal').click(function(e){
                    if(e.target.className=="start-page-modal show" || e.target.className=="close"){
                        $('#request-modal').fadeOut(400).removeClass('show');    
                    }
                });

                $.mask.definitions['9'] = false;
                  $.mask.definitions['5'] = "[0-9]";
                  const selectCity = $("#modal-city");
                  const inputPhone = $("#modal-phone");
                  selectCity.change(function () {
                    inputPhone.prop('disabled', false);
                    if ($(this).val() === "KGZ") {
                      inputPhone.mask("+996 (555) 555 555");
                    } else if ($(this).val() === "UZB") {
                        inputPhone.placeholder='+998 (__) ___ __ __';
                        inputPhone.mask("+998 55 555 55 55");
                      } else {
                          inputPhone.placeholder='+7 (___) ___ __ __';
                          inputPhone.mask("+7 (555) 555 55 55");
                        }
                    });

                $("#faq [data-collapse]").click(function() {
                    var id = $(this).data("collapse");
                    var collapse = $(id);
                    collapse.toggleClass("active");
                    collapse.find(".answer").slideToggle();
                    collapse.siblings().removeClass("active");
                    collapse.siblings().find(".answer").slideUp();
                });


                $('#modal-form-fran').find('#modal-city').change(function(){
                    $("#modal-form__select").val(
                        $('#modal-form-fran').find('#modal-city option:selected').text().replace("@lang('contact.your_city')", "")
                    );
                });
                $('#modal-form-fran').find('#modal-work').change(function(){
                    if($(this).val()=="var_4"){
                        $('#modal-custom').slideDown(500);
                    }else{
                        $('#modal-custom').slideUp(500);
                        $("#modal-form__wor").val(
                            $('#modal-form-fran').find('#modal-work option:selected').text().replace("@lang('contact.your_city')", "")
                        );
                    }
                });


                $('#modal-form-fran').on("submit", function (e) {
                    e.preventDefault();
                    let $form = $(this);
                    let valid_phone = $form.find('[name="phone"]').val();
                    let valid_name = $form.find('[name="name"]').val();
                    let valid_email = $form.find('[name="mail"]').val();
                    let valid_city = $form.find('[name="city"]').val();
                    let valid_work = $form.find('[name="work"]').val();
                    let valid_custom = $form.find('[name="custom"]').val();


                    if(valid_work=="var_4" && valid_custom==""){
                        $(".message-error").slideDown();
                    }else{
                        if( (valid_city!==null && valid_phone.replace(/[^+\d]/g, "").length>11) && (valid_name!=="" && valid_email!=="" && valid_work!==null) ){
                            let serializedData = $form.serialize();
                            $form.find("[type='submit']").attr("disabled", true);
                            let request = $.ajax({
                                url: "/mail",
                                type: "post",
                                data: serializedData
                            });
                            request.done(function (response, textStatus, jqXHR){
                                console.log(response);
                                $form.find('[name="phone"]').val('');
                                $form.find('[name="name"]').val('');
                                $form.find('[name="mail"]').val('');
                                $form.find('[name="city"]').val('');
                                $form.find('[name="work"]').val('');
                                $form.find('[name="custom"]').val('');
                                $form.find('[name="comment"]').val('');
                                $form.find('[name="utm_source"]').val('');
                                Cookies.set('show-success', '1');
                                window.location.href = "/success";
                            });
                            request.fail(function (jqXHR, textStatus, errorThrown){
                                $form.find("[data-error-message]").show();
                                console.error(
                                    "The following error occurred: "+
                                    textStatus, errorThrown
                                );
                            });
                            request.always(function () {
                                $form.find("[type='submit']").removeAttr("disabled");
                            });
                            $(".message-error").slideUp();
                        }else{
                            $(".message-error").slideDown();
                        }
                    }
                });

            </script>
        </form>
    </div>
</div>
@stop