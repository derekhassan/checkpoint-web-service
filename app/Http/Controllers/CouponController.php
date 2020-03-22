<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Coupon;

class CouponController extends Controller
{
    public function makeQRCode() {
        
        $qrcode = new Coupon;

        //$qrcode->qrid = 1;
        $qrcode->percentage = 10;
        $qrcode->cap = 20;
        $qrcode->busID = 1;

        $qrcode->save();

        // return [
        //     "status"=> 1,
        //     "message"=> $user->id
        // ];

    }

    public function createCoupon() {
        
        $percentage = request()->input("percentage");
        $cap = request()->input("cap");
        $businessID = request()->input("businessID");

        $validator = Validator::make(request()->all(), [
            'percentage' => 'required',
            'cap' => 'required',
            'businessID' => 'required'
        ]);

        if ($validator->fails()) {

            return [
                "status"=> 0,
                "message"=> $validator->errors()->first()
            ];
        } else {
            $coupon = new Coupon;

            $coupon->percentage = $percentage;
            $coupon->percentage_cap = $cap;
            $coupon->bus_id = $businessID;

            $coupon->save();
    
            return [
                "status"=> 201,
                "message"=> "Coupon Created"
            ];
        }


    }
    
    public function store(Request $request) //done through website
    {

        $this->validate($request, [
            'percentage' => 'required',
            'cap' => 'required',
        ]);

        $qrcode = new Coupon;
        $qrcode->percentage = $request->input('percentage');
        $qrcode->cap = 20;
        $qrcode->busID = 1;

        $qrcode->save();

        return redirect('/createcoupon')->with('success', 'Coupon Created');

    }

    public function getQRInfo()
    {
        $id = request()->input("id");
        $qrcode = Coupon::find($id);
        //return view('posts.show')->with('post', $post);
        return $qrcode;
    }
}
