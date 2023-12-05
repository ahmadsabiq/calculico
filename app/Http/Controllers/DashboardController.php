<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Report;

class DashboardController extends Controller
{
    public function module()
    {
        return view('dashboard.module.index');
    }

    public function report(){
        $player = Report::all();
        return view('dashboard.report.index',compact('player'));
    }

    public function materi(){
        return view('dashboard.module.materi.index');
    }

    public function change(){
        return view('dashboard.change-password.index');
    }
}
