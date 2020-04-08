<?php

namespace App\Http\Controllers\Web\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Models\User;

//Class needed for login and Logout logic
use Illuminate\Foundation\Auth\AuthenticatesUsers;

//Auth facade
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;

class LoginController extends Controller
{

    use AuthenticatesUsers;
    protected $redirectTo = '/';
//    public function __construct()
//    {
////        $this->middleware('guest', ['except' => 'destroy']);
//    }

    /**
     * @return array|\Illuminate\Contracts\View\Factory|\Illuminate\View\View|mixed
     */
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function store(Request $request)
    {
        if (!auth('web')->attempt(request(['email', 'password']))) {
            return back()->withErrors([
                'message' => 'Please check your credentials and try again.'
            ])->withInput(Input::except('password'));
        } else {
            return redirect('/');
        }
    }

    protected function guard()
    {
        return Auth::guard('web');
    }

    public function destroy()
    {
        auth('web')->logout();
        return redirect('/login');
    }
}
