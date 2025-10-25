<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="base-url" content="{{ asset('/') }}">
        <title>Bánh Việt</title>

        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>
    <body class="bg-light d-flex min-vh-100 align-items-center">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-7 text-center">
                    <img src="{{ asset('images/logo-dark.png') }}" alt="Banh Viet" class="footer-logo mb-4">
                    <h1 class="font-gratelos text-brand-dark fw-bold display-5 mb-3">Chào mừng đến với Bánh Việt</h1>
                    <p class="lead text-secondary mb-4">
                        Khám phá hương vị truyền thống với những sản phẩm mới nhất từ Bánh Việt.
                    </p>

                    <div class="d-flex flex-column flex-sm-row justify-content-center align-items-center gap-3">
                        <a href="{{ url('/') }}" class="btn btn-primary px-4">Trang chủ</a>

                        @if (Route::has('login'))
                            @auth
                                <a href="{{ url('/dashboard') }}" class="btn btn-outline-primary px-4">Dashboard</a>
                            @else
                                <a href="{{ route('login') }}" class="btn btn-outline-primary px-4">Đăng nhập</a>
                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="btn btn-outline-primary px-4">Đăng ký</a>
                                @endif
                            @endauth
                        @endif
                    </div>
                </div>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
</html>
