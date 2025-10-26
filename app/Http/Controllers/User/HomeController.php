<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index() {
        return view('user.home');
    }

    public function product() {
        return view('user.product');
    }

    public function productDetail() {
        return view('user.product-detail');
    }

    public function introduce() {
        return view('user.introduce');
    }
}
