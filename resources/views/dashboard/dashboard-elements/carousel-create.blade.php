@extends('dashboard.master')

@section('content')

    <div class="col-sm-4 wthree-crd">
        <div class="card">
            <div class="card-body">
                <h3 align="center" class="text-success">{{ Session::get('message') }}</h3>
                <div class="widget widget-report-table">

                    <div class="grid-form1">
                        <h3 align="center" id="forms-horizontal">Carousel Create</h3>

                        {!! Form::open(['route'=>'carousel-save', 'method'=>'post', 'class'=>'form-horizontal', 'enctype'=>'multipart/form-data']) !!}

                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-4 control-label">Carousel Photo</label>
                            <div class="col-sm-8">
                                <input name="carousel_image" type="file" >

                                <span class="invalid-feedback bg-danger"><strong>{{ $errors->has('carousel_image') ?$errors->first('carousel_image') : '' }}</strong></span>

                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-4 control-label">Carousel Short Description</label>
                            <div class="col-sm-8">

                                <textarea name="carousel_short_description" id="carousel_short_description" rows="3" cols="4" class="form-control" placeholder="Carousel short description"></textarea>
                                <span class="invalid-feedback bg-danger"><strong>{{ $errors->has('carousel_short_description') ? $errors->first('carousel_short_description') : '' }}</strong></span>


                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-4 control-label">Carousel Long Description</label>
                            <div class="col-sm-8">
                                <textarea name="carousel_long_description" id="summary-ckeditor" id="carousel_long_description" class="form-control" placeholder="Carousel long description" ></textarea>

                                <span class="invalid-feedback bg-danger"><strong>{{ $errors->has('carousel_long_description') ? $errors->first('carousel_long_description') : '' }}</strong></span>

                            </div>
                        </div>


                        <div class="form-group">
                            <label for="radiio" class="col-sm-4 control-label hor-form">Publication Status</label>
                            <div class="col-sm-8">
                                <div class="radio-inline"><label><input type="radio" name="publication_status" value="1"> Published</label></div>

                                <div class="radio-inline"><label><input type="radio" name="publication_status" value="0"> Unpublished</label></div>

                                <span class="invalid-feedback bg-danger"><strong>{{ $errors->has('publication_status') ? $errors->first('publication_status') : '' }}</strong></span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-4 control-label"></label>
                            <div class="col-sm-8">
                                <input type="submit" class="btn-block btn btn-success " value="Carousel save "/>                                       </div>
                        </div>
                        {!! Form::close() !!}
                    </div>





                </div>
            </div>
        </div>
    </div>


@endsection