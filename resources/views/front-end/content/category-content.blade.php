@extends('front-end.content.master')
@section('title')
    @foreach($category_blog as $category_blog_part)
        {{ $category_blog_part->category_name }}
    @endforeach
@endsection
@section('category_content')
    <div class="container " style="margin-top: 360px">
        <div class="row col-sm-12 ">
            <div class="col-sm-12">
                @foreach($category_blog as $category_blog_part)

                    <div class="col-sm-4 ">
                        <div class="panel panel-widget ">

                            <div><a href="{{ route('content', ['category'=>$category_blog_part->category_name, 'id'=>$category_blog_part->id, 'title'=>$category_blog_part->blog_title]) }}" class="featured_img"> <img alt="" src="{{ asset($category_blog_part->blog_image) }}" alt="" height="200px" width="260px"> <span class="overlay"></span> </a></div>

                            <div class="panel-heading bg-secondary" style="height: 80px; 'width': 150px; color: #e33b7e;">
                                <figcaption><a  href="{{ route('content', ['category'=>$category_blog_part->category_name, 'id'=>$category_blog_part->id, 'title'=>$category_blog_part->blog_title]) }}"><h4><span style="color: #e33b7e; padding-left: 0px">{!! $category_blog_part->blog_title !!}</span></h4></a></figcaption>
                            </div>

                            <div class="panel-body" style="height: 150px; 'width': 150px">
                                <p align="justify">{!! $category_blog_part->blog_short_description !!}  <span style="color: #0055ff">(বিস্তারিত..)</span></p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    @endsection