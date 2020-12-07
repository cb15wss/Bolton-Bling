@extends('frontEnd.layouts.master')
@section('title','My Account Page')
@section('slider')
@endsection
@section('content')
    <div class="container">
        @if(Session::has('message'))
            <div class="alert alert-success text-center" role="alert">
                {{Session::get('message')}}
            </div>
        @endif
        <div class="row">
            <div class="col-sm-4 col-sm-offset-1">

                <div class="sidebar">

                    <ul>
                        <li class="active"><a href="#">My Profile</a></li>
                        <li><a href="#">My Orders</a></li>
                    </ul>
                </div> <!-- end sidebar -->
                <div class="login-form"><!--login form-->
                    <form action="{{url('/update-profile',$user_login->id)}}" method="post" class="form-horizontal">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        {{method_field('PUT')}}
                        <legend>Account Profile</legend>
                        <div class="form-group {{$errors->has('name')?'has-error':''}}">
                            <input type="text" class="form-control" name="name" id="name" value="{{$user_login->name}}" placeholder="Name">
                            <span class="text-danger">{{$errors->first('name')}}</span>
                        </div>
                        <div class="form-group {{$errors->has('address')?'has-error':''}}">
                            <input type="text" class="form-control" value="{{$user_login->address}}" name="address" id="address" placeholder="Address">
                            <span class="text-danger">{{$errors->first('address')}}</span>
                        </div>
                        <div class="form-group {{$errors->has('city')?'has-error':''}}">
                            <input type="text" class="form-control" name="city" value="{{$user_login->city}}" id="city" placeholder="City">
                            <span class="text-danger">{{$errors->first('city')}}</span>
                        </div>
                        <div class="form-group {{$errors->has('state')?'has-error':''}}">
                            <input type="text" class="form-control" name="state" value="{{$user_login->state}}" id="state" placeholder="State">
                            <span class="text-danger">{{$errors->first('state')}}</span>
                        </div>
                        <div class="form-group">
                            <select name="country" id="country" class="form-control">
                                @foreach($countries as $country)
                                    <option value="{{$country->country_name}}" {{$user_login->country==$country->country_name?' selected':''}}>{{$country->country_name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group {{$errors->has('pincode')?'has-error':''}}">
                            <input type="text" class="form-control" name="pincode" value="{{$user_login->pincode}}" id="pincode" placeholder="Pincode">
                            <span class="text-danger">{{$errors->first('pincode')}}</span>
                        </div>
                        <div class="form-group {{$errors->has('mobile')?'has-error':''}}">
                            <input type="text" class="form-control" name="mobile" value="{{$user_login->mobile}}" id="mobile" placeholder="Mobile">
                            <span class="text-danger">{{$errors->first('mobile')}}</span>
                        </div>
                        <button type="submit" class="btn btn-primary" style="float: right;">Update Profile</button>
                    </form>
                </div><!--/login form-->
            </div>
            <div class="col-sm-1">
                <h2 class="or">OR</h2>
            </div>
            <div class="col-sm-4">
                <div class="signup-form"><!--sign up form-->
                    <form action="{{url('/update-password',$user_login->id)}}" method="post" class="form-horizontal">
                        <legend>Update New Password</legend>
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        {{method_field('PUT')}}
                        <div class="form-group {{$errors->has('password')?'has-error':''}}">
                            <input type="password" class="form-control" name="password" id="password" placeholder="Old Password">
                            @if(Session::has('oldpassword'))
                                <span class="text-danger">{{Session::get('oldpassword')}}</span>
                            @endif
                        </div>
                        <div class="form-group {{$errors->has('newPassword')?'has-error':''}}">
                            <input type="password" class="form-control" name="newPassword" id="newPassword" placeholder="New Password">
                            <span class="text-danger">{{$errors->first('newPassword')}}</span>
                        </div>
                        <div class="form-group {{$errors->has('newPassword_confirmation')?'has-error':''}}">
                            <input type="password" class="form-control" name="newPassword_confirmation" id="newPassword_confirmation" placeholder="Confirm Password">
                            <span class="text-danger">{{$errors->first('newPassword_confirmation')}}</span>
                        </div>
                        <button type="submit" class="btn btn-primary" style="float: right;">Update Password</button>
                    </form>
                </div><!--/sign up form-->
            </div>
            <div class="col-sm-4">
                <div class="container"><!--sign up form-->
                        <legend>My Orders</legend>
                    <div>

                            <div class="container">
                                <div class="header">
                                    <div class="header-items">
                                        <div>
                                            <div class="uppercase font-bold">Order Placed</div>
                                            <div>Date</div>
                                        </div>
                                        <div>
                                            <div class="uppercase font-bold">Order ID</div>
                                            <div>Orders id</div>
                                        </div><div>
                                            <div class="uppercase font-bold">Total</div>
                                            <div>Order Total</div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="order-header-items">
                                            <div><a href="#">Order Details</a></div>
                                            <div>|</div>
                                            <div><a href="#">Invoice</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="order-products">

                                        <div class="order-product-item">
                                            <div><img src="#" alt="Product Image"></div>
                                            <div>
                                                <div>
                                                    <a href="#">product name</a>
                                                </div>
                                                <div>Price</div>
                                                <div>Quantity: </div>
                                            </div>
                                        </div>


                                </div>
                            </div> <!-- end order-container -->

                    </div>

        </div><!--/sign up form-->
            </div>
        </div>
    </div>
    <div style="margin-bottom: 20px;"></div>
@endsection
