<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog_model extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'slug', 'excerpt', 'body', 'category_id', 'User_id'];
    protected $table = 'blog';

    public function categori(){
        return $this->belongsTo(Categori_model::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
