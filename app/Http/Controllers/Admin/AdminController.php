<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function adminDashboard()
    {
        return view('admin.index');
    }

    public function adminLogin()
    {
        return view('admin.login');
    }

    public function adminLogout(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return view('admin.login');
    }

    public function loginAction(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            
            if ($user->role === 'admin' || $user->role === 'super_admin') {
                $request->session()->regenerate();
                return redirect()->route('admin.dashboard')->with('success', 'Welcome back ' . $user->name);
            }
            
            // If user is not admin/super_admin, logout and redirect back
            Auth::logout();
            return redirect()->back()->with('error', 'Unauthorized access. This portal is for administrators only.');
        }

        return redirect()->back()->with('error', 'Invalid credentials.');
    }

    public function showCategories()
    {
        return view('admin.products.categories');
    }

    public function addCategories()
    {
        return view('admin.products.add-categories');
    }

    public function storeCategories()
    {
        return view('admin.products.add-categories');
    }

    

    

}
