<?php

namespace App\Http\Controllers\Admin;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
class AuthController extends Controller
{
     /**
     * index.
     * 
     * @return auth.login
     */
    public function index()
    {
        return view('admin.auth.login');
    }

      /**
     * login.
     * 
     * @param Request $request
     * 
     * @return dashboard
     */
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
        // Ghi nhớ đăng nhập
        $remenber = $request->remember_token;
        /**
         * Dùng Auth::attempt xem email,password có trong table users k
         *  Nếu có thì dùng session để lưu, ghi nhớ thông tin login
         * Sau đó chuyển hướng đến trang dasboard
         */
        if (Auth::attempt($credentials, $remenber)) {
            $request->session()->regenerate();
            return redirect()->route('dashboard');
        }
        // Còn không sẽ trả về back và hiển thị lỗi email
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

   
    /**
     * edit.
     * 
     * @return login
     */
    public function logout()
    {
       Auth::logout();
       return redirect()->route('login');
    }

}
