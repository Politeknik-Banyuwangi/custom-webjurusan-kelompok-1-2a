<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Institusi_modal extends Model
{
    use HasFactory;

    protected $table = 'profile_kampus';
    protected $dates = ['deleted_at'];

    public function get_logo()
    {
        $site_config = DB::table('profile_kampus')->first();
        return $site_config;
    }
}
