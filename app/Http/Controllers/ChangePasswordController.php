<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;


class ChangePasswordController extends Controller
{
    public function index()
    {
        return view('dashboard.change-password.index');
    }

    public function change(Request $request)
    {
        $request->validate([
            'current_password' => 'required',
            'password' => 'required|min:8|confirmed'
        ]);

        if (Hash::check($request->current_password, auth()->user()->password)) {
            auth()->user()->update([
                'password' => bcrypt($request->password)
            ]);
            return redirect('/dashboard/ganti-password')->with('success', 'Password berhasil diubah!');
        }
        else {
            return redirect('/dashboard/ganti-password')->with('error', 'Password gagal diubah! Password lama salah!');
        }
        
    }
}
