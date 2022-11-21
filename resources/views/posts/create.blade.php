@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-6">
            <p class="h2">Create New Post</p>
        </div>
        <div class="col-6">
          <div class="float-end mb-3">
            <a href="{{ route('home') }}" class="btn btn-warning">Back to Home</a>
          </div>
        </div>
 
        <div class="col-md-12">
            <form action="{{ route('posts.store') }}" method="POST">
                @CSRF
                <div class="card px-3 py-4">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label for="title" class="form-label">Title</label>
                                    <input type="text" class="form-control" id="title" name="title">
                                    <input type="hidden" class="form-control" id="uid" name="uid" value="{{ Auth::user()->id }}">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Short Description</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="1" name="excerpt"></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Content</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="6" name="content"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 d-grid gap-2">
                                <button type="submit" class="btn btn-primary">Create Post</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
