<?php
//JUSh was here
namespace App\Http\Controllers;
use App\QRCode;

use Illuminate\Http\Request;

class QRCodeController extends Controller
{
        public function makeQRCode() {
        
        $qrcode = new QRCode;

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
    
    public function store(Request $request)
    {

        $this->validate($request, [
            'percentage' => 'required',
            'cap' => 'required',
        ]);

        $qrcode = new QRCode;
        $qrcode->percentage = $request->input('percentage');
        $qrcode->cap = 20;
        $qrcode->busID = 1;

        $qrcode->save();

        return redirect('/createcoupon')->with('success', 'Coupon Created');

    }

    public function getQRInfo()
    {
        $id = request()->input("id");
        $qrcode = QRCode::find($id);
        //return view('posts.show')->with('post', $post);
        return $qrcode;
    }

}
