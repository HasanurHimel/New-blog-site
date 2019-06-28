<section id="newsSection">
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="latest_newsarea"> <span>Latest News</span>
                <ul id="ticker01" class="news_sticker">

                    @foreach($header_sections as $header_section)
                    <li><a href="#"><img src="{{ asset('/') }}front-end/images/news_thumbnail3.jpg" alt=""> {{ $header_section->latest_news }}</a></li>
                    @endforeach

                </ul>
                <div class="social_area">
                    <ul class="social_nav">
                        <li class="facebook"><a href="http://facebook.com/bd.hasanur" target="blank"></a></li>
                        <li class="twitter"><a href="https://twitter.com/HIMEL6854" target="blank"></a></li>
                        {{--<li class="github "><a href=""></a></li>--}}
                        <li class="pinterest"><a href="https://github.com/Himel-khan" target="blank"></a></li>
                        <li class="googleplus"><a href="#" ></a></li>
                        {{--<li class="linkedin "><a href=""></a></li>--}}
                        <li class="youtube"><a href="https://www.youtube.com" target="blank"></a></li>
                        <li class="mail"><a href="https://www.linkedin.com/in/md-himel-khan-5b94a8156/" target="blank"></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>