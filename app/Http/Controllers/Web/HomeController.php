<?php

namespace App\Http\Controllers\Web;

use App\Http\Models\User;
use Illuminate\Http\Request;
use Auth;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if (!Auth::check()) {
            return redirect('/login');
        } else {
            return view('admin');
        }
    }
}
