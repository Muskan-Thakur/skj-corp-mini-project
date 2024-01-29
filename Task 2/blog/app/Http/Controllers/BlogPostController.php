<?php
// app/Http/Controllers/BlogPostController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BlogPost;

class BlogPostController extends Controller
{
    public function startingPage()
    {
        return view('starting_page');
    }

    public function create()
    {
        return view('create');
    }

    
        // Validation logic here...
        public function store(Request $request)
        {
            $validatedData = $request->validate([
                'title' => 'required|max:255',
                'content' => 'required',
            ]);
        
            BlogPost::create($validatedData);
        
            return redirect()->route('posts.index');
        }
        
     

    public function index()
    {
        $posts = BlogPost::all();
        return view('index', compact('posts'));
    }
}
