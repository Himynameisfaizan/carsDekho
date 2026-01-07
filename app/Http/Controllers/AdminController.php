<?php

namespace App\Http\Controllers;

use App\Models\Car_lead;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function admin()
    {
        $car = Car_lead::with('preferences')->orderBy('id', 'desc')->get();
        return view('admin.admin', ['car' => $car]);
    }

    public function showLogin()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->intended('/admin');
        }

        return back()->with('error', 'Email ya Password galat hai!');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}
