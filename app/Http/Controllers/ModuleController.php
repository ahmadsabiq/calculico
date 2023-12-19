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
            'name' => 'required',
            'tittle' => 'required',
            'level' => 'required',
            'question' => 'required',
            'attempt' => 'required',
        ]);
        $module = module::create($request->all());

        return new ModuleResource($module);
     }


     public function index()
     {

         $modul = module::paginate(15);
         return view("dashboard.report.index", compact("modul"));
     }

     public function search(Request $request)
        {
            $keyword = $request->input('keyword');

            // Perform the search query
            $modul = Module::where('name', 'LIKE', "%$keyword%")
                ->orWhere('tittle', 'LIKE', "%$keyword%")
                ->orWhere('level', 'LIKE', "%$keyword%")
                ->orWhere('question', 'LIKE', "%$keyword%")
                ->orWhere('attempt', 'LIKE', "%$keyword%")
                ->orWhere('created_at', 'LIKE', "%$keyword%")
                ->paginate(15); // Adjust the pagination as needed

            // Pass the search results to the view
            return view('dashboard.report.index', compact('modul'));
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
