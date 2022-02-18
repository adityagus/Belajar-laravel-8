@extends('layouts.main')
 
@section('container')

<article>
  <h2>{{ $post->title }}</h2>
  
  <p>By. Aditya Gustian in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>
  {!! $post->body !!} 
  <br>
</article>

  <a href="/posts">Back to post</a>
@endsection