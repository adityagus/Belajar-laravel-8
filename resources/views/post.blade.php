@extends('layouts.main')

@section('container')

<article>
  <p>By. <a href="/authors/{{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> in <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></p>
  {!! $post->body !!}
  <br>
</article>

<a href="/posts">Back to post</a>
@endsection
