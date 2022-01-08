<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard.index');
    } // end of index method

    public function logout()
    {
        auth()->guard('admins')->logout();
        session()->flash('status', 'You have been logged out successfully!');
        return redirect(route('dashboard.login'));
    } // end of logout method

    public function profile()
    {
        $user = auth()->guard('admins')->user();
        return view('dashboard.users.profile', compact('user'));
    } // end of profile method

    public function updateProfile(Request $request)
    {
        $user = User::find(auth()->guard('admins')->user()->id);
        $data = $request->validate([
            'name' => 'required|string|max:80',
            'email' => ['required', 'email', Rule::unique('users', 'email')->ignore($user->id, 'id')],
            'password' => 'nullable|confirmed|min:6',
            'current_password' => [
                'nullable',
                function ($attribute, $value, $fail) use ($user) {
                    if (!Hash::check($value, $user->password)) {
                        $fail('Invalid Password!');
                    }
                }

            ],
        ]);

        $data['password'] = isset($request->password) ? bcrypt($request->password) : $user->password;
        $oldPassword = $user->password;

        $user->update($data);
        session()->flash('status', 'Data has been updated successfully!');

        // if password update redirect to login
        if ($user->password !== $oldPassword) {
            auth()->guard('admins')->logout();
            return redirect(route('dashboard.login'));
        } else {
            return redirect(route('dashboard.index'));
        }
    } // end of update profile method
}
