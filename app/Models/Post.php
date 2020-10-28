<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $hidden = [];
    protected $with = ['user'];

    protected $fillable = [
        'title',
        'preview',
        'content',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
