@extends('layouts.eq')
@section('product')
    <div class="product product_{{$id}}">
        <div class="container sides-padding-40">
            <div class="row col-50 col-mob-100">
                <h1 class="product__title">
                    {!! $name !!}
                </h1>
                <div class="product__mob-image no-desk">
                    @if(!empty($sale_price))
                        <span class="product__mob-discount">-{{ $sale }}%</span>
                    @endif
                </div>
                     @if ($id === 1)
                    <p class="product__description">@lang('equipment.monoblock_desc')</p>
                    @elseif ($id === 2)
                    <p class="product__description">@lang('equipment.receipt_printer_desc')</p>
                    @elseif ($id === 7)
                    <p class="product__description">@lang('equipment.money_box_desc')</p>
                    @elseif ($id === 3)
                    <p class="product__description">@lang('equipment.barcode_scanner_desc')</p>
                    @elseif ($id === 29)
                    <p class="product__description">@lang('equipment.label_printer_desc')</p>
                    @elseif ($id === 30)
                    <p class="product__description">@lang('equipment.smart_terminal_desc')</p>
                    @endif
                @if(!empty($video))
                <div class="overview play-button">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve" width="48" height="48">
                        <path d="M256,0C114.617,0,0,114.615,0,256s114.617,256,256,256s256-114.615,256-256S397.383,0,256,0z M344.48,269.57l-128,80  c-2.59,1.617-5.535,2.43-8.48,2.43c-2.668,0-5.34-0.664-7.758-2.008C195.156,347.172,192,341.82,192,336V176  c0-5.82,3.156-11.172,8.242-13.992c5.086-2.836,11.305-2.664,16.238,0.422l128,80c4.676,2.93,7.52,8.055,7.52,13.57  S349.156,266.641,344.48,269.57z" style="fill: rgb(0, 0, 0);"></path>
                    </svg>
                    <h2>@lang('equipment.view_overview')</h2>
                </div>
                @endif
                <div class="row row_middle product__bottom" style="margin-top: 3rem">
                    <div class="col-auto">
                        <button type="button" class="button-product-buy" data-open-modal="#equipment-modal" data-type="PRODUCT_0004"
                                data-caption="@lang('equipment.buy_item'): {{ $name }}">@lang('equipment.buy')</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <style>
        .no-webp .product_{{$id}},.no-webp .product__mob-image{background-image:url(/img/equipment/{{$img}}_big.jpg)}
        .webp .product_{{$id}}, .webp .product__mob-image{background-image:url(/img/equipment/{{$img}}_big.webp)}
        .product_{{$id}}{
            background-repeat: no-repeat;
            background-position: top -2rem right 1rem;
            -webkit-background-size: 80rem auto;
            background-size: 80rem auto;
        }

    </style>
@endsection
@section('table')
    {!! $html !!}
@endsection