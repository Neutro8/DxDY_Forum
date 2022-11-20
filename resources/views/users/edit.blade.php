@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-6">
            <p class="h2">Edit User</p>
        </div>
        <div class="col-6">
          <div class="float-end mb-3">
            <a href="{{ route('users.index') }}" class="btn btn-warning">Back to Index</a>
          </div>
        </div>
 
        <div class="col-md-12">
            <form action="{{ route('users.update', $users->id) }}" method="POST">
                {{method_field('PUT')}}
                @CSRF
                <div class="card px-3 py-4">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="name" class="form-label">Name</label>
                                    <input type="text" class="form-control" id="name" name="name" placeholder="John Doe" value="{{$users->name}}">
                                </div>
                                <div class="mb-3">
                                    <label for="password" class="form-label">Password</label>
                                    <input type="password" class="form-control" id="password" name="password" value="{{$users->password}}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="email" name="email" placeholder="alias@domain.com" value="{{$users->email}}">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Access Level</label>
                                    <select class="form-select" aria-label="Default select example" name="accesslvl">
                                        <option selected disabled>Select Access Level</option>
                                        <option value="0">General User</option>
                                        <option value="1">Administrator</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 d-grid gap-2">
                                <button type="submit" class="btn btn-primary">Update User</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
