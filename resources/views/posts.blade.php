@extends('layouts.main')

@section('container')
    <h2 class="mb-5">{{ $title }}</h2>


    @if ($posts->count())
        <div class="card mb-3">
            <div class="position-absolute px-3 py-2" style="background: rgba(0, 0, 0, 0.5)">
                <a href="/categories/{{ $posts[0]->category->slug }}" class="text-decoration-none text-white text-bold">
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
                            href="/authors/{{ $posts[0]->author->username }}">{{ $posts[0]->author->name }}</a> in
                        <a href="/categories/{{ $posts[0]->category->slug }}"
                            class="text-decoration-none">{{ $posts[0]->category->name }}</a>
                        {{ $posts[0]->created_at->diffForHumans() }}
                    </small>
                </p>
                <p class="card-text">{{ $posts[0]->excerpt }}</p>
                <a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none btn btn-primary btn-sm">Read more
                </a>
            </div>
        </div>
    @else
        <p class="text-center fs-4">No post found.</p>
    @endif

    <div class="container">
        <div class="row">
            @foreach ($posts->skip(1) as $post)
                <div class="col-md-4 mb-2">
                    <div class="card">
                        <div class="position-absolute px-3 py-2 text-white text-bold"
                            style="background: rgba(0, 0, 0, 0.5)">
                            <a href="/categories/{{ $post->category->slug }}"
                                class="text-decoration-none text-white text-bold"> {{ $post->category->name }}</a>
                        </div>
                        <img src="https://source.unsplash.com/800x400?{{ $post->category->name }}" class="card-img-top"
                            alt="{{ $post->category->name }}">
                        <div class="card-body">
                            <h5 class="card-title"><a href="/posts/{{ $post->slug }}"
                                    class="text-decoration-none text-dark">{{ $post->title }}</a></h5>
                            <p>
                                <small>
                                    By. <a class="text-decoration-none"
                                        href="/authors/{{ $posts[0]->author->username }}">{{ $posts[0]->author->name }}</a>
                                    {{ $posts[0]->created_at->diffForHumans() }}
                                </small>
                            </p>
                            <p class="card-text">{{ $post->excerpt }}</p>
                            <a href="/posts/{{ $post->slug }}" class="btn btn-primary btn-sm">Read more</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
