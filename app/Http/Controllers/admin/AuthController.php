<?php

namespace App\Http\Controllers\Admin;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
class AuthController extends Controller
{
    // Hàm index để chuyển hướng đên trang login view blade
    public function index()
    {
        return view('admin.auth.login');
    }
    // Tạo hàm login với tham số truyền vào là request 
    // Dùng validate() để kiểm tra email, password và thông báo lỗi khi đăng nhập

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
        // Ghi nhớ đăng nhập
        $remenber = $request->remember_token;
        // Dùng Auth::attempt xem email,password có trong table users k
        // Nếu có thì dùng session để lưu, ghi nhớ thông tin login
        // Sau đó chuyển hướng đến trang dasboard
        if (Auth::attempt($credentials, $remenber)) {
            $request->session()->regenerate();
            return redirect()->route('dashboard');
        }
        // Còn không sẽ báo lỗi 
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }
    // Hàm logout để đăng suất và chuyển hướng về trang login
    public function logout()
    {
       Auth::logout();
       return redirect()->route('login');
    }

}
