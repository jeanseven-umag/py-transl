@extends('layouts.main')
@section('content')
    <script type="text/javascript">
        if (Cookies.get('show-success') === '1') {
            Cookies.remove('show-success');
        } else {
            window.location.href = "/";
        }
        Cookies.set('show-popup', 'yes');

        $.ajax({
            type: 'GET',
            url: 'https://media.umag.kz/feed/json',

            success: function(data){
                let html = '';
                for (let i = 0; i < data.length; i++) {
                    html +=
                        '<div class="col-25 col-mob-100 sides-padding-15">' +
                            '<article>' +
                                '<a title="Перейти на статью" href="' + data[i].url + '" rel="noreferrer" target="_blank" class="post-img-link">' +
                                '<img src="'+ data[i].image +'" alt="umag media post" />' +
                            '</a>' +
                            '<h1><a href="' + data[i].url + '" rel="noreferrer" target="_blank">' + data[i].title + '</a></h1>' +
                            '<p class="review_count"> '+ data[i].count_view +' просмотров | '+ data[i].time_diff +' назад </p>' +
                        '</article>' +
                    '</div>';
            }
            $('#blog-articles').html(html);
            $('#blog').css('display', 'block');
        },
        error: function() {
            $('#blog').remove();
        }
    });
</script>
<link rel="stylesheet" type="text/css" href="/css/request-form-success-page.css?v=2.2101">
<div class="block-1">
	<div class="container sides-padding-40 sucess-wrap">
        <p class="succes_svg">
            <svg xmlns="http://www.w3.org/2000/svg" width="67.501" height="61.874" viewBox="0 0 67.501 61.874">
                <g id="checkmark" transform="translate(0 -0.008)">
                    <path id="Path_1710" data-name="Path 1710" d="M30.937,61.882A30.937,30.937,0,1,1,47.626,4.9a2.111,2.111,0,0,1-2.281,3.552,26.714,26.714,0,1,0,12.31,22.494c0-.881-.042-1.752-.124-2.61a2.109,2.109,0,1,1,4.2-.408q.143,1.489.143,3.018A30.973,30.973,0,0,1,30.937,61.882Zm0,0" fill="#2d8259"/>
                    <path id="Path_1711" data-name="Path 1711" d="M164.1,56.5a2.094,2.094,0,0,1-1.49-.618L149.958,43.228a2.11,2.11,0,1,1,2.984-2.984L164.107,51.41l29.443-29.444a2.11,2.11,0,1,1,2.984,2.984L165.6,55.887a2.113,2.113,0,0,1-1.493.616Zm0,0" transform="translate(-129.652 -18.526)" fill="#2d8259"/>
                </g>
            </svg>
        </p>
		<h1>ваша заявка принята!</h1>
		<p>спасибо, мы свяжемся с вами через некоторое время.</p>
	</div>
</div>
<section id="blog" class="blog" style="display: block;">
	<div class="container sides-padding-40">
		<h1>смотрите обзор оборудования</h1>
		<div id="blog-articles" class="row sides-margin-minus-15"></div>
	</div>
</section>
<section class="umag-media-link">
    <div class="left-side">
        <img src="/img/media_logo.png" alt="umag media">
        <h2 class="how-to-create">
            как построить бизнес<br/>
            в Казахстане?!
        </h2>
    </div>
    <div class="right-side">
        <span class="mini-info">все самое полезное о ритейле</span>
        <a href="https://media.umag.kz/">перейти</a>
    </div>
</section>

@stop