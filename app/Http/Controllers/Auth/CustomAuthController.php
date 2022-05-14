<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\OfferRequest;
use Illuminate\Http\Request;
use App\Models\Admin;
use Auth;


class CustomAuthController extends Controller
{
    //
    public function adult(){
        return view('customAuth.index');
    }

    public function site(){
        return view('site');

    }
    public function admin(){
    return view('admin');

    }

    public function adminlogin(){
        return view('auth.adminLogin');
    }
    public function Adminlog(){
        return redirect()->intended('/admin/login');

    }


    public function checkAdminLogin(Request $request)
    {
        $request->validate([
            'email'   => 'required|email',
            'password' => 'required|min:6'
        ]);

        if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password])) {

            return redirect()->intended('/Admin');
        }
        return back()->withInput($request->only('email'));
    }


}

