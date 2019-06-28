<div class="col-lg-8 col-md-8 col-sm-8">
    <div class="slick_slider">

       @foreach($carousel_section as $carousel_section_part)
        <div class="single_iteam"> <a href="{{ route('carousel-content', ['id'=>$carousel_section_part->id]) }}"> <img src="{{ asset($carousel_section_part->carousel_image) }}" alt="" height="200px" width="400px" ></a>
            <div class="slider_article">
                <h2><a class="slider_tittle" href="{{ route('carousel-content', ['id'=>$carousel_section_part->id]) }}"></a></h2>
                <p>{{ $carousel_section_part->carousel_short_description }}</p>
            </div>
        </div>
       @endforeach
    </div>
</div>