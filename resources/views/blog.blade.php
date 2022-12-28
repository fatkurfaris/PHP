{{-- @dd($post) --}}

@extends('layouts.main')

@section('container')

 @foreach ($post as $post)
<article class="mt-4">
    <h1>
        <a href="/posts/{{ $post->slug }}">{{ $post->title }}</a>
    </h1>
    <h5>By : {{ $post->author }}</h5>
    <p>{{ $post->excerpt }}</p>
</article>
 @endforeach


@endsection

