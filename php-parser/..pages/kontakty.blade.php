@extends('layouts.main')
@section('content')
<link rel="stylesheet" type="text/css" href="/css/contacts-page.css?v2.0">
<div id="lead-catcher-modal" class="lead-catcher-modal" style="display:none" data-close-modal="#lead-catcher-modal">
        <div class="lead-catcher-modal__box" data-modal-box>
            <form id="lead-catcher-form" method="post" action="" class="lead-catcher-form">
                <input type="hidden" name="type" value="Пойманный лид" />
                <input id="modal-form__id" type="hidden" name="id" value="" />
                <input id="modal-form__token" type="hidden" name="_token" value="<?php echo csrf_token(); ?>" />
                <input id="modal-form__select" class="modal-form__select_option" type="hidden" name="region" value="" /> <span title="Закрыть" class="lead-catcher-form__close" data-close-modal="#lead-catcher-modal"></span>
				<input id="modal-form__city" type="hidden" name="region" value="" />
				<p class="lead-catcher-form__caption"> У вас есть вопросы? </p>
                <p class="lead-catcher-form__lead"> Оставьте свой телефон, мы свяжемся с вами
                    <br/> и ответим на любые возникшие вопросы! </p>
                <div class="row row_nowrap mob-row_wrap sides-margin-minus-10">
                <div class="col-auto col-mob-100 sides-padding-10">
                  <select title="Ваш город" name="city" class="lead-catcher-form__input" id="lead-catcher__input-select">
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
              <div class="col-auto col-mob-100 sides-padding-10">
                <input id="lead-catcher-modal__phone" type="text" name="phone" class="lead-catcher-form__input"  placeholder="Телефон"/>
              </div>
                    <div class="col-auto col-mob-100 sides-padding-10">
                        <input type="submit" value="Позвонить мне" class="lead-catcher-form__btn"> </div>
                </div><span class="lead-catcher-form__error-message" data-error-message style="display:none">Ошибка! Заполните все поля формы.</span> <span class="lead-catcher-form__info-message" data-info-message style="display:none">Заявка успешно отравлена!</span> </form>
        </div>
    </div>
<div class="contact-page">
	<div class="container sides-padding-40">
		<h1>@lang('contact.title')</h1>
		<p class="lead">@lang('contact.desc')</p>
		<hr>
		<h1 class="center full-text">@lang('contact.care_service')</h1>
		<div class="row sides-margin-minus-30">
			<div class="col-33-3 col-mob-100 sides-padding-30">
				<p class="city-contact">
					<strong>Алматы</strong>
					Email: <a href="mailto:service@umag.kz">service@umag.kz</a><br>
                    @lang('contact.address'): пр. Жибек жолы, 135, 2 и 3 блок
					АТК «Жибек Жолы», 7 этаж
				</p>
			</div>
		</div>
		<hr/>
		<div class="m-5rem snt-fourth" id="faq">
        <h1 class="center full-text">Франчайзи</h1>
            <h2 id="abenzi"></h2>
      <select name="country" id="contact-page__country-select" class="contact-page__country-select">
        <option value="" disabled selected>@lang('contact.country')</option>
        <option value="0">@lang('contact.country_kz')</option>
        <option value="1">@lang('contact.country_kg')</option>
        <option value="2">@lang('contact.country_uz')</option>
      </select>
    <select name="city" id="contact-page__city-select" class="contact-page__city-select">
      <option value="" disabled selected>@lang('contact.city')</option>
    </select>

    <div class="flex contact-page__tabs flex-wrap" id="default-cards">
      @foreach ($contacts as $contact)
        <div class="answer contact-page__card">
            @if($contact->status == 0)
                <div class="contact-page__card-icon brilliant"></div>
            @elseif($contact->status == 2)
                <div class="contact-page__card-icon silver"></div>
            @elseif($contact->status == 3 || $contact->status == 4)
                <div class="contact-page__card-icon rank-default"></div>
            @else
                <div class="contact-page__card-icon"></div>
            @endif
          <div class="contact-page__desc-list">
            <ul>
              @foreach ($contact->lists as $list)
                <li>{{$list}}</li>
              @endforeach
            </ul>
          </div>
          <p class="contact-page__card-title">Компания: "{{$contact->name}}" </p>
          <div class="flex contact-page__card-info">
            @if ($contact->status == 0)
                  <p class="contact-page__card-rank rank-brilliant">Бриллиантовый партнер</p>
            @elseif ($contact->status == 1)
              <p class="contact-page__card-rank">Золотой партнер</p>
            @elseif ($contact->status == 2)
              <p class="contact-page__card-rank rank-silver">Серебряный партнер</p>
            @else
              <p></p>
            @endif
            <p class="contact-page__card-city">{{$contact->cities_name}}</p>
          </div>
          <p class="contact-page__card-text">Телефон: <span class="city-contact__show-phone" data-phone="+{{$contact->phone}}">Показать</span></p>
          <p class="contact-page__card-text">@lang('contact.address'): {{$contact->address}}</p>
		  <span class="contact-page__card-button" data-open-modal="#equipment-modal">@lang('contact.contact_us')</span>
{{--          <span class="contact-page__card-button" data-id="{{$contact->integration_id}}" data-city="{{$contact->cities_name}}" data-open-modal="#lead-catcher-modal">связаться с компанией</span>--}}
{{--		  <span class="contact-page__card-button" data-id="${value['integration_id']}" data-city="${value['cities_name']}" data-open-modal="#lead-catcher-modal">связаться с компанией</span>--}}
		</div>
      @endforeach
    </div>
    <script>
        $( document ).ready(function() {
            const selectCountry = $("#contact-page__country-select");
            const selectCityContact  = $("#contact-page__city-select");
            const cards = $("#default-cards");
            const phonesToShow = document.querySelectorAll('[data-phone]');
            selectCountry.on("change", function(e){
                e.preventDefault();
                const id = $(this).val();
                $.ajax({
                    url: '/kontakty/country',
                    type: "GET",
                    data:{ id },
					dataType: "json",
                    success: function(data) {
                        selectCityContact.html('<option value="">@lang('contact.city_not')</option>');
                        $.each(data, function (key, value) {
                            selectCityContact.append('<option value="' + value.id + '">' + value.name + '</option>');
                        });
                    }
                });
            });
            selectCityContact.on("change", function(e){
                e.preventDefault();
                const id = $(this).val();
                $.ajax({
                    url: '/kontakty/city',
                    type: "get",
                    data: { id },
					dataType: "json",
                    success: function(res) {
                        cards.html('');
                        let li;
                        $.each(res, function (key, value) {
                            li = '';
                            if (value['description']) {
                                const lists = value['description'].split(',');
                                $.each(lists, function (t, val) {
                                    li+=`<li>${val}</li>`
                                });
                            }
                            //console.log('value', value);
                            cards.append('' +
                                `<div class="answer contact-page__card">
                               <div class="contact-page__card-icon ${value['status'] == 0 ? 'brilliant' : value['status'] == 2 ? 'silver' : ((value['status'] == 3 || value['status'] == 4) ? 'rank-default' : '')}"></div>
                               <div class="contact-page__desc-list">
                                  <ul>
                                    ${li}
                                  </ul>
                               </div>

                               <p class="contact-page__card-title">Компания: " ${value['name']}" </p>
                                <div class="flex contact-page__card-info">
                                  ${value['status'] == 0 ? '<p class="contact-page__card-rank rank-brilliant">Бриллиантовый партнер</p>' :
                                    value['status'] == 1 ? '<p class="contact-page__card-rank">Золотой партнер</p>' :
                                        (value['status'] == 2 ? '<p class="contact-page__card-rank rank-silver">Серебряный партнер</p>' : '<p></p>')}
                                  <p class="contact-page__card-city">${value['cities_name']}</p>
                                </div>
                                <p class="contact-page__card-text">Телефон: <span class="city-contact__show-phone" data-phone="+${value['phone']}">Показать</span></p>
                                <p class="contact-page__card-text">@lang('contact.address'): ${value['address']}</p>
                                <span class="contact-page__card-button" data-open-modal="#equipment-modal">@lang('contact.contact_us')</span>
						       </div>
                            `);
                        });
                        const rankIcon = $(".contact-page__card-icon");
                        rankIcon.on("mouseenter", function(){
                            $(this).next(".contact-page__desc-list").show();
                        }).on("mouseleave", function(){
                            $(this).next(".contact-page__desc-list").hide();
                        });
                        $('.contact-page__card-button').on('click', function(e) {
                            $('#equipment-modal').show();
                        });
                        const phonesToShow = document.querySelectorAll('[data-phone]');
                        for (let i = 0; i < phonesToShow.length; i++) {
                            phonesToShow[i].addEventListener('click', function () {
                                if (this.hasAttribute('data-phone')) {
                                    this.innerHTML = '<a href="tel: '+this.getAttribute('data-phone')+'">'+this.getAttribute('data-phone')+'</a>';
                                    this.removeAttribute('data-phone');
                                    this.classList.add('city-contact__show-phone_showed');
                                }
                            })
                        }
                    }
                });
            });
            for (let i = 0; i < phonesToShow.length; i++) {
                phonesToShow[i].addEventListener('click', function () {
                    if (this.hasAttribute('data-phone')) {
                        this.innerHTML = '<a href="tel: '+this.getAttribute('data-phone')+'">'+this.getAttribute('data-phone')+'</a>';
                        this.removeAttribute('data-phone');
                        this.classList.add('city-contact__show-phone_showed');
                    }
                })
            }
            const rankIcon = $(".contact-page__card-icon");
            rankIcon.on("mouseenter", function(){
                $(this).next(".contact-page__desc-list").show();
            }).on("mouseleave", function(){
                $(this).next(".contact-page__desc-list").hide();
            });
            // $('.contact-page__card-button').on('click', function(e) {
			// 	var passedCity = $(this).data('city');//get the id of the selected button
			// 	var passedID = $(this).data('id');//get the id of the selected button
			// 	$('#modal-form__id').val(passedID);
			// 	const leadInputPhone = $("#lead-catcher-modal__phone");
			// 	const cardCity = $("#modal-form__city");
			// 	cardCity.val(passedCity);
			// 	switch (cardCity.val()){
			// 		case "Бишкек":
			// 			leadInputPhone.placeholder='+996 (___) ___ ___';
			// 			leadInputPhone.mask("+996 (555) 555 555");
			// 			break
			// 		case "Ташкент":
			// 			leadInputPhone.placeholder = '+998 (___) __ __ __';
			// 			leadInputPhone.mask("+998 555 555 555");
			// 			break
			// 		case "Самарканд":
			// 			leadInputPhone.placeholder = '+998 (___) __ __ __';
			// 			leadInputPhone.mask("+998 555 555 555");
			// 			break
			// 		default:
			// 			leadInputPhone.placeholder='+7 (___) ___ __ __';
			// 			leadInputPhone.mask("+7 (555) 555 55 55");
			// 			break
			// 	}
            // });
        });
//         $("#faq [data-collapse]").click(function() {
//             var id = $(this).data("collapse");
//             var collapse = $(id);
//             collapse.toggleClass("active");
//             collapse.find(".answer").slideToggle();
//             collapse.siblings().removeClass("active");
//             collapse.siblings().find(".answer").slideUp();
//         });
    </script>

	<style>
		.col-33-3 {
			max-width: 100%;
			flex-basis: 41%;
		}
		.answer {
			font-size: 2rem;
			display: none;
			font-family: "circe_lig";
			margin-top: 30px;
			color: #000;
		}
		.contact-page__card {
      display: block;
      border: 2px solid #66ce7687;
      padding: 10px 30px 20px;
      height: 270px;
      border-radius: 4px;
      position: relative;
    }
		.contact-page__card-title {
		  font-size: 2.05rem;
		  font-weight: 600;
		  margin-bottom: 8px;
		}
		.contact-page__card-text {
		  margin: 8px 0;
		}
		.contact-page__card-info {
		  align-items: center;
		  padding-right: 18px;
		  position: relative;
		}
		.contact-page__card-icon {
		  width: 38px;
		  height: 58px;
		  background: url("/img/kontakty/ic-gold-rank.png") 0 0 no-repeat;
		  background-size: cover;
		  position: absolute;
		  top: -2px;
		  right: 10px;
		  z-index: 3;
		}
		.contact-page__desc-list {
		  display: none;
		  position: absolute;
		  bottom: 100%;
		  right: 0;
		  background-color: #f9f9f9;
		  font-size: 14px;
		  font-weight: 400;
		  z-index: 5;
		  padding: 13px 26px;
		  border: 2px solid #66ce7687;
		  border-radius: 2px;
		}
		.contact-page__desc-list span {
		  display: block;
		}
        .contact-page__card-icon.brilliant {
            background: url("/img/kontakty/ic-brilliant-rank.png") top right no-repeat;
            background-size: cover;
        }
		.contact-page__card-icon.silver {
		  background: url("/img/kontakty/ic-silver-rank.png") top right no-repeat;
		  background-size: cover;
		}
		.contact-page__card-icon.rank-default {
          background: url("/img/kontakty/ic-rank.png") top right no-repeat;
          background-size: cover;
        }
		.contact-page__card-rank {
		  display: inline-block;
		  background-color: #fae063;
		  border-radius: 2px;
		  font-size: 12px;
		  font-weight: 600;
		  padding: 8px 10px 6px;
		  text-transform: uppercase;
		}
		.rank-silver {
		  background-color: #E0E0E0;
		}
        .rank-brilliant {
            background-color: #82e4fa;
        }
		.contact-page__card-city {
		  font-size: 12px;
		  font-weight: 600;
		  text-transform: uppercase;
		}
		.contact-page__card-button {
		  display: inline-block;
		  padding: 12px 20px;
		  background: #21B1FF;
		  font-size: 2rem;
		  font-weight: 500;
		  color: #fff;
		  border-radius: 10px;
		  text-transform: lowercase;
		  transition: all 0.3s;
		  position:absolute;
		  top: auto;
		  right: 40px;
		  cursor: pointer;
		}
		.contact-page__card-button:hover {
      background: #019ef3;
		}
		.flex {
			display: flex;
			justify-content: space-between;
		}
		.issue>div:last-child {
			margin-bottom: 3rem;
		}
		.flex>div {
			flex-basis: 45%;
		}
		.issue {
			border-bottom: 1px solid #cccc;
			position: relative;
			margin: 0 auto;
		}
		h1 {
			text-transform: unset!important;
		}
		.issue.active h2:after {
			transform: rotate(45deg);
		}
		.issue h2 {
			margin: 0!important;
			padding: 12px 0;
			font-size: 2.5rem;
			font-weight: 200;
		}
		div#faq h2:after {
			content: '';
			width: 24px;
			height: 24px;
			background-image: url(/img/acc.png);
			background-repeat: no-repeat;
			background-size: 100%;
			display: block;
			position: absolute;
			top: 50%;
			margin-top: -12px;
			right: 0;
			border-radius: 100%;
			transition: 0.3s;
			-webkit-transition: 0.3s;
			-moz-transition: 0.3s;
			-ms-transition: 0.3s;
			-o-transition: 0.3s;
		}
        .lead-catcher-modal__box {
            top: 0;
        }
		.issue:hover {
			cursor: pointer;
		}
		@media(max-width: 767px) {
			.flex{
				display: block!important
			}
			.contact-page__country-select {
			  margin-bottom: 15px;
			}
		}
	</style>


		<hr>
		<div class="row row_middle contact-form">
			<div class="col-40 col-mob-100">
				<form id="contact-form" action="" method="post">
					<input type="hidden" name="type" value="Обратная связь">
					<input id="modal-form__token" type="hidden" name="_token" value="<?php echo csrf_token(); ?>" />
                	<input id="modal-form__select" class="modal-form__select_option" type="hidden" name="region" value="" />
					<span class="contact-form__error-message" data-error-message="" style="display:none">Ошибка! Заполните все поля формы.</span>
					<span class="contact-form__info-message" data-info-message="" style="display:none">Заявка успешно отравлена!</span>
					<div class="margin-20">
						<input title="Имя" type="text" name="name" class="contact-form__input" placeholder="@lang('contact.name')">
					</div>
					<div class="margin-20">
						<div class="select-icon"></div>
						<select title="ваш город" name="city" id="selectCity" class="contact-form__input">
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
              <input title="Телефон" type="text" id="inputPhone" name="phone" class="contact-form__input"
              placeholder="Телефон" disabled/>
          </div>
					<div class="margin-20">
						<textarea title="Сообщение" name="message" class="contact-form__input" rows="5" placeholder="@lang('contact.message')"></textarea>
					</div>
                    <div class="g-recaptcha margin-20" data-sitekey="6LcgFmckAAAAABxcpKPl3w0mPViVNYhsSieWkOr9" data-callback="onRecaptchaSuccess3"></div>
                    <input type="submit" value="@lang('contact.submit')" class="contact-form__btn" disabled>
				</form>
			</div>
			<div class="col-grow col-mob-100 contact-form__text">
				<p class="contact-form__p1">@lang('contact.write_us')</p>
				<p class="contact-form__p2">@lang('contact.info')</p>
				<p class="contact-form__p3">@lang('contact.fix_business')</p>
			</div>
		</div>
	</div>
</div>
<style>
	.city-contact__show-phone>a:hover {
		text-decoration: underline;
	}
</style>
    <script type="text/javascript">
        let submit = document.querySelector('.contact-form__btn')
        function onRecaptchaSuccess3 () {
            submit.removeAttribute('disabled');
        }
    </script>
<script>

    $.mask.definitions['9'] = false;
    $.mask.definitions['5'] = "[0-9]";
    const selectCity = $("#selectCity");
    const inputPhone = $("#inputPhone");
    selectCity.change(function () {
        inputPhone.prop('disabled', false);
        if ($(this).val() === "BSH") {
            inputPhone.placeholder='+996 (___) ___ ___';
            inputPhone.mask("+996 (555) 555 555");
        } else
        if ($(this).val() === "UZB") {
            inputPhone.placeholder='+998 (__) ___ __ __';
            inputPhone.mask("+998 55 555 55 55");
        } else {
            inputPhone.placeholder='+7 (___) ___ __ __';
            inputPhone.mask("+7 (555) 555 55 55");
        }
    });

    // const leadSelectCountry = $("#contact-page__country-select");
    // const leadInputPhone = $("#lead-catcher-modal__phone");
	//
	// leadSelectCountry.change(function () {
    //     if ($(this).val() === "1") {
    //         leadInputPhone.placeholder='+996 (___) ___ ___';
    //         leadInputPhone.mask("+996 (555) 555 555");
    //     } else if ($(this).val() === "2") {
    //         leadInputPhone.placeholder='+998 (___) __ __ __';
    //         leadInputPhone.mask("+998 555 555 555");
    //     } else if ($(this).val() === "0"){
    //         leadInputPhone.placeholder='+7 (___) ___ __ __';
    //         leadInputPhone.mask("+7 (555) 555 55 55");
    //     }
    // });
</script>@stop