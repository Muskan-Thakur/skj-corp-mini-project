<!-- resources/views/create.blade.php -->

@extends('layouts.app')

@section('content')
    <h2>Create a New Blog Post</h2>

    <form method="post" action="{{ route('posts.store') }}">
        @csrf
        <label for="title">Title:</label>
        <input type="text" name="title" required>
        <br>
        <label for="content">Content:</label>
        <textarea name="content" rows="5" required></textarea>
        <br>
        <button type="submit" class="btn btn-primary">Create Post</button>
    </form>
@endsection
