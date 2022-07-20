<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendaftaran_model extends Model
{
    use HasFactory;
    protected $guarded =  ['id'];
    protected $table = 'pendaftaran';
    protected $dates = ['deleted_at'];


    public function getRouteKeyName()
    {
        return 'token';
    }

    

}
