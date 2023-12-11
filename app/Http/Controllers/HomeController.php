<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        //
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
