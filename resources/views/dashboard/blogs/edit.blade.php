@extends('dashboard.layaout.app')

@section('content-title', 'Edit this Post')

@section('content')

<div class="mg-t-15">
    @if (session('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
    @endif
    <form action="{{ route('dashboard.blogs.update', $blog->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <input type="hidden" name="content" id="quill-content1">
        <div class="row">
            <div class="form-group col-6">
                <label>Blog Title <span class="tx-danger">*</span></label>
                <div class="input-group">
                    <input type="text" name="title" value="{{$blog->title}}" class="form-control" required>
                </div>
            </div>
            <div class="form-group col-6">
                <label>Blog Image Cover <span class="tx-danger"></span></label>
                <div class="input-group">
                    <input type="file" name="blog_image" class="form-control">
                </div>
            </div>

            <div class="form-group col-6">
                <label>Post Date <span class="tx-danger">*</span></label>
                <div class="input-group">
                    <input type="date" name="post_date" value="{{$blog->post_date->format('Y-m-d')}}"
                        class="form-control" required>
                </div>
            </div>





            <div class="form-group col-6">
                <label>Blog Category <span class="tx-danger">*</span></label>
                <select name="category" class="form-control" required>
                    @foreach ([
                    'Category 1',
                    'Category 2',
                    'Category 3',
                    'Category 4',
                    ] as $category)
                    <option value="{{ $category }}" {{ $blog->category == $category ? 'selected' : '' }}>{{
                        $category }}</option>
                    @endforeach
                </select>
            </div>
            <div class="m-3">
                <div id="toolbar-container" class="bg-white">
                    <span class="ql-formats">
                        <select class="ql-font"></select>
                        <select class="ql-size"></select>
                    </span>
                    <span class="ql-formats">
                        <button class="ql-bold"></button>
                        <button class="ql-italic"></button>
                        <button class="ql-underline"></button>
                        <button class="ql-strike"></button>
                    </span>
                    <span class="ql-formats">
                        <select class="ql-color"></select>
                        <select class="ql-background"></select>
                    </span>
                    <span class="ql-formats">
                        <button class="ql-script" value="sub"></button>
                        <button class="ql-script" value="super"></button>
                    </span>
                    <span class="ql-formats">
                        <button class="ql-header" value="1"></button>
                        <button class="ql-header" value="2"></button>
                        <button class="ql-blockquote"></button>
                        <button class="ql-code-block"></button>
                    </span>
                    <span class="ql-formats">
                        <button class="ql-list" value="ordered"></button>
                        <button class="ql-list" value="bullet"></button>
                        <button class="ql-indent" value="-1"></button>
                        <button class="ql-indent" value="+1"></button>
                    </span>
                    <span class="ql-formats">
                        <button class="ql-direction" value="rtl"></button>
                        <select class="ql-align"></select>
                    </span>
                    <span class="ql-formats">
                        <button class="ql-link"></button>
                        <button class="ql-image"></button>
                        <button class="ql-video"></button>
                        <button class="ql-formula"></button>
                    </span>
                    <span class="ql-formats">
                        <button class="ql-clean"></button>
                    </span>
                </div>
                <div id="editor-container" class="bg-white ht-200">

                </div>
            </div><!-- component-section -->
        </div>


</div>
<div class="mg-t-55">
    <div class="form-group col-12">
        <button type="submit" class="btn btn-brand pd-x-20" name="action" value="book">Update</button>
    </div>
</div>

</form>
</div>
<script src="https://cdn.jsdelivr.net/npm/quill@2.0.2/dist/quill.js"></script>

<!-- Initialize Quill editor -->
<script>
    $(function(){
        'use strict';

        var quill = new Quill('#editor-container', {
            modules: {
                toolbar: '#toolbar-container'
            },
            placeholder: 'Compose an epic...',
            theme: 'snow'
        });

        // Set the old value into the editor
        var oldContent = {!! json_encode($blog->content ?? '') !!};
        quill.root.innerHTML = oldContent;

        $('form').on('submit', function() {
            $('#quill-content1').val(quill.root.innerHTML);
        });
    });
</script>
@endsection