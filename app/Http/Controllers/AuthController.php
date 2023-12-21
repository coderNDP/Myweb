<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $email = $request->input('email');
        $password = $request->input('password');

        $user = DB::table('customer')
            ->where('email', $email)
            ->first();

        if ($user && Hash::check($password, $user->password)) {
            session(['user_id' => $user->id, 'username' => $user->username]);
            return redirect()->route('index');
        } else {
            return "Tài khoản không tồn tại. <a style='color:red' href='register'>Đăng ký tại đây</a>";
        }
    }
}