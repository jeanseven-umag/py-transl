@extends('layouts.main')
@section('content')
<link rel="stylesheet" type="text/css" href="/css/opportunities-page.css?v=2.067891">
<div class="top-header-container">
	<div class="top-header-content">
		<div class="container sides-padding-40">
			<div class="header-content-left">
				<div class="header-content-left-top">
					<div class="title" id="title">@lang('product_capabilities.title')</span></div>
				</div>
				<div>
					<div class="sticky-request-btn-wrap">
						<a href="/request-form" class="sticky-request-btn" data-sticky-btn="">@lang('product_automation.try_free')</a>
					</div>
					<a href="/request-form" class="start-for-free">
						@lang('home.start_free')
					</a>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="row tile-block tile-block-first">
	<div class="col-50">
		<div class="tile-block__left-side">
			<div class="title">@lang('product_capabilities.quick_acceptance')</div>
			<div class="text">@lang('product_capabilities.quick_acceptance_desc')</div>
		</div>
	</div>
	<div class="col-50">
		<div class="tile-block__right-side">
			<div class="title">@lang('product_capabilities.forget_lines')</div>
			<div class="text">@lang('product_capabilities.forget_lines_desc')</div>
		</div>
	</div>
</div>
<div class="row tile-block tile-block-second">
	<div class="col-50">
		<div class="tile-block__left-side">
			<div class="title">@lang('product_capabilities.exchange_return')</div>
			<div class="text">@lang('product_capabilities.exchange_return_desc')</div>
		</div>
	</div>
	<div class="col-50">
		<div class="tile-block__right-side">
			<div class="title">@lang('product_capabilities.instant_learning')</div>
			<div class="text">@lang('product_capabilities.instant_learning_desc')</div>
		</div>
	</div>
</div>
<div class="fit-container fit-container-second">
	<div class="row col-50">
		<div class="title">@lang('product_capabilities.detailed_reports')</div>
		<div class="text">@lang('product_capabilities.detailed_reports_desc')</div>
	</div>
</div>
<div class="row tile-block tile-block-third">
	<div class="col-50">
		<div class="tile-block__left-side">
			<div class="title">@lang('product_capabilities.gross_sales')</div>
			<div class="text">@lang('product_capabilities.gross_sales_desc')</div>
		</div>
	</div>
	<div class="col-50">
		<div class="tile-block__right-side">
			<div class="title">@lang('product_capabilities.sales_category')</div>
			<div class="text">@lang('product_capabilities.sales_category_desc')</div>
		</div>
	</div>
</div>
<div class="row tile-block tile-block-fourth">
	<div class="col-50">
		<div class="tile-block__left-side">
			<div class="title">@lang('product_capabilities.employee_sales')</div>
			<div class="text">@lang('product_capabilities.employee_sales_desc')</div>
		</div>
	</div>
	<div class="col-50">
		<div class="tile-block__right-side">
			<div class="title">@lang('product_capabilities.inventory_category')</div>
			<div class="text">@lang('product_capabilities.inventory_category_desc')</div>
		</div>
	</div>
</div>
<div class="row tile-block tile-block-fifth">
	<div class="col-50">
		<div class="tile-block__left-side">
			<div class="title">@lang('product_capabilities.projected_profit')</div>
			<div class="text">@lang('product_capabilities.projected_profit_desc')</div>
		</div>
	</div>
	<div class="col-50">
		<div class="tile-block__right-side">
			<div class="title">@lang('product_capabilities.profit_expenses')</div>
			<div class="text">@lang('product_capabilities.profit_expenses_desc')</div>
		</div>
	</div>
</div>
{{--<a href="/ceny/">--}}
{{--	<div class="calculate-container">--}}
{{--		<div class="container sides-padding-40">--}}
{{--			<img src="/img/opportunities-page/calculate.svg" alt="" class="calculate-icon">@lang('product_capabilities.calculate_cost')</div>--}}
{{--	</div>--}}
{{--</a>--}}
<div class="row fit-container fit-container-fourth">
	<div class="col-50">
		<div class="fit-container__left-side">
			<div class="form-block">
				<form id="request-form" action="" method="post">
                    <input type="hidden" name="type" value="Заявка на демо-доступ">
                    <input id="modal-form__token" type="hidden" name="_token" value="<?php echo csrf_token(); ?>" />
                    <input id="modal-form__select" class="modal-form__select_option" type="hidden" name="region" value="" />
					<span class="request-form__error-message" data-error-message="" style="display:none">Ошибка! Заполните все поля формы.</span>
					<span class="request-form__info-message" data-info-message="" style="display:none">Заявка успешно отравлена!</span>
					<div class="input-group">
						<input title="Имя" type="text" name="name" placeholder="@lang('product_capabilities.name_client')">
					</div>
					<div class="input-group">
						<input title="Телефон" type="text" name="phone" data-phone-mask="" placeholder="+7 (___) ___ __ __">
					</div>
					<div class="input-group">
						<div class="select-icon"></div>
						<select title="Ваш город" name="city" class="input">
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
					<div class="g-recaptcha input-group" data-sitekey="6LcgFmckAAAAABxcpKPl3w0mPViVNYhsSieWkOr9" data-callback="onRecaptchaSuccess5"></div>

					<div class="input-group">
						<button type="submit" class="vozm-form__btn"  disabled>@lang('product_capabilities.send')</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	<div class="col-50">
		<div class="fit-container__right-side">
			<div class="title">@lang('product_capabilities.number_points')</div>
			<div class="text">@lang('product_capabilities.fix_business')</div>
		</div>
	</div>
</div>
<script type="text/javascript">
	let submit = document.querySelector('.vozm-form__btn')
	function onRecaptchaSuccess5 () {
		submit.removeAttribute('disabled');
	}
</script>
@stop
