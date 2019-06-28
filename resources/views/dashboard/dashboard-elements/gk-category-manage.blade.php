@extends('dashboard.master')

@section('content')

    <div class="agile-tables">

        <div class="agile-tables table-responsive">
            <div class="w3l-table-info" >
                <h2 align="center"><strong>Manage Your Category</strong></h2>
                <h3 class="text-danger" align="center">{{ Session::get('message') }}</h3>
                <table >
                    <thead>
                    <tr>
                        <th>serial no:</th>
                        <th>Gk Category anme</th>
                        <th>Gk Category description</th>
                        <th>publication status</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @php($i= 1)
                    @foreach($gk_category as $gk_category_part)
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>{{ $gk_category_part->gk_category_name }}</td>
                            <td>{{ $gk_category_part->gk_category_description }}</td>
                            <td>{{ $gk_category_part->publication_status }}</td>
                            <td>
                                @if($gk_category_part->publication_status ==1)
                                    <a href="{{ route('unpublished-gk-category',['id'=>$gk_category_part->id ]) }}" class="btn btn-xs btn-info"><span class="glyphicon glyphicon-arrow-up"></span></a>


                                @else($gk_category_part->publication_status ==0)
                                    <a href="{{ route('published-gk-category',['id'=>$gk_category_part->id ]) }}" class="btn btn-xs btn-danger"><span class="glyphicon glyphicon-arrow-down"></span></a>


                                @endif


                                <a href="{{ route('edit-gk-category',['id'=>$gk_category_part->id ]) }}" class="btn btn-xs btn-info"><span class="glyphicon glyphicon-edit"></span></a>
                                <a href="{{ route('delete-gk-category',['id'=>$gk_category_part->id ]) }}" class="btn btn-xs btn-danger"><span class="glyphicon glyphicon-trash"></span></a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>





@endsection