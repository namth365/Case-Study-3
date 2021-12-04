@extends('layouts.admin')

@section('title','Khách Hàng')
@section('content')
                    <h1 class="mt-4">Khách Hàng</h1>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>                                
                                <th scope="col">Email</th>
                                <th scope="col">SDT</th>
                                <th scope="col">Địa Chỉ</th>
                                <th scope="col">Chức Năng</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($customers as $key => $customer)
                            <tr>
                                <td>{{ ++$key }}</td>
                                <td>{{ $customer->email }}</td>
                                <td>{{ $customer->phone }}</td>
                                <td>{{ $customer->address }}</td>
                                <td>
                                    <a href="{{route('customers.edit',[$customer->id])}}"
                                        class="btn btn-primary ">Edit</a>
                                </td>
                                <td>
                                    <form action="{{route('customers.destroy',[$customer->id])}}" method="POST">
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
                        <ul class="pagination">
                            <span aria-hidden="true"> {{ $customers->links() }}</span>
                        </ul>
                    </nav>
                </div>

            </main>
            @endsection