<?php

namespace App\Http\Controllers;
use App\Blog;
use Illuminate\Http\Request;

class CategoryContentController extends Controller
{
    public function category_content($category){
        $category_blog=Blog::where('category_name', $category)
            ->where('category_name', $category)
//            ->where('publication_status', 1)
            ->orderBy('id', 'ASC')
            ->get();
        return view('front-end.content.category-content',['category_blog'=>$category_blog]);
    }
}
