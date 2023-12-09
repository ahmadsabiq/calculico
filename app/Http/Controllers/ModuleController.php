<?php

namespace App\Http\Controllers;

use App\Models\module;
use Illuminate\Http\Request;

class ModuleController extends Controller
{
    /**
     * Display a listing of the resource.
     */

     public function postData(Request $request)
     {
         // Ensure the request is from an authenticated user
         $user = auth()->user();
 
         // Process the Unity data
         $data = $request->json()->all();

            $module = module::create([
                'user_id' => $user->id,
                'name' => $data['name'],
                'tittle' => $data['tittle'],
                'level' => $data['level'],
                'question' => $data['question'],
                'attempt' => $data['attempt'],
            ]);
            
            $module->save();
 
        //  // Update the user data
        //  $user->update([
        //      'score' => $data['score'],
        //      // Add other fields as needed
        //  ]);
 
         return response()->json(['message' => 'Data received and processed successfully']);
     }


     public function index()
     {
         $users = module::all();
         return view("dashboard.report.index", compact("users"));
     }


     public function lampu()
     {
        return view("dashboard.module.lampu.index");
     }

     public function belanja()
     {
        return view("dashboard.module.belanja.index");
     }

     public function sepatu()
     {
        return view("dashboard.module.sepatu.index");
     }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
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
    public function show(module $module)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(module $module)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, module $module)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(module $module)
    {
        //
    }
}
