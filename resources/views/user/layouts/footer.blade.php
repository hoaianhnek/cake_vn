<footer class="bg-brand-teal text-white py-5">
    <div class="container py-4">
        <div class="row gy-5 align-items-start align-items-lg-center">
            <div class="col-lg-7">
                <div class="d-flex flex-column gap-4 text-center text-lg-start">
                    <div class="d-flex align-items-center justify-content-center justify-content-lg-start gap-3">
                        <img src="{{ asset('images/logo-dark.png') }}" alt="Banh Viet" class="footer-logo">
                    </div>

                    <div class="fw-semibold lh-lg">
                        <p class="text-uppercase mb-2">CÔNG TY TNHH SẢN XUẤT THƯƠNG MẠI<br>DỊCH VỤ BÁNH VIỆT</p>
                        <p class="mb-1 small">178 Đặng Thúc Liêng, P. Chánh Hưng, Tp. HCM</p>
                        <p class="mb-0 small">
                            Hotline: <a href="tel:0522252688" class="footer-link">0522.252.688</a> |
                            Email: <a href="mailto:info@banhviet.vn" class="footer-link">info@banhviet.vn</a>
                        </p>
                    </div>

                    <div class="d-flex align-items-end justify-content-center justify-content-lg-start gap-2">
                        <a href="#" class="social-link" aria-label="Zalo">
                            <img src="{{ asset('icons/zalo.png') }}" alt="zalo" class="social-icon">
                        </a>
                        <a href="#" class="social-link" aria-label="Facebook">
                            <img src="{{ asset('icons/facebook.png') }}" alt="facebook" class="social-icon">
                        </a>
                        <a href="#" class="social-link" aria-label="Instagram">
                            <img src="{{ asset('icons/instagram.png') }}" alt="instagram" class="social-icon">
                        </a>
                        <div class="footer-divider d-none d-lg-block mb-1"></div>
                    </div>
                </div>
            </div>

            <div class="col-lg-5">
                <div class="subscription-card text-white ms-lg-auto">
                    <h3 class="font-gratelos text-brand-dark fw-bold display-6">Đăng ký nhận khuyến mãi</h3>
                    <p class="mt-2 fs-6 text-white-90">Kết nối với Bánh Việt, nhận ngay tin khuyến mãi mới nhất mỗi ngày!</p>

                    <form class="d-flex flex-column gap-3 mt-3">
                        <label for="footer-subscribe" class="visually-hidden">Email hoặc số điện thoại của bạn</label>
                        <input id="footer-subscribe" type="text" class="form-control" placeholder="Email hoặc số điện thoại của bạn">
                        <button type="button" class="btn btn-link text-brand-dark d-inline-flex align-items-center gap-2 text-decoration-none fw-semibold px-0">
                            <span class="text-scale-y-80 fs-5">Gửi ngay</span>
                            <img src="{{ asset('icons/right.png') }}" alt="right icon" class="icon-10">
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</footer>
