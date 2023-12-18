<?php

namespace App\Http\Controllers;

use App\Models\module;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Resources\ModuleResource;

class ModuleController extends Controller
{
    /**
     * Display a listing of the resource.
     */

     public function postData(Request $request)
     {
        $request->validate([
            'tittle' => 'required',
            'level' => 'required',
            'question' => 'required',
            'attempt' => 'required',
        ]);

        $request['user_id'] = auth()->user()->id;
        $module = module::create($request->all());

        return new ModuleResource($module);
     }


     public function index()
     {

         $modul = module::paginate(10);
         return view("dashboard.report.index", compact("modul"));
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
    public function destroy()
    {
        DB::table('modules')->delete();
        return redirect('/dashboard/laporan')->with('success', 'Laporan berhasil dihapus');
    }
}
