@extends('user.layouts.layout')

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
<div class="slides">
    
</div>
@endsection
