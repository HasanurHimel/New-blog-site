@extends('dashboard.master')

@section('content')

    <div class="col-sm-8 wthree-crd">
        <div class="card">
            <div class="card-body">
                <h3 align="center" class="text-success">{{ Session::get('message') }}</h3>
                <div class="widget widget-report-table">

                    <div class="grid-form1">
                        <h3 align="center" id="forms-horizontal">Create Gk</h3>

                        {!! Form::open(['route'=>'gk-save', 'method'=>'post', 'class'=>'form-horizontal', 'enctype'=>'multipart/form-data']) !!}


                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-4 control-label hor-form">Gk Category</label>
                            <div class="col-sm-8">
                                <select name="gk_category_name">
                                    <option>____select category_____</option>
                                    @foreach($Gkcategories as $Gkcategory)
                                    <option value="{{ $Gkcategory->gk_category_name }}">{{ $Gkcategory->gk_category_name }}</option>
                                     @endforeach
                                </select>

                                <span class="invalid-feedback bg-danger"><strong>{{ $errors->has('gk_category_name') ? $errors->first('gk_category_name') : '' }}</strong></span>


                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-4 control-label hor-form">Gk Title</label>
                            <div class="col-sm-8">
                                <input name="gk_title" type="text" class="form-control" id="gk_title" placeholder="Gk title">

                                <span class="invalid-feedback bg-danger"><strong>{{ $errors->has('gk_title') ? $errors->first('gk_title') : '' }}</strong></span>


                            </div>
                        </div>


                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-3 control-label">Gk Long Description</label>
                            <div class="col-sm-9">
                                <textarea rows="440" cols="80" id="summary-ckeditor" name="gk_long_description" id="gk_long_description" class="form-control" placeholder="Gk long description" ></textarea>
                                <span class="invalid-feedback bg-danger"><strong>{{ $errors->has('gk_long_description') ? $errors->first('gk_long_description') : '' }}</strong></span>
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
                                <input type="submit" class="btn-block btn btn-success " value="Gk save "/>                                       </div>
                        </div>
                        {!! Form::close() !!}
                    </div>





                </div>
            </div>
        </div>
    </div>


@endsection