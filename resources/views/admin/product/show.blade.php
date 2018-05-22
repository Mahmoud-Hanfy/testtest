@extends('master')
@section('content')
    <center>
        <h1 style="color: white">Show All Books </h1>
        <div class="row" style="color: whitesmoke;width: 82%;margin-left: 15%">
            <table class="table table-bordered table-responsive " >
                <tr>
                    <th class="col-md-1">ID</th>
                    <th class="col-md-3">Product_Name</th>
                    <th class="col-md-2">Product_price</th>
                    <th class="col-md-3">Product_Image</th>
                    <th class="col-md-1">Category</th>
                    <th class="col-md-1">Actions</th>
                </tr>
                @foreach($products as $product)

                    <tr >
                        <th class="col-md-1"> {{$product->id}}</th>
                        <th class="col-md-3"> {{$product->name}}</th>
                        <th class="col-xs-2">{{$product->price}}</th>
                        <th class="col-xs-3"><img src="{{asset("images/".$product->image)}}" width="300px" height="150px"></th>
                       {{-- <th class="col-xs-1">{{$product->category->name}}</th>--}}
                        <th><?php
                       $category=\App\Category::find($product->category_id);
                        if($category)
                       echo $category->name;
                       ?></th>
                        <th class="col-xs-1"> <a href="product/{{$product->id}}/editp" class="btn btn-success">Edit</a></th>
                        <th class="col-xs-1"> <a href="product/{{$product->id}}/deletep" class="btn btn-danger" onclick="return confirm('Do You Want To Delete This Record? ')">Delete</a></th>
                    </tr>
                @endforeach
            </table>
        </div>
    </center>
@endsection