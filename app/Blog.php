<?php

namespace App;


use Illuminate\Database\Eloquent\Model;
//use App\category;

class Blog extends Model
{

    protected $fillable=[
        'category_name',
        'blog_title',
        'blog_short_description',
        'blog_long_description',
        'blog_image',
        'publication_status'
    ];

//    public function category(){
//
//        return $this->belongsTo(category::class);
//    }

}
