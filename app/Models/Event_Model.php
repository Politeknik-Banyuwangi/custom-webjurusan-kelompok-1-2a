<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event_Model extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'content', 'image', 'start_time','end_time','is_active'];

    protected $table = 'events';

}
