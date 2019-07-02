<?php

namespace App\Http\Controllers\Web\Auth;

use App\Http\Controllers\Controller;
use App\Mail\Welcome;
use App\Http\Models\User;
use App\Notifications\ResetPasswordEmailNotification;
use Illuminate\Http\Request;
use Illuminate\Notifications\Notification;
use Illuminate\Support\Facades\Password;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;

class ResetPasswordController extends Controller
{
    use SendsPasswordResetEmails;

    public function showLinkRequestForm()
    {
        return view('auth.reset.reset');
    }

//    public function sendResetLinkEmail(Request $request)
//    {
//        $user = User::where('email', $request['email'])->first();
//
//        $user->notify(new ResetPasswordEmailNotification($request->only('_token')));
//
//        return response()->json(['message' => 'Reset link sent to your email.', 'status' => true], 201);
//    }

    //returns Password broker of users
    public function broker()
    {
        return Password::broker('users');
    }
}
