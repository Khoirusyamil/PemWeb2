<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Models\JenisKendaraan;

class JenisKendaraanController extends Controller
{
    public function index(){
        $list_jenis_kendaraan = JenisKendaraan::all();
        return view('jenis_kendaraan.index', ['list_jenis_kendaraan'=>$list_jenis_kendaraan]);
    }

    public function create()
    {
        $jenis_kendaraan = new JenisKendaraan();
        return view('jenis_kendaraan.form',['jenis_kendaraan'=>$jenis_kendaraan]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        // Validasi data inputan
        $request->validate([
            'nama' => 'required'
        ]);

        if($request->id){  
            JenisKendaraan::find($request->id)->update($request->all());
            // Redirect to the index page with a success message
            return redirect(route('jenis_kendaraan.index'))->with('pesan', 'Data berhasil diupdate');
        }
        else{
            // Create a new jenis_kendaraan instance with the validated data
           JenisKendaraan::create($request->all());
            // Redirect to the index page with a success message
            return redirect(route('jenis_kendaraan.index'))->with('pesan', 'Data berhasil disimpan');
        }  
    }

    public function edit($id)
    {
        $jenis_kendaraan = JenisKendaraan::find($id);
        return view('jenis_kendaraan.form',['jenis_kendaraan'=>$jenis_kendaraan]);
    }
    public function view($id)
    {
        $jenis_kendaraan = JenisKendaraan::find($id);
        return view('jenis_kendaraan.view',['jenis_kendaraan'=>$jenis_kendaraan]);
    }
    public function destroy($id): RedirectResponse
    {
        JenisKendaraan::find($id)->delete();
        return redirect(route('jenis_kendaraan.index'))->with('pesan', 'Data berhasil dihapus');
    }
}
