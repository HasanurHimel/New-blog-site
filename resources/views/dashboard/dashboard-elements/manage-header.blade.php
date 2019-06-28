@extends('dashboard.master')

@section('content')
    <div class="container">
        <div class="row">

            <div class="col-sm-10">

                <div class="agile-tables">
                    <h2 align="center"><strong>Manage Your Header section</strong></h2>
                    <h3 class="text-success" align="center">{{ Session::get('message') }}</h3>
                    <div class="w3l-table-info table table-responsive">

                        <table >
                            <thead>
                            <tr>
                                <th>Serial no: </th>
                                <th>Banner image</th>
                                <th>Latest news</th>
                                <th>Publication Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @php($i=1)
                            @foreach($header as $header_section)
                                <tr>
                                    <td>{{ $i++ }}</td>
                                    <td><img src="{{ asset($header_section->banner_photo) }}" alt="" height="50px" width="50px"></td>
                                    <td>{{ $header_section->latest_news }}</td>
                                    <td>{{ $header_section->publication_status }}</td>
                                    <td>
                                        @if($header_section->publication_status ==1)
                                            <a href="{{ route('unpublished-header', ['id'=>$header_section->id]) }}" class="btn btn-info btn-xs" >
                                                <span class="glyphicon glyphicon-arrow-up"></span>
                                            </a>
                                        @else
                                            <a href="{{ route('published-header', ['id'=>$header_section->id]) }}" class="btn btn-danger btn-xs" >
                                                <span class="glyphicon glyphicon-arrow-down"></span>
                                            </a>
                                        @endif
                                        <a href="{{ route('header-edit', ['id'=>$header_section->id]) }}" class="btn btn-info btn-xs" >
                                            <span class="glyphicon glyphicon-edit"></span>
                                        </a>
                                        <a href="{{ route('header-delete', ['id'=>$header_section->id]) }}" class="btn btn-danger btn-xs" >
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