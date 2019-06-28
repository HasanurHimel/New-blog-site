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
                <th>Category anme</th>
                <th>Category description</th>
                <th>publication status</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @php($i= 1)
            @foreach($categories as $category)
            <tr>
                <td>{{ $i++ }}</td>
                <td>{{ $category->category_name }}</td>
                <td>{{ $category->category_description }}</td>
                <td>{{ $category->publication_status }}</td>
                <td>
                    @if($category->publication_status ==1)
                   <a href="{{ route('unpublished-category',['id'=>$category->id ]) }}" class="btn btn-xs btn-info"><span class="glyphicon glyphicon-arrow-up"></span></a>


                   @else($category->publication_status ==0)
                    <a href="{{ route('published-category',['id'=>$category->id ]) }}" class="btn btn-xs btn-danger"><span class="glyphicon glyphicon-arrow-down"></span></a>


                @endif


                    <a href="{{ route('edit-category',['id'=>$category->id ]) }}" class="btn btn-xs btn-info"><span class="glyphicon glyphicon-edit"></span></a>
                   <a href="{{ route('delete-category',['id'=>$category->id ]) }}" class="btn btn-xs btn-danger"><span class="glyphicon glyphicon-trash"></span></a>
                </td>
            </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    </div>
    </div>





    @endsection