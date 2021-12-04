@extends('layouts.admin')

@section('title')
Thể Loại
@endsection

@section('content')
                        <h1>Thêm mới Sản phẩm</h1>
                        @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                        @endif
                    </div>
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">

                                <form method="post" action="{{ route('products.store') }}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label>Tên</label>
                                        <input type="text" class="form-control" name="name" value="{{ old('name') }}"
                                            placeholder="Tối đa 255 ký tự">
                                        <span style="color:red;">@error("name"){{ $message }} @enderror</span>
                                    </div>
                                    <div class="form-group">
                                        <label>Tồn</label>
                                        <input type="text" class="form-control" name="sold" value="{{ old('sold') }}"
                                            placeholder="Tối đa 255 ký tự">
                                        <span style="color:red;">@error("sold"){{ $message }} @enderror</span>
                                    </div>
                                    <div class="form-group">
                                        <label>Giá</label>
                                        <input type="text" class="form-control" name="price" value="{{ old('price') }}"
                                            placeholder="Tối đa 255 ký tự">
                                        <span style="color:red;">@error("price"){{ $message }} @enderror</span>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Mô tả</label>
                                        <input type="text" class="form-control" name="description"
                                            value="{{ old('description') }}" placeholder="Tối đa 255 ký tự">
                                        <span style="color:red;">@error("description"){{ $message }} @enderror</span>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Kích Hoạt Thể Loại</label>
                                        <select name="status" class="form-select" id="inputGroupSelect02">
                                            <option value="1">Kích hoạt</option>
                                            <option value="0">Không kích hoạt</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Hình Ảnh Sản Phẩm</label>
                                        <input type="file" class="form-control" id="exampleInputEmail1" name="image"
                                            placeholder="">
                                        <span style="color:red;">@error("image"){{ $message }} @enderror</span>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Thể Loại Sản Phẩm</label>
                                        <select name="category_id" class="form-select" id="inputGroupSelect02">
                                            @foreach($category as $danhmuc)
                                            <option value="{{$danhmuc->id}}">{{$danhmuc->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div> <button type="submit" class="btn btn-primary">Submit</button>
                                        <a href="{{ route('products.index') }}" class="btn btn-danger">Hủy</a>
                                    </div>
                                </form>

                            </div>

                        </div>

                    </div>

                </div>

            </div>
        </div>
    </div>
    @endsection