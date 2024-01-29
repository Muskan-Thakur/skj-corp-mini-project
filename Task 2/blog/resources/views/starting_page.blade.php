<!-- resources/views/starting_page.blade.php -->

@extends('layouts.app')

@section('content')
    <h2>Welcome to the Blogging System</h2>
    <a href="{{ route('posts.create') }}" class="btn btn-primary">Create New Post</a>
    <a href="{{ route('posts.index') }}" class="btn btn-success">Display Existing Posts</a>
@endsection
