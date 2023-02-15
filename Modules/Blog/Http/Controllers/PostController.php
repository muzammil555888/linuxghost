<?php

namespace Modules\Blog\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Modules\Blog\Database\Models\Category;
use Modules\Blog\Database\Models\Post;
use Modules\Blog\Database\Models\PostCategory;
use Modules\Blog\Http\Requests\BlogPostStoreRequest;
use Modules\Blog\Http\Requests\BlogPostUpdateRequest;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('blog::post.index')->with('posts', Post::get());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('blog::post.create')->with('categories', Category::get());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BlogPostStoreRequest $request)
    {
        $post = new Post;
        $post->user_id = 0;
        $post->slug = $request->slug;
        $post->title = $request->title;
        $post->description = $request->description;
        $post->content = $request->content;
        $post->thumbnail = storeThumbnail($request->file('thumbnail'));
        $post->image = storeImage($request->file('image'));
        $post->is_featured = $request->is_featured ? 1 : 0;
        $post->is_published = $request->is_published ? 1 : 0;
        $post->seo_title = $request->seo_title;
        $post->seo_description = $request->seo_description;

        if ($post->save()) {
            foreach($request->categories as $category_id) {
                $post_category = new PostCategory;
                $post_category->post_id = $post->id;
                $post_category->category_id = $category_id;
                $post_category->save();
            }
            return redirect()->route('admin.post.index')->with('success', 'Successful');
        } else {
            return back()->with('error', 'Failed');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('blog::post.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('blog::post.edit')->with('categories', Category::get());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(BlogPostUpdateRequest $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
