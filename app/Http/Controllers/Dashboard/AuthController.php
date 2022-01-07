<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    } // end of login method

    public function attempt(Request $request)
    {
        $checkAuth = auth()->attempt(['email' => $request->email, 'password' => $request->password]);

        if (!$checkAuth) {
            session()->flash('error', 'Wrong data!');
            return redirect(route('dashboard.login'));
        }

        session()->flash('status', __('You have been logged in successfully!'));
        return redirect(route('dashboard.index'));
    } // end of attempt method
}
