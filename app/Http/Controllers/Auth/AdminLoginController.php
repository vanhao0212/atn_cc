<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AdminLoginController extends Controller
{
    public function showAdminLoginForm()
    {
        return view('auth.adminlogin');
    }

//     public function login(Request $request)
// {
//     $credentials = $request->only('username', 'password');

//     if (Auth::attempt($credentials)) {
//         // Authentication passed...
        
//         return redirect()->route('index')->with('success', 'You have successfully logged in.');
//     }

//     return redirect()->back()->withErrors([
//         'username' => 'Incorrect account or password',
//     ]);
// }

public function adminlogin(Request $request)
{
    $login_type = filter_var($request->input('username'), FILTER_VALIDATE_EMAIL ) ? 'email' : 'username';
    $request->merge([$login_type => $request->input('username')]);

    $credentials = $request->only($login_type, 'password');

    if (Auth::attempt($credentials)) {
        $user = Auth::user();
        if ($user->role != 'admin') { // Kiểm tra role của user
            Auth::logout();
            return redirect()->back()->withErrors([
                'message' => 'Bạn không có quyền truy cập trang admin.',
            ]);
        }
        // Authentication passed...
        return redirect()->route('dashboard')->with('success', 'You have successfully logged in.');
    }

    return redirect()->back()->withErrors([
        'message' => 'Incorrect account or password.',
    ]);
}


public function amnhac()
{
    return view('amnhac');
}



protected function redirectTo()
{
    return route('dashboard');
}


    public function username()
{
    return 'username';
}




}
