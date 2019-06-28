@extends('dashboard.master')

@section('content')

    <div class="col-sm-8 wthree-crd">
        <div class="card">
            <div class="card-body">
                <h3 align="center" class="text-success">{{ Session::get('message') }}</h3>
                <div class="widget widget-report-table">

                    <div class="grid-form1">
                        <h3 align="center" id="forms-horizontal">Create your blog</h3>

                        {!! Form::open(['route'=>'blog-save', 'method'=>'post', 'class'=>'form-horizontal', 'enctype'=>'multipart/form-data']) !!}

                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-4 control-label hor-form">Blog Category</label>
                                <div class="col-sm-8">
                                  <select name="category_name" class="form-control">
                                      <option>____select category___</option>
                                      @foreach($categories as $category)
                                      <option value="{{ $category->category_name  }}">{{ $category->category_name }}</option>
                                          @endforeach
                                  </select>
                                    <span class="invalid-feedback bg-danger"><strong>{{ $errors->has('blog_category') ? $errors->first('blog_category') : '' }}</strong></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-4 control-label hor-form">Blog Title</label>
                                <div class="col-sm-8">
                                    <input name="blog_title" type="text" class="form-control" id="blog_title" placeholder="blog title">

                                    <span class="invalid-feedback bg-danger"><strong>{{ $errors->has('blog_title') ? $errors->first('blog_title') : '' }}</strong></span>


                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inputPassword3" class="col-sm-4 control-label">Blog Short Description</label>
                                <div class="col-sm-8">

                                    <textarea name="blog_short_description" id="blog_short_description" rows="3" cols="4" class="form-control" placeholder="blog short description"></textarea>
                                    <span class="invalid-feedback bg-danger"><strong>{{ $errors->has('blog_short_description') ? $errors->first('blog_short_description') : '' }}</strong></span>


                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputPassword3" class="col-sm-3 control-label">Blog Long Description</label>
                                <div class="col-sm-9">
                                    <textarea rows="440" cols="80" id="summary-ckeditor" name="blog_long_description" id="blog_long_description" class="form-control" placeholder="blog long description" ></textarea>
                                    <span class="invalid-feedback bg-danger"><strong>{{ $errors->has('blog_long_description') ? $errors->first('blog_long_description') : '' }}</strong></span>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inputPassword3" class="col-sm-4 control-label">Blog Photo</label>
                                <div class="col-sm-8">
                                    <input name="blog_image" type="file" >

                                    <span class="invalid-feedback bg-danger"><strong>{{ $errors->has('blog_image') ?$errors->first('blog_image') : '' }}</strong></span>

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
                                    <input type="submit" class="btn-block btn btn-success " value="Blog save "/>                                       </div>
                            </div>
                        {!! Form::close() !!}
                    </div>





                </div>
            </div>
        </div>
    </div>


@endsection