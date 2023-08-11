<?php
namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $users = User::all();
        return view('users.index_user', compact('users'));
    }

    public function updatePassword(Request $request)
    {
        $request->validate([
            'current_password' => ['required', function ($attribute, $value, $fail) {
                if (!\Hash::check($value, Auth::user()->password)) {
                    $fail(__('The current password is incorrect.'));
                }
            }],
            'new_password' => ['required', 'min:8', 'confirmed'],
        ]);

        Auth::user()->update([
            'password' => \Hash::make($request->input('new_password')),
        ]);

        return redirect()->route('home')->with('success', 'Password has been updated.');
    }        
}



