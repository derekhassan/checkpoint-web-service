<?php

namespace App\Http\Controllers;
use App\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class LoginAPIController extends Controller
{
    //handles login
    public function postLogin() {
        $email = request()->input("email");
        $password = request()->input("password");

        $md5_password = md5($password);

        if (User::where('email', $email)->where('password', $md5_password)->first())
        {

            $user = User::where("email", $email)->first();

            return [
                "status"=> 1,
                "message"=> $user->id
            ];

        } else {
            return [
                "status"=> 0,
                "message"=> "Login was unsuccessful"
            ];
        }
    }

    public function makeAccount() {
        
        $user = new User;

        $user->name = "John";
        $user->email = "test@email.com";
        $user->password = md5("password");

        $user->save();

    }

    public function postSignup() {
        $name = request()->input("name");
        $email = request()->input("email");
        $password = request()->input("password");
        $md5_password = md5($password);

        $validator = Validator::make(request()->all(), [
            'name' => 'required',
            'email' => 'required|unique:users',
            'password' => 'required',
        ]);

        if ($validator->fails()) {

            return [
                "status"=> 0,
                "message"=> $validator->errors()->first()
            ];

        } else {
            //Create new user
            $user = new User;

            $user->name = $name;
            $user->email = $email;
            $user->password = $md5_password;

            $user->save();

            return [
                "status"=> 1,
                "message"=> $user->id
            ];

        }   
    }

}
