@extends('layouts.main')
@section('content')
<link rel="stylesheet" type="text/css" href="/css/request-form-page.css?v=2.0125">
<div class="block-1 row">
    <div class="col-50 col-mob-100 block-1__left">
        <div class="container_half-left sides-padding-40">
            <h1>
                @lang('contact.leave_phone')
            </h1>
            <p class="text">
                @lang('contact.auto_business')
            </p>
        </div>
    </div>
    <div class="col-50 col-mob-100 block-1__right">
        <div class="container_half-right">
            <form id="request-form" method="post" action="" class="request-form">
                <input type="hidden" name="type" value="Заявка на демо-доступ" />
                <input id="modal-form__token" type="hidden" name="_token" value="<?php echo csrf_token(); ?>" />
                <input id="modal-form__select" class="modal-form__select_option" type="hidden" name="region" value="" />
                <span data-info-message="" class="request-form__info-message" style="display:none">Заявка успешно отравлена!</span>
                <span class="request-form__error-message" data-error-message-cache style="display:none">Этот номер ранее был уже отправлен</span>
                <span data-error-message="" class="request-form__error-message" style="display:none">Ошибка! Заполните все поля формы.</span>
                <div class="margin-20">
                <div class="select-icon"></div>
                    <select title="ваш город" name="city" class="request-form__input"
                    id="request-form__input-select" onchange="getValueSelect()">>
                        <option value="" disabled selected>@lang('contact.your_city')</option>
                        <option value="U11">Аксай ЗКО</option>
                        <option value="AKU">Актау</option>
                        <option value="AKT">Актобе</option>
                        <option value="ALA">Алматы</option>
                        <option value="ATR">Атырау</option>
                        <option value="U10">Аягоз</option>
                        <option value="BXH">Балхаш</option>
                        <option value="U05">Жанаозен</option>
                        <option value="U09">Жаркент</option>
                        <option value="ZHE">Жезказган</option>
                        <option value="U01">Жетысай</option>
                        <option value="U08">Капчагай</option>
                        <option value="KAR">Караганда</option>
                        <option value="KOK">Кокшетау</option>
                        <option value="KOS">Костанай</option>
                        <option value="U06">Кульсары</option>
                        <option value="KYZ">Кызылорда</option>
                        <option value="U04">Лисаковск</option>
                        <option value="AST">Астана</option>
                        <option value="PAV">Павлодар</option>
                        <option value="PET">Петропавловск</option>
                        <option value="U03">Рудный</option>
                        <option value="KGF">Сатпаев</option>
                        <option value="PLX">Семей</option>
                        <option value="TAL">Талдыкорган</option>
                        <option value="TAR">Тараз</option>
                        <option value="U07">Темиртау</option>
                        <option value="HSA">Туркестан</option>
                        <option value="URA">Уральск</option>
                        <option value="UKK">Усть-Каменогорск</option>
                        <option value="U02">Шардара</option>
                        <option value="CIT">Шымкент</option>
                        <option value="EKB">Экибастуз</option>
                        <option value="UZB">Ташкент (Узбекистан)</option>
                        <option value="UZB">Самарканд (Узбекистан)</option>
                        <option value="NUK">Нукус (Узбекистан)</option>
                        <option value="BSH">Бишкек (Кыргызстан)</option>
                        <option value="OSH">Ош (Кыргызстан)</option>
                    </select>
                </div>
                <div class="margin-20">
                    <input title="Телефон" type="text" name="phone" class="request-form__input"
                    id="request-form__input-input" placeholder="Телефон" disabled/>
                </div>
                <div class="g-recaptcha margin-20" data-sitekey="6LcgFmckAAAAABxcpKPl3w0mPViVNYhsSieWkOr9" data-callback="onRecaptchaSuccess1"></div>
                <input type="submit" value="@lang('contact.submit')" class="request-form__btn" disabled/>
            </form>
        </div>
    </div>
</div>
<div class="block-2">
    <div class="container row sides-padding-20">
        <div class="col-33-3 col-mob-100 sides-padding-20">
            <p class="feature feature_1">
                @lang('contact.control_money')
            </p>
        </div>
        <div class="col-33-3 col-mob-100 sides-padding-20">
            <p class="feature feature_2">
                @lang('contact.detailed_analytics')
            </p>
        </div>
        <div class="col-33-3 col-mob-100 sides-padding-20">
            <p class="feature feature_3">
                @lang('contact.control_employees')
            </p>
        </div>
    </div>
</div>
<section class="block-3">
    <div class="container sides-padding-40">
        <div class="row">
            <div class="col-50 col-mob-100">
                <div class="benefit">
                    <div class="row row_middle">
                        <span class="benefit__big-text col-auto col-mob-100">+27%</span>
                        <span class="benefit__text col-auto col-mob-100">@lang('contact.sales_growth')</span>
                    </div>
                </div>
            </div>
            <div class="col-50 col-mob-100">
                <div class="benefit row row_middle">
                    <div class="row row_middle">
                        <span class="benefit__big-text col-auto col-mob-100">-18%</span>
                        <span class="benefit__text col-auto col-mob-100">@lang('contact.reduction_costs')</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script type="text/javascript">
    let submit = document.querySelector('.request-form__btn')
    function onRecaptchaSuccess1 () {
        submit.removeAttribute('disabled');
    }
</script>
<script type="text/javascript">
  $.mask.definitions['9'] = false;
  $.mask.definitions['5'] = "[0-9]";
  const selectCity = $("#request-form__input-select");
  const inputPhone = $("#request-form__input-input");
  selectCity.change(function () {
    inputPhone.prop('disabled', false);
    if ($(this).val() === "BSH") {
      inputPhone.mask("+996 (555) 555 555");
    } else if ($(this).val() === "UZB") {
        inputPhone.placeholder='+998 (__) ___ __ __';
        inputPhone.mask("+998 55 555 55 55");
      } else {
          inputPhone.placeholder='+7 (___) ___ __ __';
          inputPhone.mask("+7 (555) 555 55 55");
        }
    });
</script>
@stop
