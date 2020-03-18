<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function createcoupon(){
        $title = 'New Coupon';
        return view('createcoupon')->with('title', $title);
    }
}
