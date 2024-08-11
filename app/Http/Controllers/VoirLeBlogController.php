<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Blog;

class VoirLeBlogController extends Controller
{
    //

    public function get_blogs()
    {
        $blogs = Blog::all();

        return view('voirLeBlog', compact('blogs'));
    }

    public function get_a_blog(Blog $blog)
    {
        return view('article', compact('blog'));
    }
}
