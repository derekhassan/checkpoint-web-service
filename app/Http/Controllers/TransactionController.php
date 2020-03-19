<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Transaction;

class TransactionController extends Controller
{
    public function createTransaction() {
        
        $userShared = request()->input("userShared");
        $userReceived = request()->input("userReceived");
        $qrID = request()->input("qrID");

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
