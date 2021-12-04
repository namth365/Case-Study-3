@extends('layouts.web')
@section('title','Trang thanh toán')
@section('content')

<!--pos page start-->
<div class="pos_page">
    <div class="container">
        <!--pos page inner-->
        <div class="pos_page_inner">
            <!--breadcrumbs area start-->
            <div class="breadcrumbs_area">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumb_content">
                            <ul>
                                <li><a>Trang Chủ</a></li>
                                <li><i class="fa fa-angle-right"></i></li>
                                <li>Giỏ hàng</li>
                            </ul>

                        </div>
                    </div>
                </div>
            </div>
            <!--breadcrumbs area end-->

            <!--Checkout page section-->
            <div class="Checkout_section">

                <div class="checkout_form">
                    <form action="{{ route('shop.complete') }}" method="post">
                    @csrf
                        @method('post')
                        <div class="row">

                            <div class="col-lg-6 col-md-6">

                                <h3>1. thông tin giao hàng</h3>
                                <div class="row">
                                    <div class="col-lg-6 mb-30">
                                        <label>Tên <span>*</span></label>
                                        <input type="text" name="name">
                                        <span style="color:red;">@error("name"){{ $message }} @enderror</span>
                                    </div>
                                    <div class="col-lg-6 mb-30">
                                        <label>Số điện thoại<span>*</span></label>
                                        <input type="text" name="phone">
                                        <span style="color:red;">@error("phone"){{ $message }} @enderror</span>

                                    </div>
                                    <div class="col-12 mb-30">
                                        <label>Địa chỉ <span>*</span></label>
                                        <input type="text" name="address">
                                        <span style="color:red;">@error("address"){{ $message }} @enderror</span>
                                    </div>
                                    <div class="col-lg-6 mb-30">
                                        <label> Email <span>*</span></label>
                                        <input type="email" name="email">
                                        <span style="color:red;">@error("email"){{ $message }} @enderror</span>
                                    </div>
                                    <div class="col-lg-6 mb-30">
                                        <label> Mật khẩu <span>*</span></label>
                                        <input type="password" name="password">
                                        <span style="color:red;">@error("password"){{ $message }} @enderror</span>
                                    </div>
                                    <div class="col-12 mb-30">
                                        <input id="address" type="checkbox" data-target="createp_account">
                                        <label for="payment" data-toggle="collapse" data-target="#method"
                                            aria-controls="method">Lưu thông tin nhận hàng </label>
                                    </div>
                                </div>

                            </div>
                            <div class="col-lg-6 col-md-6">

                                <h3>2. đơn hàng</h3>
                                <div class="order_table table-responsive mb-30">
                                    <table>
                                        <thead>
                                            <tr>
                                                <th>Sản phẩm</th>
                                                <th>Tạm tính</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($cart->items as $item)
                                            <tr>
                                                <td> {{ $item['item']->name }} <strong> ×
                                                        {{ $item['totalQty'] }}</strong></td>
                                                <td> {{ $item['totalPrice'] }}</td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>Tạm tính</th>
                                                <td>{{ $cart->totalPrice }} đ</td>
                                            </tr>
                                            <tr>
                                                <th>Phí vận chuyển</th>
                                                <td>0.00</td>
                                            </tr>
                                            <tr class="order_total">
                                                <th>Thành tiền</th>
                                                <td><strong>{{ $cart->totalPrice }} đ</strong></td>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                                <div class="payment_method">
                                    <div class="panel-default">
                                        <h3 class="title">3. Chọn hình thức thanh toán</h3>
                                        <input id="payment" name="pay_method" type="radio"
                                            data-target="createp_account">
                                        <label for="payment" data-toggle="collapse" data-target="#method"
                                            aria-controls="method">COD (Thanh toán khi nhận hàng) </label>
                                    </div>
                                    <div class="panel-default">
                                        <input id="payment_defult" name="pay_method" type="radio"
                                            data-target="createp_account">
                                        <label for="payment_defult" data-toggle="collapse" data-target="#collapsedefult"
                                            aria-controls="collapsedefult">Chuyển khoản <img
                                                src="assets\img\visha\papyel.png" alt=""></label>
                                        <div id="collapsedefult" class="collapse one" data-parent="#accordion">
                                          
                                        </div>
                                    </div>
                                    <div class="order_button">
                                        <button href="{{route('shop.complete')}}" type="submit">Hoàn tất</button>

                                    </div>
                                </div>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!--Checkout page section end-->

        </div>
        <!--pos page inner end-->
    </div>
</div>
<!--pos page end-->
@endsection