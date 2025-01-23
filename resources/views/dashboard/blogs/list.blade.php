@extends('dashboard.layaout.app')

@section('content-title')
{{-- @hasrole('client')
Your
@else
All
@endhasrole --}}
Blog Posts 
@endsection

@section('content')
<div class="table-responsive table-sideborder">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Post Id</th>
                <th scope="col">Post Title</th>
                <th scope="col">Created at</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($blogs as $blog)
            <tr>
                <td scope="row"><a
                        href="">{{
                        $blog->id }}</a></td>
                <td>{{ $blog->title}}</td>
                <td>{{ $blog->post_date }}</td>
                <td>
                    <a href="" class="btn btn-sm btn-primary">
                        <i class="fa fa-eye"></i> View
                    </a>
                    <a href="{{ route('dashboard.blogs.edit', ['blogId' => $blog->id ])}}"
                        class="btn btn-sm btn-success">
                        <i class="fa fa-pen"></i> Edit
                    </a>
                   
                    <form style="display: inline-block" action="{{ route('delete-blog', ['id' => $blog->id ])}}"
                        method="post">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-sm btn-danger"
                            onclick="return confirm('Are you sure you want to remove the Post: {{ $blog->title }} ?');">
                            <i class="fa fa-trash"></i> Delete
                        </button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>


@endsection