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
            'login' => 'required | string | min: 4 | max: 16',
            'password' => 'required | string | min: 4 | max: 16',
        ]);

//        $errors = $validator->errors()->getMessages();

//        foreach ($errors as $field => $messages) {
//            foreach ($messages as $message) {
//                echo "Поле: $field - Ошибка: $message <br>";
//            }
//        }

//        count() - how many $errors
//        if(count($errors)) return back()->with($errors);

        if($validator->fails())
            return back()->withErrors($validator->errors());

        $login = $request->input("login");
        $password = $request->input("password");

        $data = User::where("name", $login)
            ->first();

        if(!$data)
            return back()->with("authentication", "User not found");

//        if(!$data) {
//            echo "Пользователь не найден";
//            return;
//        }

        if(!Hash::check($password, $data->password))
            return back()->with("authentication", "Invalid password");

        return back();

//        return back();
    }
}
