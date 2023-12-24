<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class RegController extends Controller
{
    public function reg(Request $request)
    {
        $validator = Validator::make($request->all(), [
            "name" => "required | string | min: 2",
            "surname" => "required | string | min: 2",
            "password" => "required | string | min: 4",
            "number" => "required | string"
        ]);

        if($validator->fails())
            return back()->withErrors($validator->errors());

        $name = $request->input("name");
        $surname = $request->input("surname");
        $password = $request->input("password");
        $phone_number = $request->input("number");

        $user = new User();
        $user->username = $name;
        $user->surname = $surname;
        $user->password = $password;
        $user->phone_number = $phone_number;
        $user->save();

        return back();

//        dd($name, $surname, $phone_number);
    }
}
