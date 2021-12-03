@extends('dashboard.layout.main')

@section('container')
<div class="container">
  <div class="row my-3">
    <div class="col-lg-8">
      <h2 class="mb-3">{{ $post->title }}</h2>

      <a href="/dashboard/posts" class="btn btn-secondary"><span data-feather="arrow-left"></span> Back to my posts</a>
      <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-primary"><span data-feather="edit"></span> Edit</a>
      <form action="/dashboard/posts/{{ $post->slug }}" method="POST" class="d-inline">
        @method('delete')
        @csrf
        <button class="btn btn-danger border-0" onclick="return confirm('Are you sure!')"><span data-feather="x-circle"></span> Delete</button>
      </form>

      @if($post->image)
      <div style="max-height: 350px; overflow:hidden">
        <img src="{{ asset('storage/' . $post->image) }}" alt="{{$post->category->name}}" class="img-fluid mt-3">
      </div>
      @else
      <img src="https://source.unsplash.com/800x400?{{$post->category->name}}" alt="{{$post->category->name}}" class="img-fluid mt-3">
      @endif


      <article class="my-4 fs-5">
        {!! $post->body !!}
      </article>

      <a href="/posts" class="d-block mt-3">Back to posts</a>
    </div>
  </div>
</div>

@endsection