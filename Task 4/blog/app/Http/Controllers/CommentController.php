<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// app/Http/Controllers/CommentController.php

use App\Models\Comment;
// app/Http/Controllers/CommentController.php


class CommentController extends Controller
{
    public function store(Request $request, $postId)
{
    $validatedData = $request->validate([
        'commenter_name' => 'required',
        'comment' => 'required',
    ]);

    // dd($validatedData, $postId); // Add this line to inspect the validated data and postId

    Comment::create([
        'post_id' => $postId,
        'commenter_name' => $validatedData['commenter_name'],
        'comment' => $validatedData['comment'],
    ]);

    return redirect()->route('posts.show', ['id' => $postId]);
}
}
