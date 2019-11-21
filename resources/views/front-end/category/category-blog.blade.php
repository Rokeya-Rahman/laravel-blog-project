@extends('front-end.master')

@section('title')
    CATEGORY
@endsection

@section('body')
    <div class="container">

        <h1 class="my-4 text-center">Welcome to Our Blog</h1>

        <!-- Marketing Icons Section -->
        <div class="row">
            @foreach($blogs as $blog)
                <div class="col-lg-4 mb-4">
                    <div class="card h-100">
                        <img src="{{ asset($blog->blog_image) }}" alt="{{ $blog->blog_title }}" class="card-img-top" height="200">
                        <div class="card-body">
                            <h4 class="card-title">{{ $blog->blog_title }}</h4>
                            <p class="card-text">{{ $blog->blog_short_description }}</p>
                        </div>
                        <div class="card-footer">
                            <a href="{{ route('blog-details', ['$id'=>$blog->id]) }}" class="btn btn-primary">Learn More</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

    </div>
@endsection