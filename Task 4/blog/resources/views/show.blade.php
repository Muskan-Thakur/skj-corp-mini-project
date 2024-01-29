<!-- resources/views/show.blade.php -->

@extends('layouts.app')

@section('content')
<button onclick="location.href='/posts'" type="button">Go Back</button>

    <h2>{{ $post->title }}</h2>
    <p>{{ $post->content }}</p>

    <h3>Comments</h3>

    @foreach ($comments as $comment)
        <div>
            <strong>{{ $comment->commenter_name }}</strong>
            <p>{{ $comment->comment }}</p>
        </div>
    @endforeach

    <h4>Add a Comment</h4>
    <form method="post" action="{{ route('comments.store', ['postId' => $post->id]) }}">
   @csrf
        <label for="commenter_name">Username:</label>
        <input type="text" name="commenter_name" required>
        <br>
        <label for="comment">Comment:</label>
        <textarea name="comment" rows="5" required></textarea>
        <br>
        <button type="submit">Submit Comment</button>
        <button onclick="location.href='/'" type="button">Homepage</button>

    </form>
@endsection
