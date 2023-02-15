@extends('admin.layout.master')

@section('content')
    <form action="{{ route('admin.category.store') }}" method="POST" enctype="multipart/form-data">
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

            <div class="col-md-4 col-lg-4 col-xl-3">
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

                {{-- <div class="card">
                    <div class="card-body">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="Business">
                            <label class="form-check-label" for="Business">Business</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="Politics">
                            <label class="form-check-label" for="Politics">Politics</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="Entertainment">
                            <label class="form-check-label" for="Entertainment">Entertainment</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="Sports">
                            <label class="form-check-label" for="Sports">Sports</label>
                        </div>
                    </div>
                </div> --}}

                <div class="card shadow-sm border">
                    <div class="card-body">
                        <img src="{{ asset('dashboard/images/error/forgot-password-frent-img.jpg') }}" alt="" class="w-100 border rounded" style="max-height: 200px !important">
                        <div class="mt-3">
                            <label for="thumbnail" class="form-label">Thumbnail</label>
                            <input class="form-control" type="file" name="thumbnail" id="thumbnail" accept="image/*">
                        </div>
                    </div>
                </div>

                <div class="">
                    <button class="btn rounded-1 btn-primary" type="submit">Save & Exit</button>
                    <button class="btn rounded-1 btn-success" type="reset">Reset</button>
                </div>
            </div>
        </div>
    </form>
@endsection
