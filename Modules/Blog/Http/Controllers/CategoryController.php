<?php

namespace Modules\Blog\Http\Controllers;

use App\Http\Controllers\Controller;
use Modules\Blog\Database\Models\Category;
use Modules\Blog\Http\Requests\BlogCategoryStoreRequest;
use Modules\Blog\Http\Requests\BlogCategoryUpdateRequest;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('blog::category.index')->with('categories', Category::get());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('blog::category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BlogCategoryStoreRequest $request)
    {
        $category = new Category;
        $category->slug = $request->slug;
        $category->title = $request->title;
        $category->description = $request->description;
        $category->thumbnail = storeThumbnail($request->file('thumbnail'));
        $category->is_featured = $request->is_featured ? 1 : 0;
        $category->is_published = $request->is_published ? 1 : 0;
        $category->seo_title = $request->seo_title;
        $category->seo_description = $request->seo_description;

        if ($category->save()) {
            return redirect()->route('admin.category.index')->with('success', 'Successful');
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
        return view('blog::category.show')->with('category', Category::findOrFail($id));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('blog::category.edit')->with('category', Category::findOrFail($id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(BlogCategoryUpdateRequest $request, $id)
    {
        $category = Category::findOrFail($id);
        $category->slug = $request->slug;
        $category->title = $request->title;
        $category->description = $request->description;
        $category->thumbnail = updateThumbnail($request->file('thumbnail'), $category->thumbnail);
        $category->is_featured = $request->is_featured ? 1 : 0;
        $category->is_published = $request->is_published ? 1 : 0;
        $category->seo_title = $request->seo_title;
        $category->seo_description = $request->seo_description;

        if ($category->update()) {
            return redirect()->route('admin.category.index')->with('success', 'Successful');
        } else {
            return back()->with('error', 'Failed');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (Category::findOrFail($id)->delete()) {
            return redirect()->route('admin.category.index')->with('success', 'Successful');
        } else {
            return back()->with('error', 'Failed');
        }
    }
}
