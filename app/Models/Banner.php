<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\DB;

class Banner extends Model
{
    // use SoftDeletes;
    use HasFactory;
    protected $primaryKey = 'id_banner';
    protected $fillable = ['gambar_banner', 'keterangan'];
    protected $tabel = 'banners';

    public function get_banner()
    {
        $query = DB::table('banners')
            ->orderBy('id_banner', 'DESC')
            ->limit(3)
            ->get();
        return $query;
    }
}
