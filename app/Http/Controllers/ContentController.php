<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Carousel;
use Illuminate\Http\Request;

class ContentController extends Controller
{
    protected function related_post($category, $id){
        $blog_related=Blog::find($id)
            ->where('category_name', $category)
            ->where('publication_status', 1)
            ->orderBy('id', 'ASC')
            ->get();
        return $blog_related;
    }

    public function index($category, $id)
    {
        $blog_related = $this->related_post($category, $id);

        $blog=Blog::find($id);
        return view('front-end.content.content',[
            'blog' =>$blog,
            'blog_related'=>$blog_related,
        ]);
    }
}
