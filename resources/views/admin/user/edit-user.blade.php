@extends('admin.master')
@section('title')
    Update User
@endsection
@section('content')
    <main>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="card shadow-lg border-0 rounded-lg mt-5">
                        <div class="card-header"><h3 class="text-center font-weight-light my-4">Update Product</h3></div>
                        <div class="card-body">
                            <form action="{{route('update.user') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-floating mb-3">
                                    <input type="hidden" name="user_id" value="{{$user->id}}">
                                    <input class="form-control" value="{{$user->name}}" name="name" type="text" placeholder="Name" />
                                    <label> Name</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input class="form-control" value="{{$user->email}}" name="email" type="text" placeholder="Email" />
                                    <label>Email</label>
                                </div>
                                @if( Auth::user()->id == $user->id)
                                    <div class="form-floating mb-3">
                                        <input class="form-control" name="password" type="text" placeholder="Password" />
                                        <label>Password</label>
                                    </div>
                                @endif
                                <div class="mt-4 mb-0">
                                    <div class="d-grid">
                                        <button type="submit" class="btn btn-primary btn-block">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

@endsection
