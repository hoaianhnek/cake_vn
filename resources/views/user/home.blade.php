@extends('user.layouts.layout')

@section('content')

<section class="home">
    <!-- Sâm bản việt -->
    <div class="first-section">

    </div>

    <!-- Nuôi dưỡng điều lành -->
    <div class="bg-light-gray">
        <div class="container-custom">
            <!-- Text section -->
            <div class="content">
                <h2 class="title">Nuôi dưỡng điều lành</h2>
                <p class="desc">Trở thành công ty hàng đầu chuyên nghiên cứu, sản xuất và cung cấp cho thị trường trong nước dòng nước giải khát chăm sóc sức khỏe thiên nhiên thuần Việt.</p>
                <button class="btn-custom">Đọc thêm</button>
            </div>

            <!-- Image -->
            <div>
                <img src="{{ asset('images/home/fruit.png') }}" alt="Nuôi dưỡng điều lành" class="image">
            </div>
        </div>
    </div>

    <!-- Lưu giữ hồn Việt -->
    <div class="bg-white">
        <div class="container-custom">
            <!-- Text section -->
            <div class="content">
                <h2 class="title">Lưu giữ hồn Việt</h2>
                <p class="desc">“Lưu giữ hồn Việt, sống khỏe theo cách mới” Công ty được khởi dựng từ một mong muốn giản dị: đem lại sức khỏe dài hạn cho người Việt bằng chính dược liệu Việt</p>
                <button class="btn-custom">Đọc thêm</button>
            </div>

            <!-- Image -->
            <div>
                <img src="{{ asset('images/home/factory.png') }}" alt="Lưu giữ hồn Việt" class="image">
            </div>
        </div>
    </div>

    <!-- Lựa chọn của bạn -->
    @php
        $carouselProducts = [
            ['name' => 'Bí Đao Collagen', 'image' => asset('images/home/collagen.png')],
            ['name' => 'Bí Đao Chanh Sả', 'image' => asset('images/home/chanh-sa.png')],
            ['name' => 'Sâm Bổ Bản Việt', 'image' => asset('images/home/ban-viet.png')],
            ['name' => 'Tía Tô Tắc', 'image' => asset('images/home/tia-to.png')],
            ['name' => 'Nha Đam Nhãn Tươi', 'image' => asset('images/home/nhan-tuoi.png')],
            ['name' => 'Bí Đao Collagen', 'image' => asset('images/home/collagen.png')],
            ['name' => 'Bí Đao Chanh Sả', 'image' => asset('images/home/chanh-sa.png')],
        ];
    @endphp
    <div class="choice-section bg-white py-5">
        <div class="container-custom">
            <div class="choice-header text-center mb-4 mb-lg-5">
                <h2 class="choice-title">Lựa chọn của bạn</h2>
                <p class="choice-subtitle">Và không chỉ có nước, Bánh Việt còn rất nhiều các sản phẩm bánh khác, bánh Flan, bánh Quẩy...</p>
            </div>

            <div class="choice-carousel position-relative">
                <!-- Prev -->
                <button class="choice-nav choice-nav-prev" type="button" aria-label="Xem sản phẩm trước">
                    <svg width="22" height="38" viewBox="0 0 22 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M19.5 35.25L2 18.75L19.5 2.25" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </button>

                <div class="choice-carousel-viewport" id="choiceCarouselViewport" tabindex="0">
                    <div class="choice-carousel-track">
                        @foreach ($carouselProducts as $product)
                            <article class="choice-card text-center">
                                <div class="choice-card-image">
                                    <img src="{{ $product['image'] }}" alt="{{ $product['name'] }}">
                                </div>
                                <!-- <p class="choice-card-title">{{ $product['name'] }}</p> -->
                            </article>
                        @endforeach
                    </div>
                </div>

                <!-- Next -->
                <button class="choice-nav choice-nav-next" type="button" aria-label="Xem sản phẩm tiếp theo">
                    <svg width="22" height="38" viewBox="0 0 22 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2 2.25L19.5 18.75L2 35.25" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </button>
            </div>

            <div class="text-center mt-4 pt-lg-2">
                <button type="button" class="btn-custom js-scroll-top">Lên trang đầu</button>
            </div>
        </div>

        <div class="line"></div>
    </div>
</section>

@endsection

@section('js-script')
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const viewport = document.getElementById('choiceCarouselViewport');
        const track = viewport?.querySelector('.choice-carousel-track');
        const prevBtn = document.querySelector('.choice-nav-prev');
        const nextBtn = document.querySelector('.choice-nav-next');

        

        if (!viewport || !track || !prevBtn || !nextBtn) {
            return;
        }

        function updateControls() {
            const maxScrollLeft = track.scrollWidth - viewport.clientWidth;
            const tolerance = 4;

            prevBtn.disabled = viewport.scrollLeft <= tolerance;
            nextBtn.disabled = viewport.scrollLeft >= (maxScrollLeft - tolerance);
        }

        function scrollByDirection(direction) {
            const amount = viewport.clientWidth * 0.9;
            viewport.scrollBy({ left: direction * amount, behavior: 'smooth' });
        }

        prevBtn.addEventListener('click', () => scrollByDirection(-1));
        nextBtn.addEventListener('click', () => scrollByDirection(1));

        let scrollTimeout;
        viewport.addEventListener('scroll', () => {
            window.clearTimeout(scrollTimeout);
            scrollTimeout = window.setTimeout(updateControls, 100);
        });

        window.addEventListener('resize', updateControls);

        updateControls();

        document.querySelectorAll('.js-scroll-top').forEach(function (btn) {
            btn.addEventListener('click', function (event) {
                event.preventDefault();
                window.scrollTo({ top: 0, behavior: 'smooth' });
            });
        });
    });
</script>
@endsection
