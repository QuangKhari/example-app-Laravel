<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function SignIn()
    {
        return view('signin');
    }

    public function CheckSignIn(Request $request)
    {
        $username = $request->input('username');
        $password = $request->input('password');
        $repass = $request->input('repass');
        $mssv = $request->input('mssv');
        $lopmonhoc = $request->input('lopmonhoc');
        $gioitinh = $request->input('gioitinh');

        // Check if password matches repass
        if ($password !== $repass) {
            return "Đăng Ký thất bại";
        }

        // Check if all fields match the example
        if ($username === 'QuangKhari' && $password === '123abc' && $mssv === '26867' && $lopmonhoc === '66PM' && $gioitinh === 'nam') {
            return "Đăng Ký thành công";
        } else {
            return "Đăng Ký thất bại";
        }
    }
    public function showAge()
    {
        return view('age');
    }

    public function saveAge(Request $request)
    {
        $age = $request->input('age');

        // Validate tuổi
        if (!$age || $age < 0 || $age > 150) {
            return "Tuổi không hợp lệ";
        }

        // Lưu tuổi vào session
        session(['age' => $age]);

        return redirect('/age');
    }
}