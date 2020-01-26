<?php

namespace App\Http\Controllers;
use App\User;

use Illuminate\Http\Request;

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
}
