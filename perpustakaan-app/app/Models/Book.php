<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    protected $table = "books";
    protected $fillable = ['title','isbn','deskripsi','penulis','penerbit','cover_img','genres_id'];

    public $timestamps = false;

    public function genre()
    {
        return $this->belongsTo(Genre::class,'genres_id');
    }
}
