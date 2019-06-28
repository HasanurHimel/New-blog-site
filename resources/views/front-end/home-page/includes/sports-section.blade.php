<div class="single_post_content">
    <h2><span>sports</span></h2>
    <div class="single_post_content_left">
        <ul class="business_catgnav">
            @foreach($big_div_sports_section as $big_div_sports_section_part)
            <li>
                <figure class="bsbig_fig  wow fadeInDown"> <a class="featured_img" href="{{ route('content', ['category'=>$big_div_sports_section_part->category_name, 'id'=>$big_div_sports_section_part->id, 'title'=>$big_div_sports_section_part->blog_title]) }}"> <img src="{{ asset($big_div_sports_section_part->blog_image) }}" alt="" height="200px" width="400px"> <span class="overlay"></span> </a>
                    <figcaption> <a href="{{ route('content', ['category'=>$big_div_sports_section_part->category_name, 'id'=>$big_div_sports_section_part->id, 'title'=>$big_div_sports_section_part->blog_title]) }}"><span style="color: #bd2130; ">{{ $big_div_sports_section_part->blog_title }}</span></a> </figcaption>
                    <p>{{ $big_div_sports_section_part->blog_short_description }}</p>
                </figure>
            </li>
                @endforeach
        </ul>
    </div>
    <div class="single_post_content_right">
        <ul class="spost_nav">
            @foreach($small_div_sports_section as $small_div_sports_section_part)
            <li>
                <div class="media wow fadeInDown"> <a href="{{ route('content', ['category'=>$small_div_sports_section_part->category_name, 'id'=>$small_div_sports_section_part->id, 'title'=>$small_div_sports_section_part->blog_title]) }}" class="media-left"> <img alt="" src="{{ asset($small_div_sports_section_part->blog_image) }}"> </a>
                    <div class="media-body"> <a href="{{ route('content', ['category'=>$small_div_sports_section_part->category_name, 'id'=>$small_div_sports_section_part->id, 'title'=>$small_div_sports_section_part->blog_title]) }}" class="catg_title"> {{ $small_div_sports_section_part->blog_title }}</a> </div>
                </div>
            </li>
            @endforeach
        </ul>
    </div>
</div>