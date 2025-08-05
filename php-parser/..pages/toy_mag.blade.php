@extends('layouts.shop_new')
@section('topheader')
    <div class="top-header-container">
        <div class="top-wrap">
            <div class="top-left">
                <h3 class="informer-title">umag для магазина игрушек</h3>
                <h1 class="full-text">получите инструменты <br/> для простого и удобного учета </br> товаров и продаж </h1>
                <a href="/request-form" class="green-request">попробовать бесплатно</a>
            </div>
            <div class="top-right">
                <img src="/img/home-page/business-type_6_hover.svg" alt="график прогаммы umag">
                <style>
                    li.for-active.for-active-6{background: #e4e4e4}
                    @media(min-width: 767px){.top-right img {width: auto; height: 31rem; margin-top: 40px; margin-bottom: 35px }.top-right {justify-content: center}}
                    @media(max-width: 767px){.top-right img {height: 31rem!important; margin-top: 25px; margin-bottom:0px; position: relative}}
                </style>
            </div>
        </div>
        <div class="bottom-wrap">
            <div class="col__one">
                <h4 class="col-title">находитесь где угодно</h4>
                <p>с umag вы можете контролировать свой бизнес из любой точки мира через интернет</p>
                <span class="play_col first-vid" data-video="Ibn2xm_am08"> <i class="play_button"></i> смотреть как работает</span>
            </div>      
            <div class="col__two">
                <h4 class="col-title">избавьтесь от воровства</h4>
                <p>наша программа поможет выявить воровство и сократить издержки в вашем магазине</p>
                <span class="play_col second-vid" data-video="hJpx8FOSChE"> <i class="play_button"></i> смотреть как работает</span>
            </div>      
            <div class="col__three">
                <h4 class="col-title">не беспокойтесь о резервах магазина</h4>
                <p>отслеживайте товар на складе через нашу программу </p>
                <span class="play_col third-vid" data-video="USLcEnA89iE"> <i class="play_button"></i> смотреть как работает</span>
            </div>      
        </div>
    </div>
@endsection
@section('review')
<p>«То что мы делали в 1С за два часа, в Umag делаем за 10-15 минут»</p>
<p>Евгений Царапкин <br/>Сеть-магазинов "Kango" г. Шымкент</p>
@endsection
@section('iframe')
    <iframe width="100%" height="100%" src="https://www.youtube.com/embed/gsL6_imqk30" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
@endsection