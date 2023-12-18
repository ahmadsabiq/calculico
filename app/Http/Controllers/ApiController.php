<?php

namespace App\Http\Controllers;

use App\Models\user;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ApiController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $user = User::where('email', $credentials['email'])->first();

        if (!$user) {
            return response()->json(['error' => 'Invalid credentials'], 401);
        }
        $user->password = bcrypt($credentials['password']);
        $user->save();
        $token = $user->createToken('user login')->plainTextToken;
        return response()->json(['token' => $token]);

        // if (Auth::attempt($credentials)) {
        //     $user = Auth::user();
        //     $token = $user->createToken('user login')->plainTextToken;

        //     return response()->json(['token' => $token]);
        // }

        // return response()->json(['error' => 'Invalid credentials'], 401);
    }
    
    public function logout(Request $request)
    {
        $request->user()->currentAccessToken()->delete();
        return response()->json(['message' => 'logout success']);
    }
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(user $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, user $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(user $user)
    {
        //
    }
}
