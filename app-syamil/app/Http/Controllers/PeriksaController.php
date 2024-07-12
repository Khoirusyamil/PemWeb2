<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Models\Periksa;
use App\Models\Pasien;
use App\Models\Paramedik;

class PeriksaController extends Controller
{
    public function index(){
        $list_periksa = Periksa::all();
        return view('periksa.index', ['list_periksa'=>$list_periksa]);
    }

    public function create()
    {
        $list_pasien = Pasien::all();
        $list_paramedik = Paramedik::all();
        $periksa = new Periksa();
        return view('periksa.form',['periksa'=>$periksa,'list_pasien'=>$list_pasien,'list_paramedik'=>$list_paramedik]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        // Validasi data inputan
        $request->validate([
            'tanggal' => 'required', 
            'berat' => 'required', 
            'tinggi' => 'required', 
            'tensi' => 'required', 
            'keterangan' => 'required',
            'pasien_id' => 'required', 
            'paramedik_id' => 'required',
        ]);

        if($request->id){  
            Periksa::find($request->id)->update($request->all());
            // Redirect to the index page with a success message
            return redirect(route('periksa.index'))->with('pesan', 'Data berhasil diupdate');
        }
        else{
            // Create a new Pasien instance with the validated data
            Periksa::create($request->all());
            // Redirect to the index page with a success message
            return redirect(route('periksa.index'))->with('pesan', 'Data berhasil disimpan');
        }  
    }

    public function edit($id)
    {
        $periksa = Periksa::find($id);
        $list_pasien = Pasien::all();
        $list_paramedik = Paramedik::all();
        return view('periksa.form',['periksa'=>$periksa,'list_pasien'=>$list_pasien,'list_paramedik'=>$list_paramedik]);
    }
    public function view($id)
    {
        $periksa = Periksa::find($id);
        return view('periksa.view',['periksa'=>$periksa]);
    }
    public function destroy($id): RedirectResponse
    {
        Periksa::find($id)->delete();
        return redirect(route('periksa.index'))->with('pesan', 'Data berhasil dihapus');
    }
}
