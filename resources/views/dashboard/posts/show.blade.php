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

                <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning btn-sm mb-4"> <span
                        data-feather="edit"></span> Edit</a>

                <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
                    @method('delete')
                    @csrf
                    <button class="btn btn-danger btn-sm mb-4 border-0" onclick="return confirm('Are you sure')"><span
                            data-feather="x-circle"></span> Delete</button>
                </form>

                @if ($post->image)
                    <div style="max-height: 400px; overflow:hidden">
                        <img src="{{ asset('storage/' . $post->image) }}" class="img-fluid">
                    </div>
                @else
                    <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}"
                        alt="{{ $post->category->name }}" class="img-fluid">
                @endif

                <article class="my-3 fs-6">
                    {!! $post->body !!}
                </article>

            </div>
        </div>
    </div>
@endsection
