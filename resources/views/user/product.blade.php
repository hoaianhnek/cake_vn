@extends('user.layouts.layout')

@section('css')
<style>
    .bg_slide,
    .bg_slide_cloud {
        position: absolute;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
    }
    .bg_slide {
        background: url('{{ asset('images/products/nature-landscape-with-vegetation-flora.png') }}');
        background-position: bottom left;
        background-size: cover;
    }
    .slide_item {
        position: relative;
    }
</style>
@endsection
@section('content')
<div class="categories">
    <ul>
        <li>
            <a>
                <img src="{{ asset('images/products/cat_fresh.svg') }}" alt="Cake" class="w-8 h-8 inline-block">
                {{ __('messages.cat_bvfresh') }}
            </a>
            <a>
                <img src="{{ asset('images/products/cat_sport.svg') }}" alt="Cake" class="w-8 h-8 inline-block">
                {{ __('messages.cat_bvsport') }}
            </a>
            <a>
                <img src="{{ asset('images/products/cat_yummy.svg') }}" alt="Cake" class="w-8 h-8 inline-block">
                {{ __('messages.cat_bvyummy') }}
            </a>
            <a>
                <img src="{{ asset('images/products/cat_crispy.svg') }}" alt="Cake" class="w-8 h-8 inline-block">
                {{ __('messages.cat_crispy') }}
            </a>
        </li>
    </ul>
</div>
<div class="slides" >
    <div class="slide_item" style="height: 400px">
        <div class="bg_slide"></div>
        <div class="slide_left">
            <h2>Sâm Bản Việt</h2>
            <p>Nguồn năng lượng từ thiên nhiên</p>
            <p>Mỗi củ sâm dây tươi Ngọc Linh quý hiếm kết hợp cùng các vị thảo mộc trong y học cổ truyền táo đỏ, kỳ tử, cam thảo và long nhãn thượng hạng được bổ sung trong mỗi chai.</p>
            <button>Mua ngay</button>
        </div>
        <div class="slide_right">
            <img src="{{ asset('images/products/slide_left1.png') }}" />
            <img src="{{ asset('images/products/slide_left2.png') }}" />
            <img src="{{ asset('images/products/slide_left3.png') }}" />
            <img src="{{ asset('images/products/slide_left4.png') }}" />
            <img src="{{ asset('images/products/slide_left5.png') }}" />
            <img src="{{ asset('images/products/slide_left6.png') }}" />
            <img src="{{ asset('images/products/slide_left7.png') }}" />
        </div>
    </div>
</div>
@endsection
