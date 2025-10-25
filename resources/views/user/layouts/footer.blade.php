<footer class="bg-brand-teal text-white py-4">
    <div class="container py-4">
        <div class="row align-items-start align-items-lg-center">
            <!-- Left -->
            <div class="col-lg-6">
                <div class="d-flex flex-column gap-4 text-center text-lg-start">
                    <div class="d-flex align-items-center justify-content-center justify-content-lg-start gap-3">
                        <img src="{{ asset('images/logo-dark.png') }}" alt="Banh Viet" class="footer-logo">
                    </div>

                    <!-- Address -->
                    <div class="fw-semibold lh-lg font-matahari-700">
                        <p class="text-uppercase mb-2">CÔNG TY TNHH SẢN XUẤT THƯƠNG MẠI<br>DỊCH VỤ BÁNH VIỆT</p>
                        <p class="mb-0 small">178 Đặng Thúc Liêng, P. Chánh Hưng, Tp. HCM</p>
                        <p class="mb-0 small">
                            Hotline: 0522.252.688 | Email: info@banhviet.vn
                        </p>
                    </div>

                    <!-- Social -->
                    <div class="d-none d-lg-flex align-items-end justify-content-center justify-content-lg-start gap-2">
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

            <!-- Right -->
            <div class="col-lg-6 mt-5 mt-lg-0">
                <div class="subscription-card text-white ms-lg-auto text-center text-lg-start">
                    <h3 class="font-gratelos text-brand-dark register">Đăng ký nhận khuyến mãi</h3>
                    <p class="mt-2 fs-5 text-white font-matahari-400">Kết nối với Bánh Việt, nhận ngay tin khuyến mãi mới nhất mỗi ngày!</p>

                    <form class="d-flex flex-column gap-3 mt-3">
                        <label for="footer-subscribe" class="visually-hidden">Email hoặc số điện thoại của bạn</label>
                        <input id="footer-subscribe" type="text" class="form-control" placeholder="Email hoặc số điện thoại của bạn">
                        <!-- Desktop btn -->
                        <button type="button" class="d-none d-lg-inline-flex btn-sent-now btn">
                            <span class="">Gửi ngay</span>
                            <svg width="21" height="11" viewBox="0 0 21 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M14 0.371765L19.56 5.37177L14 10.3718" stroke="#005651" stroke-miterlimit="10"/>
                                <path d="M19 5.37177H0" stroke="#005651" stroke-miterlimit="10"/>
                            </svg>
                        </button>

                        <!-- Mobile btn -->
                         <button type="button" class="d-block d-lg-none btn-sent-now-mobile btn">
                            <span class="">Gửi ngay</span>
                        </button>
                    </form>
                </div>
            </div>

            <!-- Social Mobile -->
            <div class="col-12 d-block d-lg-none">
                <h2 class="follow-us font-matahari-ext-800">FOLLOW US ON</h2>
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
    </div>
</footer>
