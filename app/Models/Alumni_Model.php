<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Alumni_Model extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $primaryKey = 'id_alumni';
    protected $fillable = ['id_alumni', 'gambar', 'nama_alumni', 'tempat_bekerja', 'link'];
    protected $table = 'alumni';
}
