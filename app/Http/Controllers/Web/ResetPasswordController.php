<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Mail\Welcome;
use App\Models\User;
use App\Notifications\ResetPasswordEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;

class ResetPasswordController extends Controller
{
    use SendsPasswordResetEmails;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function index()
    {
        return view('sessions.reset');
    }

    public function postEmail(Request $request)
    {
        $user = User::where('email', $request['email'])->first();

        $user->notify(new ResetPasswordEmail($request->only('_token')));

        return response()->json(['message' => 'Reset link sent to your email.', 'status' => true], 201);
    }

    //returns Password broker of users
    public function broker()
    {
        return Password::broker('users');
    }
}
