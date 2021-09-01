<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    const SECOND_POST_COMMENT = 2;
    const THIRD_POST_COMMENT = 3;
    const FIFTH_POST_COMMENT =5;

    protected $fillable = ['message','post_id'];

    public function post(){
        return $this->belongsTo(Post::class);
    }
}
