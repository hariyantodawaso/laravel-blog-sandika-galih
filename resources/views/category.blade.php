@extends('layouts.main')

@section('container')
    <h1 class="mb-3">Post Category: {{ $category }}</h1>

    @foreach ($posts as $post)
        <article class="mb-3">
            <h2>
                <a href="/posts/{{ $post->slug }}" class="text-decoration-none">{{ $post->title }}</a>
            </h2>
            <p>{{ $post->excerpt }}</p>
        </article>
    @endforeach
@endsection


{{-- Category::create([
    'name' => 'Personal',
    'slug' => 'personal',
])


Post::create([
    'title' => 'Judul Ketiga',
    'category_id' => 3,
    'slug' => 'judul-ketiga',
    'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
    'body' => 'Nostrum optio nisi, quasi perferendis id laborum fugiat neque tempora voluptate repellendus! Et vitae at laboriosam impedit doloremque animi reiciendis minima, rerum provident esse, suscipit, ratione quae quasi odit adipisci ad accusantium. Magnam harum assumenda dicta distinctio maiores doloribus sit mollitia ipsum? Harum quisquam deleniti sequi deserunt quam totam minima odio necessitatibus delectus nesciunt quod illo, mollitia impedit fugit alias asperiores sapiente! Quam laboriosam voluptatibus corrupti ex minus iste nobis vel incidunt?',
]) --}}
