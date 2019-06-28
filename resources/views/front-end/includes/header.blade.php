<header id="header">
    <div class="row">

        <!--Top header start-->
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="header_top">
                <div class="header_top_left">
                    <ul class="top_nav">
                        <li><a href="{{ route('/') }}">Home</a></li>
                        <li><a href="#">About</a></li>
                    </ul>
                </div>
                <div class="header_top_right">
                    <h4>Himel</h4>
                </div>
            </div>
        </div>

        <!--top header end-->

        <!--middle header start -->

        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="header_bottom">
                @foreach($header_sections as $header_section)
                <div class="logo_area"><a href="{{ route('/') }}" class="logo"><img src="{{ asset($header_section->banner_photo) }}" alt=""></a></div>
               @endforeach
                <div class="add_banner"><a href="{{ route('/') }}"><img src="{{ asset('/') }}blog-photo/banner.jpg" alt=""></a></div>
            </div>
        </div>
    </div>
</header>