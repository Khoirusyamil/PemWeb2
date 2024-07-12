<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Armada extends Model
{
    use HasFactory;

    protected $table = 'armada';
    protected $fillable = ['id', 'merk', 'tahun_beli', 'deskripsi', 'kapasitas_kursi', 'rating', 'jenis_kendaraan_id'];

    public $timestamps = false;

    public function jenis_kendaraan(){
        return $this->belongsTo(JenisKendaraan::class); //belongsTo -> one to many
    }
}
