@extends('layouts.web')
@section('title', 'Trang đăng nhập')
@section('content')

@if (session('status'))
<div class="alert alert-danger" role="alert">
    {{ session('status') }}
</div>
@endif
<!-- customer login start -->
<div class="customer_login">
    <div class="row">
        <!--login area start-->
        <div class="col-lg-6 col-md-6">
            <div class="account_form">
                <h2>Đăng Nhập</h2>
                <form action="{{route('postLogin')}}" method="post">
                    @csrf
                    @method('post')
                    <p>
                        <label>Email <span>*</span></label>
                        <input type="text" name="email">
                        <span style="color:red;">@error("email"){{ $message }} @enderror</span>
                    </p>
                    <p>
                        <label>Mật khẩu <span>*</span></label>
                        <input type="password" name="password">
                        <span style="color:red;">@error("password"){{ $message }} @enderror</span>
                    </p>
                    <div class="login_submit">
                        <button type="submit">Đăng nhập</button>
                        <label for="remember">
                            <input id="remember" type="checkbox">
                            Lưu thông tin
                        </label>
                        <a href="#">Quên mật khẩu?</a>
                    </div>

                </form>
            </div>
        </div>
        <!--login area start-->

        <!--register area start-->
        <div class="col-lg-6 col-md-6">
            <div class="account_form register">
                
                <a href="{{asset('register')}}"><h2>Đăng Ký Tại Đây</h2></a>
            </div>
        </div>
        <!--register area end-->
    </div>
</div>
<!-- customer login end -->
@endsection