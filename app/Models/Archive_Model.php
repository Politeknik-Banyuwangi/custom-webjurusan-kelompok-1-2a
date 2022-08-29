<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\DB;

class Archive_Model extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['name', 'slug', 'description', 'view', 'tgl_publish', 'user_id', 'file'];
    protected $table = 'archives';
    protected $dates = ['deleted_at'];

    public function get_archive()
    {
        $query = DB::table('archives')
            ->orderBy('id', 'DESC')
            ->limit(4)
            ->get();
        return $query;
    }

    public function all_archive()
    {
        $query1 = DB::table('archives')
            ->orderBy('id', 'desc')
            ->get();
        return $query1;
    }
    public function get_tanggal()
    {
        $query1 = DB::table('archives')
            ->select('tgl_publish')
            ->get();
        return $query1;
    }

}
