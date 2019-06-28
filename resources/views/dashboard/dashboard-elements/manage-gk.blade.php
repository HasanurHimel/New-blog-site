@extends('dashboard.master')

@section('content')
    <div class="container">
        <div class="row">

            <div class="col-sm-10">

                <div class="agile-tables">
                    <h2 align="center"><strong>Manage Gk</strong></h2>
                    <h3 class="text-success" align="center">{{ Session::get('message') }}</h3>
                    <div class="w3l-table-info table table-responsive">

                        <table >
                            <thead>
                            <tr>
                                <th>Serial no: </th>
                                <th>Gk Category</th>
                                <th>Gk title</th>
                                
                                <th>Publication Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @php($i=1)
                            @foreach($gk as $gk_part)
                                <tr>
                                    <td>{{ $i++ }}</td>
                                    <td>{{ $gk_part->gk_category_name }}</td>
                                    <td>{{ $gk_part->gk_title }}</td>
                                   
                                    <td>{{ $gk_part->publication_status }}</td>
                                    <td>
                                        @if($gk_part->publication_status ==1)
                                            <a href="{{ route('unpublished-gk', ['id'=>$gk_part->id]) }}" class="btn btn-info btn-xs" >
                                                <span class="glyphicon glyphicon-arrow-up"></span>
                                            </a>
                                        @else
                                            <a href="{{ route('published-gk', ['id'=>$gk_part->id]) }}" class="btn btn-danger btn-xs" >
                                                <span class="glyphicon glyphicon-arrow-down"></span>
                                            </a>
                                        @endif
                                        <a href="{{ route('gk-edit', ['id'=>$gk_part->id]) }}" class="btn btn-info btn-xs" >
                                            <span class="glyphicon glyphicon-edit"></span>
                                        </a>
                                        <a href="{{ route('gk-delete', ['id'=>$gk_part->id]) }}" class="btn btn-danger btn-xs" >
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