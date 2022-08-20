<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KritikSaran extends Model
{
    use HasFactory;
    protected $fillable = ['users_id', 'nm_kritik', 'nm_saran'];

    protected $table = 'kritik_saran';
}
