<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Models\Paramedik;
use App\Models\Unit_kerja;

class ParamedikController extends Controller
{
    //
    public function index(){
        $list_paramedik = Paramedik::all();
        return view('paramedik.index', ['list_paramedik'=>$list_paramedik]);
    }
    
    public function create()
    {
        $list_unit_kerja = Unit_kerja::all();
        $paramedik = new Paramedik();
        return view('paramedik.form',['paramedik'=>$paramedik,'list_unit_kerja'=>$list_unit_kerja]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        // Validasi data inputan
        $request->validate([
            'nama' => 'required',
            'gender' => 'required',
            'tmp_lahir' => 'required',
            'tgl_lahir' => 'required',
            'kategori' => 'required',
            'telpon' => 'required',
            'alamat' => 'required',
            'unit_kerja_id' => 'required',
        ]);

        if($request->id){  
            Paramedik::find($request->id)->update($request->all());
            // Redirect to the index page with a success message
            return redirect(route('paramedik.index'))->with('pesan', 'Data berhasil diupdate');
        }
        else{
            // Create a new Pasien instance with the validated data
            Paramedik::create($request->all());
            // Redirect to the index page with a success message
            return redirect(route('paramedik.index'))->with('pesan', 'Data berhasil disimpan');
        }  
    }

    public function edit($id)
    {
        $paramedik = Paramedik::find($id);
        $list_unit_kerja = Unit_kerja::all();
        return view('paramedik.form',['paramedik'=>$paramedik,'list_unit_kerja'=>$list_unit_kerja]);
    }
    public function view($id)
    {
        $paramedik = Paramedik::find($id);
        return view('paramedik.view',['paramedik'=>$paramedik]);
    }
    public function destroy($id): RedirectResponse
    {
        Paramedik::find($id)->delete();
        return redirect(route('paramedik.index'))->with('pesan', 'Data berhasil dihapus');
    }
}
