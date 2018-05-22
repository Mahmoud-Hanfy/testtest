@extends('master')
@section('content')
    <center>
        <h1 style="color: white">Show All Books </h1>
        <div class="row" style="color: whitesmoke;width: 82%;margin-left: 15%">
            <table class="table table-bordered table-responsive " >
                <tr>
                    <th class="col-md-1">ID</th>
                    <th class="col-md-3">Product_Name</th>
                </tr>
                @foreach($categories as $category)

                    <tr >
                        <th class="col-md-1"> {{$category->id}}</th>
                        <th class="col-md-3"> {{$category->name}}</th>
                        <th class="col-xs-1"> <a href="category/{{$category->id}}/edit" class="btn btn-success">Edit</a></th>
                        <th class="col-xs-1"> <a href="category/{{$category->id}}/delete" class="btn btn-danger" onclick="return confirm('Do You Want To Delete This Record? ')">Delete</a></th>
                    </tr>
                @endforeach
            </table>
        </div>
    </center>
@endsection