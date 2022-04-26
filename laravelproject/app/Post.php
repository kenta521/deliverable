<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    
    protected $fillable = [
    'title',
    'body',
    ];

    public function getBylimit(int $limit_count = 10)
    {
        return $this->orderBy('updated_at','DESC')->limit($limit_count)->get();
    }
//
}
