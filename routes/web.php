<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;
use App\Http\Controllers\User\{
    HomeController
};

Route::get('/', [HomeController::class, 'index']);
Route::get('/product', [HomeController::class, 'product']);
Route::get('/product-detail', [HomeController::class, 'productDetail']);

Route::get('/lang/{locale}', function ($locale) {
    if (!in_array($locale, ['en', 'vi'])) {
        abort(400);
    }
    session(['locale' => $locale]);
    App::setLocale($locale);
    return redirect()->back();
});