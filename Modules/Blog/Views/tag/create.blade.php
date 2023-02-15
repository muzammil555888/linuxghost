@extends('admin.layout.master')

@section('content')
    <form action="">
        <div class="row">
            <div class="col-md-9">
                <div class="card">
                    <div class="card-body">
                        <div class="border p-3 rounded">
                            <form class="row">
                                <div class="col-12 my-3">
                                    <label class="form-label">Title</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="col-12 my-3">
                                    <label class="form-label">Slug</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="col-12 my-3">
                                    <label class="form-label">Description</label>
                                    <textarea name="" id="" cols="30" rows="5" class="form-control"></textarea>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-body">
                        <div class="border p-3 rounded">
                            <form class="row">
                                <div class="col-12 my-3">
                                    <label class="form-label">SEO Title</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="col-12 my-3">
                                    <label class="form-label">SEO Description</label>
                                    <textarea name="" id="" cols="30" rows="5" class="form-control"></textarea>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <button class="btn rounded-1 btn-primary">Save & Exit</button>
                <button class="btn rounded-1 btn-success">Reset</button>
            </div>
        </div>
    </form>
@endsection
