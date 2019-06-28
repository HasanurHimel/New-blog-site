@extends('dashboard.master')

@section('content')

    <div class="col-sm-4 wthree-crd">
        <div class="card">
            <div class="card-body">
                <h3 align="center" class="text-success">{{ Session::get('message') }}</h3>
                <div class="widget widget-report-table">

                    <div class="grid-form1">
                        <h3 align="center" id="forms-horizontal">Tutorial Create</h3>

                        {!! Form::open(['route'=>'tutorial-update', 'method'=>'post', 'class'=>'form-horizontal', 'enctype'=>'multipart/form-data']) !!}

                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-4 control-label">Tutorial title</label>
                            <div class="col-sm-8">

                                <input type="text" value="{{ $tutorial->tutorial_title }}" name="tutorial_title" class="form-control" placeholder="Tutorial title" id="tutorial_title">
                                <input type="hidden" value="{{ $tutorial->id }}" name="tutorial_id" class="form-control" placeholder="Tutorial title" id="tutorial_title">
                                <span class="invalid-feedback bg-danger"><strong>{{ $errors->has('tutorial_title') ? $errors->first('tutorial_title') : '' }}</strong></span>


                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-4 control-label">Tutorial short Description</label>
                            <div class="col-sm-8">
                                <textarea name="tutorial_short_description" id="tutorial_short_description" class="form-control" placeholder="Tutorial short description" >{{ $tutorial->tutorial_short_description }}</textarea>

                                <span class="invalid-feedback bg-danger"><strong>{{ $errors->has('tutorial_short_description') ? $errors->first('tutorial_short_description') : '' }}</strong></span>

                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-4 control-label">Tutorial Long Description</label>
                            <div class="col-sm-8">
                                <textarea id="summary-ckeditor" name="tutorial_long_description" id="tutorial_long_description" class="form-control" placeholder="Tutorial long description" >{{ $tutorial->tutorial_long_description }}</textarea>

                                <span class="invalid-feedback bg-danger"><strong>{{ $errors->has('tutorial_long_description') ? $errors->first('tutorial_long_description') : '' }}</strong></span>

                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-4 control-label">Tutorial Photo</label>
                            <div class="col-sm-8">
                                <div><img src="{{ asset($tutorial->tutorial_image) }}" alt="" height="80px" width="80px"></div>
                                <input name="tutorial_image" type="file" >

                                <span class="invalid-feedback bg-danger"><strong>{{ $errors->has('tutorial_image') ?$errors->first('tutorial_image') : '' }}</strong></span>

                            </div>
                        </div>


                        <div class="form-group">
                            <label for="radiio" class="col-sm-4 control-label hor-form">Publication Status</label>
                            <div class="col-sm-8">
                                <div class="radio-inline"><label><input type="radio" {{ $tutorial->publication_status ==1 ? 'checked' : ' ' }} name="publication_status" value="1"> Published</label></div>

                                <div class="radio-inline"><label><input type="radio" {{ $tutorial->publication_status ==0 ? 'checked' : ' ' }} name="publication_status" value="0"> Unpublished</label></div>

                                <span class="invalid-feedback bg-danger"><strong>{{ $errors->has('publication_status') ? $errors->first('publication_status') : '' }}</strong></span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-4 control-label"></label>
                            <div class="col-sm-8">
                                <input type="submit" class="btn-block btn btn-success " value="Tutorial save "/>                                       </div>
                        </div>
                        {!! Form::close() !!}
                    </div>





                </div>
            </div>
        </div>
    </div>


@endsection