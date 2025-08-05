@extends('layouts.main')
@section('content')
<link rel="stylesheet" type="text/css" href="/css/home-page.css?v=2.33">
<div class="main-video-container"> <span id="video_close"> <svg xmlns="http://www.w3.org/2000/svg" width="44" height="44" viewBox="0 0 44 44" fill="none"> <path d="M2 2L42 42" stroke="#2B2B2B" stroke-width="3"></path> <path d="M42 2L2 42" stroke="#2B2B2B" stroke-width="3"></path> </svg> </span>    </div>
<div class="block-1">
    <div class="container sides-padding-40">
        <h1>@lang('home.title')</h1>
        <p class="lead">@lang('home.description')</p>
        <div class="row row_middle">
             <div class="col-auto col-mob-100 sticky-request-btn-wrap no-mobile"> <a href="https://umag-main.kz/page57741021.html" class="sticky-request-btn" data-sticky-btn>@lang('home.start_free')</a> </div>
            <div class="col-auto callout">
                <div id="mvplay"> <span id="main_video_text">@lang('home.watch_video')</span> <span id="svg-border"> <svg xmlns="http://www.w3.org/2000/svg" width="21.024" height="27.443" viewBox="0 0 21.024 27.443"> <path id="play-button_1_" data-name="play-button (1)" d="M23.272,11.73,6.412.1A.582.582,0,0,0,5.5.581V23.837a.581.581,0,0,0,.912.479L23.272,12.687a.581.581,0,0,0,0-.957Z" transform="translate(-4 1.524)" fill="none" stroke="#fff" stroke-width="3"></path> </svg> </span>                    </div>
            </div>
        </div><a href="https://umag-main.kz/page57741021.html" class="start-for-free"> @lang('home.start_free') </a> </div>
</div>
<div class="block-2">
    <div class="content">
        <div class="row">
            <div class="col-25 col-mob-100 feature feature_1"> <strong>@lang('home.profitable')</strong>
                <p class="feature__p"> @lang('home.profitable_desc') </p>
            </div>
            <div class="col-25 col-mob-100 feature feature_2"> <strong>@lang('home.simply')</strong>
                <p class="feature__p"> @lang('home.simply_desc') </p>
            </div>
            <div class="col-25 col-mob-100 feature feature_3"> <strong>@lang('home.detail')</strong>
                <p class="feature__p"> @lang('home.detail_desc') </p>
            </div>
            <div class="col-25 col-mob-100 feature feature_4"> <strong>@lang('home.available')</strong>
                <p class="feature__p"> @lang('home.available_desc') </p>
            </div>
        </div>
    </div>
</div>
<section class="block-3">
    <div class="container sides-padding-40">
        <h1 class="mobile-acc">@lang('home.business_type') </h1>
        <div class="accar-hider">
            <div class="row sides-margin-minus-15">
                <div class="col-25 col-mob-100 sides-padding-15"> <a href="/produktovyj-magazin" class="business-card business-card_1"> <span class="business-card__img"> <span class="business-card__img-hover"></span> </span> @lang('home.grocery_store') <span class="business-card__arrow"></span> </a> </div>
                <div
                    class="col-25 col-mob-100 sides-padding-15"> <a href="/magazin-kosmetiki" class="business-card business-card_2"> @lang('home.cosmetics_store') <span class="business-card__img"> <span class="business-card__img-hover"></span> </span> <span class="business-card__arrow"></span> </a> </div>
            <div class="col-25 col-mob-100 sides-padding-15">
            <a href="/magazin-odezhdy" class="business-card business-card_3"> @lang('home.clothing_store') <span class="business-card__img"> <span class="business-card__img-hover"></span> </span> <span class="business-card__arrow"></span> </a> </div>
            <div class="col-25 col-mob-100 sides-padding-15">
            <a href="/apteka" class="business-card business-card_4"> @lang('home.pharmacy') <span class="business-card__img"> <span class="business-card__img-hover"></span> </span> <span class="business-card__arrow"></span> </a> </div>
            <div class="col-25 col-mob-100 sides-padding-15">
            <a href="/magazin-spirtnyh-napitkov" class="business-card business-card_5"> @lang('home.liquor_store') <span class="business-card__img"> <span class="business-card__img-hover"></span> </span> <span class="business-card__arrow"></span> </a>                </div>
            <div class="col-25 col-mob-100 sides-padding-15"> <a href="/magazin-igrushek" class="business-card business-card_6"> @lang('home.toy_store') <span class="business-card__img"> <span class="business-card__img-hover"></span> </span> <span class="business-card__arrow"></span> </a> </div>
            <div class="col-25 col-mob-100 sides-padding-15">
            <a href="/magazin-aksessuarov" class="business-card business-card_7"> @lang('home.accessories_store') <span class="business-card__img"> <span class="business-card__img-hover"></span> </span> <span class="business-card__arrow"></span> </a> </div>
            <div class="col-25 col-mob-100 sides-padding-15">
            <a href="/magazin-optiki" class="business-card business-card_8"> @lang('home.optics_store') <span class="business-card__img"> <span class="business-card__img-hover"></span> </span> <span class="business-card__arrow"></span> </a> </div>
        </div>
    </div>
    </div>
</section>
{{--<div class="snt-new">--}}
{{--    <div class="phone">--}}
{{--        <img src="/img/snt-phone.png" alt="umag snt phone">--}}
{{--    </div>--}}
{{--    <div class="snt-content">--}}
{{--        <h3>@lang('home.new') <br>@lang('home.new_title')</h3>--}}
{{--        <h2>@lang('home.new_desc')</h2>--}}
{{--        <a href="/snt">@lang('home.new_btn')</a>--}}
{{--    </div>--}}
</div>
<section class="block-banner">
    <div class="row flat-container flat-container-new" id="umag_form_section">
        <div class="banner-block-flex">
            <div class="banner-img">
                <img src="/img/home-page/banner.png" alt="">
            </div>
            <div class="banner-text">
                <p>новинка:</br>специальное предложение для владельцев </br>карт Visa Business</p>
                <div class="sub-title">Оплати картой Visa Business и получи 10% скидки!</div>
                <button type="submit"><a href="/info">@lang('home.new_btn')</a></button>
            </div>
        </div>
    </div>
</section>
<section class="block-4">
    <div class="row flat-container flat-container-new" id="umag_form_section">
        <div class="contact-form-flex">
            <div class="form-block">
                <form id="request-form" action="" method="post"> <input type="hidden" name="type" value="Заявка на демо-доступ"> <input id="modal-form__token" type="hidden" name="_token" value="<?php echo csrf_token(); ?>" /> <input id="modal-form__select" class="modal-form__select_option" type="hidden"
                        name="region" value="" /> <span class="request-form__error-message" data-error-message="" style="display:none">Ошибка! Заполните все поля формы.</span> <span class="request-form__info-message" data-info-message="" style="display:none">Заявка успешно отравлена!</span>

                    <div class="input-group">
                        <div class="select-icon"></div><select title="Ваш город" name="city" class="input select-city">
                            <option value="" disabled selected>@lang('home.your_city')</option>
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
                    <div class="input-group"> <input title="Телефон" type="text" class="modal-form__input input-phone"
                    name="phone"
                    placeholder="@lang('home.your_telephone')" disabled>
                    </div>
                    <div class="input-group"> <button type="submit">@lang('home.try_free')</button> </div>
                </form>
            </div>
        </div>
        <div class="green-flex">
            <div class="flex-green left-flex">
                <picture class="green__img">
                    <source type="image/webp" srcset="/img/home-page/nout.webp" media="(max-width: 767px)" />
                    <source type="image/png" srcset="/img/home-page/nout.png" media="(max-width: 767px)" />
                    <source type="image/png" srcset="/img/new/comp.png" media="(min-width: 767px)" />
                    <source type="image/webp" srcset="/img/new/comp.webp" media="(min-width: 767px)" /> <img src="/img/home-page/comp.png" alt="Скриншот программы" /> </picture>
            </div>
            <div class="flex-green right-flex">
                <h3 class="green-h3">@lang('home.possibility')</h3> <a href="/vozmozhnosti-programmy-umag" class="learn-more__arrow"></a> </div>
        </div>
    </div>
</section>
<section class="block-5">
    <div class="container">
        <div class="row row_middle row_nowrap sides-padding-40 heading">
            <h1 class="custom-column">@lang('home.shop_equipment')</h1> <a href="/equipment" class="col-auto view-all-link no-mobile">@lang('home.view_equipment')</a> </div>
        <div class="slider-wrapper">
            <div id="equipment-slider" class="swiper-container">
                <div class="swiper-wrapper">
                    @foreach ($all as $single_tovar)
                        <div class="swiper-slide">
                            <section class="equipment">
                                <{{empty($single_tovar->url) ? 'span' : 'a  href=/equipment/'.$single_tovar->url.'' }} class="equipment__img">
                                    <img src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" alt="POS-моноблок UMAG T310" data-deferred-img="/img/equipment/{{$single_tovar->image}}.jpg"/>
                                    @if(!empty($single_tovar->sale))
                                        <span class="equipment__discount">-{{$single_tovar->sale}}%</span>
                                    @endif
                                </{{empty($single_tovar->url) ? 'span' : 'a' }}>
                                    <h1 class="equipment__name">
                                        <{{empty($single_tovar->url) ? 'span' : 'a  href=/equipment/'.$single_tovar->url.'' }}>
                                            <span class="equipment__name-sm">{{$single_tovar->types[0]->type}}</span>
                                            @if($single_tovar->rgx=="no")
                                                {{ $single_tovar->name }}
                                            @else
                                                {{ preg_replace(["/[\p{Cyrillic}]/ui", "/(<br\ ?\/?>)+/"] , "", $single_tovar->name)  }}
                                            @endif
                                        </{{empty($single_tovar->url) ? 'span' : 'a' }}>
                                    </h1>
                                <div class="row row_middle equipment__bottom">
                                    <div class="col-auto col-mob-100">
                                        <button type="button" class="equipment__btn" data-open-modal="#equipment-modal" data-type="PRODUCT_0001" data-caption="@lang('home.buy_product') {{ $single_tovar->name }}">@lang('home.buy')</button>
                                    </div>
                                </div>
                            </section>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets" style="background: #fff">
                <div class="swiper-pagination-bullet swiper-pagination-bullet-active">
                    <div class="">1</div>
                </div>
            </div>
        </div>
        <div class="container sides-padding-40 no-desk"> <a href="/equipment" class="view-all-link">Все оборудование</a> </div>
    </div>
</section>
<div id="equipment-modal" class="modal" style="display:none" data-close-modal="#equipment-modal">
    <div class="modal__box" data-modal-box>
        <form id="modal-form" method="post" action="" class="modal-form"> <input id="modal-form__type" type="hidden" name="type" value="" /> <input id="modal-form__token" type="hidden" name="_token" value="<?php echo csrf_token(); ?>" /> <input id="modal-form__select" class="modal-form__select_option" type="hidden"
                name="region" value="" />
            <p id="modal-form__caption" class="modal-form__caption"></p><span class="modal-form__error-message" data-error-message style="display:none">Ошибка! Заполните все поля формы.</span> <span class="modal-form__info-message" data-info-message style="display:none">Заявка успешно отравлена!</span>

    <div class="margin-20">
        <select title="Ваш город" name="city" id="selectCity" class="modal-form__input select-city">
            <option value="" disabled selected>@lang('home.your_city')</option>
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
      <input title="Телефон" type="text" name="phone" id="inputPhone" class="modal-form__input input-phone" disabled />
     </div>
    <input type="submit" value="Отправить" class="modal-form__btn"> </form>
</div>
</div>
<link rel="stylesheet" type="text/css" href="/landing-resources/lib/lightgallery/css/lightgallery.css" />
<script src="/landing-resources/lib/lightgallery/js/lightgallery.min.js" type="text/javascript"></script>
<script src="/landing-resources/lib/lightgallery/modules/lg-video.min.js" type="text/javascript"></script>
<style>
    .lg-backdrop{z-index: 9999; background: #000000f2}.lg-outer{z-index: 999999}
</style>
<script type="text/javascript">
    $(".equipment__btn, .button-product-buy").click(function(){fbq('trackCustom','umag equipment',{'name':$(this).data("caption").replace('@lang('home.buy_product') ', ''),'page':window.location.href});}); var player; $('#video_close').click(function(){$('.main-video-container').css({"zIndex":"-99999999", "opacity":"0"}); player.stopVideo();}); let autoHeight; if (window.matchMedia('(max-width: 767px)').matches){autoHeight=true;}else{autoHeight=false;}let screenSlider=new Swiper('#screen-slider',{autoHeight: autoHeight, navigation:{nextEl: '#screen-slider__next', prevEl: '#screen-slider__prev',},}); $('#mvplay').on('click', function(){var video_id=$(this).data("video"); $(this).lightGallery({youtubePlayerParams:{autoplay: 1, controls: 1}, dynamic: true, dynamicEl: [{"src": 'https://www.youtube.com/watch?v=W5_shWJNexE'}]})}); let slidesPerView; if (window.matchMedia('(max-width: 767px)').matches){slidesPerView=2;}else{slidesPerView=4;}let equipmentSlider=new Swiper('#equipment-slider',{slidesPerView: slidesPerView, loop: true, pagination:{el: '.swiper-pagination', clickable: true, renderBullet: function (index, className){return '<span class="' + className + ' ' + 'sas'+index + '"></span>';},},});

     $.mask.definitions['9'] = false;
     $.mask.definitions['5'] = "[0-9]";
     const selectCity = $(".select-city");
     const inputPhone = $(".input-phone");
     selectCity.change(function () {
      $(this).closest("form").find(inputPhone).prop("disabled", false);
        if ($(this).val() === "BSH") {
          inputPhone.mask("+996 (555) 555 555");
        } else if ($(this).val() === "UZB") {
            inputPhone.mask("+998 55 555 55 55");
          } else {
              inputPhone.mask("+7 (555) 555 55 55");
            }
        });
</script>
@stop
