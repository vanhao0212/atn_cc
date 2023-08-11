<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

public function login(Request $request)
{
    $login_type = filter_var($request->input('username'), FILTER_VALIDATE_EMAIL ) ? 'email' : 'username';
    $request->merge([$login_type => $request->input('username')]);

    $credentials = $request->only($login_type, 'password');

    if (Auth::attempt($credentials)) {
        // Authentication passed...
        return redirect()->route('index')->with('success', 'You have successfully logged in.');
    }

    return redirect()->back()->withErrors([
        'message' => 'Incorrect account or password.',
    ]);
}

public function amnhac()
{
    return view('amnhac');
}

public function logout(Request $request)
{
    Auth::logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();
    

    return redirect('/index');
}

protected function redirectTo()
{
    return route('index');
}

public function username()
{
    return 'username';
}

}
