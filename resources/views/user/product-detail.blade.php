@extends('user.layouts.layout')

<style>
    .section-breadcrumb {
        margin-top: 82px;
    }
    .section-breadcrumb .breadcrumb {
        justify-content: center;
        padding: 10px;
        margin: 0px;
        font-family: 'Matahari-400';
        font-size: 9px;
        font-style: italic;
    }
    .section-breadcrumb .breadcrumb-item+.breadcrumb-item {
        padding-right: 0px !important;
    }
    .section-breadcrumb .breadcrumb-item+.breadcrumb-item::before {
        content: ">" !important;
        padding: 0 10px;
        padding-right: 20px !important;
        
    }

    .section_banner {
        background: #F6B352;
        background: linear-gradient(180deg,rgba(246, 179, 82, 1) 0%, rgba(245, 193, 117, 1) 17%, rgba(245, 215, 173, 1) 45%, rgba(245, 231, 213, 1) 69%, rgba(245, 241, 237, 1) 88%, rgba(245, 245, 247, 1) 100%);
    }
    .banner_category {
        font-family: 'Matahari-400';
        font-size: 20px;
        opacity: 0.2;
    }
    .banner_title {
        font-family: 'SVN-Gratelos';
        font-size: 48px;
        color: #F8F5E5;
    }
    .group_img {
        display: flex;
        flex-direction: row-reverse;
        justify-content: center;
    }
    .banner_sub {
        font-family: 'Matahari-400';
        font-size: 20px;
        color: #CE8F49;
    }
    .banner_content {
        width: 294px;
        font-size: 9px;
        margin: auto;
        font-style: italic;
    }
    .card_content {
        background: white;
        border-radius: 20px;
        box-shadow: 0px 0px 30px #0000002b;
        padding: 50px;
    }
    .card_content h4 {
        color: #CE8F49;
        font-family: 'SVN-Gratelos';
        font-size: 20px;
    }
    .card_content p {
        font-family: 'Matahari-400';
        font-size: 10px;
        line-height: 30px;
        width: 442px;
        border-top: 1px solid #4140424d;
        padding-top: 16px;
        border-bottom: 1px solid #4140424d;
        padding-bottom: 25px;
    }
</style>
@section('content')
<section class="section-breadcrumb">
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">Sản Phẩm</li>
                <li class="breadcrumb-item active" aria-current="page">BV Fresh</li>
                <li class="breadcrumb-item active" aria-current="page">Sâm Bản Việt</li>
            </ol>
        </nav>
    </div>
</section>
<section class="section_banner">
    <div class="container text-center py-5">
        <h3 class="banner_category">BV Fresh</h3>
        <h2 class="banner_title">Sâm Bản Việt</h2>
        <div class="group_img">
            <img src="{{ asset('images/products/detail1.png') }}" height="450px" alt="Category BV Fresh" />
            <img src="{{ asset('images/products/detail2.png') }}" height="363px" alt="Category BV Fresh" />
        </div>
        <h3 class="banner_sub">Nguồn năng lượng từ thiên nhiên</h3>
        <p class="banner_content pb-5">Mỗi củ sâm dây tươi Ngọc Linh quý hiếm kết hợp cùng các vị thảo mộc trong y học cổ truyền táo đỏ, kỳ tử, cam thảo và long nhãn thượng hạng được bổ sung trong mỗi chai.</p>
        <div class="py-5">
            <div class="card_content">
                <div class="row">
                    <div class="col-5 d-flex justify-content-center align-items-center">
                        <img src="{{ asset('images/products/logo bv fresh.png') }}" width="116px" alt="Category BV Fresh" />
                    </div>
                    <div class="col-7 text-start">
                        <h4 class="mb-4">Thành phần và dinh dưỡng</h4>
                        <p>Thành phần: Nước, củ sâm dây tươi (20%), đường phèn, táo đỏ, kỷ tử, long nhãn, cam thảo. 
                            <br /> Hướng dẫn sử dụng: Sử dụng trực tiếp sau khi mở bao bì. 
                            <br /> Thông tin cảnh báo: Không sử dụng sản phẩm có dấu hiệu hư hỏng hoặc hết hạn sử dụng. 
                            <br /> Bảo quản: Giữ lạnh ở 5 - 10°C. Khối lượng tịnh hỗn hợp: 390g | Khối lượng chất rắn: 40g</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container">
        <div class="row">
            <div class="col-5">
                <h5>Sự khác biệt</h5>
                <ul>
                    <li>
                        <div>
                            <img src="{{ asset('images/products/dt1.png') }}" alt="Category BV Fresh">
                            Không gaz
                        </div>
                    </li>
                    <li>
                        <div>
                            <img src="{{ asset('images/products/dt2.png') }}" alt="Category BV Fresh">
                            Không chất tạo màu
                        </div>
                    </li>
                    <li>
                        <div>
                            <img src="{{ asset('images/products/dt3.png') }}" alt="Category BV Fresh">
                            Không caffeine
                        </div>
                    </li>
                    <li>
                        <div>
                            <img src="{{ asset('images/products/dt4.png') }}" alt="Category BV Fresh">
                            Không chất bảo quản
                        </div>
                    </li>
                    <li>
                        <div>
                            <img src="{{ asset('images/products/dt5.png') }}" alt="Category BV Fresh">
                            Không đường hoá học
                        </div>
                    </li>
                </ul>
            </div>
            <div class="col-7">
                <div class="row">
                    <div class="col-7"></div>
                    <div class="col-5">
                        <img src="{{ asset('images/products/dt1.1.png') }}" alt="Category BV Fresh">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection