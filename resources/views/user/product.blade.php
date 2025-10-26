@extends('user.layouts.layout')

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
<!-- <section class="slides">
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
</section> -->

<section class="hero">
    <div class="container">
        <div class="hero_content">
            <h2 class="hero_title">Sâm Bản Việt</h2>
            <p class="hero_subtitle">Nguồn năng lượng từ thiên nhiên</p>
            <p class="hero_desc">Mỗi củ sâm dây tươi Ngọc Linh quý hiếm kết hợp cùng các vị thảo mộc trong y học cổ truyền táo đỏ, kỳ tử, cam thảo và long nhãn thượng hạng được bổ sung trong mỗi chai.</p>
            <button type="button" class="hero_cta">Mua ngay</button>
        </div>
        <div class="hero_visual">
            <img class="hero_bottle" src="{{ asset('images/products/item_bottle.png') }}" alt="BV Fresh - Sâm Bản Việt" />
            <img class="hero_decor hero_decor--1" src="{{ asset('images/products/item_1.png') }}" alt="" aria-hidden="true" />
            <img class="hero_decor hero_decor--2" src="{{ asset('images/products/item_2.png') }}" alt="" aria-hidden="true" />
            <img class="hero_decor hero_decor--3" src="{{ asset('images/products/item_3.png') }}" alt="" aria-hidden="true" />
            <img class="hero_decor hero_decor--4" src="{{ asset('images/products/item_4.png') }}" alt="" aria-hidden="true" />
            <img class="hero_decor hero_decor--5" src="{{ asset('images/products/item_5.png') }}" alt="" aria-hidden="true" />
            <img class="hero_decor hero_decor--6" src="{{ asset('images/products/item_6.png') }}" alt="" aria-hidden="true" />
        </div>
    </div>
</section>

<!-- <section class="featured bg-light py-50">
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
</section> -->
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
