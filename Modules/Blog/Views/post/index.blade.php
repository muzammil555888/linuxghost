@extends('admin.layout.master')

@section('content')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <h5 class="mb-0">Posts</h5>
                        <form class="ms-auto position-relative">
                            <div class="position-absolute top-50 translate-middle-y search-icon px-3"><i class="bi bi-search"></i>
                            </div>
                            <input class="form-control ps-5" type="text" placeholder="search">
                        </form>
                    </div>
                    <div>
                        <a href="{{ route('admin.post.create') }}" class="btn btn-primary" data-bs-toggle="tooltip" data-bs-placement="right" title="Create">
                            <i class="bi bi-plus m-0"></i>
                        </a>
                    </div>
                    <div class="table-responsive mt-3">
                        <table class="table align-middle">
                            <thead class="table-secondary">
                                <tr>
                                    <th>#</th>
                                    <th>Thumbnail</th>
                                    <th>Image</th>
                                    <th>Title</th>
                                    <th>Slug</th>
                                    <th>Views</th>
                                    <th>Categories</th>
                                    <th>IsFeatured</th>
                                    <th>IsPublished</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($posts as $key => $post)
                                <tr>
                                    <td>{{ $key+1 }}</td>
                                    <td>
                                      <img src="{{ asset($post->thumbnail) }}" class="rounded-circle" width="44" height="44" alt="">
                                    </td>
                                    <td>
                                      <img src="{{ asset($post->image) }}" class="rounded-circle" width="44" height="44" alt="">
                                    </td>
                                    <td>{{ $post->title }}</td>
                                    <td>{{ $post->slug }}</td>
                                    <td>{{ $post->views }}</td>
                                    <td>
                                        @foreach ($post->categories as $category)
                                            {{ $category->title }}
                                        @endforeach
                                    </td>
                                    {{-- <td>{{ $post->category_id }}</td> --}}
                                    <td>{{ $post->is_featured }}</td>
                                    <td>{{ $post->is_published }}</td>
                                    <td>
                                        <div class="table-actions d-flex align-items-center gap-3 fs-6">
                                            <a href="javascript:;" class="text-primary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="View"><i class="bi bi-eye-fill"></i></a>
                                            <a href="{{ route('admin.post.edit', $post->id) }}" class="text-warning" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Edit"><i class="bi bi-pencil-fill"></i></a>
                                            <a href="javascript:;" class="text-danger" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Delete"><i class="bi bi-trash-fill"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
