@extends('layouts.main')
@section('content')
<link rel="stylesheet" type="text/css" href="/css/request-form-page.css?v=2.0125">
<div class="block-1 row">
    <div class="col-50 col-mob-100 block-1__left">
        <div class="container_half-left sides-padding-40">
            <h1>
                Оставьте ваш <br />
                номер телефона
            </h1>
            <p class="text">
                И начните автоматизировать<br />
                свой бизнес бесплатно
            </p>
        </div>
    </div>
    <div class="col-50 col-mob-100 block-1__right">
        <div class="container_half-right">
            <form id="request-test" class="request-form">
                <input type="hidden" name="type" value="Заявка на демо-доступ" />
                <input id="modal-form__token" type="hidden" name="_token" value="<?php echo csrf_token(); ?>" />
                <input id="modal-form__select" class="modal-form__select_option" type="hidden" name="region" value="" />
                <span data-error-message class="request-form__error-message" style="display:none">Ошибка! Заполните все поля формы.</span>
                <div class="margin-20">
                    <input title="Телефон" type="text" name="phone" data-phone-mask class="request-form__input" placeholder="+7 (___) ___ __ __"/>
                </div>
                <div class="margin-20">
                <div class="select-icon"></div>
                    <select title="ваш город" name="city" class="request-form__input">
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
                        <option value="BSH">Бишкек (Кыргызстан)</option>
                    </select>
                </div>
                <input type="submit" value="Отправить" class="request-form__btn"/>
            </form>
        </div>
    </div>
</div>
<div class="block-2">
    <div class="container row sides-padding-20">
        <div class="col-33-3 col-mob-100 sides-padding-20">
            <p class="feature feature_1">
                Полный контроль над<br />
                движением товаров и денег
            </p>
        </div>
        <div class="col-33-3 col-mob-100 sides-padding-20">
            <p class="feature feature_2">
                Подробная аналитика<br />
                прибылей и убытков
            </p>
        </div>
        <div class="col-33-3 col-mob-100 sides-padding-20">
            <p class="feature feature_3">
                Контроль за работой<br />
                сотрудников
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
                        <span class="benefit__text col-auto col-mob-100">рост продаж</span>
                    </div>
                </div>
            </div>
            <div class="col-50 col-mob-100">
                <div class="benefit row row_middle">
                    <div class="row row_middle">
                        <span class="benefit__big-text col-auto col-mob-100">-18%</span>
                        <span class="benefit__text col-auto col-mob-100">Сокращение<br /> издержек</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
        var anim = null, oldt = null;
        function addEventListenerForm(e) {
            $(e).find("select").change(function() {
                $(".modal-form__select_option").val($(e).find("select option:selected").text().replace("@lang('contact.your_city')", ""))
            }), e.on("submit", function(e) {
                e.preventDefault();
                let t = $(this),
                    o = t.find('[name="phone"]').val();
                if (null !== t.find('[name="city"]').val() && o.replace(/[^+\d]/g, "").length > 11) {
                    let e = t.serialize();
                    t.find("[type='submit']").attr("disabled", !0);
                    let o = $.ajax({
                        url: "/test",
                        type: "post",
                        data: e,
                        beforeSend: function(){
                            oldt = t.find('[type="submit"]').val();
                            let toc = '.', ite = 0;
                            anim = setInterval(() => {t.find('[type="submit"]').val("отправка"+toc); ite++; ite<=2 ? toc+=toc : toc = '.';
                            }, 250);
                        },
                    });
                    return o.done(function(e, o, a) {
                        clearInterval(anim);
                        t.find('[type="submit"]').val("отправленно");
                        console.log(e);
                    }), o.fail(function(e, o, a) {
                        t.find("[data-error-message]").show(), console.error("The following error occurred: " + o, a)
                    }), o.always(function() {
                        t.find("[type='submit']").removeAttr("disabled")
                    }), !1
                }
                t.find("[data-error-message]").show()
            })
        }
    addEventListenerForm($('#request-test'));
</script>
@stop
