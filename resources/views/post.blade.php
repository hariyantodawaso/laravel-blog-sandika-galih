 @extends('layouts.main')

 @section('container')
     <div class="container">
         <div class="row justify-content-center">
             <div class="col-md-10 mb-5">

                 <h2 class="mb-3">{{ $post->title }}</h2>

                 <p>
                     <small>
                         By. <a class="text-decoration-none"
                             href="/authors/{{ $post->author->username }}">{{ $post->author->name }}</a> in <a
                             href="/categories/{{ $post->category->slug }}"
                             class="text-decoration-none">{{ $post->category->name }}</a>
                         {{ $post->created_at->diffForHumans() }}
                     </small>
                 </p>

                 <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}"
                     alt="{{ $post->category->name }}" class="img-fluid">

                 <article class="my-3 fs-5">
                     {!! $post->body !!}
                 </article>

                 <a href="/posts" class="d-block mt-3 text-decoration-none">Back to Posts</a>
             </div>
         </div>
     </div>
 @endsection
