<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Periksa extends Model
{
    use HasFactory;

    protected $table = 'periksa';
    protected $fillable = ['id', 'tanggal', 'berat', 'tinggi', 'tensi', 'keterangan','pasien_id', 'paramedik_id'];

    //disable created_at and updated_at field
    public $timestamps = false;

    public function pasien(){
        return $this->belongsTo(Pasien::class); //belongsTo -> one to many
    }

    public function paramedik(){
        return $this->belongsTo(Paramedik::class); //belongsTo -> one to many
    }
}
