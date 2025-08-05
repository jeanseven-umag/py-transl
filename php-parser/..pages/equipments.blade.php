@extends('layouts.main')
@section('content')
<link rel="stylesheet" type="text/css" href="/css/equipment-page.css?v=2.0232">
<div class="block-1">
        <div class="container row row_bottom sides-padding-40">
            <div class="col-grow col-mob-100">
                <h1>@lang('equipment.description') </h1>
                <p class="callout">@lang('equipment.limited_offer') </p>
                <h2>@lang('equipment.ready_box')</h2>
                <ul>@lang('equipment.ready_box_desc') </ul>
            </div>
            <form id="complexForm" method="post" class="col-auto col-mob-100 complex-form">
                <input type="hidden" name="type" value="Заявка на консультацию по оборудованию">
                <input id="modal-form__select" class="modal-form__select_option" type="hidden" name="region" value="">
                <input id="modal-form__token" type="hidden" name="_token" value="<?php echo csrf_token(); ?>" />
                <select title="ваш город" name="city" id="complex-form__input-city" class="complex-form__input">
                        <option value="" disabled="" selected="">@lang('home.your_city')</option>
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
                <input title="Телефон" type="text" name="phone" id="complex-form__input-phone"
                class="complex-form__input" disabled>
                <input type="submit" value="@lang('equipment.consultation')" class="complex-form__btn">
                <span class="complex-form__error-message" data-error-message style="display:none">Ошибка! Заполните все поля формы.</span>
                <span class="complex-form__info-message" data-info-message style="display:none">Заявка успешно отравлена!</span>
            </form>
        </div>
    </div>
    <!-- Block 2 -->
    <div class="block-2 row">
        <div class="col-50 col-mob-100 light-gray">
            <div class="container_half-left sides-padding-40">
                <div class="feature feature_1">
                    <h2 class="feature__caption">@lang('equipment.guarantee')</h2>
                    <p class="feature__text">@lang('equipment.guarante_desc') </p>
                </div>
            </div>
        </div>
        <div class="col-50 col-mob-100 gray">
            <div class="container_half-right sides-padding-40">
                <div class="feature feature_2">
                    <h2 class="feature__caption">@lang('equipment.system_umag')</h2>
                    <p class="feature__text">@lang('equipment.system_umag_desc')</p>
                </div>
            </div>
        </div>
        <div class="col-50 col-mob-100 gray mob-light-gray">
            <div class="container_half-left sides-padding-40">
                <div class="feature feature_3">
                    <h2 class="feature__caption">@lang('equipment.delivery')</h2>
                    <p class="feature__text">@lang('equipment.delivery_desc')</p>
                </div>
            </div>
        </div>
        <div class="col-50 col-mob-100 light-gray mob-gray">
            <div class="container_half-right sides-padding-40">
                <div class="feature feature_4">
                    <h2 class="feature__caption">@lang('equipment.maintenance')</h2>
                    <p class="feature__text">@lang('equipment.maintenanc_desc')</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Catalog -->
    <section class="catalog">
        <div class="container sides-padding-40">
            <div class="row row_middle heading">
                <h1 class="col-grow">Каталог</h1>
                <div class="col-auto">
                    <select title="Категории" data-category-picker class="heading__category-picker">
                        <option value="0" selected>@lang('equipment.all_equipment')</option>
                        @foreach ($types as $type)
                            <option value="{{ $type->id }}">{{ $type->type }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="row equipment-list">
                @foreach ($all as $single_tovar)
                    <div class="col-25 col-mob-50" data-category="{{$single_tovar->type_id}}">
                        <section class="equipment">
                            <{{empty($single_tovar->url) ? 'span' : 'a  href=/equipment/'.$single_tovar->url.'' }} class="equipment__img">
                                <img src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" alt="POS-моноблок UMAG T310"
                                    data-deferred-img="/img/equipment/{{$single_tovar->image}}.jpg"/>
                            </{{empty($single_tovar->url) ? 'span' : 'a' }}>
                            <h1 class="equipment__name">
                                <{{empty($single_tovar->url) ? 'span' : 'a  href=/equipment/'.$single_tovar->url.'' }}>
                                    <span class="equipment__name-sm">{{$single_tovar->types[0]->type}}</span>
                                    @if($single_tovar->rgx=="no")
                                        {{ $single_tovar->name }}
                                    @else
                                        {{ preg_replace(["/[\p{Cyrillic}]/ui", "/(<br\ ?\/?>)+/"] , "", $single_tovar->name) }}
                                    @endif
                                </{{empty($single_tovar->url) ? 'span' : 'a' }}>
                            </h1>
                            <div class="row row_middle equipment__bottom">
                                <div class="col-auto col-mob-100">
                                    <button type="button" class="equipment__btn" data-open-modal="#equipment-modal" data-type="PRODUCT_0001" data-caption="Купить товар: {{ $single_tovar->name }}">Купить</button>
                                </div>
                            </div>
                        </section>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <script>
        $(".equipment__btn, .button-product-buy").click(function(){
            fbq('trackCustom','umag equipment',{'name':$(this).data("caption").replace('Купить товар: ', ''),'page':window.location.href});
        });

        function change(){
            let pickedCategory;
            if($(this).val()===''){
                pickedCategory = parseInt($(this).data('value'));
                $(".catalog")[0].scrollIntoView({block: "start", behavior: "smooth"});
                $('.eq_select_sidebar').removeClass('eq_active');
                $(this).addClass('eq_active');
            }else{
                pickedCategory = parseInt($(this).val());
            }
            $("[data-category]").each(function () {
                let _this = $(this);
                if (pickedCategory === 0 || pickedCategory === parseInt(_this.data("category"))) {
                    _this.show();
                } else {
                    _this.hide();
                }
            });
        }
        $('.eq_select_sidebar').click(change);
        $('[data-category-picker]').change(change);

         $.mask.definitions['9'] = false;
          $.mask.definitions['5'] = "[0-9]";
          const selectCity = $("#complex-form__input-city");
          const inputPhone = $("#complex-form__input-phone");
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
