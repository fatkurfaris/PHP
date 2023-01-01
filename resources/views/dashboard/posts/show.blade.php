@extends('dashboard.layouts.main')

@section('container')

<div class="container">
    <div class="row mb-5 mt-3">
        <div class="col-lg-8">
            <h1 class="mb-3">{{ $post->title }}</h1>

<a href="/dashboard/posts" class="btn btn-success"><span data-feather="arrow-left"></span> Back To all my Post</a>
<a href="/dashboard/posts/{{ $post->id }}/edit" class="btn btn-warning"><span data-feather="edit"></span> Edit</a>
<form action="/dashboard/posts/{{ $post->id }}" method="post" class="d-inline">
    @method('delete')
    @csrf
    <button class="btn btn-danger border-0" onclick="return confirm('Are You Sure For Deleting Data')"><span data-feather="x-circle" ></span>Delete</button>
  </form>

{{-- <h5>{{ $post->author->name }}</h5> --}}
<img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" class="img-fluid mt-3" alt="{{ $post->category->name }}">

<article class="my-3 fs-5">
    {!! $post->body !!}
</article>

<a href="/dashboard/posts" class="d-block mt-3 text-decoration-none">back to post</a>
        </div>
    </div>
</div>
@endsection