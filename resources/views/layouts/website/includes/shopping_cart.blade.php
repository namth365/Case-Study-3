<div class="shopping_cart">
    <a href="{{route('shop.getCart')}}"><i class="fa fa-shopping-cart"></i> Giỏ Hàng ({{\Illuminate\Support\Facades\Session::get('cart') ? \Illuminate\Support\Facades\Session::get('cart')->totalQty : 0 }}) <i class="fa fa-angle-down"></i></a>

    <!--mini cart-->
    <!-- <div class="mini_cart">
        <div class="cart_item">
            <div class="cart_img">
                <a href="#"><img src="{{ asset('assets\img\cart\cart.jpg') }}" alt=""></a>
            </div>
            <div class="cart_info">
                <a href="#">123 lorem ipsum dolor</a>
                <span class="cart_price">Giá: 115.00</span>
                <span class="quantity">Số Lượng: 1</span>
            </div>
            <div class="cart_remove">
                <a title="Remove this item" href="#"><i class="fa fa-times-circle"></i></a>
            </div>
        </div>
       
        <div class="total_price">
            <span> Tổng Cộng </span>
            <span class="prices"> $227.00 </span>
        </div>
        <div class="cart_button">
            <a href="{{route('shop.getCart')}}">Giỏ Hàng({{\Illuminate\Support\Facades\Session::get('cart') ? \Illuminate\Support\Facades\Session::get('cart')->totalQty : 0 }})</a>
        </div>
    </div> -->
    <!--mini cart end-->
</div>