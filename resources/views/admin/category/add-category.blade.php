@extends('admin.master')

@section('title')
    ADD-CATEGORY
@endsection

@section('body')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="well">

                    <h1 class="text-center text-primary">{{ Session::get('massage') }}</h1>

                    <form action="{{ route('new-category') }}" method="POST">
                        @csrf
                        <br />

                        <div class="card">

                            <div class="card-header bg-gradient-primary">
                                <h4 class="text-center text-light font-weight-bold my-1">ADD CATEGORY INFO</h4>
                                {{--<h4 class="text-center text-light font-weight-bold my-1">{{ $name }}</h4>--}}
                            </div>

                            <div class="card-body">
                                <div class="col-md-10 mx-auto">

                                    <div class="form-group row">
                                        <label class="col-form-label col-md-3">Category Name</label>
                                        <div class="col-md-9">
                                            <input type="text" name="category_name" class="form-control"/>
                                            <span class="text-danger">{{ $errors->has('category_name') ? $errors->first('category_name') : ' ' }}</span>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="" class="col-form-label col-md-3">Category Description</label>
                                        <div class="col-md-9">
                                            <textarea name="category_description" class="form-control" rows="8"></textarea>
                                            <span class="text-danger">{{ $errors->has('category_description') ? $errors->first('category_description') : ' ' }}</span>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-form-label col-md-3">Publication Status</label>
                                        <div class="col-md-9">
                                            <label><input type="radio" name="publication_status" value="1"/>Published</label>
                                            <label><input type="radio" name="publication_status" value="0" class="ml-4"/>Unpublished</label>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-form-label col-md-3"></label>
                                        <div class="col-md-9">
                                            <input type="submit" name="btn" class="btn btn-primary btn-block" value="SAVE CATEGORY INFO"/>
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
@endsection