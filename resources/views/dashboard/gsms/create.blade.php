@extends('dashboard.layaout.app')

@section('content-title', 'Add GSM')

@section('content')

<div class="mg-t-15">
    @if (session('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
    @endif
    <form action="{{ route('gsm.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="row">
            <div class="form-group col-7">
                <label>GSM Value <span class="tx-danger">*</span></label>
                <div class="input-group">
                    <input type="text" name="value" class="form-control" required>
                </div>

            </div>
            <div class=" col-6">
                <div class="form-group col-12">
                    <button type="submit" class="btn btn-brand pd-x-20" name="action" value="book">Create</button>
                </div>
            </div>
        </div>

    </form>
</div>
@endsection