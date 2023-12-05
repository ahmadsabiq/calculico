<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        if(Auth::id())
        {
            $usertype = Auth::user()->usertype;

            if($usertype == 'admin')
            {
                return view('admin.dashboard');
            }
            else if($usertype == 'user')
            {
                return view('dashboard.index');
            }
            else
            {
                return view('home');
            }
        }
    }

    public function homepage()
    {
        return view('home.homepage');
    }

    // public function user()
    // {
    //     $users = User::all();
    //     return view('admin.user',compact('users'));
    // }
}
