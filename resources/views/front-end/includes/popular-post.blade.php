<div class="single_sidebar">
    <h2><span>Popular Post</span></h2>
    <ul class="spost_nav">
        @foreach($exceptional_popular_post as $exceptional_popular_post_part)
        <li>
            <div class="media wow fadeInDown"> <a href="{{ route('content', ['category'=>$exceptional_popular_post_part->category_name, 'id'=>$exceptional_popular_post_part->id, 'title'=>$exceptional_popular_post_part->blog_title, 'category'=>$exceptional_popular_post_part->category_name ]) }}" class="media-left"> <img alt="" src="{{ asset($exceptional_popular_post_part->blog_image) }}"> </a>
                <div class="media-body"> <a href="{{ route('content', ['category'=>$exceptional_popular_post_part->category_name, 'id'=>$exceptional_popular_post_part->id, 'title'=>$exceptional_popular_post_part->blog_title, 'category'=>$exceptional_popular_post_part->category_name ]) }}" class="catg_title"> {{ $exceptional_popular_post_part->blog_title }}</a> </div>
            </div>
        </li>
        @endforeach
            @foreach($science_popular_post as $science_popular_post_part)
        <li>
            <div class="media wow fadeInDown"> <a href="{{ route('content', ['category'=>$science_popular_post_part->category_name, 'id'=>$science_popular_post_part->id, 'title'=>$science_popular_post_part->blog_title, 'category'=>$science_popular_post_part->category_name ]) }}" class="media-left"> <img alt="" src="{{ asset($science_popular_post_part->blog_image) }}"> </a>
                <div class="media-body"> <a href="{{ route('content', ['category'=>$science_popular_post_part->category_name, 'id'=>$science_popular_post_part->id, 'title'=>$science_popular_post_part->blog_title, 'category'=>$science_popular_post_part->category_name ]) }}" class="catg_title"> {{ $science_popular_post_part->blog_title }}</a> </div>
            </div>
        </li>
        @endforeach

            @foreach($technology_popular_post as $technology_popular_post_part)
        <li>
            <div class="media wow fadeInDown"> <a href="{{ route('content', ['category'=>$technology_popular_post_part->category_name, 'id'=>$technology_popular_post_part->id, 'title'=>$technology_popular_post_part->blog_title, 'category'=>$technology_popular_post_part->category_name ]) }}" class="media-left"> <img alt="" src="{{ asset($technology_popular_post_part->blog_image) }}"> </a>
                <div class="media-body"> <a href="{{ route('content', ['category'=>$technology_popular_post_part->category_name, 'id'=>$technology_popular_post_part->id, 'title'=>$technology_popular_post_part->blog_title, 'category'=>$technology_popular_post_part->category_name ]) }}" class="catg_title"> {{ $technology_popular_post_part->blog_title }}</a> </div>
            </div>
        </li>
        @endforeach
            @foreach($sports_popular_post as $sports_popular_post_part)
        <li>
            <div class="media wow fadeInDown"> <a href="{{ route('content', ['category'=>$sports_popular_post_part->category_name, 'id'=>$sports_popular_post_part->id, 'title'=>$sports_popular_post_part->blog_title, 'category'=>$sports_popular_post_part->category_name ]) }}" class="media-left"> <img alt="" src="{{ asset($sports_popular_post_part->blog_image) }}"> </a>
                <div class="media-body"> <a href="{{ route('content', ['category'=>$sports_popular_post_part->category_name, 'id'=>$sports_popular_post_part->id, 'title'=>$sports_popular_post_part->blog_title, 'category'=>$sports_popular_post_part->category_name ]) }}" class="catg_title"> {{ $sports_popular_post_part->blog_title }}</a> </div>
            </div>
        </li>
        @endforeach

    </ul>
</div>