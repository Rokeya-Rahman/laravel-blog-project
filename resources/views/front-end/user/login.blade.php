@extends('front-end.master')

@section('title')
    LOGIN
@endsection

@section('body')
    <div class="container my-5">

        <!-- Page Heading/Breadcrumbs -->
        <h1 class="mt-4 mb-3 text-center">Login Form</h1>

        <div class="row">

            <!-- Post Content Column -->
            <div class="col-lg-8 mx-auto">

                <div class="card">
                    <div class="card-body">
                        <h3 class="text-center text-danger">{{ Session::get('massage') }}</h3>
                        <form action="{{ route('new-login') }}" method="post">
                            @csrf
                            <div class="form-group row">
                                <label class="col-form-label col-md-3">Email Address</label>
                                <div class="col-md-9">
                                    <input type="email" name="email_address" class="form-control" onblur="emailCheck(this.value);"/>
                                    <span id="res" class="text-success"></span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-md-3">Password</label>
                                <div class="col-md-9">
                                    <input type="password" name="password" class="form-control"/>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-md-3"></label>
                                <div class="col-md-9">
                                    <input type="submit" name="btn" id="regBtn" class="btn btn-block bg-secondary text-white" value="Login"/>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>

        </div>

    </div>


@endsection














