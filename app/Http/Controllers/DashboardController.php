<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Report;

class DashboardController extends Controller
{

    public function index()
    {
        $usertype = auth()->user()->usertype;
        if($usertype == 'admin')
        {
            return view('admin.dashboard');
        }
        else if($usertype == 'user')
        {
            return view('dashboard.index');
        }
        else if($usertype == 'pending')
        {
            return view('home.homepage');
        }
        else
        {
            return view('home.homepage');
        }
    }
    
    public function module()
    {
        return view('dashboard.module.index');
    }

    public function change(){
        return view('dashboard.change-password.index');
    }
}
