@extends('frontEnd.layouts.master')
@section('title','Home Page')
@section('content')
    <section>

        <div class="container">
            <div class="row">
            <div class="col-sm-3">
                @include('frontEnd.layouts.category_menu')
            </div>
            <div class="col-sm-9 padding-right">
                <div class="features_items"><!--features_items-->
                    <div class="title text-center"><h2>Products</h2></div>
                    <?php
                    if($byCate!=""){
                        $products=$list_product;
                        echo '<h2 class="title text-center">Category '.$byCate->name.'</h2>';
                    }else{
                        echo '<h2 class="title text-center">List Products</h2>';
                    }
                    ?>

                @foreach ($products as $product)
                    @if($product->category->status==1)
                    <div class="col-sm-4 padding-right">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="productinfo text-center">
                                    <a href="{{ route('shop.show',$product->name)}}"><img src="{{url('/img/products/medium',$product->image)}}" alt="{{$product->name}}"></a>
                                    <a href="#"><div class="product-name">{{ $product->name }}</div></a>
                                    <div class="product-price">{{'£'.$product->price /100}}</div>
                                    <a href="#" class="btn btn-default add-to-cart">View Product</a>
                                </div>

                            </div>
                        </div>

                    </div>
                    @endif
                @endforeach
            </div>

            <div class="text-center button-container">
                <a href="#" class="button">View More Products</a>
            </div>
            </div>
        </div>
        </div>
    </section>
@endsection
