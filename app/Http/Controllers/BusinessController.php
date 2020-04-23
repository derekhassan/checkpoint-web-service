<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Business;
class BusinessController extends Controller
{
    public function createBusiness() {
        
        $businessName = request()->input("businessName");
        $address = request()->input("address");
        $city = request()->input("city");
        $zipcode = request()->input("zipcode");
        $state = request()->input("state");

        $validator = Validator::make(request()->all(), [
            'businessName' => 'required',
            'address' => 'required',
            'city' => 'required',
            'zipcode' => 'required',
            'state' => 'required'
        ]);

        if ($validator->fails()) {

            return [
                "status"=> 0,
                "message"=> $validator->errors()->first()
            ];
        } else {
            $business = new Business;

            $business->business_name = $businessName;
            $business->address = $address;
            $business->city = $city;
            $business->zipcode = $zipcode;
            $business->state = $state;
        
            $business->save();
    
            return [
                "status"=> 201,
                "message"=> "Business Created"
            ];
        }

    }

    public function store(Request $request) //done through website
    {

        $this->validate($request, [
            'business_name' => 'required',
            'address' => 'required',
            'city' => 'required',
            'zipcode' => 'required',
            'state' => 'required',
        ]);

        $business = new Business;
        $business->business_name = $request->input('business_name');
        $business->address = $request->input('address');
        $business->city = $request->input('city');
        $business->zipcode = $request->input('zipcode');
        $business->state = $request->input('state');

        $business->save();

        return redirect('/business')->with('success', 'Business Created');

    }

    public function index() {
        $businesses = Business::get()->sortBy('created_at');
        return view('businesses.index')->with('businesses', $businesses);
    }

    public function destroy($id) {
        $business = Business::find($id);
        $business->delete();
        return redirect('/business')->with('success', 'Business Deleted');
    }

    public function edit($id) {
        $business = Business::find($id);
        return view('businesses.edit')->with('business', $business);
    }

    public function update(Request $request, $id) {

        $this->validate($request, [
            'business_name' => 'required',
            'address' => 'required',
            'city' => 'required',
            'zipcode' => 'required',
            'state' => 'required',
        ]);

        $business = Business::find($id);
        $business->business_name = $request->input('business_name');
        $business->address = $request->input('address');
        $business->city = $request->input('city');
        $business->zipcode = $request->input('zipcode');
        $business->state = $request->input('state');

        $business->save();

        return redirect('/business')->with('success', 'Business Updated');
    }

    public function find($id) {
        $business = Business::find($id);
        return with('business', $business);
    }

}
