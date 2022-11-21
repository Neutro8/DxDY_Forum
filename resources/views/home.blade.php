@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-6">
            <p class="h2">DxDY Forum</p>
        </div>
        <div class="col-6">
          <div class="float-end mb-3">
            <a href="{{ route('posts.create') }}" class="btn btn-success">Create New Post</a>
          </div>
        </div>
 
        <div class="col-md-12">
            @foreach($posts as $post)
            <div class="card my-3">
                <div class="row card-body  px-3 py-4">
                    <div class="col-md-8">
                        <div class="container">
                            <p class="h2"><strong>{{ $post->title }}</strong></p>
                            <p class="description">{{ $post->excerpt }}</p>
                        </div>
                    </div>
                    <div class="col-md-4 pt-4 px-5">
                        <a type="button" class="btn btn-primary btn-lg mx-2">View Post</a>
                        <a type="button" class="btn btn-danger btn-lg">Delete Post</a>
                    </div>
                </div>
                <div class="card-footer">
                    <span class="badge text-bg-dark">Bootstrap</span>
                    <span class="badge text-bg-dark">Laravel</span>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
