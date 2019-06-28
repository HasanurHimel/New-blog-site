@extends('front-end.master')
@section('title')
    {{ $carousel->carousel_short_description }}
@endsection
@section('content')



    <div class="col-lg-9 col-md-9 col-sm-9">
        <div class="left_content">
            <div class="single_page">
                <ol class="breadcrumb">
                    <li><a href="{{ route('/') }}">Home</a></li>
                    <li><a href="#">Carousel</a></li>
                </ol>
                {{--<h1>{{ $blog->blog_title }}</h1>--}}
                <div class="post_commentbox"> <a href="#"><i class="fa fa-user"></i>Carousel</a> <span><i class="fa fa-calendar"></i>{{ $carousel->updated_at }}</span> <a href="#"><i class="fa fa-tags"></i></a> </div>
                <div class="single_page_content">
                    {{--<img class="img-center" src="{{ asset($carousel->carousel_image) }}" alt="">--}}
                <p>{!! $carousel->carousel_long_description !!}</p>
                    <br/><br/>

                    <h3>{{ Session::get('success') }}</h3>
                    <br/>
                    <br/>

            </div>
                <div class="row">

                    <div class="col-md-10 col-md-offset-2">
                        <h3 class="comment-heading"><span class="glyphicon glyphicon-comment"></span> {{ $carousel->comments()->count() }} Commnets</h3>

                    @foreach($carousel->comments as $comment)
                        <div class="comment">
                            <div class="auther-info">
                                {{--md5( strtolower(trim( $comment->email )))--}}
                                <?php $hash = md5(strtolower(trim( $comment->email ))); ?>
                                <img src="{{ "https://www.gravatar.com/avatar/".md5( strtolower(trim( $comment->email ))) ."?s=50&d=wavatar"  }}"  class="auther-image">
                                <div class="auther-name">
                                    <h4>{{ $comment->name }}</h4>
                                    <p class="auther-time">{{ date('F j, Y, g:i a', strtotime($comment->updated_at)) }}</p>
                                </div>
                            </div>

                            <div class="comment-content">

                                {{ $comment->comment }}
                            </div>
                        </div>
                            @endforeach
                    </div>
                </div>


                <div class="row">
                    <div id="comment-form" class="col-md-10 col-md-offset-2">
                        {{ Form::open(['route'=> ['comments.store', $carousel->id], 'method'=>'post' ]) }}

                        <div class="row">
                            <div class="col-md-6">
                                {{ Form::label('name', "Name") }}
                                {{ Form::text('name', null, ['class'=>'form-control']) }}
                            </div>
                            <div class="col-md-6">
                                {{ Form::label('email', "Email") }}
                                {{ Form::text('email', null, ['class'=>'form-control']) }}
                            </div>
                            <div class="col-md-12">
                                {{ Form::label('comment', "Comment") }}
                                {{ Form::textarea('comment',  null, ['class'=>'form-control', 'rows'=>3, 'style'=>'margin-bottom: 15px']) }}
                            </div>
                            <div class="col-md-12">
                                {{ Form::submit('Ad Comment', ['class'=>'btn btn-success btn-block', ]) }}
                            </div>
                        </div>



                  {{ Form::close() }}
                    </div>
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

            <!--related_post end-->




    </div>
        </div>
    </div>



@endsection