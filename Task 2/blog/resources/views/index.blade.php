<!-- resources/views/index.blade.php -->

@extends('layouts.app')

@section('content')
    <h2>All Blog Posts</h2>

    @foreach($posts as $post)
        <div>
            <h3>{{ $post->title }}</h3>
            <p>{{ $post->content }}</p>
            <p>Published on: {{ $post->created_at->format('F d, Y H:i') }}</p>
        </div>
        <hr>
    @endforeach
@endsection
