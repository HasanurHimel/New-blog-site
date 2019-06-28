<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{

    public function carousel(){
        return $this->belongsTo('App\Carousel');
    }
}
