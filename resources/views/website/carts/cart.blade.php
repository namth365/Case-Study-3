@extends('layouts.web')
@section('title', 'Giỏ hàng')
@section('content')

<div class="shopping_cart_area">

    @if(!$cart)
    
    <h4 class="text-center">Không Có Sản Phẩm Nào.</h4>
    @else
    <form action="#">

        <div class="row">
            <div class="col-13">
                <div class="table_desc">
                    <div class="cart_page table-responsive">
                        <table>
                            <thead>
                                <tr>

                                    <th class="product_thumb">Hình Ảnh</th>
                                    <th class="product_name">Sản Phẩm</th>
                                    <th class="product-price">Đơn Giá</th>
                                    <th class="product_quantity">Số Lượng</th>
                                    <th class="product_total">Thành Tiền</th>
                                    <th class="product_remove">Xóa</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if (isset($cart->items))
                                @foreach($cart->items as $item)
                                <tr>

                                    <td class="product_thumb]]"><a href="#"><img
                                                src="{{ asset('storage/app/public/images/'.$item['item']->image) }}"
                                                alt=""></a></td>
                                    <td class="product_name"><a href="#">{{ $item['item']->name }}</a></td>
                                    <td class="product-price">{{ $item['item']->price }}</td>
                                    <td class="product_quantity"><input min="1" max="100"
                                            value="{{ $item['totalQty'] }}" type="number"></td>
                                    <td class="product_total">{{ $item['totalPrice'] }}</td>
                                    <td class="product_remove"><a href="{{route('shop.destroyCart',$item['item']->id)}}" type="button"><i class="fa fa-trash-o"></i></a></td>
                                    </tr>

                                @endforeach
                                @endif
                            </tbody>
                        </table>
                    </div>
                    <div class="cart_submit">
                    </div>
                </div>
            </div>
        </div>
        <!--coupon code area start-->
        <div class="coupon_area">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="coupon_code">
                        <h3>MÃ GIẢM GIÁ</h3>
                        <div class="coupon_inner">
                            <p>Nhập mã giảm giá nếu có.</p>
                            <input placeholder="..." type="text">
                            <button type="submit">Nhập Mã</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    @if ($cart)
                    <div class="coupon_code">
                        <h3>TỔNG CỘNG</h3>
                        <div class="coupon_inner">
                            <div class="cart_subtotal">
                                <p>Đơn Hàng</p>
                                <p class="cart_amount"><span>:</span>{{ $cart->totalPrice }} đ</p>
                            </div>
                            <div class="cart_subtotal ">
                                <p>Phí Vận Chuyển</p>
                                <p class="cart_amount"><span>:</span> Miễn Phí</p>
                            </div>
                            <a href="#">Cách tính phí vận chuyển</a>


                            <div class="cart_subtotal">
                                <p>Thành Tiền</p>
                                <p class="cart_amount"><span>:</span>{{ $cart->totalPrice }} đ</p>
                            </div>
                            <div class="checkout_btn">
                                <a href="{{route('shop.checkoutCart')}}">THANH TOÁN</a>
                            </div>
                        </div>
                    </div>
                    @endif
                </div>
            </div>
        </div>
        <!--coupon code area end-->

    </form>
    @endif

</div>
@endsection