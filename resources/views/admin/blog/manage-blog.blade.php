@extends('admin.master')

@section('title')
    MANAGE-BLOG
@endsection

@section('body')
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
        </div>
        <div class="card-body">

            <h1 class="text-center text-primary">{{ Session::get('massage') }}</h1>

            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>Serial No.</th>
                        <th>Category Name</th>
                        <th>Blog Title</th>
                        {{--<th>Blog Short Description</th>--}}
                        {{--<th>Blog Long Description</th>--}}
                        <th>Blog Image</th>
                        <th>Publication Status</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th>Serial No.</th>
                        <th>Category Name</th>
                        <th>Blog Title</th>
                        <th>Blog Image</th>
                        <th>Publication Status</th>
                        <th>Action</th>
                    </tr>
                    </tfoot>
                    <tbody>
                    @php($i=1)
                    @foreach($blogs as $blog)
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>{{ $blog->category_name }}</td>
                            <td>{{ $blog->blog_title }}</td>
                            <td><img src="{{ asset($blog->blog_image) }}" alt="" height="100" width="130"/></td>
                            <td>{{ $blog->publication_status == 1 ? 'published' : 'unpublished' }}</td>
                            <td>
                                <a href="{{ route('edit-blog', ['id'=>$blog->id]) }}">Edit</a>


                                <a href="#" id="{{ $blog->id }}" onclick="
                                event.preventDefault();
                                var check = confirm('Are you sure to delete this !!!');
                                if (check) {
                                document.getElementById('deleteBlogForm'+'{{ $blog->id }}').submit();
                                }
                                ">Delete</a>

                                <form id="deleteBlogForm{{ $blog->id }}" action="{{ route('delete-blog') }}" method="POST">
                                    @csrf
                                    <input type="hidden" value="{{ $blog->id }}" name="id"/>
                                </form>
                            </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>


@endsection