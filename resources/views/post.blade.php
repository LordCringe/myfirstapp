@extends('layouts.main')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col mt-4">
                <h1 class="mb-5 text-center">
                    {{ $post->title }}
                </h1>
                <p>By. <a class="text-decoration-none" href="/posts?author={{ $post->author->username }}"> {{ $post->author->name }}</a> in <a class="text-decoration-none" href="/posts?category={{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></p>
                @if ($post->image)
                <div style="max-height: 350px; overflow:hidden">
                    <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}" class="img-fluid">
                </div>
                
                @else
                <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" alt="{{ $post->category->name }}" class="img-fluid">
                @endif
                <article class="my-3">
                    {!! $post->body !!}
                </article>
            <a href="/posts" class=" mt-5 btn btn-primary">Back to Blog</a>
        </div>
    </div>
</div>

    
@endsection