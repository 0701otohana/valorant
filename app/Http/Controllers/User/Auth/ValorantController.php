<?php

namespace App\Http\Controllers\User\Auth;

use Illuminate\Http\Request;
use App\Models\Admin;
use App\Http\Controllers\Controller;
use Laravel\Fortify\Http\Controllers\AuthenticatedSessionController as BaseController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Password;

class ValorantController extends Controller
{
    public function Adminmain() {
        if(!auth()->check()){
            return redirect('admin/Adminlogin');
        }
        return view('Auth.Adminmain');
    }

    public function signup() {
        return view('Auth.signup');
    }

    public function complete() {
        return view('Auth.complete');
    }

    public function foget() {
        return view('Auth.foget');
    }

    public function ResetPassword() {
        return view('Auth.ResetPassword');
    }

    public function EntryForm() {
        if(!auth()->check()){
            return redirect('login');
        }
        return view('Auth.EntryForm');
    }

    public function Entrycheck(){

    }

}
