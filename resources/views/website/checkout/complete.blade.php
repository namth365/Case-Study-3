@extends('layouts.web')
@section('title','Hoàn thành mua hàng')
@section('content')


<div class="error_section">
    <div class="row">
        <div class="col-12">
            <div class="error_form">
                <h2>ĐẶT HÀNG THÀNH CÔNG</h2>
                <a href="{{asset('my-account')}}">Theo dõi đơn hàng </a>
                <a href="/">Tiếp tục mua hàng</a>
            </div>
        </div>
    </div>
</div>
<!--error section area end-->
@endsection