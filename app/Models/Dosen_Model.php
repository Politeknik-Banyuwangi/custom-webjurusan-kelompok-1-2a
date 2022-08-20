<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dosen_Model extends Model
{
    use HasFactory;
    protected $fillable = ['nip', 'name', 'image', 'description', 'publish'];

    protected $table = 'dosens';
}
