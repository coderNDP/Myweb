<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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
    public function upload(Request $request){
        $product = Product::all();
        return view('admin.upload', compact('product'));
    }
    public function check_upload(Request $request){
        
        if($request->has('file_upload')){
            $file = $request->file_upload;
            $file_name = $file->getClientoriginalName();
            $file->move(public_path('upload'), $file_name);
        }
        $request->merge(['name_image' => $file_name]);
        $request->validate([
            'name_image' => 'required',
            'id_product' => 'required',
        ]);
        $data = $request->all('name_image', 'id_product');
        DB::table('image')->insert($data);

        return redirect()->route('admin.product.index');
    }
    public function change_pass(){
        $user = Auth::user();
        return view('admin.change_pass', compact('user'));
    }
    public function check_pass(Request $request, User $user){
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'password' => 'required', // Old password
            'new_pass' => 'required|min:6', // New password
        ]);

        $data = [
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('new_pass')),
        ];
      
        $user = Auth::user();

        // Kiểm tra mật khẩu cũ
        if (!Hash::check($request->input('password'), $user->password)) {
            return redirect()->back()->with('error', 'Mật khẩu cũ không đúng');
        }
        $user->fill($data)->save();
        

        return redirect()->route('admin.index')->with('success', 'Thông tin và mật khẩu đã được cập nhật thành công');
    }
    public function logout()
    {
        Auth::logout();

        return redirect('/admin/login'); // Chuyển hướng sau khi đăng xuất
    }
    }

