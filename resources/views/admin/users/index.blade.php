@extends('layouts.admin')

@section('title')
Thể Loại
@endsection

@section('content')
<h1 class="mt-4">Thể Loại</h1>
<table class="table">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Tên</th>
            <th scope="col">Email</th>
            <th scope="col">Chức Năng</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($users as $key => $user)
        <tr>
            <td>{{ ++$key }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>
                <a href="{{route('users.edit',[$user->id])}}" class="btn btn-primary ">Edit</a>
            </td>
            <td>
                <form action="{{route('users.destroy',[$user->id])}}" method="POST">
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
<nav aria-label="Page navigation example">
    <div class='float:right'>
        <ul class="pagination">
            <span aria-hidden="true"> {{ $users->links() }}</span>
        </ul>
    </div>
</nav>
</div>
</main>
@endsection