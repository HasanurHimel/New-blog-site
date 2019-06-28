<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}front-end/assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}front-end/assets/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}front-end/assets/css/animate.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}front-end/assets/css/font.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}front-end/assets/css/li-scroller.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}front-end/assets/css/slick.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}front-end/assets/css/jquery.fancybox.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}front-end/assets/css/theme.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}front-end/assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}front-end/assets/css/stylesheet.css">
    <script src="{{ asset('/') }}front-end/assets/js/html5shiv.min.js"></script>
    <script src="{{ asset('/') }}front-end/assets/js/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div id="preloader">
    <div id="status">&nbsp;</div>
</div>
<a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
<div class="container">

    {{--header section--}}

        @include('front-end.includes.header')

    <!-- header close-->


    <!--main menu bar start-->
    @include('front-end.includes.main-menu')
    <!--main menu bar close-->


    <!--running news start-->
    @include('front-end.includes.running-news')
    <!--running news close-->


    <!--carousel start-->
   @yield('carousel-and-latest-post')
    <!--latest post close-->




    <section id="contentSection">
        <div class="row">





     @yield('content')





            <div class="col-lg-3 col-md-3 col-sm-3">
                <aside class="right_content">

                    <!--popular post section start-->
              @include('front-end.includes.popular-post')
                   <!--popular post section close-->


<!--category , video , comments div start-->
                    <div class="single_sidebar wow fadeInDown">
                        <h2><span>সাধারন জ্ঞান</span></h2></div>
                    <div class="single_sidebar">
                        {{--class="nav nav-tabs"--}}
                        <ul  role="tablist">
                            <li role="presentation" class="active"><a href="#category" aria-controls="home" role="tab" data-toggle="tab">
                                    <div class="single_sidebar wow fadeInDown">
                                        <h2><span>বাংলাদেশ <span class="fa fa-arrow-down"></span></span></div></h2>
                                </a></li>


                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane active" id="category">
                                    <ul>
                                        @foreach($gk_bang_content as $gk_bang_content_part)
                                            <li ><a href="{{ route('gk-content', ['id'=>$gk_bang_content_part->id, 'title'=>$gk_bang_content_part->gk_title]) }}"><span style="color: #0a8ec4" class="fa fa-arrow-right "> {{ $gk_bang_content_part->gk_title }}</span></a></li>
                                        @endforeach
                                    </ul>
                                </div>
                                <br/>



                            <li role="presentation" ><a href="#video" aria-controls="profile" role="tab" data-toggle="tab">
                                    <div class="single_sidebar wow fadeInDown">
                                        <h2><span>আন্তর্জাতিক <span class="fa fa-arrow-down"></span></span></h2></div>
                                </a></li>

                                <div role="tabpanel" class="tab-pane" id="video">
                                    <ul>
                                        @foreach($gk_inter_content as $gk_inter_content_part)
                                            <li ><a href="{{ route('gk-content', ['id'=>$gk_inter_content_part->id, 'title'=>$gk_inter_content_part->gk_title]) }}"><span style="color: #0a8ec4" class="fa fa-arrow-right "> {{ $gk_inter_content_part->gk_title }}</span></a></li>
                                        @endforeach
                                    </ul>
                                </div>


                                <br/>

                            <li role="presentation" ><a href="#comments" aria-controls="messages" role="tab" data-toggle="tab">
                                    <div class="single_sidebar wow fadeInDown">
                                        <h2><span>মানসিক দক্ষতা <span class="fa fa-arrow-down"></span></span></h2></div>
                                </a></li>

                                <div role="tabpanel" class="tab-pane" id="comments" class="single_sidebar wow fadeInDown">
                                    {{--<ul class="spost_nav">--}}
                                        <ul>
                                            @foreach($gk_iq_content as $gk_iq_content_part)
                                                <li ><a href="{{ route('gk-content', ['id'=>$gk_iq_content_part->id, 'title'=>$gk_iq_content_part->gk_title]) }}"><span style="color: #0a8ec4" class="fa fa-arrow-right "> {{ $gk_iq_content_part->gk_title }}</span></a></li>
                                            @endforeach
                                        </ul>

                                    {{--</ul>--}}
                                </div>
                            </div>
                        </ul>

                        </div>




<!--category , video , comments div close-->



<!--sponser section start-->
<div class="single_sidebar wow fadeInDown">
 <h2><span>Auther</span></h2>
 <a class="sideAdd" href="#"><img src="{{ asset('/') }}blog-photo/himel.jpg" alt="himel"></a> </div>
<!--sponser section close-->

<!--category archive section start-->
<div class="single_sidebar wow fadeInDown">
 <h2><span>Category Archive</span></h2>
 <select class="catgArchive">
     @foreach($categories as $category)
    <option>{{ $category->category_name }}<</option>
     @endforeach

 </select>
</div>
<!--category archive section close-->

<!--link section start-->
<div class="single_sidebar wow fadeInDown">
 <h2><span>Links</span></h2>
 <ul>
     @foreach($categories as $category)
         <li><a href="{{ route('category_content', ['category'=>$category->category_name, 'id'=>$category->id]) }}">{{ $category->category_name }}</a></li>
     @endforeach
 </ul>
</div>
<!--link section close-->


</aside>
</div>
</div>
</section>


<!--footer section start-->

@include('front-end.includes.footer-section')
    {{--footer section close--}}

</div>
<script src="{{ asset('/') }}front-end/assets/js/jquery.min.js"></script>
<script src="{{ asset('/') }}front-end/assets/js/wow.min.js"></script>
<script src="{{ asset('/') }}front-end/assets/js/bootstrap.min.js"></script>
<script src="{{ asset('/') }}front-end/assets/js/slick.min.js"></script>
<script src="{{ asset('/') }}front-end/assets/js/jquery.li-scroller.1.0.js"></script>
<script src="{{ asset('/') }}front-end/assets/js/jquery.newsTicker.min.js"></script>
<script src="{{ asset('/') }}front-end/assets/js/jquery.fancybox.pack.js"></script>
<script src="{{ asset('/') }}front-end/assets/js/custom.js"></script>

<!--footer section close-->

</body>
</html>