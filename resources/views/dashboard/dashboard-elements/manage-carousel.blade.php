@extends('dashboard.master')

@section('content')
    <div class="container">
        <div class="row">

            <div class="col-sm-10">

                <div class="agile-tables">
                    <h2 align="center"><strong>Manage Your Carousel</strong></h2>
                    <h3 class="text-success" align="center">{{ Session::get('message') }}</h3>
                    <div class="w3l-table-info table table-responsive">

                        <table >
                            <thead>
                            <tr>
                                <th>Serial no: </th>
                                <th>Carousel image</th>
                                <th>Carousel short description</th>
                                {{--<th>Carousel long description</th>--}}
                                <th>Publication Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @php($i=1)
                            @foreach($carousels as $carousel)
                                <tr>
                                    <td>{{ $i++ }}</td>
                                    <td><img src="{{ asset($carousel->carousel_image) }}" alt="" height="50px" width="50px"></td>
                                    <td>{{ $carousel->carousel_short_description }}</td>
                                    {{--<td>{{ $carousel->carousel_long_description }}</td>--}}
                                    <td>{{ $carousel->publication_status }}</td>
                                    <td>
                                        @if($carousel->publication_status ==1)
                                            <a href="{{ route('unpublished-carousel', ['id'=>$carousel->id]) }}" class="btn btn-info btn-xs" >
                                                <span class="glyphicon glyphicon-arrow-up"></span>
                                            </a>
                                        @else
                                            <a href="{{ route('published-carousel', ['id'=>$carousel->id]) }}" class="btn btn-danger btn-xs" >
                                                <span class="glyphicon glyphicon-arrow-down"></span>
                                            </a>
                                    @endif
                                            <a href="{{ route('carousel-edit', ['id'=>$carousel->id]) }}" class="btn btn-info btn-xs" >
                                                <span class="glyphicon glyphicon-edit"></span>
                                            </a>
                                            <a href="{{ route('carousel-delete', ['id'=>$carousel->id]) }}" class="btn btn-danger btn-xs" >
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