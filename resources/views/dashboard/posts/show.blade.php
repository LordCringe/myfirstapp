@extends('dashboard.layouts.main')

@section('content')

<div class="container">
    <div class="row my-3">
        <div class="col-lg-8">
                <h1 class="mb-3">
                    {{ $post->title }}
                </h1>
                
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
                <a href="/dashboard/posts" class="btn btn-success mt-4"> <span data-feather="arrow-left"></span> Back to My Posts</a>
                <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning mt-4"> <span data-feather="edit"></span> Edit</a>
                <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
                    @method('delete')
                    @csrf
                    <button class="btn btn-danger mt-4" onclick="return confirm('Are you sure?')"><span data-feather="trash"></span>Delete</button>
                </form>
        </div>
    </div>
</div>

@endsection