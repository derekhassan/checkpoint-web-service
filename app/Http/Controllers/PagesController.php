<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Coupon;
use App\Business;

class PagesController extends Controller
{
    public function createcoupon(){
        $title = 'New Coupon';
        $coupons = Business::all(['id', 'business_name']);
        return view('coupons.createcoupon', compact('coupons', $coupons));

    }
    public function createbusiness(){
        $title = 'New Business';
        return view('businesses.createbusiness')->with('title', $title);
    }
}
