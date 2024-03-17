<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LogoffController extends Controller
{
    public function logoff()
    {
        if(!session("user")) return response()->json(["error" => "You are not logged in"]);

        $userId = session("user")->id;

        session()->flush();

        return response()->json(["message" => "You were deauthorized"]);
    }
}
