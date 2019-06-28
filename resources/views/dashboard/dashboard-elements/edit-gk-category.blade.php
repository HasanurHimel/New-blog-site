@extends('dashboard.master')

@section('content')

    <div class="col-sm-4 wthree-crd">
        <div class="card">
            <div class="card-body">
                <h3 class="text-success" align="center">{{ Session::get('message') }}</h3>
                <div class="widget widget-report-table">

                    <div class="grid-form1">
                        <h3 align="center" id="forms-horizontal">Create Gk Category</h3>

                        {!! Form::open(['route'=>'gk-category-update', 'method'=>'post', 'class'=>'form-horizontal']) !!}
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-4 control-label hor-form">Gk Category name</label>
                            <div class="col-sm-8">
                                <input value="{{ $gk_category->gk_category_name }}" id="gk_category_name" name="gk_category_name" type="text" class="form-control"  placeholder="category name">
                                <input value="{{ $gk_category->id }}" name="gk_category_id" type="hidden" class="form-control" >

                                <span class="invalid-feedback bg-danger"><strong>{{ $errors->has('gk_category_name') ? $errors->first('gk_category_name') : '' }}</strong></span>


                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-4 control-label">Category Description</label>
                            <div class="col-sm-8">
                                <textarea required id="gk_category_description" class="form-control" placeholder="category description" name="gk_category_description">{{ $gk_category->gk_category_description }}</textarea>

                                <span class="invalid-feedback bg-danger"><strong>{{ $errors->has('gk_category_description') ? $errors->first('gk_category_description') : '' }}</strong></span>


                            </div>
                        </div>
                        <div class="form-group">
                            <label for="radiio" class="col-sm-4 control-label hor-form">Publication Status</label>
                            <div class="col-sm-8">
                                <div class="radio-inline"><label><input required type="radio" {{ $gk_category->publication_status ==1 ? 'checked' : ''}} name="publication_status" value="1"> Published</label></div>
                                <div class="radio-inline"><label><input required type="radio" {{ $gk_category->publication_status ==0 ? 'checked' : ''}}  name="publication_status" value="0"> Unpublished</label></div>

                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-4 control-label"></label>
                            <div class="col-sm-8">
                                <input type="submit" class="btn-block btn btn-success " value="Gk Category Update "/>                                       </div>
                        </div>
                        {!! Form::close() !!}
                    </div>





                </div>
            </div>
        </div>
    </div>


@endsection