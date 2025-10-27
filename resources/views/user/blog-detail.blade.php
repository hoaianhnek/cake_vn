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
        .blog-detail_content {
            background: white;
            margin-top: -100px;
            padding: 60px;
            border-radius: 20px;
            position: relative;
        }
        .blog-detail_content h5 {
            color: #00AE9F;
            font-family: 'Matahari-400';
        }
        .introduce-hero {
            background: #f4f4f6;
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
                    <span class="introduce-breadcrumb__divider" aria-hidden="true">
                        <svg width="8" height="15" viewBox="0 0 3 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0.137451 0.108398L2.71744 3.374L0.137451 6.65" stroke="#005651" stroke-width="0.5" stroke-miterlimit="10"/>
                        </svg>
                    </span>
                    <span class="introduce-breadcrumb__current">Kiến thức Đông - Tây y</span>
                </nav>
            </div>
        </div>
        <img class="introduce-hero__image" src="{{ asset('images/home/bl-detail1.png') }}" alt="Bánh Việt - Nuôi dưỡng điều lành">
        <div class="container">
            <div class="blog-detail_content">
                <div class="row">
                    <div class="col-lg-4 col-12">
                        <h5>Trường học sức khỏe tự nhiên Kiến thức Đông – Tây y kết hợp</h5>
                    </div>
                    <div class="col-lg-8 col-12">
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. 
                            
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.
                            
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="text-center my-5">
            <button type="button" class="btn-custom js-scroll-top" onclick="scrollToTop()">Lên trang đầu</button>
        </div>
    </section>
</main>
@endsection