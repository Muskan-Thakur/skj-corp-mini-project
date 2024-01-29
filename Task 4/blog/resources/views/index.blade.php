<!-- resources/views/index.blade.php -->

@extends('layouts.app')

@section('content')
    <h2>All Blog Posts</h2>
    <button onclick="location.href='/'" type="button">Homepage</button>
    @foreach($posts as $post)
    <div>
        <h3>{{ $post->title }}</h3>
        <p>{{ $post->content }}</p>
        <a href="{{ route('posts.show', ['id' => $post->id]) }}" class="btn btn-secondary">Post Details</a>
    </div>
    <hr>
@endforeach
@endsection
