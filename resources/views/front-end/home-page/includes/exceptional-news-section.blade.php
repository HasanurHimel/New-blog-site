<div class="single_post_content">
    <h2><span>Exceptional news</span></h2>
    <div class="single_post_content_left">
        <ul class="business_catgnav  wow fadeInDown">
            @foreach($big_div_exceptional_news as $big_div_exceptional_news_part)
            <li>
                <figure class="bsbig_fig"> <a href="{{ route('content', ['category'=>$big_div_exceptional_news_part->category_name, 'id'=>$big_div_exceptional_news_part->id, 'title'=>$big_div_exceptional_news_part->blog_title]) }}" class="featured_img"> <img alt="" src="{{ asset($big_div_exceptional_news_part->blog_image) }}" alt="" height="200px" width="400px"> <span class="overlay"></span> </a>
                    <figcaption> <a href="{{ route('content',['category'=>$big_div_exceptional_news_part->category_name, 'id'=>$big_div_exceptional_news_part->id, 'title'=>$big_div_exceptional_news_part->blog_title]) }}"><span style="color: #bd2130;">{!! $big_div_exceptional_news_part->blog_title !!}</span></a> </figcaption>
                    <p>{!! $big_div_exceptional_news_part->blog_short_description !!}</p>
                </figure>
            </li>
             @endforeach
        </ul>
    </div>
    <div class="single_post_content_right">
        <ul class="spost_nav">
            @foreach($small_div_exceptional_news as $small_div_exceptional_news_part)
            <li>
                <div class="media wow fadeInDown"> <a href="{{ route('content', ['category'=>$small_div_exceptional_news_part->category_name, 'id'=>$small_div_exceptional_news_part->id, 'title'=>$small_div_exceptional_news_part->blog_title]) }}" class="media-left"> <img alt="" src="{{ asset($small_div_exceptional_news_part->blog_image) }}"> </a>
                    <div class="media-body"> <a href="{{ route('content', ['category'=>$small_div_exceptional_news_part->category_name, 'id'=>$small_div_exceptional_news_part->id, 'title'=>$small_div_exceptional_news_part->blog_title]) }}" class="catg_title">{!! $small_div_exceptional_news_part->blog_title !!}</a> </div>
                </div>
            </li>
            @endforeach

        </ul>
    </div>
</div>