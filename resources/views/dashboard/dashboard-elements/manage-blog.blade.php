@extends('dashboard.master')

@section('content')
    <div class="container">
        <div class="row">

            <div class="col-sm-10">

            <div class="agile-tables">
                <h2 align="center"><strong>Manage Your Blog</strong></h2>
                <h3 class="text-success" align="center">{{ Session::get('message') }}</h3>
                <div class="w3l-table-info table table-responsive">

                    <table >
                <thead>
                <tr>
                    <th>Serial no: </th>
                    <th>Blog Category</th>
                    <th>Blog title</th>
                    <th>Blog short description</th>
                    {{--<th>Blog long description</th>--}}
                    <th>Blog photo</th>
                    <th>Publication Status</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @php($i=1)
                @foreach($blogs as $blog)
                <tr>
                    <td>{{ $i++ }}</td>
                    <td>{{ $blog->category->category_name }}</td>
                    <td>{{ $blog->blog_title }}</td>
                    <td>{{ $blog->blog_short_description }}</td>
                    {{--<td>{{ $blog->blog_long_description }}</td>--}}
                    <td><img src="{{ asset($blog->blog_image) }}" alt="" height="50px" width="50px"></td>
                    <td>{{ $blog->publication_status }}</td>
                    <td>
                        @if($blog->publication_status ==1)
                        <a href="{{ route('unpublished-blog', ['id'=>$blog->id]) }}" class="btn btn-info btn-xs" >
                            <span class="glyphicon glyphicon-arrow-up"></span>
                        </a>
                        @else
                            <a href="{{ route('published-blog', ['id'=>$blog->id]) }}" class="btn btn-danger btn-xs" >
                                <span class="glyphicon glyphicon-arrow-down"></span>
                            </a>
                        @endif
                        <a href="{{ route('blog-edit', ['id'=>$blog->id]) }}" class="btn btn-info btn-xs" >
                            <span class="glyphicon glyphicon-edit"></span>
                        </a>
                        <a href="{{ route('blog-delete', ['id'=>$blog->id]) }}" class="btn btn-danger btn-xs" >
                            <span class="glyphicon glyphicon-trash"></span>
                        </a>

                    </td>
                </tr>
                @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            </div>
        </div>
    </div>

@endsection