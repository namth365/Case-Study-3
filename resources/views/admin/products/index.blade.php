@extends('layouts.admin')

@section('title')
Sản Phẩm
@endsection

@section('content')
<div class='card'>
    <div class='card-header'>
        <h1 class="mt-12">Sản Phẩm</h1>
        @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
        @endif
        <form method="get">
            <div class="row">
                <div class="col-lg-4">

                    <select class="form-control" name="category_id">
                        <option value="">All</option>
                        @foreach ($products as $product)
                        <option value="{{ $product->category->id }}">{{ $product->category->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-lg-6">
                    <input class="form-control" type="text" placeholder="Search for..." name="search" />
                </div>
                <div class="col-lg-2">
                    <button type="submit" class="btn btn-primary">Search</button>
                </div>
            </div>
        </form>
    </div>

    <div class='card-body'>
        <div class="row">
            <div class="col-lg-12">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col" style=" width: 250px;">Tên</th>
                            <th scope="col">Sold</th>
                            <th scope="col">Giá</th>
                            <th scope="col">Mô Tả</th>
                            <th scope="col">Ảnh</th>
                            <th scope="col">Thể Loại</th>
                            
                            <th scope="col" style=" width: 100px;">Trạng Thái</th>
                            <th scope="col" style=" width: 100px;">Chức Năng</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $key => $product)
                        <tr>
                            <td>{{ ++$key }}</td>
                            <td>{{ $product->name }}</td>
                            <td>{{ $product->sold }}</td>
                            <td>{{ $product->price }}</td>
                            <td>{{ $product->description }}</td>
                        
                            <td><img src="{{ asset('storage/app/public/images/'.$product->image) }}" alt=""
                                    style="width: 150px">
                            </td>
                            <td>{{ $product->category->name }}</td>
                            <td>
                                @if ($product->status == 0)
                                <span class='text text-success'>Ẩn</span>
                                @else
                                <span class='text text-success'>Kích Hoạt</span>
                                @endif
                            </td>
                            <td>
                                <a href="{{route('products.edit',[$product->id])}}" class="btn btn-primary ">Edit</a>
                            </td>
                            <td>
                                <form action="{{route('products.destroy',[$product->id])}}" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <button onclick="return confirm('Bạn muốn xóa sản phẩm này không?');"
                                        class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
        <nav aria-label="Page navigation example">
            <div class='float:right'>
                <ul class="pagination">
                    <span aria-hidden="true"> {{ $products->links() }}</span>
                </ul>
            </div>
        </nav>
    </div>
</div>
</main>
@endsection