<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Archive_Model extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'users_id', 'description', 'type','status','content'];

    protected $table = 'archives';
}
