<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Models\Armada;
use App\Models\Peminjaman;

class PeminjamanController extends Controller
{
    public function index(){
        $list_peminjaman = Peminjaman::all();
        return view('peminjaman.index', ['list_peminjaman'=>$list_peminjaman]);
    }

    public function create()
    {
        $list_armada = Armada::all();
        $peminjaman = new Peminjaman();
        return view('peminjaman.form',['peminjaman'=>$peminjaman,'list_armada'=>$list_armada]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        // Validasi data inputan
        $request->validate([
            'nama_peminjam' => 'required',
            'ktp_peminjam' => 'required',
            'keperluan_pinjam' => 'required',
            'mulai' => 'required',
            'selesai' => 'required',
            'biaya' => 'required',
            'komentar_peminjam' => 'required',
            'status_peminjam' => 'required',
            'armada_id' => 'required',
        ]);

        if($request->id){  
            Peminjaman::find($request->id)->update($request->all());
            // Redirect to the index page with a success message
            return redirect(route('peminjaman.index'))->with('pesan', 'Data berhasil diupdate');
        }
        else{
            // Create a new peminjaman instance with the validated data
            Peminjaman::create($request->all());
            // Redirect to the index page with a success message
            return redirect(route('peminjaman.index'))->with('pesan', 'Data berhasil disimpan');
        }  
    }

    public function edit($id)
    {
        $peminjaman = Peminjaman::find($id);
        $list_armada = Armada::all();
        return view('peminjaman.form',['peminjaman'=>$peminjaman,'list_armada'=>$list_armada]);
    }
    public function view($id)
    {
        $peminjaman = Peminjaman::find($id);
        return view('peminjaman.view',['peminjaman'=>$peminjaman]);
    }
    public function destroy($id): RedirectResponse
    {
        Peminjaman::find($id)->delete();
        return redirect(route('peminjaman.index'))->with('pesan', 'Data berhasil dihapus');
    }

}
