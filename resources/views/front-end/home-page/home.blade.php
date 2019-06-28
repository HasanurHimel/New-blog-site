@extends('front-end.master')
@section('title')
    বিশ্বের টুকিটাকি
    @endsection

@section('carousel-and-latest-post')

    <section id="sliderSection">
        <div class="row">

            {{--carousel section start--}}
            @include('front-end.home-page.includes.carousel-section')
            <!--carousel close-->

            <!--latest post start-->

            @include('front-end.home-page.includes.latest-post')

              {{--latest post close--}}
        </div>
    </section>

    @endsection



@section('content')

    <div class="col-lg-9 col-md-9 col-sm-9">
        <div class="left_content">

            <!--exceptional news section start-->
           @include('front-end.home-page.includes.exceptional-news-section')
            <!--exceptional news section end-->




            <!--science_technology_area start-->

            <div class="fashion_technology_area">

                <!--science section start-->
            @include('front-end.home-page.includes.science-section')
                <!--science section close-->

                <!--technology section start-->
            @include('front-end.home-page.includes.technology-section')
                <!--technology section close-->

            </div>

            <!--science_technology_area close-->




            <!--Photography section start-->

        @include('front-end.home-page.includes.photography-section')

            <!--Photography section close-->

            <!--sports section start-->

        @include('front-end.home-page.includes.sports-section')

            <!--sports section close-->

        </div>
    </div>

    @endsection