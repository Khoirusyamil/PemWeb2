<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Akses;

class AksesController extends Controller
{
    public function index(){
        $list_akses = Akses::all();
        return view('akses.index', ['list_akses'=>$list_akses]);
    }
}
