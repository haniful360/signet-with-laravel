<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * Create
     */
    public function create()
    {
        return view('admin.auth.login');
    }
    /**
     * Create
     */
    public function store(LoginRequest  $request)
    {
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            
            return redirect()->route('admin.dashboard');
        } else {
            return redirect()->route('login')->withErrors(['Invalid Email and password']);
        }
    }

    /**
     * Logout
     */
    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
