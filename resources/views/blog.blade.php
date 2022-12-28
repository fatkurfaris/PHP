{{-- @dd($post) --}}

@extends('layouts.main')

@section('container')

 @foreach ($posts as $post)
<article class="mt-4 border-bottom pb-4">
    <h1>
        <a href="/posts/{{ $post->slug }}" class="text-decoration-none">{{ $post->title }}</a>
    </h1>
    
    <h5>By <a href="#" class="text-decoration-none">{{ $post->user->name }}</a> in <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></h5>
    <p>{{ $post->excerpt }}</p>

    <a href="/posts/{{ $post->slug }}" class="text-decoration-none">Read More..</a>
</article>
 @endforeach


@endsection

