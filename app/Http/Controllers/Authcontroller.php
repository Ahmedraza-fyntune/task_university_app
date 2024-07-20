<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Authcontroller extends Controller
{
    //
    public function index()
    {
        return view('login');
    }
    public function AuthUser(Request $request)
    {
        $username = $request->username;
        $password = md5($request->password);
        $credentials = [
            'email'=> $username,
            'password' => $password
        ];
        if(Auth::attempt($credentials)){
            return response()->json([
                'status' => '200',
                'msg' => 'logged in'
            ]);
        }
        else
        {
            return response()->json([
                'status' => '404',
                'msg' => 'invald credentials'
            ]);
        }
    }
}
