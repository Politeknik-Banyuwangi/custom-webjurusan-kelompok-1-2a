<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Motivasi extends Model
{
    use HasFactory;
    use SoftDeletes;
    public $table ='motivasi';

    protected $fillable = ['name','qutes','filepond'];


}
