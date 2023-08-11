<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;



class HomeController extends Controller
{
    public function index()
    {
        $user = auth()->user(); // lấy thông tin người dùng đã đăng nhập
        return view('index', compact('user'));
    
    }

    public function indexx()

    {
    
    $products = Product::all();
    $user = auth()->user();
    return view('index', compact("products", "user"));
    
    }

    public function login()
    {
        return view('auth.login');
    }

    public function register()
    {
        return view('auth.register');
    }

    public function adminlogin()
    {
        return view('auth.adminlogin');
    }

    public function dashboard()
    {
        $user = auth()->user(); // lấy thông tin người dùng đã đăng nhập
        return view('dashboard', compact('user'));
    }

}