<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event_Model extends Model
{
    use HasFactory;

    protected $fillable = ['title','slug', 'content','user_id','publish_at','start_time','end_time', 'image'];

    protected $table = 'events';

}
