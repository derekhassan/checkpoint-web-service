<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Transaction;

class TransactionController extends Controller
{
    public function createTransaction() {
        
        $userShared = request()->input("userShared");
        $userReceived = request()->input("userReceived");
        $couponID = request()->input("couponID");

        $validator = Validator::make(request()->all(), [
            'userShared' => 'required',
            'userReceived' => 'required',
            'couponID' => 'required',
        ]);

        if ($validator->fails()) {

            return [
                "status"=> 0,
                "message"=> $validator->errors()->first()
            ];
        } else {
            $transaction = new Transaction;

            $transaction->user_shared_id = $userShared;
            $transaction->user_received_id = $userReceived;
            $transaction->coupon_id = $couponID;
    
            $transaction->save();
    
            return [
                "status"=> 201,
                "message"=> "Transaction Created"
            ];
        }

    }
    public function findTransaction() {
        $userShared = request()->input("userShared");
        $userReceived = request()->input("userReceived");
        //$couponID = request()->input("couponId"); 
        
        if (Transaction::where('user_shared_id', $userShared)->
        where('user_received_id', $userReceived)
        // where('coupon_id', $couponID)
        ->first())
        {
            return [
                "status"=> 1,
                "message"=> "Transaction Found!"
            ];

        } else {
            return [
                "status"=> 0,
                "message"=> "Transaction not Found!"
            ];
        }
    }
}
