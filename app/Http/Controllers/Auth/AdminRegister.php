<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminRegister extends Controller
{
    public function AdminRegister()
    {
        return view('auth.admin_register');
    }

    public function AdminRegisterStore(Request $request)
    {
        $request->validate([
            'password' => 'required|confirmed|min:6',
        ]);
        $admin = Admin::insert([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>Hash::make($request->password)
        ]);
        return redirect()->route('admin.login');
    }
    public function LogoutAdmin(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('admin.login');
    }
}
