<?php

namespace App\Http\Controllers\Web\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ResetsPasswords;

//Auth Facade
use Illuminate\Support\Facades\Auth;

//Password Broker Facade
use Illuminate\Support\Facades\Password;


class ResetFormController extends Controller
{
    protected $redirectTo = '/';

    //trait for handling reset Password
    use ResetsPasswords;

    //Show form to seller where they can save new password
    public function showResetForm(Request $request, $token = null)
    {
        return view('auth.reset.resetForm')->with(
            ['token' => $token, 'email' => 'alex.guravlev1988@gmail.com']
        );
    }

    //returns Password broker of users
    public function broker()
    {
        return Password::broker('users');
    }

    //returns authentication guard of seller
    protected function guard()
    {
        return Auth::guard('web');
    }
}