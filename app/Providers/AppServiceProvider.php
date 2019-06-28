<?php

namespace App\Providers;
use Illuminate\Support\Facades\Schema;
use App\category;
use App\Carousel;
use App\Blog;
use App\Header_section;
use App\Gk_category;
use App\Gk;
use View;
use DB;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
//                    Latest post section start

    protected function exceptional_latest_post(){
        $exceptional_latest_post = Blog::where('category_name', 'Exceptional news')
            ->where('publication_status', 1)
            ->orderBy('id', 'DESC')
            ->take(1)
            ->get();
        return $exceptional_latest_post;
    }
    protected function science_latest_post(){
        $science_latest_post = Blog::where('category_name', 'Science')
            ->where('publication_status', 1)
            ->orderBy('id', 'DESC')
            ->take(1)
            ->get();
        return $science_latest_post;
    }
    protected function technology_latest_post(){
        $technology_latest_post = Blog::where('category_name', 'Technology')
            ->where('publication_status', 1)
            ->orderBy('id', 'DESC')
            ->take(1)
            ->get();
        return $technology_latest_post;
    }
    protected function sports_latest_post(){
        $sports_latest_post = Blog::where('category_name', 'Sports')
            ->where('publication_status', 1)
            ->orderBy('id', 'DESC')
            ->take(1)
            ->get();
        return $sports_latest_post;
    }
    protected function carousel_latest_post(){
        $carousel_latest_post = Carousel::where('publication_status', 1)
            ->orderBy('id', 'DESC')
            ->take(1)
            ->get();
        return $carousel_latest_post;
    }
//                                   Latest post section close

//                                 popular section start

    protected function exceptional_popular_post(){
        $exceptional_popular_post = Blog::where('category_name', 'Exceptional news')
            ->where('publication_status', 1)
            ->orderBy('id', 'ASC')
            ->take(1)
            ->get();
        return $exceptional_popular_post;
    }
    protected function science_popular_post(){
        $science_popular_post = Blog::where('category_name', 'Science')
            ->where('publication_status', 1)
            ->orderBy('id', 'ASC')
            ->take(1)
            ->get();
        return $science_popular_post;
    }
    protected function technology_popular_post(){
        $technology_popular_post = Blog::where('category_name', 'Technology')
            ->where('publication_status', 1)
            ->orderBy('id', 'ASC')
            ->take(1)
            ->get();
        return $technology_popular_post;
    }
    protected function sports_popular_post(){
        $sports_popular_post = Blog::where('category_name', 'Sports')
            ->where('publication_status', 1)
            ->orderBy('id', 'ASC')
            ->take(1)
            ->get();
        return $sports_popular_post;
    }
//                                popular section close


   protected function gk_bangladesh_content(){
       $gk_bangladesh_content=Gk::where('publication_status', 1)
          ->where('gk_category', 'Bangladesh')
           ->orderBy('id', 'DESC')
           ->get();
        return $gk_bangladesh_content;
   }
   protected function gk_international_content(){
       $gk_international_content=Gk::where('publication_status', 1)
          ->where('gk_category', 'International')
           ->orderBy('id', 'DESC')
           ->get();
        return $gk_international_content;
   }
   protected function gk_iq_content(){
       $gk_iq_content=Gk::where('publication_status', 1)
          ->where('gk_category', 'Iq')
           ->orderBy('id', 'DESC')
           ->get();
        return $gk_iq_content;
   }



    public function boot()
    {

        Schema::defaultStringLength(191);
        view::share('categories', category::where('publication_status', 1)->get());
        view::share('Gkcategories', Gk_category::where('publication_status', 1)->get());
        view::share('header_sections', Header_section::where('publication_status', 1)->orderBy('id', 'DESC')->take(1)->get());
        view::composer('front-end.home-page.includes.latest-post', function($view){
            $view->with('exceptional_latest_post', $this->exceptional_latest_post())
                ->with('science_latest_post', $this->science_latest_post())
                ->with('technology_latest_post', $this->technology_latest_post())
                ->with('sports_latest_post', $this->sports_latest_post())
                ->with('carousel_latest_post', $this->carousel_latest_post()
                 );
        });
        view::composer('front-end.includes.popular-post', function($view){
            $view->with('exceptional_popular_post', $this->exceptional_popular_post())
                ->with('science_popular_post', $this->science_popular_post())
                ->with('technology_popular_post', $this->technology_popular_post())
                ->with('sports_popular_post', $this->sports_popular_post()
                 );
        });
       view::composer('front-end.master', function($view){
            $view->with('gk_bang_content', $this->gk_bangladesh_content())
                 ->with('gk_inter_content', $this->gk_international_content())
                 ->with('gk_iq_content', $this->gk_iq_content()
                 );
        });

       }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
