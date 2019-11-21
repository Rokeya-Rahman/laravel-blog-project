@extends('admin.master')

@section('title')
    Manage Comment
@endsection

@section('body')
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">DataTables</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <h3 class="text-info text-center">{{ Session::get('message') }}</h3>
                <table class="table table-bordered table-hover table-striped" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>SL NO</th>
                        <th>Blog Title</th>
                        <th>Visitor Name</th>
                        <th>Comment</th>
                        <th>Publication Status</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th>SL NO</th>
                        <th>Blog Title</th>
                        <th>Visitor Name</th>
                        <th>Comment</th>
                        <th>Publication Status</th>
                        <th>Action</th>
                    </tr>
                    </tfoot>
                    <tbody>
                    @php($i=1)
                    @foreach($comments as $comment)
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>{{ $comment->blog_title }}</td>
                            <td>{{ $comment->first_name.' '.$comment->last_name }}</td>
                            <td>{{ $comment->comment }}</td>
                            <td>{{ $comment->publication_status == 1 ? 'Published' : 'Unpublished' }}</td>
                            <td>
                                @if($comment->publication_status == 1)
                                    <a href="{{ route('unpublished-comment', ['id'=>$comment->id]) }}">Unpublished</a>
                                @else
                                    <a href="{{ route('published-comment', ['id'=>$comment->id]) }}">Published</a>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection