<?php

namespace App\Http\Controllers;
use App\Blog;
use App\Carousel;
use App\category;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    protected function big_div_exceptional_news(){
        $big_div_exceptional_news = Blog::where('category_name', 'Exceptional news')
            ->where('publication_status', 1)
            ->orderBy('id', 'DESC')
            ->take(1)
            ->get();
        return $big_div_exceptional_news;
    }
    protected function small_div_exceptional_news(){
        $small_div_exceptional_news = Blog::where('category_name', 'Exceptional news')
            ->where('publication_status', 1)
            ->orderBy('id', 'DESC')
            ->skip(1)
            ->take(4)
            ->get();
        return $small_div_exceptional_news;
    }
    protected function big_div_science_section(){
        $big_div_science_section = Blog::where('category_name', 'Science')
            ->where('publication_status', 1)
            ->orderBy('id', 'DESC')
            ->take(1)
            ->get();
        return $big_div_science_section;
    }
    protected function small_div_science_section(){
        $small_div_science_section = Blog::where('category_name', 'Science')
            ->where('publication_status', 1)
            ->orderBy('id', 'DESC')
            ->skip(1)
            ->take(4)
            ->get();
        return $small_div_science_section;
    }
    protected function big_div_technology_section(){
        $big_div_technology_section = Blog::where('category_name', 'Technology')
            ->where('publication_status', 1)
            ->orderBy('id', 'DESC')
            ->take(1)
            ->get();
        return $big_div_technology_section;
    }
    protected function small_div_technology_section(){
        $small_div_technology_section = Blog::where('category_name', 'Technology')
            ->where('publication_status', 1)
            ->orderBy('id', 'DESC')
            ->skip(1)
            ->take(4)
            ->get();
        return $small_div_technology_section;
    }
    protected function big_div_sports_section(){
        $big_div_sports_section = Blog::where('category_name', 'Sports')
            ->where('publication_status', 1)
            ->orderBy('id', 'DESC')
            ->take(1)
            ->get();
        return $big_div_sports_section;
    }
    protected function small_div_sports_section(){
        $small_div_sports_section = Blog::where('category_name', 'Sports')
            ->where('publication_status', 1)
            ->orderBy('id', 'DESC')
            ->skip(1)
            ->take(4)
            ->get();
        return $small_div_sports_section;
    }
    protected function carousel_section(){
        $carousel_section = Carousel::where('publication_status', 1)
            ->orderBy('id', 'DESC')
            ->take(6)
            ->get();
        return $carousel_section;
    }

    public function home(){
        $big_div_exceptional_news=$this->big_div_exceptional_news();
        $small_div_exceptional_news=$this->small_div_exceptional_news();
        $big_div_science_section=$this->big_div_science_section();
        $small_div_science_section=$this->small_div_science_section();
        $big_div_technology_section=$this->big_div_technology_section();
        $small_div_technology_section=$this->small_div_technology_section();
        $big_div_sports_section=$this->big_div_sports_section();
        $small_div_sports_section=$this->small_div_sports_section();
        $carousel_section=$this->carousel_section();
        return view('front-end.home-page.home',[
            'big_div_exceptional_news'=>$big_div_exceptional_news,
            'small_div_exceptional_news'=>$small_div_exceptional_news,
            'big_div_science_section'=>$big_div_science_section,
            'small_div_science_section'=>$small_div_science_section,
            'big_div_technology_section'=>$big_div_technology_section,
            'small_div_technology_section'=>$small_div_technology_section,
            'big_div_sports_section'=>$big_div_sports_section,
            'small_div_sports_section'=>$small_div_sports_section,
            'carousel_section'=>$carousel_section,


        ]);    }
}
