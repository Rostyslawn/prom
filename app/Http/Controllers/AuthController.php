<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Testing\Fluent\Concerns\Has;

class AuthController extends Controller
{
    public function auth(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'login' => 'required | string | min: 4 | max: 24',
            'password' => 'required | string | min: 4 | max: 16',
        ]);

        if($validator->fails())
            return response()->json(["errorValidator" => $validator->errors()]);

        $phone = $request->input("login");
        $password = $request->input("password");

        $data = User::where("phone_number", $phone)
            ->first();

        if(!$data || !Hash::check($password, $data->password))
            return response()->json(["error" => "Invalid phone number or password"]);

        session()->put("user", $data);
        return response()->json(["message" => "Login successful"]);
    }
}
