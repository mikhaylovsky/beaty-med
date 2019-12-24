<?php

namespace App\Http\Controllers\Web\Auth;

use App\Mail\Welcome;
use App\Http\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;

//Validator facade used in validator method
use Illuminate\Support\Facades\Validator;

use Auth;

class RegistrationController extends Controller
{
//    use RegistersUsers;

    public function showRegistrationForm()
    {
        return view('auth.registration.create');
    }

    public function store(Request $request)
    {
        $this->validate(request(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);

        $user = User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
        ]);

        auth()->login($user);

//        \Mail::to($user)->send(new Welcome($user));

        return redirect('/login');
    }

    protected function guard()
    {
        return Auth::guard('web');
    }
}