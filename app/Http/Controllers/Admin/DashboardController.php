<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $admin = Auth::guard('admin')->user();
        return view('admin.dashboard.dashboard');
        // echo "Welcome". $admin->name. '<a href="'.route('admin.logout').'">Logout</a>';
    }
    public function logout(){
        Auth::guard('admin')->logout();
        return redirect()->route('admin.login.login');
    }
}
