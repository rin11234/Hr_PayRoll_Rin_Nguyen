<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function index(){
        return view('dashboard.home');
    }
    public function login(){
        return view('dashboard.login');
    }
    public function register(){
        return view('dashboard.register');
    }
    public function postRegister(Request $request){
        // Merge một key mới vào request với mật khẩu đã được hash
        $request->merge(['password' => Hash::make($request->password)]);

        try {
            // Tạo mới người dùng với mật khẩu đã được hash
            User::create($request->all());
        } catch (\Throwable $th) {
            // Lấy thông báo lỗi từ ngoại lệ
            $errorMessage = $th->getMessage();
            // Trả về thông báo lỗi cụ thể cho người dùng
            return redirect()->back()->withInput()->with('error', 'Đã xảy ra lỗi khi đăng ký: ' . $errorMessage . '. Vui lòng thử lại sau.');
        }


        // Chuyển hướng sau khi đăng ký
        return redirect()->route('login');

    }
    public function postLogin(Request $request)
    {
        // Validate the request data
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        // Attempt to log in the user
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            // Get the authenticated user
            $user = Auth::user();

            // Check if the user has role = 0
            if ($user->role === 1) {
                return redirect()->route('index')->with('success', 'Đăng nhập thành công');
            } else {
                // Log out the user if the role is not 0
                Auth::logout();
                return redirect()->back()->with('error', 'Bạn đã nhập sai tên hoặc mật khẩu');
            }
        }

        // Return an error message if authentication fails
        return redirect()->back()->with('error', 'Đăng nhập thất bại');
    }
    public function logOut(){
        Auth::logout();
        return redirect()->route('login');
    }


}
