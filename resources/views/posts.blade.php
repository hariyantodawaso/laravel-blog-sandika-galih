@extends('layouts.main')

@section('container')
    <h2 class="mb-3 text-center fs-2">{{ $title }}</h2>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <form action="/posts">
                    @if (request('category'))
                        <input type="hidden" name="category" value="{{ request('category') }}">
                    @endif

                    @if (request('author'))
                        <input type="hidden" name="author" value="{{ request('author') }}">
                    @endif

                    <div class="input-group mb-3">
                        <input type="text" value="{{ request('search') }}" name="search" class="form-control"
                            placeholder="Search...">
                        <button class="btn btn-success" type="submit">Search</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    @if ($posts->count())
        <div class="card mb-3">
            <div class="position-absolute px-3 py-2" style="background: rgba(0, 0, 0, 0.5)">
                <a href="/posts?category={{ $posts[0]->category->slug }}"
                    class="text-decoration-none text-white text-bold">
                    {{ $posts[0]->category->name }}</a>
            </div>
            <img src="https://source.unsplash.com/1200x400?{{ $posts[0]->category->name }}" class="card-img-top"
                alt="{{ $posts[0]->category->name }}">
            <div class="card-body">
                <h5 class="card-title"> <a href="/posts/{{ $posts[0]->slug }}"
                        class="text-decoration-none text-dark">{{ $posts[0]->title }}</a></h5>
                <p>
                    <small>
                        By. <a class="text-decoration-none"
                            href="/posts?author={{ $posts[0]->author->username }}">{{ $posts[0]->author->name }}</a>
                        in
                        <a href="/posts?category={{ $posts[0]->category->slug }}"
                            class="text-decoration-none">{{ $posts[0]->category->name }}</a>
                        {{ $posts[0]->created_at->diffForHumans() }}
                    </small>
                </p>
                <p class="card-text">{{ $posts[0]->excerpt }}</p>
                <a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none btn btn-primary btn-sm">Read more
                </a>
            </div>
        </div>

        <div class="container mb-5">
            <div class="row">
                @foreach ($posts->skip(1) as $post)
                    <div class="col-md-4 mb-2">
                        <div class="card">
                            <div class="position-absolute px-3 py-2 text-white text-bold"
                                style="background: rgba(0, 0, 0, 0.5)">
                                <a href="/posts?category={{ $post->category->slug }}"
                                    class="text-decoration-none text-white text-bold"> {{ $post->category->name }}</a>
                            </div>
                            <img src="https://source.unsplash.com/800x400?{{ $post->category->name }}"
                                class="card-img-top" alt="{{ $post->category->name }}">
                            <div class="card-body">
                                <h5 class="card-title"><a href="/posts/{{ $post->slug }}"
                                        class="text-decoration-none text-dark">{{ $post->title }}</a></h5>
                                <p>
                                    <small>
                                        By. <a class="text-decoration-none"
                                            href="/posts?author={{ $posts[0]->author->username }}">{{ $posts[0]->author->name }}</a>
                                        {{ $posts[0]->created_at->diffForHumans() }}
                                    </small>
                                </p>
                                <p class="card-text">{{ $post->excerpt }}</p>
                                <a href="/posts/{{ $post->slug }}" class="btn btn-primary btn-sm">Read more</a>
                            </div>
                        </div>
                    </div>
                @endforeach

                <div class="mt-3 d-flex justify-content-end">
                    {{ $posts->links('pagination::bootstrap-4') }}
                </div>
            </div>
        </div>
    @else
        <p class="text-center fs-4">No post found.</p>
        <a class="text-decoration-none btn btn-sm btn-success" href="/posts">Back to All Post</a>
    @endif
@endsection
