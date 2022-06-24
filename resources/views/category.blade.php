@extends('layouts.main')

@section('container')
  <div class="container">
  </div>
  <h1 class="mb-5"> {{ $title }}</h1>

  @foreach ($posts as $post)
  <article>
    <h2>
      <a href="/posts/{{ $post->slug }}">{{ $post->title }}</a>
    </h2>
    <p>{{ $post->excerpt }}</p>
  </article>
  @endforeach
@endsection

