<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Http\Requests\StoreBlogRequest;
use App\Http\Requests\UpdateBlogRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $blogs = Blog::all();
        
        return view('admin.blogs.index', compact('blogs'));
    }

    public function create()
    {
        //
        return view('admin.blogs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
           $datas = $request->validate([
                'type_blog' => 'required',
                'contenu' => 'required',

            ]);

            $file_name = $request->file('image_blog')->getClientOriginalName();

            $path = $request->file('image_blog')->storeAs('images_blogs', $file_name, 'public');

            $datas['image_blog'] = '/storage/'.$path;

           

            Blog::create($datas);

            return redirect()->route('blogs.index')->with('success', 'Article crée avec succès !');




    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Blog $blog)
    {
        //
        return view('admin.blogs.edit', compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,Blog $blog)
    {
        //

        $datas = $request->validate([
            'type_blog' => 'required',
            'contenu' => 'required',

        ]);

        $file_name = $request->file('image_blog')->getClientOriginalName();

        $path = $request->file('image_blog')->storeAs('images_blogs', $file_name, 'public');

        $datas['image_blog'] = '/storage/'.$path;

        $blog->update($datas);

        return redirect()->route('blogs.index')->with('success', 'Article Modifié avec succès !');


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Blog $blog)
    {

        $blog->delete();


        Storage::disk('public')->delete('/storage/images_blogs'.$blog->image_logo);

        return redirect()->route('blogs.index')->with('success', 'Article Supprimé avec succès !');
    }
}
