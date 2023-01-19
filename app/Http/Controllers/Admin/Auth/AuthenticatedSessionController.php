<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Kernel;

class AuthenticatedSessionController extends Controller
{
    public function create()
    {
        return view('auth.Adminlogin');
    }

    public function store(LoginRequest $request)
    {
        $request->authenticate();

        $request->session()->regenerate();

        return redirect(RouteServiceProvider::ADMIN_HOME);
    }

    public function destroy(Request $request)
    {
        Auth::guard('admins')->logout();

        //$request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}