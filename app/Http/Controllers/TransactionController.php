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
        $qrID = request()->input("qrID");

        $validator = Validator::make(request()->all(), [
            'userShared' => 'required',
            'userReceived' => 'required',
            'qrID' => 'required',
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
            $transaction->qr_id = $qrID;
    
            $transaction->save();
    
            return [
                "status"=> 201,
                "message"=> "Transaction Created"
            ];
        }

    }
}
