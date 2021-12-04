@extends('layouts.web')
@section('title', 'Trang không tồn tại')

@section('content')

<!--banner slider start-->

<!--error section area start-->
<div class="error_section">
    <div class="row">
        <div class="col-12">
            <div class="error_form">
                <h1>404</h1>
                <h2>KHÔNG TÌM THẤY TRANG</h2>
                <p>Trang bạn tìm kiếm không tìm thấy hoặc đã bị gỡ bỏ.</p>
                <form action="#">
                    <input placeholder="..." type="text">
                    <button type="submit"><i class="fa fa-search"></i></button>
                </form>
                <a href="/">Quay lại trang chủ</a>
            </div>
        </div>
    </div>
</div>
<!--error section area end-->
@endsection