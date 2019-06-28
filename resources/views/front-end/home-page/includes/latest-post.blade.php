<div class="col-lg-4 col-md-4 col-sm-4">
    <div class="latest_post">
        <h2><span>Latest post</span></h2>
        <div class="latest_post_container">
            <div id="prev-button"><i class="fa fa-chevron-up"></i></div>
            <ul class="latest_postnav">
                @foreach($exceptional_latest_post as $exceptional_latest_post_part)
                <li>
                    <div class="media"> <a href="{{ route('content', ['category'=>$exceptional_latest_post_part->category_name, 'id'=>$exceptional_latest_post_part->id, 'title'=>$exceptional_latest_post_part->blog_title]) }}" class="media-left"> <img alt="" src="{{ asset($exceptional_latest_post_part->blog_image) }}"> </a>
                        <div class="media-body"> <a href="{{ route('content', ['category'=>$exceptional_latest_post_part->category_name, 'id'=>$exceptional_latest_post_part->id, 'title'=>$exceptional_latest_post_part->blog_title]) }}" class="catg_title"> {{ $exceptional_latest_post_part->blog_title }}</a> </div>
                    </div>
                </li>
                @endforeach
                @foreach($science_latest_post as $science_latest_post_part)
                <li>
                    <div class="media"> <a href="{{ route('content', ['category'=>$science_latest_post_part->category_name, 'id'=>$science_latest_post_part->id, 'title'=>$science_latest_post_part->blog_title]) }}" class="media-left"> <img alt="" src="{{ asset($science_latest_post_part->blog_image) }}"> </a>
                        <div class="media-body"> <a href="{{ route('content', ['category'=>$science_latest_post_part->category_name, 'id'=>$science_latest_post_part->id, 'title'=>$science_latest_post_part->blog_title]) }}" class="catg_title"> {{ $science_latest_post_part->blog_title }}</a> </div>
                    </div>
                </li>
                    @endforeach
                    @foreach($technology_latest_post as $technology_latest_post_part)
                <li>
                    <div class="media"> <a href="{{ route('content', ['category'=>$technology_latest_post_part->category_name, 'id'=>$technology_latest_post_part->id, 'title'=>$technology_latest_post_part->blog_title]) }}" class="media-left"> <img alt="" src="{{ asset($technology_latest_post_part->blog_image) }}"> </a>
                        <div class="media-body"> <a href="{{ route('content', ['category'=>$technology_latest_post_part->category_name, 'id'=>$technology_latest_post_part->id, 'title'=>$technology_latest_post_part->blog_title]) }}" class="catg_title"> {{ $technology_latest_post_part->blog_title }}</a> </div>
                    </div>
                </li>
                    @endforeach
                    @foreach($sports_latest_post as $sports_latest_post_part)
                <li>
                    <div class="media"> <a href="{{ route('content', ['category'=>$sports_latest_post_part->category_name, 'id'=>$sports_latest_post_part->id, 'title'=>$sports_latest_post_part->blog_title]) }}" class="media-left"> <img alt="" src="{{ asset($sports_latest_post_part->blog_image) }}"> </a>
                        <div class="media-body"> <a href="{{ route('content', ['category'=>$sports_latest_post_part->category_name, 'id'=>$sports_latest_post_part->id, 'title'=>$sports_latest_post_part->blog_title]) }}" class="catg_title">{{ $sports_latest_post_part->blog_title }}</a> </div>
                    </div>
                </li>
                    @endforeach
                    @foreach($carousel_latest_post as $carousel_latest_post_part)
                <li>
                    <div class="media"> <a href="{{ route('carousel-content', ['id'=>$carousel_latest_post_part->id]) }}" class="media-left"> <img alt="" src="{{ asset($carousel_latest_post_part->carousel_image) }}"> </a>
                        <div class="media-body"> <a href="{{ route('carousel-content', ['id'=>$carousel_latest_post_part->id ]) }}" class="catg_title"> {{ $carousel_latest_post_part->carousel_short_description }}</a> </div>
                    </div>
                </li>
                        @endforeach
            </ul>
            <div id="next-button"><i class="fa  fa-chevron-down"></i></div>
        </div>
    </div>
</div>