@extends('dashboard.master')

@section('content')

    <div class="col-sm-4 wthree-crd">
        <div class="card">
            <div class="card-body">
                <h3 align="center" class="text-success">{{ Session::get('message') }}</h3>
                <div class="widget widget-report-table">

                    <div class="grid-form1">
                        <h3 align="center" id="forms-horizontal">Header section Edit</h3>

                        {!! Form::open(['route'=>'header-update', 'method'=>'post', 'class'=>'form-horizontal', 'enctype'=>'multipart/form-data']) !!}

                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-4 control-label">Banner Photo</label>
                            <div class="col-sm-8">
                                <div>
                                    <img src="{{ asset($header->banner_photo) }}" alt="" height="80px" width="80px">
                                </div>
                                <input id="banner_photo" name="banner_photo" type="file" >
                                <input type="hidden" name="header_id" value="{{ $header->id }}">

                                <span class="invalid-feedback bg-danger"><strong>{{ $errors->has('banner_photo') ?$errors->first('banner_photo') : '' }}</strong></span>

                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-4 control-label">Latest news</label>
                            <div class="col-sm-8">
                                <textarea name="latest_news"  id="latest_news" class="form-control" placeholder="Carousel long description" >{{ $header->latest_news }}</textarea>

                                <span class="invalid-feedback bg-danger"><strong>{{ $errors->has('latest_news') ? $errors->first('latest_news') : '' }}</strong></span>

                            </div>
                        </div>


                        <div class="form-group">
                            <label for="radiio" class="col-sm-4 control-label hor-form">Publication Status</label>
                            <div class="col-sm-8">
                                <div class="radio-inline"><label><input type="radio" {{ $header->publication_status ==1 ? 'checked' : '' }} name="publication_status" value="1"> Published</label></div>

                                <div class="radio-inline"><label><input type="radio" {{ $header->publication_status ==0 ? 'checked' : '' }} name="publication_status" value="0"> Unpublished</label></div>

                                <span class="invalid-feedback bg-danger"><strong>{{ $errors->has('publication_status') ? $errors->first('publication_status') : '' }}</strong></span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-4 control-label"></label>
                            <div class="col-sm-8">
                                <input type="submit" class="btn-block btn btn-success " value="Header Section Update"/>                                       </div>
                        </div>
                        {!! Form::close() !!}
                    </div>





                </div>
            </div>
        </div>
    </div>


@endsection