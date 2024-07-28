<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class Authcontroller extends Controller
{
    //
    public function index()
    {
        return view('login');
    }
    public function AuthUser(Request $request)
    {
        $username = $request->email;
        $password = ($request->password);
        $credentials = [
            'email' => $username,
            'password' => $password
        ];

        $u_pass = User::select("password")->where('email',$request->email)->get()->all();
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
    public function logout()
    {
        Auth::logout();

        return redirect('/');
    }
}
