@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Details Post</h1>
    </div>

    <div class="container">
        <div class="row my-3">
            <div class="col-lg-8 p-0">
                <h3 class="mb-3">{{ $post->title }}</h3>

                <a href="/dashboard/posts" class="btn btn-success btn-sm mb-4"> <span data-feather="arrow-left"></span> Back
                    to all my post</a>

                <a href="#" class="btn btn-warning btn-sm mb-4"> <span data-feather="edit"></span> Edit</a>

                <a href="#" class="btn btn-danger btn-sm mb-4"> <span data-feather="x-circle"></span>
                    Delete</a>

                <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}"
                    alt="{{ $post->category->name }}" class="img-fluid">

                <article class="my-3 fs-6">
                    {!! $post->body !!}
                </article>

            </div>
        </div>
    </div>
@endsection
