<?php

namespace App\Http\Controllers;

use App\Models\user;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\ProfileUpdateRequest;



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
        $data = User::where('id', $id)->get();
        return view('admin.user.edit', ['users' => $data]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProfileUpdateRequest $request)
    {
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();

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
}
