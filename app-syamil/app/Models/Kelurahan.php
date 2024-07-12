<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelurahan extends Model
{
    use HasFactory;
    
    protected $table = 'kelurahan';
    protected $fillable = ['id', 'nama'];

    //disable created_at and updated_at field
    public $timestamps = false;
}
