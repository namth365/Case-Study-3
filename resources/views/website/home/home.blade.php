@extends('layouts.web')

@section('content')
<!-- Thông báo đăng ký thành công -->
@if (session('status'))
<div class="alert alert-success" role="alert">
    {{ session('status') }}
</div>
@endif
<!--banner slider start-->
@include('layouts.website.home.banner_slider')
<!--banner slider start-->

<!--new product area start-->
<div class="new_product_area">
    <div class="block_title">
        <h3>Sản Phẩm Mới</h3>
    </div>
    <div class="row">

        <div class="product_active owl-carousel">
            @foreach($products as $product)
            <div class="col-lg-3">

                <div class="single_product">
                    <div class="product_thumb">
                        <a href="{{route('shop.product_detail',$product->slug)}}"><img
                                src="{{ asset('storage/app/public/images/'.$product->image) }}" height="300px"
                                width="300px" alt=""></a>
                        <div class="img_icone">
                            <img src="{{ asset('assets\img\cart\span-new.png') }}" alt="">
                        </div>
                        <div class="product_action">
                            <a href="{{ route('add-to-cart', $product->id) }}"> <i class="fa fa-shopping-cart"></i> Thêm
                                Vào Giỏ</a>
                        </div>
                    </div>
                    <div class="product_content">
                        <span class="product_title"><a>{{($product->name)}}</a></span>

                        <h3 class="product_price">{{($product->price)}} đ</h3>
                    </div>
                    <div class="product_info">
                        <ul>
                            <li><a href="{{route('shop.product_detail',$product->slug)}}">Xem Chi Tiết</a></li>
                            <!-- <li><a href="#" data-toggle="modal" data-target="#modal_box" >Xem Nhanh
                                </a></li> -->
                        </ul>
                    </div>
                </div>

            </div>
            @endforeach
        </div>

    </div>
</div>
<!--new product area start-->

<!--featured product start-->
<div class="featured_product">
    <div class="block_title">
        <h3>Sản Phẩm Nổi Bật</h3>
    </div>
    <div class="row">
        <div class="product_active owl-carousel">
            @foreach($products as $product)
            <div class="col-lg-3">

                <div class="single_product">
                    <div class="product_thumb">
                        <a href="{{route('shop.product_detail',$product->slug)}}"><img
                                src="{{ asset('storage/app/public/images/'.$product->image) }}" height="300px"
                                width="300px" alt=""></a>
                        <div class="img_icone">
                            <img src="{{ asset('assets\img\cart\span-new.png') }}" alt="">
                        </div>
                        <div class="product_action">
                            <a href="{{ route('add-to-cart', $product->id) }}"> <i class="fa fa-shopping-cart"></i> Thêm
                                Vào Giỏ</a>
                        </div>
                    </div>
                    <div class="product_content">
                        <span class="product_title"><a>{{($product->name)}}</a></span>

                        <h3 class="product_price">{{($product->price)}} đ</h3>
                    </div>
                    <div class="product_info">
                        <ul>
                            <li><a href="{{route('shop.product_detail',$product->slug)}}">Xem Chi Tiết</a></li>
                            <!-- <li><a href="#" data-toggle="modal" data-target="#modal_box" >Xem Nhanh
                                </a></li> -->
                        </ul>
                    </div>
                </div>

            </div>
            @endforeach
        </div>
    </div>
</div>
<!--featured product end-->

<!--banner area start-->
<div class="banner_area mb-60">
    <div class="row">
        <div class="col-lg-6 col-md-6">
            <div class="single_banner">
                <a href="#"><img src="{{ asset('assets\img\banner\banner8.jpg') }}" alt=""></a>
                <div class="banner_title title_2">
                    <p>sale off <span> 30%</span></p>
                </div>
            </div>
        </div>
    </div>
</div>
<!--banner area end-->

<!--brand logo strat-->
<div class="brand_logo mb-60">
    <div class="block_title">
        <h3>Nhà Cung Cấp</h3>
    </div>
    <div class="row">
        <div class="brand_active owl-carousel">
            <div class="col-lg-2">
                <div class="single_brand">
                    <a href="#"><img src="{{ asset('assets\img\brand\brand1.jpg') }}" alt=""></a>
                </div>
            </div>

        </div>
    </div>
</div>
<!--brand logo end-->
@endsection