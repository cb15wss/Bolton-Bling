@extends('frontEnd.layouts.master')
@section('title','Home Page')
@section('content')
    <section>

        <div class="container">
            <div class="col-sm-3">
                <div class="navbar-header">
                    <div><h2 class="title text-left">Narrow Results</h2></div>
                    <h3 class="title text-left">By Category</h3>
                    <div class="mainmenu pull-left">
                        <ul>
                            @foreach($categories as $category)
                                <li><a href="#">{{ $category->name }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-sm-9 padding-right">
                <div class="features_items"><!--features_items-->
                    <h2 class="title text-center">{{$category->name}}</h2>
                </div>
                @foreach ($products as $product)
                    <div class="col-sm-4 padding-right">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="productinfo text-center">
                                    <a href="{{ route('shop.show',$product->slug)}}"><img src="{{url('/img/products/medium',$product->image)}}" alt="{{$product->slug}}"></a>
                                    <a href="#"><div class="product-name">{{ $product->name }}</div></a>
                                    <div class="product-price">{{'£'.$product->price}}</div>
                                    <a href="#" class="btn btn-default add-to-cart">View Product</a>
                                </div>

                            </div>
                        </div>

                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
