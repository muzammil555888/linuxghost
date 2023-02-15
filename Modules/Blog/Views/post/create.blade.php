@extends('admin.layout.master')

@section('tagsinput', true)

@section('content')
    <form action="{{ route('admin.post.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-md-8 col-lg-8 col-xl-9">
                <div class="card">
                    <div class="card-body">
                        <div class="border p-3 rounded">
                            <div class="row">
                                <div class="col-12 my-3">
                                    <label class="form-label">Title</label>
                                    <input id="title" name="title" type="text" class="form-control" required>
                                </div>
                                <div class="col-12 my-3">
                                    <label class="form-label">Slug</label>
                                    <input id="slug" name="slug" type="text" class="form-control" required>
                                </div>
                                <div class="col-12 my-3">
                                    <label class="form-label">Description</label>
                                    <textarea id="description" name="description" cols="30" rows="5" class="form-control" required></textarea>
                                </div>
                                <div class="my-3">
                                    <label class="form-label">Content</label>
                                    <textarea name="content" id="content" cols="30" rows="10" class="form-control"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-body">
                        <div class="border p-3 rounded">
                            <div class="row">
                                <div class="col-12 my-3">
                                    <label class="form-label">SEO Title</label>
                                    <input id="seo_title" name="seo_title" type="text" class="form-control" required>
                                </div>
                                <div class="col-12 my-3">
                                    <label class="form-label">SEO Description</label>
                                    <textarea id="seo_description" name="seo_description" cols="30" rows="5" class="form-control" required></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <div class="form-check form-switch">
                            <input class="form-check-input" id="is_featured" name="is_featured" type="checkbox" value="1">
                            <label class="form-check-label" for="is_featured">Is Featured</label>
                        </div>
                        <div class="form-check form-switch">
                            <input class="form-check-input" id="is_published" name="is_published" type="checkbox" value="1">
                            <label class="form-check-label" for="is_published">Is Published</label>
                        </div>
                    </div>
                </div>

                <div class="card shadow-sm border">
                    <div class="card-body">
                        @foreach ($categories as $category)
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="categories[]" value="{{ $category->id }}" id="{{ $category->id }}">
                            <label class="form-check-label" for="{{ $category->id }}">{{ $category->title }}</label>
                        </div>
                        @endforeach
                    </div>
                </div>

                <div class="card shadow-sm border">
                    <div class="card-body">
                        <img src="{{ asset('dashboard/images/error/forgot-password-frent-img.jpg') }}" alt="" class="w-100 border rounded" style="max-height: 200px !important">
                        <div class="mt-3">
                            <label for="thumbnail" class="form-label">Thumbnail</label>
                            <input class="form-control" type="file" name="thumbnail" id="thumbnail" accept="image/*">
                        </div>
                    </div>
                </div>

                <div class="card shadow-sm border">
                    <div class="card-body">
                        <img src="{{ asset('dashboard/images/error/forgot-password-frent-img.jpg') }}" alt="" class="w-100 border rounded" style="max-height: 200px !important">
                        <div class="mt-3">
                            <label for="image" class="form-label">Image</label>
                            <input class="form-control" type="file" name="image" id="image" accept="image/*">
                        </div>
                    </div>
                </div>

                <div class="card shadow-sm border">
                    <div class="card-body">
                        <div class="mb-3">
                            <label class="form-label">Basic</label>
                            <input type="text" class="form-control" data-role="tagsinput" value="football">
                        </div>
                    </div>
                </div>

                <div class="">
                    <button class="btn rounded-1 btn-primary">Save & Exit</button>
                    <button class="btn rounded-1 btn-success">Reset</button>
                </div>
            </div>
        </div>
    </form>
@endsection
