@extends('admin.master')
@section('title')
    Manage Product
@endsection
@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Tables</h1>

            <div class="card mb-4">
                <div class="card-body">
                    <a class="btn btn-success" href="{{ route('add.product') }}">Add Product</a>
                    <h3>{{ session('message') }}</h3>
                </div>
            </div>
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    DataTable Example
                </div>
                <div class="card-body">
                    <table id="datatablesSimple">
                        <thead>
                        <tr>
                            <th>sl</th>
                            <th>Name</th>
                            <th>Category name</th>
                            <th>Brand Name</th>
                            <th>Price</th>
                            <th>description</th>
                            <th>Image</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @php $i=1 @endphp
                        @foreach($products as $product)
                            <tr>
                                <td>{{ $i++ }}</td>
                                <td>{{ $product->name }}</td>
                                <td>{{ $product->category_name }}</td>
                                <td>{{ $product->brand_name }}</td>
                                <td>{{ $product->price }}</td>
                                <td>{{ $product->description }}</td>
                                <td>
                                    <img src="{{ asset($product->image) }}" style="height: 50px;width: 50px" alt="">
                                </td>
                                <td>{{ $product->status == 1 ? 'published' : 'unpublished' }}</td>
                                <td>
                                    <a href="{{route('edit.product',['id'=>$product->id])}}" class="btn btn-primary btn-sm">Edit</a>
                                    @if($product->status == 1)
                                        <a href="{{ route('status',['id'=>$product->id]) }}" class="btn btn-warning btn-sm">unpublished</a>
                                    @else
                                        <a href="{{ route('status',['id'=>$product->id]) }}" class="btn btn-success btn-sm">published</a>
                                    @endif
                                    <form action="{{ route('delete') }}" method="post">
                                        @csrf
                                        <input type="hidden" name="product_id" value="{{ $product->id }}">
                                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </main>

@endsection
