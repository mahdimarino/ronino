@extends('dashboard.layaout.app')

@section('content-title')

GSM List
@endsection

@section('content')
<div class="table-responsive table-sideborder">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">GSM Id</th>
                <th scope="col">GSM Value</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($gsms as $gsm)
            <tr>
                <td scope="row"><a href="">{{
                        $gsm->id }}</a></td>
                <td>{{ $gsm->value}}</td>
                <td>
                    <a href="" class="btn btn-sm btn-primary">
                        <i class="fa fa-eye"></i> View
                    </a>
                    {{-- <a href="{{ route('dashboard.blogs.edit', ['blogId' => $blog->id ])}}"
                        class="btn btn-sm btn-success">
                        <i class="fa fa-pen"></i> Edit
                    </a> --}}

                    <form style="display: inline-block" action="{{ route('gsm.destroy', ['id' => $gsm->id ])}}"
                        method="post">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-sm btn-danger"
                            onclick="return confirm('Are you sure you want to remove the GSM: {{ $gsm->value }} ?');">
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