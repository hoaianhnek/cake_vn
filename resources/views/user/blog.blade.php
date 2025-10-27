@extends('user.layouts.layout')

@section('css')
    <link href="{{ asset('css/introduce.css') }}" rel="stylesheet">
    <style>
        .blog-feature {
            padding: 60px 0px;
        }
        .title {
            font-size: clamp(2rem, 4vw, 2.75rem);
            margin-bottom: 0.75rem;
            color: var(--brand-green);
            font-family: 'SVN-Gratelos';
            text-align: center;
        }
        .blog-feature__item-content {
            padding: 15px;
            font-family: 'Matahari-400';
            font-size: 14px;
            padding-bottom: 90px;
            border-bottom: 1px solid #00AE9F;
        }
        .blog-feature__item-content h5 {
            color: #00AE9F;
        }
        .blog-feature__item {
            margin-top: 60px;
            overflow: hidden;
            display: inline-block;
        }
        .blog-feature__item img {
            transition: all 0.3s ease-in-out;
        }
        .blog-feature__item:hover img {
            transform: scale(1.05);
        }
    </style>
@endsection

@section('content')
<main class="introduce-page">
    <section class="introduce-hero">
        <div class="introduce-hero__breadcrumb-wrapper">
            <div class="container">
                <nav class="introduce-breadcrumb" aria-label="Breadcrumb">
                    <a class="introduce-breadcrumb__link" href="{{ url('/') }}">Dinh Dưỡng</a>
                    <span class="introduce-breadcrumb__divider" aria-hidden="true">
                        <svg width="8" height="15" viewBox="0 0 3 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0.137451 0.108398L2.71744 3.374L0.137451 6.65" stroke="#005651" stroke-width="0.5" stroke-miterlimit="10"/>
                        </svg>
                    </span>
                    <span class="introduce-breadcrumb__current">Góc chuyên gia</span>
                </nav>
            </div>
        </div>
        
        <img class="introduce-hero__image" src="{{ asset('images/home/blog1.png') }}" alt="Bánh Việt - Nuôi dưỡng điều lành">
    </section>
    <section class="blog-feature">
        <div class="container">
            <h2 class="title">Dinh dưỡng</h2>
            <div class="row">
                <div class="col-lg-4 col-12">
                    <a class="blog-feature__item" href="{{ url('/blog/1') }}">
                        <img src="{{ asset('images/home/blog2.png') }}" alt="Chất xơ hòa tan">
                        <div class="blog-feature__item-content">
                            <p>Góc chuyên gia</p>
                            <h5>Trường học sức khoẻ tự nhiên Kiến thứ Đông - Tây y kết hợp</h5>
                            <span>01.10.2025</span>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-12">
                    <a class="blog-feature__item" href="{{ url('/blog/1') }}">
                        <img src="{{ asset('images/home/blog2.png') }}" alt="Chất xơ hòa tan">
                        <div class="blog-feature__item-content">
                            <p>Góc chuyên gia</p>
                            <h5>Trường học sức khoẻ tự nhiên Kiến thứ Đông - Tây y kết hợp</h5>
                            <span>01.10.2025</span>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-12">
                    <a class="blog-feature__item" href="{{ url('/blog/1') }}">
                        <img src="{{ asset('images/home/blog2.png') }}" alt="Chất xơ hòa tan">
                        <div class="blog-feature__item-content">
                            <p>Góc chuyên gia</p>
                            <h5>Trường học sức khoẻ tự nhiên Kiến thứ Đông - Tây y kết hợp</h5>
                            <span>01.10.2025</span>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-12">
                    <a class="blog-feature__item" href="{{ url('/blog/1') }}">
                        <img src="{{ asset('images/home/blog2.png') }}" alt="Chất xơ hòa tan">
                        <div class="blog-feature__item-content">
                            <p>Góc chuyên gia</p>
                            <h5>Trường học sức khoẻ tự nhiên Kiến thứ Đông - Tây y kết hợp</h5>
                            <span>01.10.2025</span>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-12">
                    <a class="blog-feature__item" href="{{ url('/blog/1') }}">
                        <img src="{{ asset('images/home/blog2.png') }}" alt="Chất xơ hòa tan">
                        <div class="blog-feature__item-content">
                            <p>Góc chuyên gia</p>
                            <h5>Trường học sức khoẻ tự nhiên Kiến thứ Đông - Tây y kết hợp</h5>
                            <span>01.10.2025</span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
</main>

<div class="text-center mb-5">
    <button type="button" class="btn-custom js-scroll-top" onclick="scrollToTop()">Lên trang đầu</button>
</div>
@endsection