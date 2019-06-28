@extends('front-end.content.master')
@section('title')
{{ $tutorial_description->tutorial_title }}
    @endsection
@section('category_content')

    <div class="col-lg-9 col-md-9 col-sm-9">
        <div class="left_content">
            <div class="single_page">
                <ol class="breadcrumb">
                    <li><a href="{{ route('/') }}">Home</a></li>
                    <li><a href="{{ route('/') }}">Tutorial</a></li>
                </ol>
                <h1>{{ $tutorial_description->tutorial_title }}</h1>
                <div class="post_commentbox"> <a href="#"><i class="fa fa-user"></i>Himel </a> <span> Tutorial <i class="fa fa-calendar"> </i> {{ $tutorial_description->updated_at }} </span> <a href="#"> <i class="fa fa-tags"> </i> </a> </div>
                {{--<div class="single_page_content"> <img class="img-center" src="{{ asset('/') }}front-end/images/single_post_img.jpg" alt="">--}}
                <p>{!! $tutorial_description->tutorial_long_description !!}</p>

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
            <!--social site link close-->

            <!--related_post start-->


            {{--<div class="related_post">--}}
                {{--<h2>Related Post <i class="fa fa-thumbs-o-up"></i></h2>--}}
                {{--<ul class="spost_nav wow fadeInDown animated">--}}
                    {{--@foreach($blog_related as $blog_related_post)--}}
                        {{--<li>--}}
                            {{--<div class="media"> <a class="media-left" href="{{ route('content', ['category'=>$blog_related_post->category_name, 'id'=>$blog_related_post->id, 'title'=>$blog_related_post->blog_title]) }}"> <img src="{{ asset($blog_related_post->blog_image) }}" alt=""> </a>--}}
                                {{--<div class="media-body"> <a class="catg_title" href="{{ route('content', ['category'=>$blog_related_post->category_name, 'id'=>$blog_related_post->id, 'title'=>$blog_related_post->blog_title]) }}"> {{ $blog_related_post->blog_title }}</a> </div>--}}
                            {{--</div>--}}
                        {{--</li>--}}
                    {{--@endforeach--}}

                {{--</ul>--}}
            {{--</div>--}}


            <!--related_post end-->



        </div>
    </div>

@endsection