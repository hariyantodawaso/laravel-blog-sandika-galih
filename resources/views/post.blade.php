 @extends('layouts.main')

 @section('container')
     <article>
         <h2>{{ $post->title }}</h2>
         {{ $post->body }}
     </article>

     <a href="/posts">Back to Posts</a>
 @endsection


 {{-- Post::create([
     'title' => 'Judul Kedua',
     'slug' => 'judul-kedua',
     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit nulla natus iusto, nesciunt similique dolore explicabo, fuga error illum facilis ab voluptas quam corporis sunt soluta! Itaque totam ipsa sunt iste rem molestiae aspernatur ex, enim eaque repellat placeat quo nobis qui vitae deleniti cumque quibusdam voluptates quod quas distinctio velit sit ab sint! Eaque voluptas ad incidunt praesentium delectus temporibus ullam enim ratione dolores numquam quod esse in officiis similique dolorem aperiam illo ducimus, nam necessitatibus! Nemo voluptates culpa neque ipsam magni inventore nesciunt aspernatur provident expedita. Ea eaque sunt doloremque minus autem perspiciatis, nulla asperiores in enim soluta?'
 ]) --}}
