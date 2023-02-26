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
                            <th>Email</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @php $i=1 @endphp
                        @foreach($users as $user)
                            <tr>
                                <td>{{ $i++ }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>
                                    <a href="{{route('edit.user',['id'=>$user->id])}}" class="btn btn-primary btn-sm">Edit</a>
                                    <form action="{{ route('delete') }}" method="post">
                                        @csrf
                                        <input type="hidden" name="product_id" value="{{ $user->id }}">
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
