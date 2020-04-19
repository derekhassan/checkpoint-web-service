<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function createcoupon(){
        $title = 'New Coupon';
        return view('coupons.createcoupon')->with('title', $title);
    }
    public function createbusiness(){
        $title = 'New Business';
        return view('businesses.createbusiness')->with('title', $title);
    }
}
