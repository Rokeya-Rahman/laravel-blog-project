@extends('admin.master')

@section('title')
    EDIT-BLOG
@endsection

@section('body')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="well">

                    <h1 class="text-center text-primary">{{ Session::get('massage') }}</h1>

                    <form action="{{ route('update-blog') }}" method="POST" enctype="multipart/form-data" name="editBlogFrom">
                        @csrf
                        <br />

                        <div class="card">

                            <div class="card-header bg-gradient-primary">
                                <h4 class="text-center text-light font-weight-bold my-1">ADD BLOG INFO</h4>
                            </div>

                            <div class="card-body">
                                <div class="col-md-10 mx-auto">

                                    <div class="form-group row">
                                        <label class="col-form-label col-md-3">Category Name</label>
                                        <div class="col-md-9">
                                            <select name="category_id" class="form-control">
                                                @foreach($categories as $category)
                                                    <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-form-label col-md-3">Blog Title</label>
                                        <div class="col-md-9">
                                            <input type="text" name="blog_title" value="{{ $blog->blog_title }}" class="form-control"/>
                                            <input type="hidden" name="id" value="{{ $blog->id }}" class="form-control"/>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="" class="col-form-label col-md-3">Blog Short Description</label>
                                        <div class="col-md-9">
                                            <textarea name="blog_short_description" class="form-control" rows="3">{{ $blog->blog_short_description }}</textarea>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="" class="col-form-label col-md-3">Blog Long Description</label>
                                        <div class="col-md-9">
                                            <textarea id="editor" name="blog_long_description" class="form-control">{{ $blog->blog_long_description }}</textarea>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-form-label col-md-3">Blog Image</label>
                                        <div class="col-md-9">
                                            <input type="file" name="blog_image" accept="image/*"/>
                                            <br />
                                            <img src="{{ asset($blog->blog_image) }}" alt="" height="100" width="130"/>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-form-label col-md-3">Publication Status</label>
                                        <div class="col-md-9">
                                            <label><input type="radio" {{ $blog->publication_status == 1 ? 'checked' : '' }} name="publication_status" value="1"/>Published</label>
                                            <label><input type="radio" {{ $blog->publication_status == 0 ? 'checked' : '' }} name="publication_status" value="0" class="ml-4"/>Unpublished</label>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-form-label col-md-3"></label>
                                        <div class="col-md-9">
                                            <input type="submit" name="btn" class="btn btn-primary btn-block" value="UPDATE BLOG INFO"/>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <br />
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.forms['editBlogFrom'].elements['category_id'].value = '{{ $blog->category_id }}';
    </script>

@endsection