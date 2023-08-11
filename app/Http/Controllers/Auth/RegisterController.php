<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        if ($request->input('login_now')) {
            return redirect('/login');
        }
        
        $request->validate([
            'username' => 'required|unique:users',
            'email' => 'required|email|unique:users',
            'password' => [
                'required',
                'confirmed',
                'min:8',
                'regex:/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9]).{8,}$/',
                function ($attribute, $value, $fail) {
                    if (!preg_match('/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9]).{8,}$/', $value)) {
                        $fail('The password must be at least 8 characters long and contain at least one uppercase letter, one lowercase letter, and one number.');
                    }
                },
            ],
            'display_name' => 'required',
        ]);

        $user = new User;
        $user->username = $request->username;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->display_name = $request->display_name; 
        $user->save();

        return redirect('/login')->with('success', 'Your account has been created. Please log in.');
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'username' => ['required', 'string', 'max:255', Rule::unique('users')->message('This username has already been taken.')],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed', 'regex:/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9]).{8,}$/'],
            'display_name' => 'required',
        ]);
    }
}
