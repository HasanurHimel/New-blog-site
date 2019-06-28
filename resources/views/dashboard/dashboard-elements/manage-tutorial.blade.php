@extends('dashboard.master')

@section('content')
    <div class="container">
        <div class="row">

            <div class="col-sm-10">

                <div class="agile-tables">
                    <h2 align="center"><strong>Manage  Tutorial section</strong></h2>
                    <h3 class="text-success" align="center">{{ Session::get('message') }}</h3>
                    <div class="w3l-table-info table table-responsive">

                        <table >
                            <thead>
                            <tr>
                                <th>Serial no: </th>
                                <th>Title</th>
                                <th>Tutorial short description</th>
                                <th>Tutorial long description</th>
                                <th>Photo</th>
                                <th>Publication Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @php($i=1)
                            @foreach($tutorials as $tutorial)
                                <tr>
                                    <td>{{ $i++ }}</td>
                                    <td>{{ $tutorial->tutorial_title }}</td>
                                    <td>{{ $tutorial->tutorial_short_description }}</td>
                                    <td>{{ $tutorial->tutorial_long_description }}</td>
                                    <td><img src="{{ asset($tutorial->tutorial_image) }}" alt="" height="50px" width="50px"></td>
                                    <td>{{ $tutorial->publication_status }}</td>
                                    <td>
                                        @if($tutorial->publication_status ==1)
                                            <a href="{{ route('unpublished-tutorial', ['id'=>$tutorial->id]) }}" class="btn btn-info btn-xs" >
                                                <span class="glyphicon glyphicon-arrow-up"></span>
                                            </a>
                                        @else
                                            <a href="{{ route('published-tutorial', ['id'=>$tutorial->id]) }}" class="btn btn-danger btn-xs" >
                                                <span class="glyphicon glyphicon-arrow-down"></span>
                                            </a>
                                        @endif
                                        <a href="{{ route('tutorial-edit', ['id'=>$tutorial->id]) }}" class="btn btn-info btn-xs" >
                                            <span class="glyphicon glyphicon-edit"></span>
                                        </a>
                                        <a href="{{ route('tutorial-delete', ['id'=>$tutorial->id]) }}" class="btn btn-danger btn-xs" >
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