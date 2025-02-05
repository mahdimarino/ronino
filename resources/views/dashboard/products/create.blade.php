@extends('dashboard.layaout.app')

@section('content-title', 'Add Product')

@section('content')

<div class="mg-t-15">
    @if (session('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
    @endif
    <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="form-group col-7">
                <label>Product Name <span class="tx-danger">*</span></label>
                <div class="input-group">
                    <input type="text" name="title" class="form-control" required>
                </div>

            </div>
            <div class="form-group col-7">
                <label>Product code: <span class="tx-danger">*</span></label>
                <div class="input-group">
                    <input type="text" name="product_code" class="form-control" required>
                </div>

            </div>
        </div>

        <!-- Input for multiple image uploads -->
        <div class="form-group col-7">
            <label for="images">Upload Images <span class="tx-danger">*</span></label>
            <input type="file" name="images[]" id="images" class="form-control" multiple accept="image/*" required>
            <small class="form-text text-muted">
                You can upload multiple images (JPEG, PNG, JPG, GIF, SVG) up to 2MB each.
            </small>
        </div>


        <label for="color_id">Choose a category:</label>
        <select name="category_id" id="category_id" required>
            <option value="" disabled selected>Select a category</option>
            @foreach($categories as $category)
            <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
        </select><br><br>
        <label for="gsm_id">Choose a GSM:</label>
        <select name="gsm_id" id="gsm_id" required>
            <option value="" disabled selected>Select a GSM</option>
            @foreach($gsms as $gsm)
            <option value="{{ $gsm->id }}">{{ $gsm->value }}</option>
            @endforeach
        </select><br><br>
        <div class=" col-6">
            <div class="form-group col-12">
                <button type="submit" class="btn btn-brand pd-x-20" name="action" value="book">Create</button>
            </div>
        </div>
    </form>
</div>
@endsection