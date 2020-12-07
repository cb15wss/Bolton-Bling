@extends('frontEnd.layouts.master')
@section('title','Home Page')
@section('content')
    <section>

        <div class="container">
            <div class="col-sm-3">
                <div class="navbar-header"></div>
                <h3 class="title text-left">Category</h3>
                <div class="mainmenu pull-left">
                <?php
                $categories=DB::table('categories')->where([['status',1],['parent_id',0]])->get();
                ?>
                    <div class="mainmenu pull-left">
                       <ul>
                        @foreach($categories as $category)
                               <a href="{{route('cats',$category->id)}}">{{$category->name}}</a>
                        @endforeach
                       </ul>

                    </div>

                    </h3>
                    </div>

            <div class="col-sm-9 padding-right">
                <div class="features_items"><!--features_items-->
                    <h2 class="title text-center">Featured Products</h2>
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

            <div class="text-center button-container">
                <a href="#" class="button">View More Products</a>
            </div>
            </div>
        </div>
    </section>
@endsection
