@extends('dashboard.layaout.app')

@section('content-title')

SIZE LIST
@endsection

@section('content')
<div class="table-responsive table-sideborder">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Size Id</th>
                <th scope="col">Size Title</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($sizes as $size)
            <tr>
                <td scope="row"><a href="">{{
                        $size->id }}</a></td>
                <td>{{ $size->name}}</td>
                <td>
                    <a class="btn btn-sm btn-primary">
                        <i class="fa fa-eye"></i> View
                    </a>
                    {{-- <a href="{{ route('dashboard.blogs.edit', ['blogId' => $blog->id ])}}"
                        class="btn btn-sm btn-success">
                        <i class="fa fa-pen"></i> Edit
                    </a> --}}

                    <form style="display: inline-block" action="{{ route('size.destroy', ['id' => $size->id ])}}"
                        method="post">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-sm btn-danger"
                            onclick="return confirm('Are you sure you want to remove the Size: {{ $size->name }} ?');">
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