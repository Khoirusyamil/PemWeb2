<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Models\Unit_kerja;

class UnitKerjaController extends Controller
{
    public function index(){
        $list_unit_kerja = unit_kerja::all();
        return view('unit_kerja.index', ['list_unit_kerja'=>$list_unit_kerja]);
    }

    public function create()
    {
        $unit_kerja = new Unit_kerja();
        return view('unit_kerja.form',['unit_kerja'=>$unit_kerja]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        // Validasi data inputan
        $request->validate([
            'nama' => 'required',
        ]);

        if($request->id){  
            Unit_kerja::find($request->id)->update($request->all());
            // Redirect to the index page with a success message
            return redirect(route('unit_kerja.index'))->with('pesan', 'Data berhasil diupdate');
        }
        else{
            // Create a new Unit_kerja instance with the validated data
            Unit_kerja::create($request->all());
            // Redirect to the index page with a success message
            return redirect(route('unit_kerja.index'))->with('pesan', 'Data berhasil disimpan');
        }  
    }

    public function edit($id)
    {
        $unit_kerja = Unit_kerja::find($id);
        return view('unit_kerja.form',['unit_kerja'=>$unit_kerja]);
    }
    public function view($id)
    {
        $unit_kerja = Unit_kerja::find($id);
        return view('unit_kerja.view',['unit_kerja'=>$unit_kerja]);
    }
    public function destroy($id): RedirectResponse
    {
        Unit_kerja::find($id)->delete();
        return redirect(route('unit_kerja.index'))->with('pesan', 'Data berhasil dihapus');
    }
}
