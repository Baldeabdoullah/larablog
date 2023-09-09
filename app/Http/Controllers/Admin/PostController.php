<?php

namespace App\Http\Controllers\Admin;

use App\Actions\PostUpdateAction;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::all();

        return view('admin.post.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
     * 
     *  @param Post $post
     * @return \Illuminate\Http\Response
     */




    public function edit(Post $post)
    {
        $categories = Category::all();
        return view('admin.post.edit', compact('post', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     * 
     * @param \Illuminate\Http\Request
     *   @param Post $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post, PostUpdateAction $PostUpdateAction)
    {
        $PostUpdateAction->handle($request, $post);


        return redirect()->route('admin.posts.index')->with('success', 'Le post  a ete modifie');
    }

    /**
     * Remove the specified resource from storage.
     * 
     * @param Post $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {


        $post->delete();

        return redirect()->route('admin.posts.index')->with('success', 'le post  a ete supprime');
    }
}
