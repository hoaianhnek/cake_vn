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
    .categories ul {
        display: flex;
        justify-content: center;
        list-style: none;
        padding: 15px 0px;
        gap: 24px;
    }
    .categories ul li a {
        font-family: 'Matahari-400';
    }
    .category_item a {
        color: #005651 !important;
        font-size: 9px;
        padding: 5px;
        width: 59px;
        border: 1px solid white;
        cursor: pointer;
        transition: all 0.3s ease;
        display: flex;
        flex-wrap: wrap;
        align-items: end;
        justify-content: center;
    }
    .category_item a> div {
        margin-top: 2px;
    }
    .category_item a:hover {
        border: 1px solid #005651;
        border-radius: 5px;
    }
    .category_item {
        display: contents;
    }
    .category_img {
        height: 26px;
        display: flex;
        flex-wrap: wrap-reverse;
        align-items: end; 
    }
    /* slides */
    section.slides {
        position: relative;
        top: 81px;
        height: 450px;
    }
    section.slides .slide_item {
        position: relative;
        height: 100%;
    }
    .slide_left {
        top: 50%;
        position: absolute;
        transform: translateY(-50%);
        width: 40%;
        color: #F5F5F7;
    }
    .slide_left h2 {
        font-size: 64px;
        font-family: 'SVN-Gratelos';
        margin-bottom: 0px;
    }
    .slide_left p {
        font-family: 'Matahari-400';
        font-size: 12px;
    }
    .slide_left p.sub_title {
        font-style: italic;
    }
    .slide_left p.content {
        font-size: 9px;
        width: 182px;
    }
    .btn_buynow {
        font-family: 'Matahari-400';
        font-size: 8px;
        color: #FFFFFF;
        font-style: italic;
        padding: 6px 16px;
        background: #f8f5e530;
        border: none;
        border-radius: 5px;
    }
    .slide_right {
        position: relative;
        width: 55%;
        float: right;
    }
    .slide_right .img1 {
        width: 48px;
        height: 43px;
        position: absolute;
        top: 287px;
    }
    .slide_right img {
        max-width: none;
    }
    .group_img {
        width: 80%;
        float: right;
        position: relative;
    }
    .img5 {
        position: absolute;
        width: 259px;
        left: 50%;
        transform: translateX(-50%);
    }
    .img3 {
        width: 100px;
        position: absolute;
        top: 350px;
        left: 145px;
    }
    .group_img4 {
        position: absolute;
    }
    .img41 {
        width: 64px;
        position: absolute;
        top: 98px;
        left: 163px;
        z-index: 1;
    }
    .img42 {
        width: 84px;
        left: 187px;
        top: 109px;
        position: absolute;
    }
    .img2 {
        position: absolute;
        width: 70px;
        left: 308px;
        top: 300px;
        z-index: 1;
    }
    .img6 {
        position: absolute;
        width: 105px;
        left: 362px;
        top: 27px;
    }
    .bg-light {
        background: #D9D9D9;
    }
    /* featured */
    .featured {
        margin-top: 80px;
    }
    .title_main {
        text-align: center;
        font-family: 'SVN-Gratelos';
        font-size: 40px;
        color: var(--brand-teal);
        margin-bottom: 30px;
    }
    .featured_item h5 {
        text-align: center;
        font-family: 'Matahari-400';
        font-size: 30px;
        color: #F8F5E5;
    }
    .py-50 {
        padding: 50px 0px;
    }
    .btn_top {
        border: 1px solid #414042;
        border-radius: 5px;
        padding: 3px 11px;
        font-size: 10px;
        font-family: 'Matahari-400';
        color: #414042;
        display: inline-block;
        background: white;
        margin-top: 30px;
        transition: all 0.3s ease;
    }
    .btn_top:hover {
        background: #00AE9F;
        color: white;
    }
    img {
        max-width: 100%;
    }
    
    /* yummy */
    .yummy_item {
        box-shadow: 2px 2px 6px #0000001f;
        text-align: center;
        border-radius: 20px;
        padding: 20px;
        color: white;
        overflow: hidden;
    }
    .yummy_item h5 {
        font-family: 'Matahari-700';
        font-size: 20px;
        margin-bottom: 10px;
    }
    .yummy_item p {
        font-family: 'Matahari-400';
        font-size: 10px;
        font-style: italic;
    }
    .yummy_item img {
        width: 291px;
        height: 291px;
        position: relative;
        bottom: -50px;
        max-width: auto;
        transition: all 0.5s ease;
    }
    .yummy_item:hover img {
        bottom: 0px;
    }
    @media (max-width: 992px) {
        .yummy_item {
            margin-bottom: 16px;
        }
    }
    /* crispy */
    .crispy_item {
        border-radius: 20px;
        overflow: hidden;
    }
    .crispy_item img {
        transition: all 0.5s ease;
    }
    .crispy_item:hover img {
        transform: scale(1.15);
    }
    .sport_item {
        background: linear-gradient(0deg, rgba(130, 34, 56, 1) 0%, rgba(190, 0, 77, 1) 100%);
        border-radius: 20px;
        transition: all 0.5s ease;
    }
    .sport_item:hover {
        transform: scale(0.94);
    }
    .group_arrow button {
        background: white;
        border: 1px solid #969696;
        width: 33px;
        height: 33px;
        border-radius: 5px;
    }
    .fresh_item {
        background: #F5F5F7;
        border-radius: 20px;
        display: flex;
        justify-content: center;
        height: 100%;
    }
    .gap-10 {
        gap: 10px;
    }
    .owl-stage {
        display: flex;
    }
    .owl-nav {
        display: none;
    }
</style>
@endsection
@section('content')
<section class="categories">
    <ul>
        <li class="category_item">
            <a>
                <div class="category_img">
                    <img src="{{ asset('images/products/cat_fresh.svg') }}" alt="Category BV Fresh">
                </div>
                <div>{{ __('messages.cat_bvfresh') }}</div>
            </a>
        </li>
        <li class="category_item">
            <a>
                <div class="category_img">
                    <img src="{{ asset('images/products/cat_sport.svg') }}" alt="Category BV Sport">
                </div>
                <div>{{ __('messages.cat_bvsport') }}</div>
            </a>
        </li>
        <li class="category_item">
            <a>
                <div class="category_img">
                    <img src="{{ asset('images/products/cat_yummy.svg') }}" alt="Category BV Yummy">
                </div>
                <div>{{ __('messages.cat_bvyummy') }}</div>
            </a>
        </li>
        <li class="category_item">
            <a>
                <div class="category_img">
                    <img src="{{ asset('images/products/cat_crispy.svg') }}" alt="Category BV Crispy">
                </div>
                <div>{{ __('messages.cat_crispy') }}</div>
            </a>
        </li>
    </ul>
</section>
<section class="slides">
    <div class="slide_item">
        <div class="bg_slide"></div>
        <div class="container">
            <div class="slide_left">
                <h2>Sâm Bản Việt</h2>
                <p class="sub_title">Nguồn năng lượng từ thiên nhiên</p>
                <p class="content">Mỗi củ sâm dây tươi Ngọc Linh quý hiếm kết hợp cùng các vị thảo mộc trong y học cổ truyền táo đỏ, kỳ tử, cam thảo và long nhãn thượng hạng được bổ sung trong mỗi chai.</p>
                <button class="btn_buynow">Mua ngay</button>
            </div>
            <div class="slide_right">
                <img class="img1" src="{{ asset('images/products/slide_left1.png') }}" />
                <div class="group_img">
                    <img class="img2" src="{{ asset('images/products/slide_left3.png') }}" />
                    <img class="img6" src="{{ asset('images/products/slide_left2.png') }}" />
                    <img class="img3" src="{{ asset('images/products/slide_left4.png') }}" />
                    <div class="group_img4">
                        <img class="img41" src="{{ asset('images/products/slide_left5.png') }}" />
                        <img class="img42" src="{{ asset('images/products/slide_left6.png') }}" />
                    </div>
                    <img class="img5" src="{{ asset('images/products/slide_left7.png') }}" />
                </div>
            </div>
        </div>
    </div>
</section>
<section class="featured bg-light py-50">
    <h2 class="title_main">Sản phẩm nổi bật</h2>
    <div class="container">
        <div class="featured_list">
            <div class="featured_item">
                <h5>Bí Đao Collgen</h5>
                <img src="{{ asset('images/products/featured1.png') }}" />
            </div>
            <div class="slide_item">
                <img src="{{ asset('images/products/featured2.png') }}" />
            </div>
            <div class="slide_item">
                <h5>Bí Đao Collgen</h5>
                <img src="{{ asset('images/products/featured1.png') }}" />
            </div>
            <div class="slide_item">
                <img src="{{ asset('images/products/featured2.png') }}" />
            </div>
        </div>
    </div>
</section>
<section class="fresh py-50 overflow-hidden">
    <h5 class="title_main">BV Fresh</h5>
    <div class="container">
        <div class="group_arrow text-end mb-3">
            <button class="me-1 btn-prev">
                <svg width="11" height="18" viewBox="0 0 11 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M10.0168 16.6887L1.11679 8.62718L10.0168 0.555557" stroke="#969696" stroke-width="1.5" stroke-miterlimit="10"/>
                </svg>
            </button>
            <button class="btn-next">
                <svg width="11" height="18" viewBox="0 0 11 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0.503845 0.555908L9.40381 8.61745L0.503845 16.6891" stroke="#221F20" stroke-width="1.5" stroke-miterlimit="10"/>
                </svg>
            </button>
        </div>
        <div class="gap-10 fresh_list">
            <div class="fresh_item">
                <img src="{{ asset('images/products/fresh1.png') }}" />
            </div>
            <div class="fresh_item">
                <img src="{{ asset('images/products/fresh2.png') }}" />
            </div>
            <div class="fresh_item">
                <img src="{{ asset('images/products/fresh3.png') }}" />
            </div>
            <div class="fresh_item">
                <img src="{{ asset('images/products/fresh4.png') }}" />
            </div>
            <div class="fresh_item">
                <img src="{{ asset('images/products/fresh1.png') }}" />
            </div>
            <div class="fresh_item">
                <img src="{{ asset('images/products/fresh2.png') }}" />
            </div>
        </div>
    </div>
</section>
<section class="sport bg-light py-50">
    <h5 class="title_main">BV Sport</h5>
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="sport_item">
                    <img src="{{ asset('images/products/sport1.png') }}" />
                </div>
            </div>
            <div class="col-lg-6">
                <div class="sport_item" style="background: linear-gradient(0deg,rgba(10, 129, 56, 1) 0%, rgba(192, 218, 109, 1) 100%);">
                    <img src="{{ asset('images/products/sport2.png') }}" />
                </div>
            </div>
        </div>
    </div>
</section>
<section class="yummy py-50">
    <h5 class="title_main">BV Yummy</h5>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-12">
                <div class="yummy_item" style="background: #9ACB50">
                    <h5>Bánh Flan
                        <br />
                        Trà Xanh
                    </h5>
                    <p>Sử dụng Matcha thượng hạng</p>
                    <img src="{{ asset('images/products/yummy1.png') }}" />
                </div>
            </div>
            <div class="col-lg-4 col-12">
                <div class="yummy_item" style="background: #FAA220">
                    <h5>Bánh Flan
                        <br />
                        Phô Mai
                    </h5>
                    <p>Thêm phô mai béo ngậy</p>
                    <img src="{{ asset('images/products/yummy2.png') }}" />
                </div>
            </div>
            <div class="col-lg-4 col-12">
                <div class="yummy_item" style="background: #F7BF4A">
                    <h5>Bánh Flan
                        <br />
                        Nguyên Vị
                    </h5>
                    <p>Sử dụng Vani thiên nhiên</p>
                    <img src="{{ asset('images/products/yummy3.png') }}" />
                </div>
            </div>
        </div>
    </div>
    
</section>
<section class="crispy bg-light py-50">
    <h5 class="title_main">Quẩy Giòn</h5>
    <div class="container">
        <div>
            <div class="crispy_item">
                <img src="{{ asset('images/products/crispy1.png') }}" />
            </div>
        </div>
        <div class="text-center">
            <button class="btn_top" onclick="scrollToTop()">Lên trang đầu</button>
        </div>
    </div>
</section>
@endsection

@section('js-script')
<script>
    function scrollToTop() {
        window.scrollTo({
            top: 0,
            behavior: "smooth"
        });
    }

    $(document).ready(function(){
        var owl = $('.fresh_list').owlCarousel({
            items: 3,
            loop: false,
            margin: 10,
            dots: false,  
            nav: false,
            responsive: {
                0: {          
                    items: 1
                },
                768: {       
                    items: 3
                }
            }
        });
        var owl = $('.featured_list').owlCarousel({
            items: 1,
            loop: false,
            margin: 10,
            dots: true,  
            nav: false,
            responsive: {
                0: {          
                    items: 1
                },
                768: {       
                    items: 1
                }
            }
        });

        $('.group_arrow .btn-next').click(function() {
            owl.trigger('next.owl.carousel');
        });
        $('.group_arrow .btn-prev').click(function() {
            owl.trigger('prev.owl.carousel');
        });
    });
</script>
@endsection
