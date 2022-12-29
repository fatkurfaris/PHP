
@extends('layouts.main')

@section('container')
<h2>{{ $post->title }}</h2>

<p>By <a href="/author/{{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> in <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></p>

<h5>{{ $post->author->name }}</h5>
{!! $post->body !!}

<a href="/blog" class="d-block mt-3 text-decoration-none">back to post</a>
@endsection



{{-- Post::create([
    'title' => 'judul keempat',
    'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit',
    'body' => '<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Possimus soluta dolore perferendis ratione consequuntur saepe nobis iure.</p> <p>Reprehenderit at odit eligendi porro, delectus voluptate hic atque eum, perspiciatis repudiandae ex, distinctio unde id quo ab similique sequi? Minima mollitia aliquam dicta temporibus voluptas esse dolores obcaecati explicabo inventore saepe recusandae odit placeat rerum ab laborum asperiores, atque eius expedita officia. Nostrum, repellendus eveniet consequuntur aut corporis perspiciatis aperiam fugiat illo nemo laudantium voluptatem laborum natus, iusto possimus. Incidunt ad nulla autem quidem rem reiciendis eveniet, sit ullam, aspernatur quos optio saepe vel velit harum commodi at laudantium, placeat repudiandae? Accusantium veritatis et distinctio tenetur? Corporis mollitia ipsum qui, fuga illum dolorem dicta saepe et velit repellendus, laudantium beatae quidem nisi facilis, est nesciunt! Odit aliquam distinctio dolorem consequuntur illo. Aliquid perspiciatis pariatur, omnis minima perferendis officia a quibusdam at dolorem!</p>'
]) --}}