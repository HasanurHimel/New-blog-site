@extends('front-end.content.master')
@section('title')
    টিউটোরিয়াল
    @endsection

@section('category_content')
    <div class="container " style="margin-top: 360px">
        <div class="row col-sm-12 ">
            <div class="col-sm-12">
                @foreach($tutorial as $tutorial_content)

                    <div class="col-sm-3 ">
                        <div class="panel panel-widget ">

                            <div><a href="{{ route('tutorial-description', ['id'=>$tutorial_content->id]) }}" class="featured_img"> <img alt="" src="{{ asset($tutorial_content->tutorial_image) }}" alt="" height="200px" width="180px"> <span class="overlay"></span> </a></div>

                            <div class="panel-heading" style="height: 50px; 'width': 100px">
                                <a href="{{ route('tutorial-description', ['id'=>$tutorial_content->id]) }}"><h4><span style="color: #bd2130; ">{!! $tutorial_content->tutorial_title !!}</span></h4></a>
                            </div>

                            <div class="panel-body " style="height: 100px; 'width': 100px">
                                <p >{!! $tutorial_content->tutorial_short_description !!}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection