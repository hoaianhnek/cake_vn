<footer class="w-full bg-[#00AE9F] text-white px-8">
    <div class="max-w-7xl py-12 mx-auto space-y-10 lg:flex lg:items-center lg:space-y-0 lg:space-x-12">
        <!-- Left -->
        <div class="w-full max-w-lg lg:max-w-full mx-auto lg:mx-0 text-center lg:text-left space-y-8">
            <!-- Logo -->
            <div class="flex items-center justify-center lg:justify-start gap-3">
                <img src="{{ asset('images/logo-dark.png') }}" alt="Banh Viet" class="w-auto h-12">
            </div>

            <div class="space-y-2 font-semibold leading-relaxed text-white">
                <p class="text-base uppercase">CÔNG TY TNHH SẢN XUẤT THƯƠNG MẠI<br>DỊCH VỤ BÁNH VIỆT</p>
                <p class="text-sm mb-0">178 Đặng Thúc Liêng, P. Chánh Hưng, Tp. HCM</p>
                <p class="text-sm">Hotline: <a href="tel:0522252688" class="underline-offset-4 hover:underline">0522.252.688</a> | Email: <a href="mailto:info@banhviet.vn" class="underline-offset-4 hover:underline">info@banhviet.vn</a></p>
            </div>

            <div class="flex items-end justify-center lg:justify-start gap-2">
                <a href="#" class="flex items-center justify-center transition hover:bg-white/10" aria-label="Zalo">
                    <img src="{{ asset('icons/zalo.png') }}" alt="zalo" class="w-auto h-[34px]">
                </a>
                <a href="#" class="flex items-center justify-center transition hover:bg-white/10" aria-label="Facebook">
                    <img src="{{ asset('icons/facebook.png') }}" alt="facebook" class="w-auto h-[34px]">
                </a>
                <a href="#" class="flex items-center justify-center transition hover:bg-white/10" aria-label="Instagram">
                    <img src="{{ asset('icons/instagram.png') }}" alt="instagram" class="w-auto h-[34px]">
                </a>
                <div class="hidden h-px w-[230px] mb-1 bg-dark-green lg:block"></div>
            </div>
        </div>

        <!-- Right -->
        <div class="w-full max-w-lg px-10 py-5 mx-auto border border-dark-green rounded-[32px] text-white lg:mx-0">
            <h3 class="text-3xl lg:text-5xl font-bold text-dark-green font-gratelos">Đăng ký nhận khuyến mãi</h3>
            <p class="mt-2 text-base lg:text-lg leading-6 text-white/90">Kết nối với Bánh Việt, nhận ngay tin khuyến mãi mới nhất mỗi ngày!</p>

            <form class="flex flex-col gap-4 mt-4">
                <label for="footer-subscribe" class="sr-only">Email hoặc số điện thoại của bạn</label>
                <input id="footer-subscribe" type="text" placeholder="Email hoặc số điện thoại của bạn" 
                    class="w-full px-4 py-3 text-sm text-gray-800 placeholder:text-[#808285] placeholder:italic bg-white rounded-xl focus:outline-none focus:ring-2 focus:ring-[#F9A826]/70">
                <div class="">
                    <button type="button" class="inline-flex items-center justify-center gap-2 text-dark-green transition-colors hover:cursor-pointer hover:text-white">
                        <span class="[transform:scaleY(0.8)] origin-center inline-block text-lg lg:text-[22px] font-semibold">Gửi ngay</span>
                        <img src="{{ asset('icons/right.png') }}" alt="right icon" class="w-auto h-[10px]">
                    </button>
                </div>
            </form>
        </div>
    </div>
</footer>
