@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Edit Post </h1>
  </div>

<div class="col-lg-8">
    {{-- posts dengan method post akan langsung ke arah store --}}
    <form method="post" action="/dashboard/posts/{{ $post->id }}/">
        @method('put')
        @csrf
        <div class="mb-3">
          <label for="title" class="form-label">Title</label>
          <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" required value="{{ old('title', $post->title) }}">
          @error('title')
            <div class="invalid-feedback">
                {{ $message }}
          @enderror
        </div>

        <div class="mb-3">
          <label for="slug" class="form-label">Slug</label>
          <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug"  value="{{ old('slug', $post->slug) }}">
          @error('slug')
            <div class="invalid-feedback">
                {{ $message }}
          @enderror
        </div>

        <div class="mb-3">
            <label for="category" class="form-label">Category</label>
            <select class="form-select @error('category_id') is-invalid @enderror" name="category_id" id="category_id" required>
                {{-- <option selected>Open this select menu</option> --}}
               @foreach ($categories as $category)
               <option value="{{ $category->id }}">{{ $category->name }}</option>
               @endforeach
              </select>
              @error('category_id')
            <div class="invalid-feedback">
                {{ $message }}
          @enderror
          </div>

        <div class="mb-3">
          <label for="excerpt" class="form-label">Excerpt</label>
          <input type="text" class="form-control @error('excerpt') is-invalid @enderror" id="excerpt" name="excerpt" required value="{{ old('excerpt', $post->excerpt) }}">
          @error('excerpt')
          <div class="invalid-feedback">
              {{ $message }}
            @enderror
        </div>

        <div class="mb-3">
          <label for="body" class="form-label">Body</label>
          <input type="text"  rows="3" class="form-control @error('body') is-invalid @enderror" id="body" name="body"  value="{{ old('body', $post->body) }}">
          @error('body')
            <div class="invalid-feedback">
                {{ $message }}
          @enderror
        </div>
        <button type="submit" class="btn btn-primary">Update Post</button>
      </form>
</div>
@endsection