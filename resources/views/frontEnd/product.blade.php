@extends('frontEnd.layouts.master')
@section('title', '$product->name')

@section('extra-css')
    <link rel="stylesheet" href="{{ asset('css/algolia.css') }}">
@endsection

@section('content')
    <section>
        <div class="container">
            <div class="row">
                    <div class="product-details">
                        <div class="col-sm-5">
                            <div class="product-image-wrapper">
                                <div class="single-products">

                                    <div class="productinfo text-center">
                                        <a href="{{url('/img/products/medium',$product->image)}}">
                                            <img src="{{url('/img/products/medium',$product->image)}}" alt="{{$product->slug}}" id="dynamicImage"/>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-7">
                            <form action="{{route('addToCart')}}" method="post" role="form">
                                <input type="hidden" name="_token" value="{{csrf_token()}}">
                                <input type="hidden" name="product_id" value="{{$product->id}}">
                                <input type="hidden" name="product_name" value="{{$product->name}}">
                                <input type="hidden" name="price" value="{{$product->price}}" id="dynamicPriceInput">
                                <div class="product-information"><!--/product-information-->
                                        <h1>{{$product->name}}</h1>


                                        <span>
                                            <label for="idSize"></label><select name="size" id="idSize" class="form-control">
                                                <option value="">Select Size</option>
                                            </select>
                                        </span><br>

                                        <span>
                                            <span id="dynamic_price"> £{{$product->price/100}}</span><br>
                                                  <button type="submit" class="btn btn-fefault cart" id="buttonAddToCart">
                                                                <i class="fa fa-shopping-cart"></i>
                                                                Add to cart
                                                  </button>
                                        </span>
                                <div class="product-details">
                                    <p> {{$product->description}}</p>
                                </div>

                                </div>
                                <!--/product-information-->
                            </form>
                        </div>
                        </div>
                 </div>
            </div>
    </section>
@endsection
