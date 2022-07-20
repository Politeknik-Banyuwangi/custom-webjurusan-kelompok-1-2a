<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berita_Model extends Model
{
    use HasFactory;
    protected $fillable = ['judul_berita', 'slug_berita', 'isi', 'user_id', 'publish', 'gambar'];

    protected $table = 'berita';
}
