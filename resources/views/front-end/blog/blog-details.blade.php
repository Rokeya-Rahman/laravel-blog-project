@extends('front-end.master')

@section('title')
    BLOG DETAILS
@endsection

@section('body')
    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <h1 class="mt-4 mb-3 text-warning">{{ Session::get('massage') }}</h1>
        <h1 class="mt-4 mb-3">{{ $blog->blog_title }}</h1>

        <div class="row">

            <!-- Post Content Column -->
            <div class="col-lg-8">

                <!-- Preview Image -->
                <img class="img-fluid rounded" src="{{ asset($blog->blog_image) }}" alt="" width="100%">

                <hr>

                <!-- Date/Time -->
                <p>Posted on January 1, 2017 at 12:00 PM</p>

                <hr>

                <!-- Post Content -->
                <p class="lead">{{ $blog->blog_short_description }}</p>
                <p class="lead">{!! $blog->blog_long_description !!}</p>

                <hr>

                <!-- Comments Form -->
                @if($visitorId = Session::get('visitorId'))
                    <div class="card my-4">
                        <h5 class="card-header">Leave a Comment:</h5>
                        <div class="card-body">
                            <form action="{{ route('new-comment') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <input type="hidden" name="visitor_id" value="{{ $visitorId }}"/>
                                    <input type="hidden" name="blog_id" value="{{ $blog->id }}"/>
                                    <textarea class="form-control" rows="3" name="comment"></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                @else
                    <div class="card my-4">
                        <div class="card-body">
                            <h5>You have to login to comment this Blog. If you are register then <a href="{{ route('visitor-login') }}">Login</a> or <a href="{{ route('sign-up') }}">Sing up</a></h5>
                        </div>
                    </div>
                @endif

                <!-- Single Comment -->
                @foreach($comments as $comment)
                    <div class="media mb-4">
                        <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
                        <div class="media-body">
                            <h5 class="mt-0">{{ $comment->first_name.' '.$comment->last_name }}</h5>
                            <p>{{ $comment->comment }}</p>
                        </div>
                    </div>
                @endforeach

            </div>

            <!-- Sidebar Widgets Column -->
            <div class="col-md-4">

                <!-- Search Widget -->
                <div class="card mb-4">
                    <h5 class="card-header">Search</h5>
                    <div class="card-body">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search for...">
                            <span class="input-group-btn">
                <button class="btn btn-secondary" type="button">Go!</button>
              </span>
                        </div>
                    </div>
                </div>

                <!-- Categories Widget -->
                <div class="card my-4">
                    <h5 class="card-header">Categories</h5>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <ul class="list-unstyled mb-0">
                                    <li>
                                        <a href="#">Web Design</a>
                                    </li>
                                    <li>
                                        <a href="#">HTML</a>
                                    </li>
                                    <li>
                                        <a href="#">Freebies</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-lg-6">
                                <ul class="list-unstyled mb-0">
                                    <li>
                                        <a href="#">JavaScript</a>
                                    </li>
                                    <li>
                                        <a href="#">CSS</a>
                                    </li>
                                    <li>
                                        <a href="#">Tutorials</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Side Widget -->
                <div class="card my-4">
                    <h5 class="card-header">Side Widget</h5>
                    <div class="card-body">
                        You can put anything you want inside of these side widgets. They are easy to use, and feature the new Bootstrap 4 card containers!
                    </div>
                </div>

            </div>

        </div>
        <!-- /.row -->

    </div>
    <!-- /.container -->
@endsection