<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Models\Kelurahan;

class KelurahanController extends Controller
{
    public function index(){
        $list_kelurahan = Kelurahan::all();
        return view('kelurahan.index', ['list_kelurahan'=>$list_kelurahan]);
    }

    public function create()
    {
        $kelurahan = new Kelurahan();
        return view('kelurahan.form',['kelurahan'=>$kelurahan]);
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
            Kelurahan::find($request->id)->update($request->all());
            // Redirect to the index page with a success message
            return redirect(route('kelurahan.index'))->with('pesan', 'Data berhasil diupdate');
        }
        else{
            // Create a new Kelurahan instance with the validated data
            Kelurahan::create($request->all());
            // Redirect to the index page with a success message
            return redirect(route('kelurahan.index'))->with('pesan', 'Data berhasil disimpan');
        }  
    }

    public function edit($id)
    {
        $kelurahan = Kelurahan::find($id);
        return view('kelurahan.form',['kelurahan'=>$kelurahan]);
    }
    public function view($id)
    {
        $kelurahan = Kelurahan::find($id);
        return view('kelurahan.view',['kelurahan'=>$kelurahan]);
    }
    public function destroy($id): RedirectResponse
    {
        Kelurahan::find($id)->delete();
        return redirect(route('kelurahan.index'))->with('pesan', 'Data berhasil dihapus');
    }
}
