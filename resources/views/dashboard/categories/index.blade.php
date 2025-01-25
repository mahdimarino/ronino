@extends('dashboard.layaout.app')

@section('content-title')

Category List
@endsection

@section('content')
<div class="table-responsive table-sideborder">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Category Id</th>
                <th scope="col">Category Title</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $category)
            <tr>
                <td scope="row"><a href="">{{
                        $category->id }}</a></td>
                <td>{{ $category->name}}</td>
                <td>
                   <a href="{{ route('categories.show', ['id' => $category->id]) }}" class="btn btn-sm btn-primary">
                    <i class="fa fa-eye"></i> View
                </a>
                    {{-- <a href="{{ route('dashboard.blogs.edit', ['blogId' => $blog->id ])}}"
                        class="btn btn-sm btn-success">
                        <i class="fa fa-pen"></i> Edit
                    </a> --}}

                    <form style="display: inline-block" action="{{ route('categories.destroy', ['id' => $category->id ])}}"
                        method="post">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-sm btn-danger"
                            onclick="return confirm('Are you sure you want to remove the category: {{ $category->name }} ?');">
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