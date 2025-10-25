@extends('user.layouts.layout')

@section('content')
<div class="categories py-5">
    <ul class="product-category">
        <li>
            <a href="#">
                <img src="{{ asset('images/products/cat_fresh.svg') }}" alt="Cake" class="product-icon">
                {{ __('messages.cat_bvfresh') }}
            </a>
        </li>
        <li>
            <a href="#">
                <img src="{{ asset('images/products/cat_sport.svg') }}" alt="Cake" class="product-icon">
                {{ __('messages.cat_bvsport') }}
            </a>
        </li>
        <li>
            <a href="#">
                <img src="{{ asset('images/products/cat_yummy.svg') }}" alt="Cake" class="product-icon">
                {{ __('messages.cat_bvyummy') }}
            </a>
        </li>
        <li>
            <a href="#">
                <img src="{{ asset('images/products/cat_crispy.svg') }}" alt="Cake" class="product-icon">
                {{ __('messages.cat_crispy') }}
            </a>
        </li>
    </ul>
</div>
<div class="slides mt-4">
    
</div>
@endsection
