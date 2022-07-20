<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Staff_Model extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_staff';
    protected $fillable = ['nama_staff', 'slug_staff', 'jabatan', 'gambar'];
    protected $table = 'staff';
}
