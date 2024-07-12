<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Models\Pembayaran;
use App\Models\Peminjaman;

class PembayaranController extends Controller
{
    public function index(){
        $list_pembayaran = Pembayaran::all();
        return view('pembayaran.index', ['list_pembayaran'=>$list_pembayaran]);
    }

    public function create()
    {
        $list_peminjaman = Peminjaman::all();
        $pembayaran = new Pembayaran();
        return view('pembayaran.form',['pembayaran'=>$pembayaran,'list_peminjaman'=>$list_peminjaman]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        // Validasi data inputan
        $request->validate([
            'tanggal' => 'required',
            'jumlah_bayar' => 'required',
            'peminjaman_id' => 'required',
        ]);

        if($request->id){  
            Pembayaran::find($request->id)->update($request->all());
            // Redirect to the index page with a success message
            return redirect(route('pembayaran.index'))->with('pesan', 'Data berhasil diupdate');
        }
        else{
            // Create a new pembayaran instance with the validated data
           Pembayaran::create($request->all());
            // Redirect to the index page with a success message
            return redirect(route('pembayaran.index'))->with('pesan', 'Data berhasil disimpan');
        }  
    }

    public function edit($id)
    {
        $pembayaran = Pembayaran::find($id);
        $list_peminjaman = Peminjaman::all();
        return view('pembayaran.form',['pembayaran'=>$pembayaran,'list_peminjaman'=>$list_peminjaman]);
    }
    public function view($id)
    {
        $pembayaran = Pembayaran::find($id);
        return view('pembayaran.view',['pembayaran'=>$pembayaran]);
    }
    public function destroy($id): RedirectResponse
    {
        Pembayaran::find($id)->delete();
        return redirect(route('pembayaran.index'))->with('pesan', 'Data berhasil dihapus');
    }
}
