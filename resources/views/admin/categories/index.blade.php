@extends('layouts.admin')

@section('title')
Thể Loại
@endsection

@section('content')

<h1 class="mt-4">Thể Loại</h1>
<table class="table">

    @if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
    @endif
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Tên</th>
            <th scope="col">Mô Tả</th>
            <th scope="col">Trạng Thái</th>
            <th scope="col" style="
    width: 100px;
">Chức Năng</th>
        
        </tr>
    </thead>
    <tbody>
        @foreach ($categories as $key => $category)
        <tr>
            <td>{{ $category->id }}</td>
            <td>{{ $category->name }}</td>
            <td>{!!$category->description !!}</td>
            <td>
                @if ($category->status == 0)
                <span class='text text-success'>Ẩn</span>
                @else
                <span class='text text-success'>Kích Hoạt</span>
                @endif
            </td>
            <td>
                <a href="{{route('categories.edit',[$category->id])}}" class="btn btn-primary ">Edit</a>
            </td>
            <td>
                <form action="{{route('categories.destroy',[$category->id])}}" method="POST">
                    @method('DELETE')
                    @csrf
                    <button onclick="return confirm('Xóa sản phẩm {{ $category->name }} không?');"
                        class="btn btn-danger">Delete</button>
                </form>
            </td>

        </tr>
        @endforeach
    </tbody>

</table>

<nav aria-label="Page navigation example">
    <ul class="pagination">
        <span aria-hidden="true"> {{ $categories->links() }}</span>
    </ul>
</nav>
</div>

</div>
</main>
@endsection