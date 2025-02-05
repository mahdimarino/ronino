@extends('dashboard.layaout.app')

@section('content-title')

COLORS LIST
@endsection

@section('content')
<div class="table-responsive table-sideborder">
    <table class="table">
<thead>
    <tr>
        <th scope="col">Color Id</th>
        <th scope="col">Color Title</th>       
        <th scope="col">Action</th>
    </tr>
</thead>
<tbody>
    @foreach ($colors as $color)
    <tr>
        <td scope="row"><a href="">{{
                $color->id }}</a></td>
        <td>{{ $color->name}}</td>
        <td>
            
                <a href="{{ route('colors.show', ['id' => $color->id]) }}" class="btn btn-sm btn-primary">
                <i class="fa fa-eye"></i> View
            </a>
            {{-- <a href="{{ route('dashboard.blogs.edit', ['blogId' => $blog->id ])}}" class="btn btn-sm btn-success">
                <i class="fa fa-pen"></i> Edit
            </a> --}}

             <form style="display: inline-block" action="{{ route('color.destroy', ['id' => $color->id ])}}" method="post">
                @csrf
                @method('DELETE')
                <button class="btn btn-sm btn-danger"
                    onclick="return confirm('Are you sure you want to remove the color: {{ $color->name }} ?');">
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