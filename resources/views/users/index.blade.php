@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-6">
            <p class="h2">User Management</p>
        </div>
        <div class="col-6">
          <div class="float-end mb-3">
            <a href="{{ route('users.create') }}" class="btn btn-success">Create New User</a>
          </div>
        </div>
 
        <div class="col-md-12">
            <div class="card px-3 py-4">
                <div class="container">
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email Address</th>
                            <th scope="col">Access Level</th>
                            <th scope="col">Actions</th>
                          </tr>
                        </thead>
                        <tbody>
                        @foreach($users as $user)
                          <tr>
                            <th scope="row">{{ $user->id }}</th>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>
                                @if( $user->isAdmin <> 1)
                                <span class="badge rounded-pill text-bg-info">General User</span>
                                @else
                                <span class="badge rounded-pill text-bg-primary">Administrator</span>
                                @endif
                            </td>
                            <td>
                                <a href="{{route('users.edit', $user->id)}}" class="btn btn-outline-warning btn-sm">Edit</a>
                                <a href="#" class="btn btn-outline-danger btn-sm">Delete</a>
                            </td>
                          </tr>
                        @endforeach
                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
