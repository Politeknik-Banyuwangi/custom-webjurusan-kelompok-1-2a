<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categori_model extends Model
{
    use HasFactory;

    protected $guarded =['id'];

    protected $table = 'categori';
}
