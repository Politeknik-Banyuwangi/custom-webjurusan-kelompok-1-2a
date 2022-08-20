<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cooperation_Model extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'logo', 'region', 'address','link','is_industries'];

    protected $table = 'cooperations';
}
