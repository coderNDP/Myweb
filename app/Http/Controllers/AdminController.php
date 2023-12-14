<?php

namespace App\Http\Controllers;


use App\Models\Staff;
use Illuminate\Http\Request;


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
                'email' => 'required|email|exists:staffs',
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
    public function check_register(){
        request()->validate([
            'name' => 'required',
            'email' => 'required|email|unique:staffs',
            'password' => 'required',
            'rpt_password' => 'required|same:password'
    ]);
        $data = request()->all('email', 'name');
        $data['password'] = bcrypt(request('password'));
        dd($data);
        // Staff::create($data);
        // return redirect()->route('admin.login');
        
    }
}
