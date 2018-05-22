@extends('master')
@section('content')
    <div class="container" style="margin-left: 14%">
        <div class="row">
            <div id="main" class="">
                <div id="">
                    <div class="row">
                        @foreach($products as $product)
                            <div class="col-md-4 col-sm-6 col-xs-6">
                                <div class="product product-single">
                                    <div class="product-thumb">
                                        <div class="product-label">
                                            <span>New</span>
                                            <span class="sale">-20%</span>
                                        </div>
                                        <button class="main-btn quick-view"><i class="fa fa-search-plus"></i> Quick view</button>
                                        <img src="{{asset('images/'.$product->image)}}" alt="FCI" width="200px" height="250px">
                                    </div>
                                    <div class="product-body">
                                        <h3 style="color:white;" class="product-price">{{$product->price}} <del class="product-old-price">$45.00</del></h3>
                                        <div class="product-rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o empty"></i>
                                        </div>
                                        <h2 class="product-name"><a href="#" style="color:white;">{{$product->name}}</a></h2>
                                        <div class="product-btns">
                                            <button class="main-btn icon-btn"><i class="fa fa-heart"></i></button>
                                            <button class="main-btn icon-btn"><i class="fa fa-exchange"></i></button>
                                            <a href="{{route('cart.store',$product->id)}}" class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i> Add to Cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
