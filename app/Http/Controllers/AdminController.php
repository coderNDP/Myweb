<?php

namespace App\Http\Controllers;



use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class AdminController extends Controller
{
    public function index(){
        return view('admin.index');
    }
    public function login(){
        return view('admin.login');
    }
    public function check_login(){
        request()->validate([
                'email' => 'required|email|exists:users',
                'password' => 'required'
        ]);
        $data = request()->all('email', 'password');
        if(auth()->attempt($data)){
            return redirect()->route('admin.index');
        }
        return redirect()->back();
        
    }
    public function register(){
        return view('admin.register');
    }
    public function check_register(Request $request){
    $request->validate([
        'name' => 'required',
        'email' => 'required|email|unique:users',
        'password' => 'required',
        'confirm_password' => 'required|same:password'
]);
    $data = $request->except('_token', 'confirm_password');
    $data['password'] = bcrypt($request->input('password'));

    DB::table('users')->insert($data);
    return redirect()->route('admin.login');
    }
}
