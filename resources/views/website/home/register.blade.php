@extends('layouts.web')
@section('title', 'Trang đăng nhập')
@section('content')

<!-- customer login start -->
<div class="customer_login">
    <div class="row">

        <!--register area start-->
        <div class="col-lg-6  col-md-6">
            <div class="account_form register">
                <h2>Đăng Ký</h2>
                <form action="{{ route('shop.postRegister')}}" method="post">
                    @csrf
                    <p>
                        <label>Họ và Tên <span>*</span></label>
                        <input type="text" name="name" value="{{ old('name') }}">
                        <span style="color:red;">@error("name"){{ $message }} @enderror</span>
                    </p>
                    <p>
                        <label>Email <span>*</span></label>
                        <input type="text" name="email" value="{{ old('email') }}">
                        <span style="color:red;">@error("email"){{ $message }} @enderror</span>
                    </p>
                    <p>
                        <label>Số điện thoại <span>*</span></label>
                        <input type="text" name="phone" value="{{ old('phone') }}">
                        <span style="color:red;">@error("phone"){{ $message }} @enderror</span>
                    </p>
                    <p>
                        <label>Địa chỉ <span>*</span></label>
                        <input type="text" name="address" value="{{ old('address') }}">
                        <span style="color:red;">@error("address"){{ $message }} @enderror</span>
                    </p>
                    <p>
                        <label>Mật khẩu <span>*</span></label>
                        <input type="password" name="password">
                        <span style="color:red;">@error("password"){{ $message }} @enderror</span>
                    </p>
                    <p>
                        <label>Xác Nhận Mật khẩu <span>*</span></label>
                        <input type="password" name="password_confirmation">
                        <span style="color:red;">@error("password_confirmation"){{ $message }} @enderror</span>
                    </p>
                    <div class="login_submit">
                        <button type="submit">Đăng ký</button>
                    </div>
                </form>
            </div>
        </div>
        <!--register area end-->
    </div>
</div>
<!-- customer login end -->
@endsection