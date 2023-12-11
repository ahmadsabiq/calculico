<?php

namespace App\Http\Controllers;

use App\Models\user;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;
use Illuminate\Validation\Rules\Unique;




class AdminUserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = user::all();
        return view("admin.user.index", compact("users"));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin.user.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($user));

        return redirect('/dashboard/user')->with('success','User Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(user $user)
    {
        return view("admin.user.show", compact("user"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $user = User::where('id', $id)->get();
        return view('admin.user.edit', ['users' => $user]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $userId)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'usertype' => 'required',
        ]);

        DB::table('users')->where('id', $userId)->update([
            'name' => $request->name,
            'usertype' => $request->usertype,
        ]);

        return redirect('/dashboard/user')->with('success','User Berhasil Di Update');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        User::where('id', $request->id)->delete();

        return redirect("/dashboard/user")->with("success","User Berhasil Dihapus");

    }

    /**
     * Display a listing of the pending resource.
     */
    public function pending()
    {
        $pendingusers = User::where('usertype', 'pending')->get();

        return view('admin.user.pending', compact('pendingusers'));
        
    }
    
    public function updateAllPending()
    {
        $name = 'user';

        DB::table('users')
            ->where('usertype', '=', 'pending')
            ->update([
                'usertype' => $name
            ]);
            
            return redirect('/pendinguser')->with('success', 'All User role approved successfully.');
    }

    public function updatePending($userId)
    {
        $name = 'user';

        DB::table('users')
            ->where('id', $userId)
            ->where('usertype', '=', 'pending')
            ->update(['usertype' => $name]);

        return redirect('/pendinguser')->with('success', 'User role approved successfully.');
    }
}
