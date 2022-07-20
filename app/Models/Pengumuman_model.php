<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\DB;

class Pengumuman_model extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['judul_pengumuman', 'isi', 'slug_pengumuman', 'view', 'tgl_publish', 'user_id', 'file'];
    protected $table = 'pengumuman';
    protected $dates = ['deleted_at'];

    public function get_pengemumuman()
    {
        $query = DB::table('pengumuman')
            ->orderBy('id', 'DESC')
            ->limit(4)
            ->get();
        return $query;
    }

    public function all_pengumuma()
    {
        $query1 = DB::table('pengumuman')
            ->orderBy('id', 'desc')
            ->get();
        return $query1;
    }
    public function get_tanggal()
    {
        $query1 = DB::table('pengumuman')
            ->select('tgl_publish')
            ->get();
        return $query1;
    }
}
