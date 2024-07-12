<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Models\Armada;
use App\Models\JenisKendaraan;

class ArmadaController extends Controller
{
    public function index(){
        $list_armada = Armada::all();
        return view('armada.index', ['list_armada'=>$list_armada]);
    }

    public function create()
    {
        $list_jenis_kendaraan = JenisKendaraan::all();
        $armada = new Armada();
        return view('armada.form',['armada'=>$armada,'list_jenis_kendaraan'=>$list_jenis_kendaraan]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        // Validasi data inputan
        $request->validate([
            'merk' => 'required',
            'tahun_beli' => 'required',
            'deskripsi' => 'required',
            'kapasitas_kursi' => 'required',
            'rating' => 'required',
            'jenis_kendaraan_id' => 'required',
        ]);

        if($request->id){  
            Armada::find($request->id)->update($request->all());
            // Redirect to the index page with a success message
            return redirect(route('armada.index'))->with('pesan', 'Data berhasil diupdate');
        }
        else{
            // Create a new armada instance with the validated data
            Armada::create($request->all());
            // Redirect to the index page with a success message
            return redirect(route('armada.index'))->with('pesan', 'Data berhasil disimpan');
        }  
    }

    public function edit($id)
    {
        $armada = Armada::find($id);
        $list_jenis_kendaraan = JenisKendaraan::all();
        return view('armada.form',['armada'=>$armada,'list_jenis_kendaraan'=>$list_jenis_kendaraan]);
    }
    public function view($id)
    {
        $armada = Armada::find($id);
        return view('armada.view',['armada'=>$armada]);
    }
    public function destroy($id): RedirectResponse
    {
        Armada::find($id)->delete();
        return redirect(route('armada.index'))->with('pesan', 'Data berhasil dihapus');
    }
}
