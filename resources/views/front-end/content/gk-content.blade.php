@extends('front-end.master')
@section('title')
    {{ $gk_content->gk_title }}
@endsection

@section('content')
    <div class="col-lg-9 col-md-9 col-sm-9">
        <div class="left_content">
            <div class="single_page">
                <ol class="breadcrumb">
                    <li><a href="{{ route('/') }}">Home</a></li>
                    <li><a href="{{ route('/') }}">{{ $gk_content->gk_category }}</a></li>
                </ol>
                <h1>{{ $gk_content->gk_title }}</h1>
                <div class="post_commentbox"> <a href="#"><i class="fa fa-user"></i>Himel </a> <span> {{ $gk_content->gk_category }} <i class="fa fa-calendar"> </i> {{ $gk_content->updated_at }} </span> <a href="#"> <i class="fa fa-tags"> </i> </a> </div>
                {{--<div class="single_page_content"> <img class="img-center" src="{{ asset('/') }}front-end/images/single_post_img.jpg" alt="">--}}
                <p >{!! $gk_content->gk_long_description !!}</p>

            </div>
            <!--content section close-->



            <!--social site link start-->
            <div class="social_link">
                <ul class="sociallink_nav">
                    <li><a href="http://facebook.com/bd.hasanur" target="blank"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="https://twitter.com/HIMEL6854" target="blank"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="https://google.com" target="blank"><i class="fa fa-google-plus"></i></a></li>
                    <li><a href="https://github.com/Himel-khan" target="blank"><i class="fa fa-linkedin"></i></a></li>
                    <li><a href="https://www.linkedin.com/in/md-himel-khan-5b94a8156/" target="blank"><i class="fa fa-pinterest"></i></a></li>
                </ul>
            </div>

        </div>
    </div>
@endsection